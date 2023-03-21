<?php
// Get the data from the form
$features = $_POST['feature'];
$specifications = $_POST['specification'];
$user_stories = $_POST['user_story'];

// Open the file for appending
$file = fopen("data.txt", "a");

// Write the data to the file
for ($i = 0; $i < count($features); $i++) {
	$feature = trim($features[$i]);
	$specification = trim($specifications[$i]);
	$user_story = trim($user_stories[$i]);

	// Only write the data to the file if all fields are filled out
	if ($feature != "" && $specification != "" && $user_story != "") {
		fwrite($file, "$feature,$specification,$user_story\n");
	}
}

// Close the file
fclose($file);

// Redirect back to the PRD management page
header("Location: admin.php");
exit;
?>
