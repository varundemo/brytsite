<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('web.blog');
    }

    public function singleblog(){
        return view('web.single-blog');
    }
}
