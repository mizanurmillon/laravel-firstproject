<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert page</title>
</head>
<body>
	<form action="{{ URL::to('/data') }}" method="post">
		@csrf
		<input type="text" name="name" placeholder="Name"><br />
		<input type="email" name="email" placeholder="Email"><br />
		<input type="text" name="phone" placeholder="Phone"><br />
		<textarea name="description" id="" cols="30" rows="10"placeholder="Description"></textarea>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>