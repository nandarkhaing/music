@extends('backendtemplate')
@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Album Edit Form</h1>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <form action="{{route('albums.update',$album->id)}}" method="POST" enctype="multipart/form-data">
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
        
       


            <div class="form-group row {{ $errors->has('photo')? 'has-error ' : ''}}">
              <label for="photo" class="col-sm-2 col-form-label">Photo</label>
              <div class="col-sm-5">

                <input type="file" class="form-control-file" id="photo" name="photo" value="{{$album->photo}}">
                <img src="{{asset($album->photo)}}">
                <input type="hidden" name="oldphoto" value="{{$album->photo}}">
                @error('photo')
                <label class="text-danger">Required Photo</label>
                @enderror
              </div>
            </div>
            <br>
            <div class="form-group row {{ $errors->has('title')? 'has-error ' : ''}}">
              <label for="title" class="col-sm-2 col-form-label">Title</label>

              <div class="col-sm-5">



                <input type="text" class="form-control" id="" name="title" value="{{$album->title}}">
                @error('title')
                <label class="text-danger">Required Title</label>
                @enderror
              </div>
            </div>
            <div class="form-group row {{ $errors->has('release_date')? 'has-error ' : ''}}">
              <label for="release_date" class="col-sm-2 col-form-label">Release_Date</label>
              <div class="col-sm-5">



                <input type="text" class="form-control" id="release_date" name="release_date" value="{{$album->release_date}}">
                @error('release_date')
                <label class="text-danger">Required Release Date</label>
                @enderror
              </div>
            </div>


            <div class="form-group row {{ $errors->has('tracks')? 'has-error ' : ''}}">
              <label for="track" class="col-sm-2 col-form-label">Tracks</label>

              <div class="col-sm-5">
                <input type="int" class="form-control-file" id="" name="tracks"value="{{$album->tracks}}">

                @error('tracks')
                <label class="text-danger">Required Tracks</label>
                @enderror
              </div>
            </div>
            <br>

            <input type="submit" name="create" value="Update" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
    @endsection