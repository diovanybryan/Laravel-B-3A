<!DOCTYPE html>
<html>
<head>
	<title>Show Contact</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<h1>Contact Us - Show Data</h1>
	<br />

	<table class="table">
		<tr>
			<th>No.</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email Address</th>
			<th>Tel. Number</th>
			<th>Message</th>
		</tr>
		@foreach($myusers as $item)
		<tr>
			<td>{{ $item->id }}</td>
			<td>{{ $item->first_name }}</td>
			<td>{{ $item->last_name }}</td>
			<td>{{ $item->email }}</td>
			<td>{{ $item->phone }}</td>
			<td>{{ $item->message }}</td>
		</tr>
		@endforeach
	</table>

	<br>

	<a href="{{URL::to('/createcontact')}}">Back</a>

</body>
</html>