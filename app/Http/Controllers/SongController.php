<?php

namespace App\Http\Controllers;

use App\Song;
use App\Artist;
use App\Album;


use Illuminate\Http\Request;


class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $songs = Song::all();
        return view('backend.songs.index',compact('songs'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
    {
                $artists = Artist::all();
                $albums=Album::all();
                $songs=Song::all();

        return view ('backend.songs.create',compact('artists','albums','songs'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
        "artist" => 'required',
        "album" => 'required',
        "title" => 'required',
        "duration" => 'required',
        "play"=>'required'
    ]);
 //dd($request->play);
    // dd($request->photo);
    
    // If include file, upload file
         $audioname=time().'.'.$request->play->extension();
         $request->play->move(public_path('backend/mp3'),$audioname);
         $path='backend/mp3/'.$audioname;
          
       
    $song = new Song;
    $song->artist_id = $request->artist;
    $song->album_id = $request->album;

    $song->title = $request->title;
    $song->duration = $request->duration;
    $song->play=$path;
    $song->save();

    // redirect
    return redirect()->route('songs.index');

 }


    /**
     * Display the specified resource.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
                return view('backend.songs.detail',compact('song'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
   public function edit(Song $song)
    {
                 $artists = Artist::all();
                 $albums = Album::all();
                
        return view('backend.songs.edit',compact('albums','artists','song'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
           $request->validate([
        "artist" => 'required',
        "album" => 'required',
        "title" => 'required',
        "duration" => 'required',
        "play"=>'sometimes'
    ]); 
           if ($request->hasFile('play')) {
           $audioname=time().'.'.$request->play->extension();
         $request->play->move(public_path('backend/mp3'),$audioname);
         $path='backend/mp3/'.$audioname;
        }else{
            $path = $request->oldplay;
        }
           
    $song->artist_id = $request->artist;
    $song->album_id = $request->album;

    $song->title = $request->title;
    $song->duration = $request->duration;
    $song->play=$path;
    $song->save();

    // redirect
    return redirect()->route('songs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
   public function destroy(Song $song)
    {
         $song->delete();
        return redirect()->route('songs.index');
    }
}
