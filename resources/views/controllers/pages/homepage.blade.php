@extends('layouts.default')

@section('title', 'Issues Github')

@section('content')
	<div class="container-fluid">
	    <div class="jumbotron">
	    	<h2 class="text-center">Issue Counter</h2>
			{!! Form::open(['route' => 'homepage', 'method'=>'GET']) !!}

		    	<div class="input-group  input-group-lg">
					<input type="text" class="form-control" name="url" placeholder="Enter URL to public repository" value="{{$url}}">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit">
							<i class="fa fa-search"></i>
						</button>
					</span>
			    </div>
			
			{!! Form::close() !!}
	    </div>
	    <br>
	    <table class="table table-striped">
			<tr>
				<th>Description</th>
				<th>Number of Issues</th>
			</tr>
			<tr>
				<td>Total number of open issues</td>
				<td>{{ $result['total'] }}</td>
			</tr>
			<tr>
				<td>Number of open issues that were opened in the last 24 hours</td>
				<td>{{ $result['nowto24hours'] }}</td>
			</tr>
			<tr>
				<td>Number of open issues that were opened more than 24 hours ago but less than 7 days ago</td>
				<td>{{ $result['24hoursto7days'] }}</td>
			</tr>
			<tr>
				<td>Number of open issues that were opened more than 7 days ago</td>
				<td>{{ $result['morethan7days'] }}</td>
			</tr>
		</table>
	</div>
	
@endsection