<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\LaravelMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index($email='hamzakhan17826@gmail.com'){
        $mailData = [
            'title' => 'Mail from Hamza',
            'body' => 'This is body',
        ];
        Mail::to($email)->send(new LaravelMail($mailData));
        dd('Email send successfully');
    }
}
