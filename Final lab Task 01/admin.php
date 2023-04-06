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
       <br>
	   <br>
	   <br>
	   <form action="#" method="get">
		<label for="search">Search:</label>
		<input type="text" id="search" name="search" placeholder="Enter feature name">
		<input type="submit" value="Search">
	</form>
	   <table border="1">
			<tr>
				<th>Feature</th>
				<th>Specification</th>
				<th>User Story</th>
			</tr>
			<?php
			// Open the file for reading
			$file = fopen("data.txt", "r");

			// Read the data from the file and display it in a table
			while(!feof($file)) {
				$data = fgets($file);
				if(trim($data) != "") {
					$parts = explode(",", $data);
					if (count($parts) >= 2) {
						$feature = $parts[0];
						$specification = $parts[1];
						$user_story = isset($parts[2]) ? $parts[2] : '';
						$search = isset($_GET['search']) ? $_GET['search'] : '';

						// Only display rows that match the search keyword
						if ($search == '' || stripos($feature, $search) !== false) {
			?>
						<tr>
							<td><?php echo $feature; ?></td>
							<td><?php echo $specification; ?></td>
							<td><?php echo $user_story; ?></td>
						</tr>
			<?php
						}
					
					}
				}
			}

			// Close the file
			fclose($file);
			?>
		</table>

		<form action="logout.php" method="post">
    <input type="submit" name="logout" value="Logout">
</form>
	</fieldset>
</body>
</html>
