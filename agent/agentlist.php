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
							<h3 class="page-title">List of Agents</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
								<li class="breadcrumb-item active">Agent</li>
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
													<th>Agent ID</th>
													<th>Agent FullName</th>
													<th>Agency Name</th>
													<th>Agency Address</th>
													<th>Agent Designation</th>
													<th>Agency Type</th>
													<th>Shopact License</th>
													<th>Pan Card</th>
													<th>Owner AadhaarCard</th>
													<th>Contact Number</th>
													<th>Emergency ContactNumber</th>
													<th>Email Address</th>
												</tr>
											</thead>
											<tbody>
												<?php 
												$query = "SELECT * FROM `agentmaster`";
												include '../config.php';
												$stmt=$conn->prepare($query);
												$stmt->execute();
												$result=$stmt->fetchAll();
												$conn=null;

												foreach($result as $agent){
													?>
													<tr>
												<td><?php echo $agent['Agentid']?></td>

											
								<td>
								<h2 class="table-avatar">
							<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../assets/img/agent/<?php echo $agent['AgentPhoto']?>" alt="User Image"></a>
						<a href="profile.html"><?php echo $agent['AgentFullName']?></a>
								</h2>
								</td>
								<td><?php echo $agent['AgencyName']?></td>
								<td><?php echo $agent['AgencyAddress']?></td>
								<td><?php echo $agent['AgentDesignation']?></td>
	<td><img src="../assets/img/agent/<?php echo $agent['AgencyType']?>" width="50px" height="50px";></td>
	<td><img src="../assets/img/agent/<?php echo $agent['Shopactlicense']?>" width="50px" height="50px";></td>
	<td><img src="../assets/img/agent/<?php echo $agent['PanCard']?>" width="50px" height="50px";></td>
	<td><img src="../assets/img/agent/<?php echo $agent['OwnerAadhaarCard']?>" width="50px" height="50px";></td>
								<td><?php echo $agent['ContactNumber']?></td>
								<td><?php echo $agent['EmergencyContactNumber']?></td>
								<td><?php echo $agent['EmailAddress']?></td>
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