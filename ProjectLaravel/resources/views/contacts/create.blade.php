<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<h1>Contact Us</h1>
	<br>

	<form action="{{ URL::to('/savecontact') }}" method="post" autocomplete="off" style="background: #ddddbb">

		{!! csrf_field() !!}
		<div class="form-group" >
			<label>First Name :</label>
			<input type="text" name="first_name" class="form-control">
		</div>
<div class="form-group" >
			<label>Last Name :</label>
			<input type="text" name="last_name" class="form-control">
		</div>
<div class="form-group" >
			<label>Email Address :</label>
			<input type="email" name="email" class="form-control">
		</div>
<div class="form-group" >
			<label>Tel. Number :</label>
			<input type="text" name="phone" class="form-control">
		</div>
		<div class="form-group" >
			<label>Message :</label>
			<textarea name="message" class="form-control"></textarea>

		</div>
			<input style="background: pink; color: white"type="submit" value="Send Message">
	</form>

</body>
</html>