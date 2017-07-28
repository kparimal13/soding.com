<html>
	<head>
		<title>Update Task</title>
	
		<style type="text/css">
		
			html, body {
				width: 600px;
				margin: 0 auto;
				padding: 10px;
			}
			.container{
				background: #ddd;
				box-shadow: 0px 0px 10px gray;
				padding: 10px;
			}
			table{
				width: 100%;
			}
		</style>
	
	</head>
	<body>
		<div class="container">
	
		@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
	@endif
		<h4>Update Task</h4>
		<hr>
			<form action="{{ url('postUpdateDashboard',array($user_details->id)) }}" method="POST">
			{{ csrf_field() }}
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" required="required" name="name" value="{{ $user_details->name }}"></td>
					</tr>
					<tr>
						<td>Description</td>

						<td><textarea name="description" cols="35" rows="4">"{{ $user_details->description }}"</textarea>
					</tr>
				
				</table>
				<hr>
				<input type="submit" value="Update">&nbsp;|&nbsp;<a href="{{ url ('pagination') }}">List</a>
			</form>
		</div>
	</body>
</html>