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
							<h3 class="page-title">Add Pickup Location</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
							<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
								<li class="breadcrumb-item active">Location</li>
							</ul>
						</div>
						<div class="col-sm-4 col">
								<a href="#add_location" data-toggle="modal" class="btn btn-primary float-right mt-2">Add Pickup Location</a>
							</div>
							<div class="col-sm-8 col">
								<a href="#add_locationn" data-toggle="modal" class="btn btn-primary float-right mt-2">Add PickupSub Location</a>
							</div>
					</div>
					<br>
					<div class="row">
					<div class="col-sm-5">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Location ID</th>
													<th>Location</th>
													<th>Type</th>
												</tr>
											</thead>
											<tbody>
												<?php 
												$query = "SELECT * FROM `pickup`";
												include '../config.php';
												$stmt=$conn->prepare($query);
												$stmt->execute();
												$result=$stmt->fetchAll();
												$conn=null;
												foreach($result as $location){
													?>
													<tr>
										<td><?php echo $location['id']?></td>
								<td><?php echo $location['location']?></td>
								<?php if($location['flag']==1){
								$loc = "Local";
							}
							else if($location['flag']==2){
								$loc = "Outstation";
							}
							else{
								$loc = "International";
							} ?>
								<td><?php echo $loc; ?></td>
													</tr>
												<?php }?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
						<div class="col-sm-7">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Location ID</th>
													<th>Location</th>
													<th>PickupSub Location</th>
												</tr>
											</thead>
											<tbody>
												<?php 
												$query = "SELECT * FROM `subpickup`";
												include '../config.php';
												$stmt=$conn->prepare($query);
												$stmt->execute();
												$result=$stmt->fetchAll();
												$conn=null;
												foreach($result as $location){
													?>
													<tr>
										<td><?php echo $location['subid']?></td>
										
											<?php
											$lo =  $location['id'];
									$q = "SELECT * FROM `pickup` where `id`= '$lo'";
									include '../config.php';
											$stmt1=$conn->prepare($q);
												$stmt1->execute();
												$result1=$stmt1->fetchAll();
												$conn=null;
												foreach($result1 as $loc){
													?>
												<td><?php echo $loc['location']?></td>
												<?php
											}?>


								<td><?php echo $location['sublocation']?></td>
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
							<h5 class="modal-title">Add Location</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="back.php" method="post" enctype="multipart/form-data">
								<div class="row form-row">
									<div class="col-12 col-sm-12">
										<div class="form-group">
											<label>Location</label>
											<input type="text" name="location" class="form-control">
										</div>
									</div>
									</div>
									 <div class="car-choose bookinput-item">
                                                          <select class="custom-select" name="type">
                                                             <option selected>Choose Type</option>
                                                              <option value="1">Local</option>
                                                              <option value="2">Outstation</option>
                                                              <option value="3">International</option>
                                                          </select>
                                                      </div>
									
								<br>
								<br>
								<button type="submit" name="picklocation" class="btn btn-primary btn-block">Add Location</button>
							</form>
						</div>
					</div>
				</div>
			</div>





			<div class="modal fade" id="add_locationn" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add PickupSub Location</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="back.php" method="post" enctype="multipart/form-data">
								 <div class="car-choose bookinput-item">
                                                           <select class="custom-select" name="locationid">
                                                             <option selected>Choose Location</option>
                                                            <?php 
                                                $query = "SELECT * FROM `pickup`";
                                                include '../config.php';
                                                $stmt=$conn->prepare($query);
                                                $stmt->execute();
                                                $result=$stmt->fetchAll();
                                                $conn=null;
                                                foreach($result as $location){
                                                    ?>
                                                       
                                                        <option value="<?php echo $location['id']?>">
                                             <?php echo $location['location']?></option>
                                                         <?php }?>
                                                          </select>
                                                      </div>
                                                      <br>
                                                      <br>
								<div class="row form-row">
									<div class="col-12 col-sm-12">
										<div class="form-group">
											<label>PickSub Location</label>
											<input type="text" name="locationn" class="form-control">
										</div>
									</div>
									</div>	
								<br>
								<br>
								<button type="submit" name="subpicklocation" class="btn btn-primary btn-block">Add PickupSub Location</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /ADD Modal -->

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