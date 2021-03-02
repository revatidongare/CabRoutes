<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/patient-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
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
						<div class="col-sm-12">
							<h3 class="page-title">Add Driver</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="javascript:(0);">Driver</a></li>
								<li class="breadcrumb-item active">Location</li>
							</ul>
						</div>
						<div class="col-sm-7 col">
							<a href="#add_location" data-toggle="modal" class="btn btn-primary float-right mt-2">Add Driver</a>
						</div>

							<!-- <div class="col-sm-4 col">
								<a href="#add_passenger" data-toggle="modal" class="btn btn-primary float-right mt-2">Add PassengerLimit</a>
							</div> -->
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<div class="card">
									<div class="card-body">
										<div class="table-responsive">
											<div class="table-responsive">
												<table class="datatable table table-hover table-center mb-0">
													<thead>
														<tr>
															<th>Car Id</th>
															<th>CarType</th>
														</tr>
													</thead>
													<tbody>
														<?php 
														$query = "SELECT * FROM `addcar`";
														include '../config.php';
														$stmt=$conn->prepare($query);
														$stmt->execute();
														$result=$stmt->fetchAll();
														$conn=null;
														foreach($result as $location){
															?>
															<tr>
																<td><?php echo $location['carid']?></td>
																<td><?php echo $location['cartype']?></td>
															<?php }?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>					
							</div>
						</div>
						<!-- /Page Header -->


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

			<!-- Datatables JS -->
			<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
			<script src="assets/plugins/datatables/datatables.min.js"></script>

			<!-- Custom JS -->
			<script  src="assets/js/script.js"></script>

		</body>

		<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/patient-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:52 GMT -->
		</html>
		</html>

		<!-- Add Modal -->
		<div class="modal fade" id="add_location" aria-hidden="true" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document" >
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Driver</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="back.php" method="post" enctype="multipart/form-data">
							<div class="row form-row">
								<div class="col-6 col-sm-6">
									<div class="form-group">
										<input type="text" placeholder="Driver Full Name" name="name" id="name" class="form-control">

									</div>
								</div>
								<div class="col-6 col-sm-6">
									<div class="form-group">
										
										<input type="text" placeholder="Vehical Number " name="vname" id="vname" class="form-control">
									</div>
								</div>
							</div>
							<div class="row form-row">
								<div class="col-12 col-sm-12">
									<div class="form-group">
										
										<input type="address" placeholder="Driver Address" name="address" id="address" class="form-control">
									</div>
								</div>
							</div>
							<div class="row form-row">
								<div class="col-6 col-sm-6">
									<div class="form-group">
										
										<div class="car-choose bookinput-item">
											<select class="carr" name="type">
												<option selected>Car Type</option>
												<?php 
												$query = "SELECT * FROM `addcar`";
												include '../config.php';
												$stmt=$conn->prepare($query);
												$stmt->execute();
												$result=$stmt->fetchAll();
												$conn=null;
												foreach($result as $car){
													?>
													<option value="<?php echo $car['cartype']?>"><?php echo $car['cartype']?></option>
												<?php }?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-6 col-sm-6">
									<div class="form-group">
										
										<div class="car-choose bookinput-item">
											<select class="carrr" name="limit">
												<option selected>Passenger Limit</option>
												<?php 
												$query = "SELECT * FROM `passengerlimit`";
												include '../config.php';
												$stmt=$conn->prepare($query);
												$stmt->execute();
												$result=$stmt->fetchAll();
												$conn=null;
												foreach($result as $passenger){
													?>

													<option value="<?php echo $passenger['passengerlim']?>"><?php echo $passenger['passengerlim']?></option>
												<?php }?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row form-row">
								<div class="col-6 col-sm-6">
									<div class="form-group">
										<div class="car-choose bookinput-item">
											<select class="route" name="route1">
												<option selected>Select Route-1</option>
												<?php 
												$query = "SELECT * FROM `addroute`";
												include '../config.php';
												$stmt=$conn->prepare($query);
												$stmt->execute();
												$result=$stmt->fetchAll();
												$conn=null;
												foreach($result as $route){
													?>

													<option value="<?php echo $route['route']?>"><?php echo $route['route']?></option>
												<?php }?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-6 col-sm-6">
									<div class="form-group">
										
										<div class="car-choose bookinput-item">
											<select class="route1" name="route2">
												<option selected>Select Route-2</option>
												<?php 
												$query = "SELECT * FROM `addroute`";
												include '../config.php';
												$stmt=$conn->prepare($query);
												$stmt->execute();
												$result=$stmt->fetchAll();
												$conn=null;
												foreach($result as $route1){
													?>

													<option value="<?php echo $route1['route']?>"><?php echo $route1['route']?></option>
												<?php }?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row form-row">
								<div class="col-6 col-sm-6">
									<div class="form-group">
										<div class="car-choose bookinput-item">
											<select class="route2" name="route3">
												<option selected>Select Route-3</option>
												<?php 
												$query = "SELECT * FROM `addroute`";
												include '../config.php';
												$stmt=$conn->prepare($query);
												$stmt->execute();
												$result=$stmt->fetchAll();
												$conn=null;
												foreach($result as $route2){
													?>

													<option value="<?php echo $route2['route']?>"><?php echo $route2['route']?></option>
												<?php }?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-6 col-sm-6">
									<div class="form-group">
										
										<div class="car-choose bookinput-item">
											<select class="route3" name="route4">
												<option selected>Select Route-4</option>
												<?php 
												$query = "SELECT * FROM `addroute`";
												include '../config.php';
												$stmt=$conn->prepare($query);
												$stmt->execute();
												$result=$stmt->fetchAll();
												$conn=null;
												foreach($result as $route3){
													?>

													<option value="<?php echo $route3['route']?>"><?php echo $route3['route']?></option>
												<?php }?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row form-row">
								<div class="col-6 col-sm-6" style="margin:auto";>
								 <label style="padding-left: 10px">Driver Photos</label>
								</div>
								<div class="col-6 col-sm-6">
								 <input type="file" name="i" id="i">
								</div>
							</div>
								<div class="row form-row">
								<div class="col-6 col-sm-6" style="margin:auto";>
								 <label style="padding-left: 10px">Vehicle Photos with Vehicle Number</label>
								</div>
								<div class="col-6 col-sm-6">
								<input type="file" name="im" id="im">
								</div>
							</div>
								<div class="row form-row">
								<div class="col-6 col-sm-6" style="margin:auto";>
								 <label style="padding-left: 10px">Vehicle Amenities</label>
								</div>
								<div class="col-6 col-sm-6">
							<input type="file"name="ima" id="ima">
								</div>
							</div>
								<div class="row form-row">
								<div class="col-6 col-sm-6" style="margin:auto";>
								 <label style="padding-left: 10px">Driver License Copy</label>
								</div>
								<div class="col-6 col-sm-6">
							 <input type="file" name="imag" id="imag">
								</div>
							</div>
									<div class="row form-row">
								<div class="col-6 col-sm-6" style="margin:auto";>
								 <label style="padding-left: 10px">Driver Aadhaar Card</label>
								</div>
								<div class="col-6 col-sm-6">
							      <input type="file" name="image" id="image">
								</div>
							</div>
						<div class="row form-row">
								<div class="col-6 col-sm-6">
									<div class="form-group">
										 <input type="text" placeholder="Email Address" name="email" id="email" class="form-control">

									</div>
								</div>
								<div class="col-6 col-sm-6">
									<div class="form-group">
										<input type="text" placeholder="Driving experience" name="texp" id="texp" class="form-control">
									</div>
								</div>
							</div>
							
							

							<button type="submit" name="cartype" class="btn btn-primary btn-block">Add Driver</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<?php
		if(isset($_GET['q'])) {            
			if($_GET['q'] == 3){ ?>
				<script> swal("Location added Successfully..", {
					buttons: false,
					timer: 1500,
				});</script>
				<!--echo '<script> alert(" Successful login..")</script>';-->
			<?php }   
			if($_GET['q'] == 2){ ?>
				<script>swal("Something Went Wrong...!!Please Try Again", {
					buttons: false,
					timer: 1500,
				});</script>
				<!--echo '<script> alert(" Successfully Logout..")</script>';-->
			<?php }
		} ?>