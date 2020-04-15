<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{

    protected $fillable = ['nama', 'email', 'alamat', 'telepon', 'pekerjaan'];
}
