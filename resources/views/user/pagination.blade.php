<html>
	<head>
		<title>Pagination</title>
	
		<style type="text/css">
		
			html, body {
				width: 100%;
				margin: 0 auto;
				padding: 10px;
			}
			.pagination li{
				display: inline;
				float: left;
			}
			.pagination li a{
				background: #ddd;
				padding-right: 10px;
				padding-left: 10px;
				text-decoration: none;
			}
			li.active span{
				background: #ccc;
				padding-right: 10px;
				padding-left: 10px;
				text-decoration: none;
			}
			li.disabled span{
				background: gray;
			}
			table
			{
				
				border-collapse: collapse;
				
			}
			table tr > td, tr > th{
				border: 1px solid #ddd;
				padding: 5px;
			}
			form, h1{
				display:inline;
			}
		</style>
	
	</head>
	<body>
		<h1>Pagination Laravel</h1>&nbsp;|&nbsp;<a href="{{ url('getInsert')}}">Create</a>
		<br><Br>
		<table>
		
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Description</th>
				
				<th>Created At</th>
				<th>Updated At</th>
				<th>Action</th>
			</tr>
			@foreach ( $user_details as $u)
						<tr>
				<td>{{ $loop->index+1}}</td>
				<td>{{$u->name}}</td>
				<td>{{ $u->description }}</td>
				
				<td>{{ $u->dateCreated }}</td>
				<td>{{ $u->dateUpdated }}</td>
				<td><a href="{{ url('getEditDashboard',$u->id ) }}">Edit</a>
				<form action="{{ url('postDeletePagination',[$u->id]) }}" method="post">
					<input onclick="return confirm('Are you sure?')" type="submit" value="Delete">{!! csrf_field() !!}
				</form>
				</td>
			</tr>
			@endforeach
		</table>
		
		<hr>
		{{$user_details->links()}}&emsp;|&emsp; <b>Total:</b> {{$user_details->total()}}
	</body>
</html>