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
							<h3 class="page-title">Add Route</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
								<li class="breadcrumb-item active">Route</li>
							</ul>
						</div>
						<div class="col-sm-4 col">
								<a href="#add_route" data-toggle="modal" class="btn btn-primary float-right mt-2">Add Route</a>
							</div>
							
							
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
													<th>Route Id</th>
													<th>Route</th>
												</tr>
											</thead>
											<tbody>
												<?php 
												$query = "SELECT * FROM `addroute`";
												include '../config.php';
												$stmt=$conn->prepare($query);
												$stmt->execute();
												$result=$stmt->fetchAll();
												$conn=null;
												foreach($result as $route){
													?>
													<tr>
										<td><?php echo $route['routeid']?></td>
								<td><?php echo $route['route']?></td>
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
	<script  src="assets/js/script.js"></script>
</body>
</html>
</html>

<!-- Add Modal -->
			<div class="modal fade" id="add_route" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add Route</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="back.php" method="post" enctype="multipart/form-data">
								<div class="row form-row">
									<div class="col-12 col-sm-12">
										<div class="form-group">
											<label>Route</label>
											<input type="text" name="routee" class="form-control">
										</div>
									</div>
									</div>
								<button type="submit" name="addroute" class="btn btn-primary btn-block">Add Route</button>
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