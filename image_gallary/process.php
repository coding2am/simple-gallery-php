<?php

// print_r($_FILES);
$tmp = $_FILES['image']['tmp_name'];
$name = $_FILES['image']['name'];
$type = $_FILES['image']['type'];

if ($type == "image/jpeg" || $type == "image/jpg" || $type == "image/png" || $type == "iamge/gif") {
	move_uploaded_file( $tmp, "img/$name",);
	header("location: index.php");
}
?>