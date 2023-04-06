<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<fieldset>
		<legend>Registration</legend>
		<form method="post" action="registration_action.php">
			<label for="name">Name:</label>
			<input type="text" name="name" required><br><br>

			<label for="phone">Phone:</label>
			<input type="text" name="phone" required><br><br>

			<label for="password">Password:</label>
			<input type="password" name="password" required><br><br>

			<input type="submit" name="submit" value="Register">
		</form>
	</fieldset>
</body>
</html>