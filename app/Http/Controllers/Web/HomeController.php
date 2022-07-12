<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // dd("my home");
        $header =  Home::where('section','header')->first();
        $why_choose_us =  Home::where('section','why_choose_us')->first();
        // dd($header);
        return view('web.home',compact('header','why_choose_us'));
    }
  
}
