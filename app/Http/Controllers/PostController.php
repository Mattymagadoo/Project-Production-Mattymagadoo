<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){

        $posts = Post::all()->sortByDesc('created_at');

        return view('home', [
            'posts' => $posts
        ]);
    }

    public function create(Request $request){

        $input = $request->all();
        $post = new post();
        $post->user_id = Auth::user()->id;
        $post->post_title = $input['title'];
        $post->post_body = $input['description'];
        $post->post_image = 'https://via.placeholder.com/640x480.png/00aa55?text=unde';
        $post->save();

        return redirect('/')->with('success', 'Post Updated!');

        //return view('createPost');
    }

    public function newPost(){

        return view('createPost');
    }
}
