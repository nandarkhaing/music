@extends('backendtemplate')
@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Album Create Form</h1>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <form action="{{route('albums.store')}} " method="POST" enctype="multipart/form-data">
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

        <div class="form-group row {{ $errors->has('photo') ? 'has-error' : '' }}">
              <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
              <div class="col-sm-5">
                <input type="file" id="inputPhoto" name="photo" class="d-block">
                <span class="text-danger">{{ $errors->first('photo') }}</span>
              </div>
            </div>

        

        <div class="form-group row {{ $errors->has('title')? 'has-error ' : ''}}">
          <label for="title" class="col-sm-2 col-form-label">Title</label>

          

          <div class="col-sm-5">
            <input type="text" class="form-control" id="" name="title">
             @error('title')
              <label class="text-danger">Require Title</label>
              @enderror
          </div>
        </div>
<div class="form-group row {{ $errors->has('releasedate')? 'has-error ' : ''}}">
          <label for="release_date" class="col-sm-2 col-form-label">Release_Date</label>

          <div class="col-sm-5">
          

            <input type="text" class="form-control" id="" name="release_date">
            @error('release_date')
              <label class="text-danger">Required Release Date</label>
              @enderror
          </div>
        </div>
        <br>


        <div class="form-group row {{ $errors->has('tracks')? 'has-error ' : ''}}">
          <label for="track" class="col-sm-2 col-form-label">Tracks</label>

          <div class="col-sm-5">

          

            <input type="int" class="form-control-file" id="" name="tracks">
            @error('tracks')
              <label class="text-danger">Required Tracks</label>
              @enderror
          </div>
        </div>
        <br>
        
        <input type="submit" name="create" value="Create" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
@endsection