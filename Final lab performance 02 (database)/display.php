<!DOCTYPE html>
<html>
<head>
	<title>Product List</title>

</head>
<body>
<fieldset>
	<legend>Display</legend>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Profit</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>

		<?php
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
		$sql = "SELECT id, name, buying_price, selling_price FROM products";
		$result = $conn->query($sql);

		// Display data in a table
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$profit = $row["selling_price"] - $row["buying_price"];
				echo "<tr><td>" . $row["name"] . "</td><td>" . $profit . "</td>";
				echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a></td>";
				echo "<td><a href='delete.php?id=" . $row["id"] . "'>Delete</a></td></tr>";
			}
		} else {
			echo "<tr><td colspan='4'>No products found.</td></tr>";
		}

		// Close database connection
		$conn->close();
		?>

		</tbody>
	</table>
</fieldset>
</body>
</html>
