<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $fillable = [
      'title',
      'release',
      'rating',
      'duration',
      'genre',
      'cast',
      'image',
      'video'
    ];
}
