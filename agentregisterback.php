<?php
include 'config.php';

if(isset($_POST['agentregister'])){
  $aname = $_POST['aname'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $designation = $_POST['designation'];
  $cnumber = $_POST['cnumber'];
  $enumber = $_POST['enumber'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $type= $_FILES["type"]["name"];
  $shopact= $_FILES["shopact"]["name"];
  $pancard= $_FILES["pancard"]["name"];
  $photo= $_FILES["photo"]["name"];
  $aadharcard= $_FILES["aadharcard"]["name"];
      //file upload code.

  $target_dir = "assets/img/agent/";
  $target_file = $target_dir . basename($_FILES["type"]["name"]);
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
    if (move_uploaded_file($_FILES["type"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }

  }
  $target_dir = "assets/img/agent/";
  $target_file = $target_dir . basename($_FILES["shopact"]["name"]);
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
    if (move_uploaded_file($_FILES["shopact"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }

  }
  $target_dir = "assets/img/agent/";
  $target_file = $target_dir . basename($_FILES["pancard"]["name"]);
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
    if (move_uploaded_file($_FILES["pancard"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }

  }
  $target_dir = "assets/img/agent/";
  $target_file = $target_dir . basename($_FILES["photo"]["name"]);
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
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }

  }
  $target_dir = "assets/img/agent/";
  $target_file = $target_dir . basename($_FILES["aadharcard"]["name"]);
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
    if (move_uploaded_file($_FILES["aadharcard"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }

  }
  // echo 
  // '$name', '$aname', '$address','$designation','$type','$shopact','$pancard','$photo','$aadharcard','$cnumber','$enumber', '$email', '$password';
  // exit();
  $q = "INSERT INTO `agentmaster`(`AgencyName`,`AgentFullName`,`AgencyAddress`,`AgentDesignation`,`AgencyType`,`Shopactlicense`,`PanCard`,`AgentPhoto`,`OwnerAadhaarCard`, `ContactNumber`,`EmergencyContactNumber`,`EmailAddress`,`Password`)VALUES('$aname','$name', '$address','$designation','$type','$shopact','$pancard','$photo','$aadharcard','$cnumber','$enumber', '$email', '$password')";
  
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
