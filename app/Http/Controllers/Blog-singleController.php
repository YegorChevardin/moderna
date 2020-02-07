<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog-singleController extends Controller
{
    public function view() {
        return view('main.blog-single');
    }
}
