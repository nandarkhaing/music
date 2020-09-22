@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Songs Create Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('songs.store')}}" method="POST" enctype="multipart/form-data">
			       @csrf
			       <div class="form-group row {{ $errors->has('artist') ? 'has-error' : '' }}">
			       	<label for="inputArtist" class="col-sm-2 col-form-label">Artist:</label>
			       	<div class="col-sm-5">
			       		<select class="form-control form-control-md" id="inputBrand" name="artist">
			       			<optgroup label="Choose Artist">
			       				@foreach($artists as $artist)
			       				<option value="{{$artist->id}}">{{$artist->name}}</option>
			       				@endforeach 
			       			</optgroup>
			       		</select>
			       		<span class="text-danger">{{ $errors->first('artist') }}</span>
			       	</div>
			       </div>
			        <div class="form-group row {{ $errors->has('album') ? 'has-error' : '' }}">
			       	<label for="inputArtist" class="col-sm-2 col-form-label">AlbumTitle:</label>
			       	<div class="col-sm-5">
			       		<select class="form-control form-control-md" id="inputAlbum" name="album">
			       			<optgroup label="Choose Album">
			       				@foreach($albums as $album)
			       				<option value="{{$album->id}}">{{$album->title}}</option>
			       				@endforeach 
			       			</optgroup>
			       		</select>
			       		<span class="text-danger">{{ $errors->first('album') }}</span>
			       	</div>
			       </div>
			      <div class="form-group row {{ $errors->has('title') ? 'has-error' : '' }}">
			        <label for="inputTitle" class="col-sm-2 col-form-label">Song Title</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputTitle" name="title">
			          <span class="text-danger">{{ $errors->first('title') }}</span>
			        </div>
			      </div>
			      <div class="form-group row {{ $errors->has('duration') ? 'has-error' : '' }}">
			        <label for="inputDuration" class="col-sm-2 col-form-label">Duration</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputDuration" name="duration" >
			          <span class="text-danger">{{ $errors->first('duration') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('play') ? 'has-error' : '' }}">
			        <label for="inputPlay" class="col-sm-2 col-form-label"name="play">Play</label>
			        <div class="col-sm-5">
			          <input type="file" id="inputFile" name="play" class="d-block">
			          <span class="text-danger">{{ $errors->first('play') }}</span>
			        </div>
			      </div>
			      

			      {{-- <div class="form-group row {{ $errors->has('subcategory') ? 'has-error' : '' }}">
			        <label for="inputSubcategory" class="col-sm-2 col-form-label">Subcategory</label>
			        <div class="col-sm-5">
			          <select class="form-control form-control-md" id="inputSubcategory" name="subcategory">
			            <optgroup label="Choose Subcategory">
			              @foreach($subcategories as $subcategory)
			                <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
			              @endforeach 
			            </optgroup>
			          </select>
			          <span class="text-danger">{{ $errors->first('subcategory') }}</span>
			        </div>
			      </div> --}}
			      
			      {{--
			      <div class="form-group row">
			        <label class="col-sm-2">Brand:</label>

			        <select class="form-control col-sm-5" name="brand">
			          <optgroup label="Choose Brand">
			            @foreach($brands as $brand)
			              <option value="{{$brand->id}}">{{$brand->name}}</option>
			            @endforeach
			          </optgroup>
			        </select>
			      </div>

			      <div class="form-group row">
			        <label class="col-sm-2">Subcategory:</label>

			        <select class="form-control col-sm-5" name="subcategory">
			          <optgroup label="Choose Subcategory">
			            @foreach($subcategories as $subcategory)
			            <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
			            @endforeach
			          </optgroup>
			        </select>
			      </div>
						--}}
			      <div class="form-group row">
			        <div class="col-sm-5">
			          <input type="submit" class="btn btn-primary" name="btnsubmit" value="Create">
			        </div>
			      </div>
			    </form>
      	</div>
      </div>
    </div>
 	</div>
@endsection