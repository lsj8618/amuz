<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
 

    function write(Request $request)
    {
//        Post::all()
        return view('create', []);
    }

    function CreatePost(Request $request) {
        $createPost = new Post();
        // dd($request->title);;

        $createPost->title = $request->title;
        $createPost->description = $request->description;
        $createPost->user_name = $request->user_name;
        $createPost->password = $request->password;
        

        $createPost->save();

        // return view('welcome', []);
        return redirect("/");
    }

    // 내가 해줄 수 있는 건 여기까지다.
    function detailPost(Request $request) {
        $board = DB::table("post")->where("id", $request->id)->first();
        return view("detail", compact("board"));
    }
    function edit(Request $request) {
        $board = DB::table("post")->where("id", $request->id)->first();
        return view("edit", compact("board"));
    }
    function update(Request $request) {
        $title=$request->title; 
        $description=$request->description;
        DB::table('post')->where("id", $request->id)->update(["title"=>$title,"description"=>$description]);
        return redirect("/");
    }
    function delete(Request $request) {
        $deleted = DB::table('post')->where("id", $request->id)->delete();
        return redirect("/");
    }
    function showPosts(Request $request) {
        $boards = DB::table('post')->paginate(5);
        return view('welcome', compact(['boards'])); 
    }
}

