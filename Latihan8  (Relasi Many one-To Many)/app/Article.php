<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function tags()
    {
        //merelasikan kepada table tag dan mempunyai bisa banyak tag
        return $this->hasMany('App\tag');
    }
}
