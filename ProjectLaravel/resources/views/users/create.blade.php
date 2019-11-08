<!DOCTYPE html>
<html>
<head>
	<title>User Create</title>
</head>
<body>
	<h1>User - Create</h1>
	<br />

	<a href="{{URL::to('/show')}}">< Back to Show Data</a>
	<br /><br />

	<form action="{{ URL::to('/adduser') }}" method="POST" autocomplete="off">

		{!! csrf_field() !!}

		<table>
			<tr>
				<td>Name</td>
				<td>: </td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>: </td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>: </td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Birth Date</td>
				<td>: </td>
				<td><input type="date" name="birthdate"></td>
			</tr>
			<tr>
				<td rowspan="3">
					<input type="submit" value="Insert"></input>
				</td>
			</tr>
		</table>
	</form>

</body>
</html>