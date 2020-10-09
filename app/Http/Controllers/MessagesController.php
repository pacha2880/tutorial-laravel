<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    // public function store(Request $request)
    // {
    //     return $request->get('email');
    // }

    public function store()
    {
        return request();
    }
}