<?php
	$user='root';
	$pass='';
     $dbname='cabroutes';
	
$conn = new PDO('mysql:host=localhost;dbname=cabroutes', $user, $pass);
	if (!$conn) {
		die("Connection failed: " . $conn->connect_error);
	}
  	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	

// 	$user='u762435158_augfood';
// 	$pass='vadmin';
//     $dbname='u762435158_augmentedfood';

// $conn = new PDO('mysql:host=localhost;dbname=u762435158_augmentedfood', $user, $pass);
// 	if (!$conn) {
// 		die("Connection failed: " . $conn->connect_error);
// 	}
//   	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  	
?>

