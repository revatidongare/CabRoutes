<?php
	session_start();
	session_unset();
	session_destroy();
	header('location:driverlogin.php.php?p=1234');
?>