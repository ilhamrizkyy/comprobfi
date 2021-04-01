<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('templates.index');
    }

    public function sendEmail(Request $request){
        $details = [
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
        ];

        Mail::to('kontak@bfitech.co.id')->send(new ContactMail($details));
        return back()->with('message_sent', 'Your message is sent!');
    }
}
