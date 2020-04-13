<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Anggota extends Model
{
    protected $table = 'anggota';

    public function hadiah()
    {
        //menghubungakan dengan model tabel hadiah
        return $this->belongsToMany('App\Hadiah');
    }
}
