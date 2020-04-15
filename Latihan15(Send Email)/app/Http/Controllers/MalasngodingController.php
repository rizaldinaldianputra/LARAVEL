<?php

namespace App\Http\Controllers;

use App\Mail\EmailLarave;
use Illuminate\Http\Request;

use App\Mail\MalasngodingEmail;
use Illuminate\Support\Facades\Mail;

class MalasngodingController extends Controller
{
    public function index()
    {

        Mail::to("testing@malasngoding.com")->send(new EmailLarave());

        return "Email telah dikirim";
    }
}
