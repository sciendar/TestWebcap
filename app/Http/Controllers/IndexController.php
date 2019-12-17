<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $messages = Message::all();
        return view('home', compact('messages'));
    }
}
