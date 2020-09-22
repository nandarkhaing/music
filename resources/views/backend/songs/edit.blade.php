 @extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Songs Edit Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('songs.update',$song->id)}}" method="POST" enctype="multipart/form-data">
			       @csrf
			        @method('PUT')
			       <div class="form-group row {{ $errors->has('artist') ? 'has-error' : '' }}">
			       	<label for="inputBrand" class="col-sm-2 col-form-label">Artist</label>
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
			        <label for="inputName" class="col-sm-2 col-form-label">Song Title</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="title" value="{{$song->title}}">
			          <span class="text-danger">{{ $errors->first('title') }}</span>
			        </div>
			      </div>
			      <div class="form-group row {{ $errors->has('duration') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="duration" value="{{$song->duration}}">
			          <span class="text-danger">{{ $errors->first('duration') }}</span>
			        </div>
			      </div>

			       <div class="form-group row {{ $errors->has('play') ? 'has-error' : '' }}">
			        <label for="inputPhoto" class="col-sm-2 col-form-label">Play</label>
			        <div class="col-sm-5">
			          <input type="file" id="inputMusicfile" name="play" class="d-block">
			         
			          <span class="text-danger">{{ $errors->first('play') }}</span>

			          <source src="backend/mp3/{{$song->play}}" type="file" controlslist="nodownload">
			          <input type="hidden" name="oldplay" value="{{$song->play}}">

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
			          <input type="submit" class="btn btn-primary" name="btnsubmit" value="Update">
			        </div>
			      </div>
			    </form>
      	</div>
      </div>
    </div>
 	</div>
@endsection