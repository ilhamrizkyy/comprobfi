<?php

namespace App\Http\Controllers;

use App\Intro;
use Illuminate\Http\Request;

class IntroController extends Controller
{
    public function index(){
        $intros = Intro::all()->toArray();
        echo $intros;
        return view('templates.index', ['intros'=>$intros]);
    }
}
