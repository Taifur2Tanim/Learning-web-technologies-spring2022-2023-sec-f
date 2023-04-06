<!DOCTYPE html>
<html>
<head>
	<title>Add Product Form</title>
</head>
<body>

	<form method="POST" action="submit_product.php">
		<fieldset>
			<legend>Add Product</legend>

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

	<?php
		// Check if the "display" checkbox is checked
		if (isset($_POST['display'])) {
			// Connect to the database
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "product_db";

			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}

			// Retrieve data from the database
			$sql = "SELECT name, buying_price, selling_price FROM products";
			$result = $conn->query($sql);

			// Display data in a table
			echo "<fieldset><legend>Product List</legend>";
			echo "<table><tr><th>Name</th><th>Buying Price</th><th>Selling Price</th></tr>";
			if ($result->num_rows > 0) {
			    while ($row = $result->fetch_assoc()) {
			        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["buying_price"] . "</td><td>" . $row["selling_price"] . "</td></tr>";
			    }
			} else {
			    echo "<tr><td colspan='3'>No products found.</td></tr>";
			}
			echo "</table></fieldset>";

			// Close database connection
			$conn->close();
		}
	?>

</body>
</html>
