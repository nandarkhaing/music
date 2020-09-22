@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Artist Create Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('artists.store')}}" method="POST" enctype="multipart/form-data">
			       @csrf
			      <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="name">
			          <span class="text-danger">{{ $errors->first('name') }}</span>
			        </div>
			      </div>
			      <div class="form-group row {{ $errors->has('photo') ? 'has-error' : '' }}">
			        <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
			        <div class="col-sm-5">
			          <input type="file" id="inputPhoto" name="photo" class="d-block">
			          <span class="text-danger">{{ $errors->first('photo') }}</span>
			        </div>
			      </div>
			      <div class="form-group row {{ $errors->has('dob') ? 'has-error' : '' }}">
			        <label for="inputDOB" class="col-sm-2 col-form-label">DOB</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputDOB" name="dob" >
			          <span class="text-danger">{{ $errors->first('dob') }}</span>
			        </div>
			      </div>

			      <div class="form-group row">
			      	<label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
			      	<div class="col-sm-5">
			      		<select class="custom-select mr-sm-2" id="inputGender"name="gender">
			      			<option value="Male" selected> Male </option>
			      			<option value="Female">Female </option>
			      			

			      		</select>
			      	</div>
			      </div>
			      <div class="form-group row {{ $errors->has('biography') ? 'has-error' : '' }}">
			        <label for="inputBiography" class="col-sm-2 col-form-label">Biography</label>
			        <div class="col-sm-5">
			          <textarea id="inputBiography" class="form-control" name="biography"></textarea>
			          <span class="text-danger">{{ $errors->first('biography') }}</span>
			        </div>
			      </div>
			      
			      {{-- <div class="form-group row {{ $errors->has('brand') ? 'has-error' : '' }}">
			        <label for="inputBrand" class="col-sm-2 col-form-label">Brand</label>
			        <div class="col-sm-5">
  <select class="form-control form-control-md" id="inputBrand" name="brand">
    <optgroup label="Choose Brand">
      @foreach($brands as $brand)
        <option value="{{$brand->id}}">{{$brand->name}}</option>
      @endforeach 
    </optgroup>
  </select>
			          <span class="text-danger">{{ $errors->first('brand') }}</span>
			        </div>
			      </div>
			      <div class="form-group row {{ $errors->has('subcategory') ? 'has-error' : '' }}">
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