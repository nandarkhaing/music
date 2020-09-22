<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
      protected $fillable = [
         'name', 'photo', 'dob', 'gender', 'biography',
    ];
    public function albums($value='')
  {
    return $this->belongsToMany('App\Album','artistalbum')
                ->withPivot('album_id')
                ->withTimestamps();
  }
    public function songs($value='')
  {
  	return $this->hasMany('App\Song');
  }
}