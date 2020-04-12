<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai"; // mendekrlasikan tabel yang tadinya pegawais menjadi pegawai
    protected $fillable = ['nama', 'alamat']; // untuk column mana saja yang bisa di input
}
