<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function Index(Request $request)
    {
        return view('welcome', []);
    }

    function Create(Request $request)
    {
//        Post::all()
        return view('create', []);
    }

    function CreatePost(Request $request) {
        $createPost = new Post();

        $createPost->title = $request->title;
        $createPost->description = $request->description;
        $createPost->user_name = $request->name;

        $createPost->save();

        return view('welcome', []);
    }
}

