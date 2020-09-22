<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

    protected $fillable= ['artist_id','photo','title','release_date','tracks'];
    public function artist($value='')
  {
  	return $this->belongsTo('App\Artist');
  }
    public function songs($value='')
  {
  	return $this->hasMany('App\Song');
  }

}