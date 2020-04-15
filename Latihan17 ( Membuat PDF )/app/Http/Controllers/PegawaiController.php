<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;
use App\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai_pdf', ['pegawai' => $pegawai]);
    }


    public function cetak_pdf()
    {
        $pegawai = Pegawai::all();

        $pdf = PDF::loadview('pegawai_pdf', ['pegawai' => $pegawai]);
        return $pdf->download('laporan-pegawai-pdf');
    }
}
