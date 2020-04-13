<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function article()
    {
        //menyatakan sudah memiliki relasi dengan tabel article
        return $this->belongsTo('App\Article');
    }
}
