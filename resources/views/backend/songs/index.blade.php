@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Songs List</h1>
    		<a href="{{route('songs.create')}}" class="btn btn-info float-right">Add New</a>
  		</div>
  	</div>
    
    <div class="row">
    	<div class="col-lg-12">
    		<table class="table table-bordered">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					<th>Artist_ID</th>
              <th>Album_ID</th>
    					<th>Song Title</th>
    					<th>Duration</th>
    					<th>Play Song</th>
                        <th>Actions</th>
    				</tr>
    			</thead>
    			 <tbody>
    				 @php $i=1; @endphp
    				@foreach($songs as $song)
    				<tr>
    				  <td>{{$i++}}</td>
                      <td>{{$song->artist->name}}</td>
                      <td>{{$song->album->title}}</td>
                      <td>{{$song->title}} </td>

                      <td>{{$song->duration}} </td>
                      <td>
                      <audio controls="" style="vertical-align: middle" src="{{$song->play}}" type="audio/mp3" controlslist="nodownload"></audio>

                 </td>
                 <td>
                          <a href="{{route('songs.show',$song->id)}}" class="btn btn-primary">Detail</a>
                          <a href="{{route('songs.edit',$song->id)}}" class="btn btn-warning">Edit</a>
                          <form method="post" action="{{route('songs.destroy',$song->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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