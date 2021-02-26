<?php $page = 'login'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'?>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="../assets/img/cab.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Login</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								
								<!-- Form -->
								<form action="back.php" method="post">
									<div class="form-group">
										<input class="form-control" type="text" name="mail" placeholder="Email">
									</div>
									<div class="form-group">
										<input class="form-control" type="password" name="password" placeholder="Password">
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block" name="login" type="submit">Login</button>
									</div>
								</form>
								<!-- /Form -->
								
								<!-- <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div> -->
								  
								<!-- Social Login -->
								<!-- <div class="social-login">
									<span>Login with</span>
									<a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google"></i></a>
								</div> -->
								<!-- /Social Login -->
								
								<!-- <div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div> -->
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
		  
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
</html>

<?php
	
            if($_GET['p'] == 1234){ ?>
            <script>swal("Successfully Logout..", {
  buttons: false,
  timer: 1500,
});</script>
            <!--echo '<script> alert(" Successfully Logout..")</script>';-->
<?php }
 ?>
