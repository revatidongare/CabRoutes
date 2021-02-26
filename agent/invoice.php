<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:57 GMT -->
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
				
					<!-- Invoice Container -->
					<div class="invoice-container">
						
						<div class="row">
							<div class="col-sm-6 m-b-20">
								<img alt="Logo" class="inv-logo img-fluid" src="../assets/img/cab.png">
							</div>
							<div class="col-sm-6 m-b-20">
								<div class="invoice-details">
									<h3 class="text-uppercase">Invoice</h3>
									<ul class="list-unstyled mb-0">
										<li>Date: <span>March 12, 2019</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 m-b-20">
								<ul class="list-unstyled mb-0">
									<li>Journey World Destination Management Company,Pvt.Ltd.</li>
									<li>A:Shop No. C ,  </li>
									<li>Commercial House,</li>
<li>Jupiter CHS
              Near Ganesh Temple,</li>
									<li>Kalyani Nagar
										<li>India 411014,Pune</li>
              
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-lg-7 col-xl-8 m-b-20">
								<h6>Invoice to</h6>
								<ul class="list-unstyled mb-0">
										<?php 
												$query = "SELECT * FROM `agentmaster`";
												include '../config.php';
												$stmt=$conn->prepare($query);
												$stmt->execute();
												$result=$stmt->fetchAll();
												$conn=null;
												foreach($result as $agent){
													?>
								<li><h5 class="mb-0"><strong><?php echo $agent['AgencyName']?></strong></h5></li>

									<li><?php echo $agent['AgentFullName']?></li>
									<li><?php echo $agent['AgencyAddress']?></li>
									<li><?php echo $agent['ContactNumber']?></li>
									<?php }?>
								</ul>
							</div>
						
						</div>
						
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Id</th>
										<th>CAR</th>
										<th class="d-none d-sm-table-cell">DESCRIPTION</th>
										<th class="text-nowrap">NET PRICE</th>
										<th>TAX(GST)</th>
										<th>TOTAL</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>medicine1</td>
										<td class="d-none d-sm-table-cell">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
										<td>$10</td>
										<td>2</td>
										<td>$10</td>
									</tr>
									<tr>
										
									</tr>
								</tbody>
							</table>
						</div>
						
						<div>
							<div class="row invoice-payment">
								<div class="col-sm-7">
								</div>
								<div class="col-sm-5">
									<div class="m-b-20">
										<h6>Total due</h6>
										<div class="table-responsive no-border">
											<table class="table mb-0">
												<tbody>
													<tr>
														<th>Subtotal:</th>
														<td class="text-right">$250</td>
													</tr>
													<tr>
														<th>Tax: <span class="text-regular">(25%)</span></th>
														<td class="text-right">$50</td>
													</tr>
													<tr>
														<th>Total:</th>
														<td class="text-right text-primary"><h5>$200</h5></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="invoice-info">
								<h5>Other information</h5>
								<p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed dictum ligula, cursus blandit risus. Maecenas eget metus non tellus dignissim aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus. Sed finibus leo vitae lorem interdum, eu scelerisque tellus fermentum. Curabitur sit amet lacinia lorem. Nullam finibus pellentesque libero.</p>
							</div>
						</div>
						
					</div>
					<!-- /Invoice Container -->
					
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
		<script src="assets/js/script.js"></script>
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:57 GMT -->
</html>