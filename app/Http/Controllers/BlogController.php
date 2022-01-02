<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function create(){
        return view('blog.create');
    }

    public function index(){
        $blogs = Blog::orderBy('created_at', 'DESC')->get();
        return view('blog.index', ['blogs'=>$blogs]);
    }

    public function store(Request $request){
        $blog = new Blog;
        $blog->title = $request->genre;
        $blog->body = $request->message; 
        //$blog->category = $request->category;
        $blog->save();
        dd('Done storing');
    }
}
