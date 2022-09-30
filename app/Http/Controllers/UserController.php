<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $author)
    {
        $data = [
            "active" => "post",
            'title' => "Post By Author : $author->name",
            'blog' => $author->posts->load('category', 'author'),
        ];

        return view('post', $data);
    }
}
