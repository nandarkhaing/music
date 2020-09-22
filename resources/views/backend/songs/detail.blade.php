@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row mb-5">
  		<div class="col-md-12">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Songs Detail Page</h1>
  		</div>
  	</div>
    
    <div class="row">
        <div class="col-md-8">
            <h4>Artist_ID:</h4>
            <p>{{$song->artist->name}}</p>
             <h4>Album_ID:</h4>
            <p>{{$song->album->title}}</p>
            <h4>Song Title:</h4>
            <p>{{$song->title}}</p>
            <h4>Duration:</h4>
            <p>{{$song->duration}}</p>
            <h4>Play:</h4>
             <audio controls="" style="vertical-align: middle" src="{{asset($song->play)}}" type="audio/mp3" controlslist="nodownload"></audio>


                 

            
    	</div>

        
    </div>

 	</div>
@endsection