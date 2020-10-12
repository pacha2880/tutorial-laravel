<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;

class MessagesController extends Controller
{
    // public function store(Request $request)
    // {
    //     return $request->get('email');
    // }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'subject' => 'required',
            'content' => 'required|min:3'
        ], [
            'name.required'     => __('I need your name'),
            'content.min'       => 'seras sacrificado'
        ]);

        //Mail::to('evoicpc@mailinator.com')->send(new MessageReceived);

        return back()->with('status', 'recibimos tu mensaje, te respondo maniana');
    }
}