<!DOCTYPE html>
<html>
<head>
	<title>PRD Management</title>
</head>
<body>
	<fieldset>
		<legend>Admin</legend>
		<form method="post" action="add_data.php">
			<label>Feature:</label>
			<input type="text" name="feature[]"><br><br>
			<label>Specification:</label>
			<input type="text" name="specification[]"><br><br>
			<label>User Story:</label>
			<textarea name="user_story[]"></textarea><br><br>
			<input type="submit" name="submit" value="Add">
		</form>
	</fieldset>
</body>
</html>
