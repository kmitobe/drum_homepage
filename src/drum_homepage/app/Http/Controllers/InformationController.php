<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infomation;
class InformationController extends Controller
{
    //
    public function index(){
        $infomation = Infomation::get();
    
        return view('information',['infomation'=>$infomation]);
    }
}

