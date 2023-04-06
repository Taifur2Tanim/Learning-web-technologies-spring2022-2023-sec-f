<!DOCTYPE html>
<html>
<head>
	<title>Edit Product Form</title>
</head>
<body>

	<form method="POST" action="editp.php">
		<fieldset>
			<legend>Edit Product</legend>

			<label for="name">Name</label>
            <br>
			<input type="text" id="name" name="name"><br>

			<label for="buying_price">Buying Price:</label>
            <br>
			<input type="text" id="buying_price" name="buying_price"><br>

			<label for="selling_price">Selling Price</label>
            <br>
			<input type="text" id="selling_price" name="selling_price"><br>
            <hr>
            <input type="checkbox" id="display" name="display" value="display">Display
            <hr>
			<input type="submit" value="Save">
		</fieldset>
	</form>

</body>
</html>
