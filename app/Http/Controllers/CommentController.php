<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category; 
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store(Request $request)
{
    $validated = $request->validate([
        "comment" => ["required", "max:255"],
        "author" => ["required", "max:255"],
        "post_id" => ["required", "exists:posts,id"]
    ]);  

    Comment::create($validated);

    return redirect("/posts/" . $validated["post_id"]);
}

    public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        $validated = $request->validate([
            'comment' => ['required', 'max:255'],
            'author' => ['required', 'max:255']

        ]);
    
        $comment->comment = $validated['comment'];
        $comment->author = $validated['author'];
        $comment->save();
    
        return redirect("/");
    }

    public function destroy(Comment $comment)
    {
        $postId = $comment->post_id; 
        $comment->delete();
        return redirect("/posts/" . $postId);
    }
    
}
