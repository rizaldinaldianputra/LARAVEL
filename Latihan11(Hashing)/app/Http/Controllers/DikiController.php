<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DikiController extends Controller
{
    public function hash()
    {
        $hashpasswordsaya = Hash::make('rizaldi');
        echo $hashpasswordsaya;
    }
}
