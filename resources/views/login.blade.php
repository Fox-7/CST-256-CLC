@extends('layouts.appmaster') 
@section('title', 'Login Page')
@section('content')

<html lang="en">
<title>Login</title>
<form action="doLogin" method="POST">
	<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
	<center>
		<body>

			<h2>User Login Form</h2>
			<!-- Form used to get the user information for login -->


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

			<!-- Submit -->
			<input type="submit" value="Login">
			<br>

</form>
</body>
</center>

</form>

</html>
@endsection
