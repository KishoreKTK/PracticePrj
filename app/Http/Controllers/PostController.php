<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
     
    public function index() {
 
        $posts =  Post::orderBy("id", "desc")->paginate(5);
 
        return view("Texteditor.postlist", compact("posts"));
    }
 
 
    // Create Post 
    public function create() {
 
        return view("Texteditor.texteditorform");
    }
 
 
    public function store(Request $request) {
 
        $post = [  "title"  =>  $request->title,
                    "body" => $request->body
                ];
       
        $post  =  Post::create($post);
 
        return back()->with("success", "Post has been created");
     
    }    
}
