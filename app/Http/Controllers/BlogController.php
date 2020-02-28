<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\View;
use App\User;

class BlogController extends Controller
{
    public function view() {
        if(View::exists('main.blog')) {
            $posts = Post::orderBy('created_at', 'DESC')->paginate(2);
            
            return view('main.blog', ['posts' => $posts]);
        }
        abort(404);
    }
    
    public function ajax(Request $request) {
        $posts = Post::orderBy('created_at', 'DESC')->paginate($request->addBlog);
        
        return view('main.blogContent', ['posts' => $posts]);
    }
}
