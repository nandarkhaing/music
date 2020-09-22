<?php

namespace App\Http\Controllers;

use App\Album;
use App\Artist;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$albums=Album::all();
        // dd($items);
    	return view('backend.album.index',compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$artists=Artist::all();
    	$albums=Album::all();
    	return view('backend.album.create',compact('albums','artists'));
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

    		"name"=>'required',
    		"photo"=>'required',
    		"title"=>'required',
    		"release_date"=>'required',
    		"tracks"=>'required'


    	]);

        //if include file,upload file
    	$imageName=time().'-'.$request->photo->extension();
    	$request->photo->move(public_path('backend/albumphoto'),$imageName);
    	$path='backend/albumphoto/'.$imageName;
        //data insert 
    	$album=new Album();
    	$album->artist_id = $request->artist;
    	$album->name=$request->name;
    	$album->photo=$path;
    	$album->title=$request->title;
    	$album->release_date=$request->release_date;
    	$album->tracks=$request->tracks;

    	$album->save();
        //redirect
    	return redirect()->route('albums.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
    	return view('backend.album.detail',compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
    	$artists=Artist::all();

    	return view('backend.album.edit',compact('album','artists'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
    	$request->validate([
    		"artist" => 'required',
    		"name"=>'required',
    		"photo" =>'sometimes',
    		"oldphoto" =>'required',
    		"title" => 'required',
    		"release_date" => 'required',
    		"tracks"=>'required'

    	]);

        // file upload, if data
    	if ($request->hasFile('photo')) {
    		$imageName = time().'.'.$request->photo->extension();

    		$request->photo->move(public_path('backend/albumphoto'),$imageName);

    		$path = 'backend/albumphoto/'.$imageName; 
    	}else{
    		$path = $request->oldphoto;
    	}

        // data update
    	$album->artist_id = $request->artist;
    	$album->name=$request->name;
    	$album->photo=$path;
    	$album->title=$request->title;
    	$album->release_date=$request->release_date;
    	$album->tracks=$request->tracks;

    	$album->save();

        // redirect
    	return redirect()->route('albums.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
    	$album->delete();
    	return redirect()->route('albums.index');
    }
}
