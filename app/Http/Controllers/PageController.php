<?php

namespace App\Http\Controllers;
use App\Album;
use App\Artist;
use App\Song;
use Illuminate\Http\Request;

class PageController extends Controller
{  
    /*public function __construct($value='')
    {
        $this->middleware('role:Admin')->only('index');
       // $this->middleware('role:Customer')->only('store');
    }*/
    public function headfun($value='')
{   
   $album=Album::all();
   $artist=Artist::all();
   return view('frontend.index',compact('album','artist'));
}

public function albumfun($value='')
{    
    $album=Album::all();

    return view('frontend.album',compact('album'));

}
public function artistfun($value='')
{   
    $artist=Artist::all();
    
    return view('frontend.artist',compact('artist'));
}
public function loginfun($value='')
{
    return view('frontend.login');
}
public function registerfun($value='')
{
    return view('frontend.register');
}

public function searchfun(Request $id)
{
	$search=$id->get('search');
    //dd($search);
	/*$artist=Artist::all();  */
    $artist=Artist::where('name','like','%'.$search.'%')->get();
    //dd($artist);
    //$artist_id=$artist->id;
    //dd($artist,$artist_id);
    //$albums=Album::where('artist_id','=',$artist_id)->get();
    
	
    //dd($artist,$album);
	return view('frontend.searchartistalbum',compact('artist'));
	/*$album::where('title','LIKE','%'.$album.'%')
    
    return view('frontend.artist',compact('artist'));*/
}
public function songfun($id)
{    
  
   $songs=Song::where('album_id','=',$id)->get();
    $album = Album::find($id);
  
    return view('frontend.song',compact('songs','album'));
    // $songalbum=Song::where('album_id','=',$id)->get();
    // return view('frontend.song',compact('songalbum'));

}
public function artistalbum($id)
{    
 
    $album =Album::where('artist_id','=',$id)->get();
    $artist =Artist::where('id','=',$id)->get();
     $songs=Song::where('album_id','=',$id)->get();
  
    return view('frontend.artistalbum',compact('album','artist','songs'));

}

}
