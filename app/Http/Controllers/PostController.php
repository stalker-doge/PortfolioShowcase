<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $post=Post::get();
        return view('welcome',['posts'=>$post]);
    }
    public function detailPost(Post $post)
    {
        
        return view('detail',['post'=>$post]);
    }
}
