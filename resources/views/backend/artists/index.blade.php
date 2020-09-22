@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Artists List</h1>
    		<a href="{{route('artists.create')}}" class="btn btn-info float-right">Add New</a>
  		</div>
  	</div>
    
    <div class="row">
    	<div class="col-sm-12">
    		<table class="table table-bordered">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					<th>Name</th>
    					<th>Photo</th>
    					<th>DOB</th>
    					<th>Gender</th>
                        <th>Biography</th>
                        <th>Actions</th>
    				</tr>
    			</thead>
    			 <tbody>
    				 @php $i=1; @endphp
    				@foreach($artists as $artist)
    				<tr>
    					<td>{{$i++}}</td>

    					<td>{{$artist->name}}</td>
                        <td><img src="{{asset($artist->photo)}}"width="150px"height="150px"></td>
    					<td>{{$artist->dob}} </td>
                        <td>{{$artist->gender}}</td>
                        <td>{{$artist->biography}}</td>
    					<td>
    						<a href="{{route('artists.show',$artist->id)}}" class="btn btn-primary">Detail</a>
    						<a href="{{route('artists.edit',$artist->id)}}" class="btn btn-warning">Edit</a>
                            <form method="post" action="{{route('artists.destroy',$artist->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
    					</td>
    				</tr>
    				@endforeach 
    			</tbody>
    		</table>
    	</div>
    </div>

 	</div>
@endsection