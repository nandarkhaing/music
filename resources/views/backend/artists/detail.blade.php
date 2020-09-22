@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row mb-5">
  		<div class="col-md-12">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Artists Detail Page</h1>
  		</div>
  	</div>
    
    <div class="row">
    	<div class="col-md-4">
            <img src="{{asset($artist->photo)}}" class="img-fluid">
        </div>
        <div class="col-md-8">
            <h4>Name:</h4>
    		<p>{{$artist->name}}</p>
            <h4>DOB:</h4>
            <p>{{$artist->dob}}</p>
            <h4>Gender:</h4>
            <p>{{$artist->gender}}</p>
            
    	</div>

        <div class="col-md-12 my-4">
            <h4>
                Biography:
            </h4>

            <p>{{$artist->biography}}</p>
        </div>

        <div class="col-md-12 my-4">
             <p> Album Name:</p>
         @foreach($artist->albums as $album)
            
           
             
              
            <p> Album Name: {{$album->pivot->album_id}}</p>
             
            
            @endforeach
        </div>

    </div>

 	</div>
@endsection