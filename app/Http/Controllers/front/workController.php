<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class workController extends Controller
{
    public function work(){
        return view('front-end.work');
    }
}
