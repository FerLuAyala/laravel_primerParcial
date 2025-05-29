<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogsController extends Controller
{
    public function blog()
    {
        $blogs = Blog::all();
        return view('blogs.blog', ['blogs' => $blogs]);
    }
}
