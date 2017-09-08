<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CDNJS API</title>
</head>
<body>

<form action="index.php" method="post">
	<input type="text" name="library">
	<input type="submit" name="submit">
</form>

<?php

if(isset($_POST['submit'])) {
	$library = $_POST['library'];
	if(!empty($library)) {
		$response = file_get_contents('https://api.cdnjs.com/libraries/' . $library);
		$response = json_decode($response, true);
		print_r($response);
	}
}
?>
	
</body>
</html>