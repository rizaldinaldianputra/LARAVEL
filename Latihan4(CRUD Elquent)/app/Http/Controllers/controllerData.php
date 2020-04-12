<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerData extends Controller
{
    public function input()
    {
        return view('input');
    }

    public function proses(Request $request)
    {

        $this->validate($request, [

            //validate yang tersedia min,max,alpha,numeric,alpha_num,bail,email, password_confirmation
            'nama' => 'required|min:5|max:20', // karakter hanya 5 sampai 20
            'pekerjaan' => 'required',
            'usia' => 'required|numeric' // diikutin dengan hanya boleh nomer
        ]);

        return view('proses', ['data' => $request]);
    }
}
