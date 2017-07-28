<html>
	<head>
		<title>Insert</title>
	
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
			
		</style>
	
	</head>
	<body>
		<div class="container">
		@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
		<h4>Create New</h4>
		<hr>
			<form action="{{ url('postInsert') }}" method="POST">
			{{ csrf_field() }}
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" required="required" name="name"></td>
					</tr>
					<tr>
						<td>Description</td>
						<td><textarea name="description" cols="35" rows="4" ></textarea>
					</tr>
					
					
				</table>
				<hr>
				<input type="submit" value="Create">&nbsp;|&nbsp;<a href="{{ url ('pagination') }}">List</a>
			</form>
		</div>
	</body>
</html>