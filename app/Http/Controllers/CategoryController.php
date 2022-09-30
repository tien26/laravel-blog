<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Post Categories',
            'active' => 'categories',
            'categories' => Category::all()
        ];

        return view('categories', $data);
    }

    public function show(Category $category)
    {
        $data =[
        'title' => "Post By : $category->name",
        'active' => 'categories',
        'blog' => $category->posts->load('category','author'),
        ];

        return view('post', $data);
    }
}
