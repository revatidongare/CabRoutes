<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php include 'includes/head.php'?>
<body class="loader-active">
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <?php include 'includes/header.php'?>
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Search Driver</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="blog-page-content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php 
                            if(isset($_POST['search'])){
                                $type = $_POST['type'];

                                $limit = $_POST['limit'];
                               $PICKUP = $_POST['PICKUP'];
                            
                               $idate = $_POST['idate'];
                               $iidate = $_POST['iidate'];
                                $query = "SELECT * FROM `drivermaster` WHERE `Cartype` = '$type' AND `Passengerlimit` = '$limit' AND `Route1`  = '$PICKUP' OR `Route2`  = '$PICKUP' OR `Route3`  = '$PICKUP' OR `Route4`  = '$PICKUP' AND `To` BETWEEN '$idate' and '$iidate' AND `Fromm` BETWEEN '$idate' and '$iidate'";
                                include 'config.php';
                                $stmt=$conn->prepare($query);
                                $stmt->execute();
                                
                                    $result=$stmt->fetchAll();
                                    $conn=null;
                                    $id=0 ;
                                    foreach($result as $driver){
                                        ?>  

                    <article class="single-article">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="article-thumb">
                                    <img src="assets/img/driver/<?php echo $driver['DriverPhoto']?>" alt="driver image">
                                    <br>
                                    <br>
                                    <h5><a href="article-details.html" style="color: black"><?php echo $driver['Fullname']?></a></h5>
                                </div>
                            </div>
                          
                            <div class="col-lg-6">
                                        <div class="tech-info-table">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Driver Name:</th>
                                                    <td><?php echo $driver['Fullname']?></td>
                                                </tr>
                                                <tr>
                                                    <th>Vehicle No:</th>
                                                    <td><?php echo $driver['VehicleNo']?></td>
                                                </tr>
                                                
                                                <tr>
                                                    <th>Driver Experience:</th>
                                                    <td><?php echo $driver['Driverexperience']?></td>
                                                </tr>
                                                <tr>
                                                    <th>Driver License Issued Date</th>
                                                    <td><?php echo $driver['DriverLicenseIssueDdate']?></td>
                                                </tr>
                                                 <tr>
                                                    <th>Driver License Expired Date</th>
                                                    <td><?php echo $driver['DriverLicenseExpiredDate']?></td>
                                                </tr>
                                            </table>
                                            <a href="article-details.html" class="readmore-btn">Book Now <i class="fa fa-long-arrow-right"></i></a>
                                      </div>
                                  </div>
                            
                             <div class="col-lg-3">
                                <div class="article-thumb">
                                    <img src="assets/img/driver/<?php echo $driver['Vehiclephoto']?>" alt="driver image">
                                    <br>
                                    <br>
                                    <h5><a href="article-details.html" style="color: black"><?php echo $driver['Cartype']?></a></h5>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php } } ?>
                </div>
                
            </div>
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="page-pagi">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
<?php include 'includes/footer.php'?>
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/jquery-migrate.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins/gijgo.js"></script>
    <script src="assets/js/plugins/vegas.min.js"></script>
    <script src="assets/js/plugins/isotope.min.js"></script>
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <script src="assets/js/plugins/counterup.min.js"></script>
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <script src="assets/js/plugins/slicknav.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>