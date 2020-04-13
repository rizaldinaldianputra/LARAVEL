<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    protected $table = "telepon";

    public function pengguna()
    {
        //di miliki table pengguna
        return $this->belongsTo('App\Pengguna');
    }
}
