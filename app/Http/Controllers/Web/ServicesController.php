<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function service(){
        view('web.service.main');
    }
    public function pte(){
        return view('web.services.pte');
    }
}
