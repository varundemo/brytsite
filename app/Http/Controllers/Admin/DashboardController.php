<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(Request $request){
        // return "you are welcome";
        // $url_first = $request->segment(1);
        // $url_two = $request->segment(2);
        $page_title = "dashboard";
        // $page_section = "";
        // dd("my");
        // return view('admin.dashboard',compact('url_first','url_two','page_title','page_section'));
        return view('admin.dashboard',compact('page_title'));
    }
}
