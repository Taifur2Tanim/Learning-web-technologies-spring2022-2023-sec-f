<!DOCTYPE html>
<html>
<head>
	<title>Analyst Page</title>
</head>
<body>
	<fieldset>
		<legend>Analyst</legend>
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

			// Close the file
			fclose($file);
			?>
		</table>
	</fieldset>
</body>
</html>

