@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row mb-5">
  		<div class="col-md-12">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Albums Detail Page</h1>
  		</div>
  	</div>
    
    <div class="row">
     <div class="col-md-4">
           <p>{{$album->artist->name}}</p>
        </div>
    	<div class="col-md-4">
            <img src="{{asset($album->photo)}}" class="img-fluid">
        </div>
        <div class="col-md-8">
    		<p>{{$album->title}}</p>
            <p>{{$album->release_date}}</p>
            <p>{{$album->tracks}} </p>
            
            
    </div>

 	</div>
@endsection