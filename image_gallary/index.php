<!DOCTYPE html>
<html>
<head>
	<title>Simple gallery</title>
</head>
<style type="text/css">
	input[type=submit]{
		margin-top:20px;
	}
	form{
		text-align: center;
	}
</style>
<body>
	<div>
		<?php 
		$gallery = scandir("img");
		for ($i=2; $i < count($gallery); $i++) {
			$image = $gallery[$i];
			echo "<img src='img/$image' style='width:150px; margin-left:20px;'>";

		}
		?>
	</div>
	<form action="process.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="image">
		<br>
		<input type="submit" value="Upload">
	</form>
</body>
</html>