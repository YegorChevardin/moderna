<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\View;
use App\User;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class BlogsingleController extends Controller
{
    public function view($postId = 1) {
        if(View::exists('main.blog-single')) {
            $post = Post::find($postId);
            $comment = Comment::find($postId);
            return view('main.blog-single', ['post' => $post, 'comment' => $comment]);
        }
        abort(404);
    }
    
    public function addComment($request) {
        if (isset($request)) {
            $user = Auth::id();
            $this->validate($request, [
                'user_id' => $user,
                'post_id' => $request->post_id,
                'name' => 'required|min:3|max:20',
                'email' => 'required', 'string', 'email', 'max:255',
                'website' => 'nullable|string',
                'comment' => 'required|min:5|max:255',
            ]);
            
            $comment = new Comment(['name' => $request->name, 'email' => $request->email, 'website' => $request->website, 'comment' => $request->comment]);
            $comment->save();
        }
        
        if(View::exists('main.blog-single')) {
        }
        abort(404);
    }
}
