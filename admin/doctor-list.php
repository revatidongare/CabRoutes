<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/doctor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
<?php include 'includes/head.php'?>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <?php include 'includes/header.php';?>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <?php include 'includes/sidebar.php';?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-7 col-auto">
			
								<h3 class="page-title">List of Doctors</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Doctor</li>
								</ul>
							</div>
							<div class="col-sm-5 col">
								<a href="#add_doctor" data-toggle="modal" class="btn btn-primary float-right mt-2">Add</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Doctor Name</th>
													<th>Email</th>
													<th>Contact_No</th>
													<th>Fees</th>
													<th>TimeSlot</th>
													<th>Speciality</th>
													<th>Experience</th>
													<th>Qualification</th>
													<th>Hospital</th>
													<th>Address</th>
													<th>City</th>
													<!-- <th>Country</th> -->
																										
													<th>Account Status</th>
													
												</tr>
											</thead>
											<tbody>
												<?php 
												$query = "SELECT * FROM `doctor`";
                             include '../config.php';
                             $stmt=$conn->prepare($query);
                             $stmt->execute();
                             $result=$stmt->fetchAll();
                             $conn=null;
                                  
                             foreach($result as $doctor){
                             ?>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../assets/img/doctors/<?php echo $doctor['image']?>" alt="User Image"></a>
															<a href="profile.html"><?php echo $doctor['name']?></a>
														</h2>
													</td>
													<td><?php echo $doctor['email']?></td>
													<td><?php echo $doctor['contact_no']?></td>
													<td><?php echo $doctor['fees']?></td>
													<td><?php echo $doctor['timeslot']?></td>
													<td><?php echo $doctor['specialities']?></td>
													<td><?php echo $doctor['experience']?></td>
													<td><?php echo $doctor['qualification']?></td>
													<td><?php echo $doctor['hospital']?></td>
													<td><?php echo $doctor['address']?></td>
													<td><?php echo $doctor['city']?></td>
													<!-- <td><?php echo $doctor['country']?></td>		 -->
													
													
													<td>
														<?php if( $doctor['active'] == 1 ) { ?>
														<div class="status-toggle">
															<input type="checkbox" id="status_<?php echo $doctor['id']?>" class="check" checked>
															<label for="status_<?php echo $doctor['id']?>" class="checktoggle">checkbox</label>
														</div>
														<?php } else{?>
														<div class="status-toggle">
															<input type="checkbox" id="status_<?php echo $doctor['id']?>" class="check" >
															<label for="status_<?php echo $doctor['id']?>" class="checktoggle">checkbox</label>
														</div>
														<?php }?>
													</td>
												</tr>
												<?php }?>
												<!-- <tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. Darren Elder</a>
														</h2>
													</td>
													<td>Dental</td>
													
													<td>11 Jun 2019 <br><small>4.50 AM</small></td>
													
													<td>$5000.00</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-03.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. Deborah Angel</a>
														</h2>
													</td>
													<td>Cardiology</td>
													
													<td>4 Jan 2018 <br><small>9.40 AM</small></td>
													
													<td>$3300.00</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-04.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. Sofia Brient</a>
														</h2>
													</td>
													<td>Urology</td>
													
													<td>5 Jul 2019 <br><small>12.59 AM</small></td>
													
													<td>$3500.00</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-05.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. Marvin Campbell</a>
														</h2>
													</td>
													<td>Orthopaedics</td>
													
													<td>24 Jan 2019 <br><small>02.59 AM</small></td>
													
													<td>$3700.00</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-06.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. Katharine Berthold</a>
														</h2>
													</td>
													<td>Orthopaedics</td>
													
													<td>23 Mar 2019 <br><small>02.50 PM</small></td>
													
													<td>$4000.00</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-07.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. Linda Tobin</a>
														</h2>
													</td>
													<td>Neurology</td>
													
													<td>14 Dec 2018 <br><small>01.59 AM</small></td>
													
													<td>$2000.00</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-08.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. Paul Richard</a>
														</h2>
													</td>
													<td>Dermatology</td>
													
													<td>11 Jan 2019 <br><small>02.59 AM</small></td>
													
													<td>$3000.00</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-09.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. John Gibbs</a>
														</h2>
													</td>
													<td>Dental</td>
													
													<td>21 Apr 2018 <br><small>02.59 PM</small></td>
													
													<td>$4100.00</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-10.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. Olga Barlow</a>
														</h2>
													</td>
													<td>Dental</td>
													
													<td>15 Feb 2018 <br><small>03.59 AM</small></td>
													
													<td>$3500.00</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr> -->
											</tbody>
										</table>
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
		
		  
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/doctor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
</html>

<!-- Add Modal -->
			<div class="modal fade" id="add_doctor" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add Doctor</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="back.php" method="post" enctype="multipart/form-data">
								<div class="row form-row">
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Name</label>
											<input type="text" name="name" class="form-control">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Speciality</label>
											<input type="text" name="specialities" class="form-control">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Hospital</label>
											<input type="text" name="hospital" class="form-control">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Address</label>
											<input type="text" name="address" class="form-control">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>City</label>
											<input type="text" name="city" class="form-control">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Country</label>
											<input type="text" name="country" class="form-control">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Experience</label>
											<input type="text" name="experience" class="form-control">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Time Slot</label>
											<input type="text" name="timeslot" class="form-control">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Fees</label>
											<input type="text" name="fees" class="form-control">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Qualification</label>
											<input type="text" name="qualification" class="form-control">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Email</label>
											<input type="text" name="email" class="form-control">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Password</label>
											<input type="text" name="password" class="form-control">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Image</label>
											<input type="file" name="image" class="form-control">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Contact</label>
											<input type="text" name="contact" class="form-control">
										</div>
									</div>
									
								</div>
								<button type="submit" name="registerdoctor" class="btn btn-primary btn-block">Save Changes</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /ADD Modal -->

			<?php
    if(isset($_GET['q'])) {            
            if($_GET['q'] == 3){ ?>
            <script> swal("Dotor added Successfully..", {
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

