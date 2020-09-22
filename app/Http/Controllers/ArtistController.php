<?php

namespace App\Http\Controllers;

use App\Artist;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $artists = Artist::all();
        // dd($items);*/
        return view('backend.artists.index',compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.artists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        // Validation
    $request->validate([
        "name" => 'required',
        "photo" => 'required',
        "dob" => 'required',
        "gender" => 'required',
        "biography"=>'required'
    ]);

    // dd($request->photo);
    
    // If include file, upload file
    $imageName = time().'.'.$request->photo->extension();

    $request->photo->move(public_path('backend/artistimg'),$imageName);

    $path = 'backend/artistimg/'.$imageName;
    // Data insert
    $artist = new Artist;
    $artist->name = $request->name;
    $artist->photo = $path;
    $artist->dob = $request->dob;
    $artist->gender = $request->gender;
    $artist->biography = $request->biography;
    $artist->save();

    // redirect
    return redirect()->route('artists.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        return view('backend.artists.detail',compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {    
        return view('backend.artists.edit',compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist)
    {
         // dd($request);

        // validation
        $request->validate([
            "name" => 'required',
            "photo" => 'sometimes',
            "dob" => 'required',
            "gender" => 'required',
            "biography" => 'required'
        ]);
     
        // file upload, if data
        if ($request->hasFile('photo')) {
           $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('backend/artistimg'),$imageName);

            $path = 'backend/artistimg/'.$imageName; 
        }else{
            $path = $request->oldphoto;
        }

        // data update
        $artist->name = $request->name;
        $artist->photo = $path;
        $artist->dob = $request->dob;
        $artist->gender = $request->gender;
        $artist->biography = $request->biography;
        $artist->save();

        // redirect
        return redirect()->route('artists.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();
        return redirect()->route('artists.index');
    } 
}