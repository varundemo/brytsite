<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    
    public function service(){
        // dd("no data");
        return view('web.services.index');
    }
    public function pte(){
        return view('web.services.pte');
    }
}
