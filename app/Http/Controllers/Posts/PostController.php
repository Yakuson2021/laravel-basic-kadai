<?php

namespace App\Http\Controllers\Posts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 


class PostController extends Controller {
    public function index() {
        return view('posts.index');
    }
}
