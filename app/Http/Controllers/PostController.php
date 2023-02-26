<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    public function index(){

        $posts = Post::all();

        return view('home', [
            'posts' => $posts
        ]);
    }
}
