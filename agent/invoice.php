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
								<h5>Covid 19 Pandemic Safety :</h5>
								<br>
								<p class="text-muted mb-0">Your safety is our responsibility. Therefore, we have taken stringent Covid-19 safety measures to protect all of our guests Onboarding our vehicle. While we are closely following the guidelines of the National Health Authorities, we have also introduced enhanced safety measures.<br>
> Our chauffeurs will be wearing masks at all times.<br>
> Our chauffeurs will open and close the door to minimize direct contact between the car and the guest.<br>
> Cleaning and disinfecting the vehicle before each rental.<br>
> Using only standard R1/Oxivir disinfectant.</p>
<br>
							</div>
							<div class="invoice-info">
								<h5>Terms And Conditions</h5>
								
								<p class="text-muted mb-0"> > We offers car rentals in All over India and at International with Hourly, Daily, Weekly and Monthly plans to fulfill your business travel needs, leisure travel needs and your weekend getaway needs, Airport /Railway station pick and drop .<br>
> Our all  Car rental is included with Insurance<br>
> Our all drivers will be co operative, supportive and Informative.<br>
> For all outside trips . our  Drivers will be available for between 09 a.m. to 6.00 p.m.<br>
> For local city trips ,they will be available according to your pick up and drop timings.  <br>
> All drivers Service timings will be up to 10 hours daily.<br>
> All Toll, Parking, Driver Allowances, Taxes included<br></p>
<br>
							</div>
										<div class="invoice-info">
								<h5>Cancelation Policies</h5>
							
								<p class="text-muted mb-0"> > Rs. 500 cancelation fees is applicable  if Trip cancel before 36 hours of travel start timing.<br>
> Rs.1000 Cancelation Fees is applicable if trip cancel  between 36 hours to 48 hours of travel start timing.<br>
> 25 % fees is applicable on total cost if cancel between 48 hours to 24 hours of travel start timing. Remaining 75 % amount will get refunded<br>
> 50 % fees is applicable if cancel within 24 hours of travel timing. Remaining 50 % amount will get refunded<br>
> All refund will get settled within 15 working days.</p>
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