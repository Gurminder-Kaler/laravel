<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $uploads ='/images/';

    protected $fillable = ['file', 'id'];

public function getFileAttribute($photos){
    return $this-> uploads.$photos;
}


}


