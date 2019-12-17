<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendRequest;
use App\Message;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts');
    }

    public function send(SendRequest $request)
    {
        $message = Message::add($request->all());
        $message->uploadImage($request->file('image'));


        return redirect(route('index'))->with('success','Сообщение отправлено');
    }
}
