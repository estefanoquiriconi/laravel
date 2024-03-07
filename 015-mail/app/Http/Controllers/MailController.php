<?php

namespace App\Http\Controllers;

use App\Mail\ExampleMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function mailMe()
    {
        Mail::to('estefanoquiriconi@gmail.com')->send(new ExampleMail('Estéfano Quiriconi'));
        return view('emails.sent');
    }
}
