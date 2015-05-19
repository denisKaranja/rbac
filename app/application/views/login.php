<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

<div class="container offset-top">
	
	<h4 class=""><?php  ?></h4>

	<form action="account/validate" method="POST">
		Username: <input type="text" name="username" placeholder="Enter username" class="form-control"> <br>
		Password: <input type="password" name="password" class="form-control"> <br><br>
		<input type="submit" value="Login">
	</form>

</div>

</body>
</html>