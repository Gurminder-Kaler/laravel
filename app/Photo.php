<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable=['file','id'];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
