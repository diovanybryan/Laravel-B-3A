<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<body>
	<h1>Contact Us</h1>
	<br>

	<form action="{{ URL::to('/savecontact') }}" method="post" autocomplete="off">

		{!! csrf_field() !!}

		<table>
			<tr>
				<td>First Name</td>
				<td><input type="text" name="first_name"></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="last_name"></td>
			</tr>
			<tr>
				<td>Email Address</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Tel. Number</td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr>
				<td>Message</td>
				<td><textarea name="message"></textarea></td>
			</tr>
			<tr>
				<td rowspan="2">
					<input type="submit" value="Send Message">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>