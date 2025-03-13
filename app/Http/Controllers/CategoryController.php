<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category; 
use Illuminate\Http\Request;



class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view("categories.create");
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "category_name" => ["required", "max:255"]
            ]);  
        
            Category::create([
            "category_name" =>$validated["category_name"],

            ]);
            
            return redirect("/categories");
    }

    public function show(Category $category)
    {
        $category->load('posts'); // Ielādē visus postus
        return view("categories.show", compact("category"));
    }

    public function edit(Category $category)
{
    return view('categories.edit', compact('category'));
}

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'category_name' => ['required', 'max:255'],
        ]);
    
        $category->category_name = $validated['category_name'];
        $category->save();
    
        return redirect("/categories");
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect("/categories");
    }
}
