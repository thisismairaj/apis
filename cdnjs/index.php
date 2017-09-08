<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CDNJS API</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
	#header{
		padding: 30px;
	}
	.logo a {
		color:white;
	}
	</style>
</head>
<body>

<div class="container">
	<div class="bg-primary">
		<header id="header">
			<h1 class="logo"><a href="#">CDNJS API</a></h1>
		</header>
	</div>

<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1>Welcome to the site!</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem necessitatibus vero nisi id nulla aliquid tempora, quam ipsam excepturi, facilis obcaecati, sunt inventore numquam praesentium saepe itaque ducimus voluptas dignissimos!</p>
				<br>
			</div>
			<div class="col-md-4">
				<form action="index.php" method="post">
					<div class="form-group">
					<label>Library Name: </label>
						<input class="form-control" type="text" name="library">
					</div>
					<div class="form-group">
						<input class="form-control btn btn-primary" type="submit" name="submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

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
</div>
</body>
</html>