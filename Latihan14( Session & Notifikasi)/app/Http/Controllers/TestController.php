<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function tampilkanSession(Request $request)
    {
        if ($request->session()->has('nama')) {
            echo $request->session()->get('nama');
        } else {
            echo 'Tidak ada data dalam session.';
        }
    }
    public function buatSession(Request $request)
    {
        $request->session()->put('nama', 'Diki Alfarabi Hadi');
        echo "Data telah ditambahkan ke session.";
    }

    public function hapusSession(Request $request)
    {
        $request->session()->forget('nama');
        echo "Data telah dihapus dari session.";
    }
}
