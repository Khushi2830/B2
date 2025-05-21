<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = post::all();
        return view('admin.managePost', compact('posts'));
    }
    public function insert(){
        return view('admin.insertPost');
    }
    
    public function store(Request $request){
      $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,jfif|max:2048',
        'content' => 'required|string',
      ]);

       // image
    $imagename = time() . '.' . $request->image->extension();
    $request->image->move(public_path('images'), $imagename);
     
    Post::create([
        'title' => $request->title,
        'content' => $request->content,
        'image' => $imagename,

    ]);

    return redirect()->route('admin.managePost')->with('success','post crerated successfully.');
    }
}


