<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
     protected $fillable = [
         'artist_id','album_id', 'title', 'duration', 'play',
    ];
 public function artist($value='')
  {
  	return $this->belongsTo('App\Artist');
  }
  public function album($value='')
  {
  	return $this->belongsTo('App\Album');
  }
}