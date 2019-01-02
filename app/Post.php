<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [
        'category_id',
        'photo_id',
        'title',
        'body',
        'created_at',
        'updated_at'
    ];
    public function user(){
        return $this->belongsTo('App\User');

    }

    public function photo(){
        return $this->belongsTo('App\Post');

    }
    public function category(){
        return $this->belongsTo('App\Post');
    }
}
