@extends('backendtemplate')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mx-1 mb-0 text-gray-800">Album List</h1>
			<a href="{{route('albums.create')}}" class="mx-1 btn btn-info">Add New</a>		
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead class="table-dark">
				<tr>
					<th>No</th>
					<th>Artist_ID</th>
					<th>Photo</th>
					<th>Title</th>
					<th>Release Date</th>
					<th>Tracks</th>
					
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				@php  $i=1; @endphp
				@foreach($albums as $album)
				<tr>
				
					<td>{{$i++}}</td>
				   <td> {{$album->artist->name}}</td>
					<td><img src="{{asset($album->photo)}}" width="120" height="120"></td>
					<td>{{$album->title}}</td>
					<td>{{$album->release_date}}</td>
					<td>{{$album->tracks}}</td>
				
					<td>
						
					<a href="{{route('albums.show',$album->id)}}" class="btn btn-primary">Detail</a>
    						<a href="{{route('albums.edit',$album->id)}}" class="btn btn-warning">Edit</a>
                            <form method="post" action="{{route('albums.destroy',$album->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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

@endsection