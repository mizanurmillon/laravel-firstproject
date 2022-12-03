<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
	<h2>Contacts Book</h2>
	<a href="{{ URL::to('/') }}" class="btn btn-success">Home</a>
	<a href="{{ URL::to('/insert') }}" class="btn btn-primary">Add New</a>
	<table class="table table-bordered">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>description</th>
			<th>Action</th>
		</tr>
		@foreach($data as $row) 
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->name }}</td>
			<td>{{ $row->email }}</td>
			<td>{{ $row->phone }}</td>
			<td>{{ $row->description }}</td>
			<td>
				<a href="{{ URL::to('edit-contact/'.$row->id) }}" class="btn btn-info">Edit</a>
				<a href="{{ URL::to('delete-contact/'.$row->id) }}" class="btn btn-danger">delete</a>
				<a href="{{ URL::to('view-contact/'.$row->id) }}" class="btn btn-dark">View</a>
			</td>
		</tr>
		@endforeach
	</table>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>