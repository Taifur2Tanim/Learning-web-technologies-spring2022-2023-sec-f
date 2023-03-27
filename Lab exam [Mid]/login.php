<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<fieldset>
		<legend>Login</legend>
		<form method="post" action="login_action.php">
			<label for="name">Name:</label>
			<input type="text" name="name" required><br><br>

			<label for="password">Password:</label>
			<input type="password" name="password" required><br><br>

			<input type="submit" name="submit" value="Login">
		</form>
	</fieldset>
</body>
</html>