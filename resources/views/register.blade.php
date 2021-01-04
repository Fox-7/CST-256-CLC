@extends('layouts.appmaster') 
@section('title', 'Register Page')
@section('content')

<html lang="en">
<title>Register</title>
<form action="doRegister" method="POST">
	<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
	<center>
		<body>
			<h2>User Registration Form</h2>
			<!-- Form used to get the user information for registration -->

			<!-- Username -->
			<span
				style="display: inline-block; width: 100px; padding-bottom: 5px;">Username:
			</span>
			<input type="text" name="Username">
			<br>

			<!-- Password -->
			<span
				style="display: inline-block; width: 100px; padding-bottom: 5px;">Password:
			</span>
			<input type="password" name="Password">
			<br>

			<!-- First Name -->
			<span
				style="display: inline-block; width: 100px; padding-bottom: 5px;">First
				Name: </span>
			<input type="text" name="First_Name">
			<br>

			<!-- Last Name -->
			<span
				style="display: inline-block; width: 100px; padding-bottom: 5px;">Last
				Name: </span>
			<input type="text" name="Last_Name">
			<br>

			<!-- Email -->
			<span
				style="display: inline-block; width: 100px; padding-bottom: 5px;">Email:
			</span>
			<input type="text" name="Email">
			<br>

			<!-- Submit -->
			<input type="submit" value="Register">
			<br>

</form>
</body>

</center>

</html>
@endsection
