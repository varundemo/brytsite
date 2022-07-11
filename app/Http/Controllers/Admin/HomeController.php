<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function header(Request $request){
        // dd("this is header");
        $page_title = "home";
        // $url_first = $request->segment(1);
        // $url_two = $request->segment(2);
        $page_section = "header";
        $home_header = Home::where('section','header')->first();
        // dd($home_header);
        // return view('admin.home.head',compact('page_title','page_section','url_two','url_first'));
        return view('admin.home.head',compact('page_title','page_section','home_header'));
    }

    public function headersectionsend(Request $request){
        // dd($request->header_img);
            $home_head = Home::where('section','header')->first();
            $home_head->title = "testing";
            if($request->hasfile("header_img")){
                $header_img = $request->header_img;
                $imgName = time().".".$header_img->getClientOriginalName();
                $header_img->move("img/",$imgName);
                $upload = $imgName;
                // print_r($upload);
                $home_head->section_img = $upload;
              }
            $home_head->save(); 
            return redirect()->back();
    }

    public function choose(){
        // dd('choose');
        $page_title = "choose";
        return view('admin.home.choose',compact('page_title'));
    }
}
