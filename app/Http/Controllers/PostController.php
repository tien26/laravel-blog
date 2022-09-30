<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        $data = [
            "title" => "All Post",
            "active" => "post",
            // "blog" => Post::all()
            "blog" => Post::with(['author', 'category'])->latest()->Filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ];

        return view('post', $data);
    }

    public function show(Post $post)
    {
        $data = [
            "title" => "Blog Single",
            "active" => "post",
            "blog" => $post
        ];

        return view('single', $data);
    }
}
