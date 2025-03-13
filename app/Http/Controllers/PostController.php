<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category; 
use Illuminate\Http\Request;


class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view("posts.create", compact('categories'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "content" => ["required", "max:255"],
            "category_id" => ["required"]
            ]);  
        
            Post::create([
            "content" =>$validated["content"],
            "category_id" =>$validated["category_id"],

            ]);
            
            return redirect("/posts");
    }

    public function show(Post $post)
    {
        return view("posts.show", compact("post"));
    }

    public function edit(Post $post)
{
    $categories = Category::all();

    return view('posts.edit', compact('post', 'categories'));
}

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'content' => ['required', 'max:255'],
            'category_id' => ['required', 'max:255'],
        ]);
    
        $post->content = $validated['content'];
        $post->save();
    
        return redirect("/posts");
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect("/posts");
    }
}
