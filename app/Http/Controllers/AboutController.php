<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function index(){
        $abouts = About::all()->toArray();
        echo $abouts;
        return view('templates.index', ['abouts'=>$abouts]);
    }
}
