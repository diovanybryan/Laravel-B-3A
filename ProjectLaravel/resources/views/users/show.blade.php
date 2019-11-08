<!DOCTYPE html>
<html>
<head>
	<title>Show User Data</title>
</head>
<body>
	<h1>User - Show Data</h1>
	<br />

	<table border="1">
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Birth Date</th>
			<th>Action</th>
		</tr>
		@foreach($myusers as $item)
		<tr>
			<td>{{ $item->id }}</td>
			<td>{{ $item->name }}</td>
			<td>{{ $item->email }}</td>
			<td>{{ $item->birthdate }}</td>
			<td><a href="{{ URL::to('/hapus/'.$item->id) }}">Delete</a></td>
		</tr>
		@endforeach
	</table>

	<br>

	<a href="{{URL::to('/create')}}">Insert</a>

</body>
</html>