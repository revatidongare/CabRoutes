<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
<?php include 'includes/head.php'?>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
           <?php include 'includes/header.php'?>
			<!-- /Header -->
			<!-- Sidebar -->
            	<?php include 'includes/sidebar.php'?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<?php if(isset($_SESSION['id'])) {
									$id = $_SESSION['id'] ;
							$query = "SELECT * FROM `drivermaster` where `id` = $id";
                             include '../config.php';
                             $stmt=$conn->prepare($query);
                             $stmt->execute();
                             $result=$stmt->fetchAll();
                             $conn=null;
                                  
                             foreach($result as $driver){
                              ?>
					<div class="row">
						<div class="col-md-12">
							<div class="profile-header">
								<div class="row align-items-center">
									<div class="col-auto profile-image">
										<a href="#">
											 <img src="../assets/img/driver/<?php echo $driver['DriverPhoto']?>" alt="driver image">
										</a>
									</div>
									<div class="col ml-md-n2 profile-user-info">
										<h4 class="user-name mb-0"><?php echo $driver['Fullname']?></h4>
										<h6 class="text-muted"><?php echo $driver['VehicleNo']?></h6>
										<div class="user-Location"><i class="fa fa-map-marker"></i><?php echo $driver['Driveraddress']?></div>
										<div class="user-Location"><?php echo $driver['Cartype']?></div>
										
									</div>
									<!-- <div class="col-auto profile-btn">
										
										<a href="#" class="btn btn-primary">
											Edit
										</a>
									</div> -->
								</div>
							</div>
							<!-- <div class="profile-menu">
								<ul class="nav nav-tabs nav-tabs-solid">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
									</li>
								</ul>
							</div>	 -->
							<div class="tab-content profile-tab-cont">
								
								<!-- Personal Details Tab -->
								<div class="tab-pane fade show active" id="per_details_tab">
								
									<!-- Personal Details -->
									<div class="row">
										<div class="col-lg-12">
											<div class="card">
												<div class="card-body">
													<h5 class="card-title d-flex justify-content-between">
														<span>Personal Details</span> 
													</h5>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
														<p class="col-sm-10"><?php echo $driver['Fullname']?></p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Contact Number</p>
														<p class="col-sm-10"><?php echo $driver['ContactNumber']?></p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
														<p class="col-sm-10"><?php echo $driver['EmailAddress']?></p>
													</div>
													
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0">Address</p>
														<p class="col-sm-10 mb-0"> <?php echo $driver['Driveraddress']?></p>
													</div>
												</div>
											</div>		
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php }}?>
				
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
</html>