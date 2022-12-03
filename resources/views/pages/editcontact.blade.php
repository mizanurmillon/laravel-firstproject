<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert page</title>
</head>
<body>
	<form action="{{ URL::to('/update/'.$edit->id) }}" method="post">
		@csrf
		<input type="text" name="name" value="{{ $edit->name }}"><br />
		<input type="email" name="email" value="{{ $edit->email }}"><br />
		<input type="text" name="phone" value="{{ $edit->phone }}"><br />
		<textarea name="description" id="" cols="30" rows="10">{{ $edit->description }}</textarea>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>