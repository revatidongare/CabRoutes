<?php 
include '../config.php';

if(isset($_POST['login'])){
	$username = $_POST['mail'];
	$password = $_POST['password'];
	$q = "SELECT * FROM `admin` WHERE `mail` = '$username' AND `password` = '$password'";
	$stmt=$conn->prepare($q);
	$stmt->execute();
	$row = $stmt->fetch();
$conn=null;

	// $result = mysqli_query($con, $q);
	// $row = mysqli_fetch_array($result);
	if ($row) {
		session_start();
		$_SESSION['admin'] = $username;
		header('location: dashboard.php?login=1');
	}
	else{
		header('location: index.php?q=1');
	}
}

//add pickuplocation
if(isset($_POST['picklocation'])){
  $location = $_POST['location'];
   $type = $_POST['type'];
  $q = "INSERT INTO `pickup`(`location`,`flag`)VALUES('$location','$type')";
  $stmt=$conn->prepare($q);
  $stmt->execute();
  $row = $stmt->fetch();
$conn=null;
  if ($row) {
    header('location: pickup.php?login=1');
  }
  else{
    header('location: pickup.php?q=1');
  }
}

//add sublocation(pickup)
if(isset($_POST['subpicklocation'])){
  $locationid = $_POST['locationid'];
   $locationn = $_POST['locationn'];
  $q = "INSERT INTO `subpickup`(`id`,`sublocation`)VALUES('$locationid','$locationn')";
  $stmt=$conn->prepare($q);
  $stmt->execute();
  $row = $stmt->fetch();
$conn=null;
  if ($row) {
    header('location: pickup.php?login=1');
  }
  else{
    header('location: pickup.php?q=1');
  }
}

//add car
if(isset($_POST['cartype'])){
  $typee = $_POST['typee'];
  $q = "INSERT INTO `addcar`(`cartype`)VALUES('$typee')";
  $stmt=$conn->prepare($q);
  $stmt->execute();
  $row = $stmt->fetch();
$conn=null;
  if ($row) {
    header('location: addcar.php?login=1');
  }
  else{
    header('location: addcar.php?q=1');
  }
}


//add PassengerLimit
if(isset($_POST['passlimit'])){
  $limit = $_POST['limit'];
  $q = "INSERT INTO `passengerlimit`(`passengerlim`)VALUES('$limit')";
  $stmt=$conn->prepare($q);
  $stmt->execute();
  $row = $stmt->fetch();
$conn=null;
  if ($row) {
    header('location: addcar.php?login=1');
  }
  else{
    header('location: addcar.php?q=1');
  }
}







if(isset($_POST['droplocationn'])){
  $location = $_POST['location'];
  $type = $_POST['type'];
  $q = "INSERT INTO `droplocation`(`location`,`flag`)VALUES('$location','$type')";
  $stmt=$conn->prepare($q);
  $stmt->execute();
  $row = $stmt->fetch();
$conn=null;
  if ($row) {
    header('location: drop.php?login=1');
  }
  else{
    header('location: drop.php?q=1');
  }
}

?>

