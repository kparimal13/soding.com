<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
		<title>Insert</title>
	</head>
	<body>
		<form action="store" method="post">
			<label for="name"></label>
			<input type="text" id="name" name="name">
			<label for="userid"></label>
			<input type="text" id="userid" name="userid">
			<label for="passpost"></label>
			<input type="text" id="passport" name="passport">
			<label for="phone"></label>
			<input type="text" id="phone" name="phone">
			<label for="address1"></label>
			<input type="text" id="address1" name="address1">
			<label for="postcode"></label>
			<input type="text" id="postcode" name="postcode">
			<label for="state"></label>
			<input type="text" id="state" name="state">
			<label for="country"></label>
			<input type="text" id="country" name="country">
			<input type="submit" value="Register">
			<input type="hidden" name="xstatus" value="{{csrf_token()}}">
		</form>
    </body>
</html>
