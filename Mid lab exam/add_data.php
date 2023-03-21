<?php
// Get the data from the form
$features = $_POST['feature'];
$specifications = $_POST['specification'];
$user_stories = $_POST['user_story'];


$file = fopen("data.txt", "a");

// Write the data to the file
for ($i = 0; $i < count($features); $i++) {
	$feature = trim($features[$i]);
	$specification = trim($specifications[$i]);
	$user_story = trim($user_stories[$i]);

	if ($feature != "" && $specification != "" && $user_story != "") {
		fwrite($file, "$feature,$specification,$user_story\n");
	}
}

// Close the file
fclose($file);


header("Location: admin.php");
exit;
?>
