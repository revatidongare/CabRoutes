<?php
include 'config.php';

if(isset($_POST['driverregister'])){
  $name = $_POST['name'];
  $vname = $_POST['vname'];
  $address = $_POST['address'];
  $type = $_POST['type'];
  $limit = $_POST['limit'];
  $idate = $_POST['idate'];
  $edate = $_POST['edate'];
  $texp = $_POST['texp'];
  $iidate = $_POST['iidate'];
  $cnumber = $_POST['cnumber'];
  $enumber = $_POST['enumber'];
  $email = $_POST['email'];
  
  $password = $_POST['password'];
  $i= $_FILES["i"]["name"];
  $im= $_FILES["im"]["name"];
  $ima= $_FILES["ima"]["name"];
  $imag= $_FILES["imag"]["name"];
  $image= $_FILES["image"]["name"];
      //file upload code.
  $target_dir = "assets/img/driver/";
  $target_file = $target_dir . basename($_FILES["i"]["name"]);
  $uploadOk = 1;
  $iconFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
  if (file_exists($target_file)) {
        // echo "Sorry, file already exists.";
    $uploadOk = 2;
  }
    // Allow certain file formats
  if($iconFileType != "jpg" && $iconFileType != "jpeg" && $iconFileType != "png" ) {
        // echo "Sorry, only PDF files are allowed.";
    $uploadOk = 3;
  }
    // Check if $uploadOk is set to 0 by an error
  if ($uploadOk != 1) {
        // echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["i"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }

  }
  $target_dir = "assets/img/driver/";
  $target_file = $target_dir . basename($_FILES["im"]["name"]);
  $uploadOk = 1;
  $iconFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
  if (file_exists($target_file)) {
        // echo "Sorry, file already exists.";
    $uploadOk = 2;
  }
    // Allow certain file formats
  if($iconFileType != "jpg" && $iconFileType != "jpeg" && $iconFileType != "png" ) {
        // echo "Sorry, only PDF files are allowed.";
    $uploadOk = 3;
  }
    // Check if $uploadOk is set to 0 by an error
  if ($uploadOk != 1) {
        // echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["im"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }

  }
  $target_dir = "assets/img/driver/";
  $target_file = $target_dir . basename($_FILES["ima"]["name"]);
  $uploadOk = 1;
  $iconFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
  if (file_exists($target_file)) {
        // echo "Sorry, file already exists.";
    $uploadOk = 2;
  }
    // Allow certain file formats
  if($iconFileType != "jpg" && $iconFileType != "jpeg" && $iconFileType != "png" ) {
        // echo "Sorry, only PDF files are allowed.";
    $uploadOk = 3;
  }
    // Check if $uploadOk is set to 0 by an error
  if ($uploadOk != 1) {
        // echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["ima"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }

  }
  $target_dir = "assets/img/driver/";
  $target_file = $target_dir . basename($_FILES["imag"]["name"]);
  $uploadOk = 1;
  $iconFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
  if (file_exists($target_file)) {
        // echo "Sorry, file already exists.";
    $uploadOk = 2;
  }
    // Allow certain file formats
  if($iconFileType != "jpg" && $iconFileType != "jpeg" && $iconFileType != "png" ) {
        // echo "Sorry, only PDF files are allowed.";
    $uploadOk = 3;
  }
    // Check if $uploadOk is set to 0 by an error
  if ($uploadOk != 1) {
        // echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["imag"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }

  }
  $target_dir = "assets/img/driver/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  $uploadOk = 1;
  $iconFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
  if (file_exists($target_file)) {
        // echo "Sorry, file already exists.";
    $uploadOk = 2;
  }
    // Allow certain file formats
  if($iconFileType != "jpg" && $iconFileType != "jpeg" && $iconFileType != "png" ) {
        // echo "Sorry, only PDF files are allowed.";
    $uploadOk = 3;
  }
    // Check if $uploadOk is set to 0 by an error
  if ($uploadOk != 1) {
        // echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }

  }
  $q = "INSERT INTO `drivermaster`( `Fullname`, `VehicleNo`, `Driveraddress`,`Cartype`,`Passengerlimit`,`DriverPhoto`, `Vehiclephoto`, `VehicleAmenities`, `DriverLicenseCopy`, `DriverAadhaarCard`, `DriverLicenseIssueDdate`, `DriverLicenseExpiredDate`, `Driverexperience`, `VehicleInsuranceIssuedate`, `ContactNumber`, `EmergencyContactNumber`, `EmailAddress`, `Password`)VALUES('$name', '$vname', '$address','$type','$limit','$i','$im','$ima','$imag','$image','$idate', '$edate', '$texp', '$iidate', '$cnumber', '$enumber', '$email', '$password')";
  $stmt=$conn->prepare($q);
  $stmt->execute();
  // $row = $stmt->fetch();
  $conn=null;

  if ($stmt) {
    session_start();
    $_SESSION['id'] = $id;
    header('location: index.php?q=3');
  }
  else{
    header('location:AgentLogin.php?q=2');
  }
}
?>
