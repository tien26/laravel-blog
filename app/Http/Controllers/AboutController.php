<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "About",
            "active" => "about",
            "name" => "Irfan Martien",
            "email" => "martienirfan@gmail.com",
            "address" => "ciawilor"
        ];

        return view('about',$data);
    }
}
