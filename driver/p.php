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
							<h3 class="page-title">List of Drivers</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
								<li class="breadcrumb-item active">Driver</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Driver ID</th>
													<th>Driver Name</th>
													<th>Vehicle No</th>
													<th>Address</th>
													<th>Car Type</th>
													<th>Passenger limit</th>
													<!-- <th>Driver Photo</th> -->
													<th>Vehicle Photo</th>
													<th>Vehicle Amenities</th>
													<th>Driver License Copy</th>
													<th>Driver Aadhaar Card</th>
													<th>Driver Experience</th>
													<th>Contact Number</th>
													<th>Emergency Contact Number</th>
													<th>Email Address</th>
													<th>Rate</th>
													<th>Active</th>





													<!-- <th class="text-right">Paid</th> -->
												</tr>
											</thead>
											<tbody>
												<?php 
												$query = "SELECT * FROM `drivermaster`";
												include '../config.php';
												$stmt=$conn->prepare($query);
												$stmt->execute();
												$result=$stmt->fetchAll();
												$conn=null;

												foreach($result as $driver){
													?>
													<tr>
												<td><?php echo $driver['id']?></td>
								<td>
								<h2 class="table-avatar">
							<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../assets/img/driver/<?php echo $driver['DriverPhoto']?>" alt="User Image"></a>
						<a href="profile.html"><?php echo $driver['Fullname']?></a>
								</h2>
								</td>
								<td><?php echo $driver['VehicleNo']?></td>
								<td><?php echo $driver['Driveraddress']?></td>
								<td><?php echo $driver['Cartype']?></td>
								<td><?php echo $driver['Passengerlimit']?></td>
	
	<td><img src="../assets/img/driver/<?php echo $driver['Vehiclephoto']?>" width="50px" height="50px";></td>
	<td><img src="../assets/img/driver/<?php echo $driver['VehicleAmenities']?>" width="50px" height="50px";></td>
	<td><img src="../assets/img/driver/<?php echo $driver['DriverLicenseCopy']?>" width="50px" height="50px";></td>
	<td><img src="../assets/img/driver/<?php echo $driver['DriverAadhaarCard']?>" width="50px" height="50px";></td>
								<td><?php echo $driver['Driverexperience']?></td>
								<td><?php echo $driver['ContactNumber']?></td>
								<td><?php echo $driver['EmergencyContactNumber']?></td>
								<td><?php echo $driver['EmailAddress']?></td>
								<td><?php echo $driver['Rate']?></td>
								<td><?php echo $driver['Active']?></td>



														<!-- <td class="text-right">$100.00</td> -->
													</tr>
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