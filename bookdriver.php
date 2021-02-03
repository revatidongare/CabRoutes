<!DOCTYPE html>
<html class="no-js" lang="en">
<?php include 'includes/head.php'?>
<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <?php include 'includes/header.php'?>
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->

    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Cars</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-3">
                    <div class="sidebar-content-wrap m-t-50">
                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Select Location</h3>

                            <div class="sidebar-body">
                                <div class="header_search">
                                 <form action="back.php">
                                    
                                        <select class="custom-select">
                                           <option selected>Sub Pickup Location</option>
                                           <?php 
                                           $query = "SELECT * FROM `subpickup`";
                                           include 'config.php';
                                           $stmt=$conn->prepare($query);
                                           $stmt->execute();
                                           $result=$stmt->fetchAll();
                                           $conn=null;
                                           foreach($result as $location){
                                           ?>
                                           <option><?php echo $location['sublocation']?></option>
                                           <?php }?>
                                       </select>
                                   
<br>
<br>
                                    <select class="custom-select">
                                       <option selected>Sub Drop Location  </option>
                                       <?php 
                                       $query = "SELECT * FROM `subdrop`";
                                       include 'config.php';
                                       $stmt=$conn->prepare($query);
                                       $stmt->execute();
                                       $result=$stmt->fetchAll();
                                       $conn=null;
                                       foreach($result as $location){
                                       ?>

                                       <option><?php echo $location['sublocation']?></option>
                                       <?php }?>
                                   </select>
                           </form>
                       </div>

                   </div>
               </div>

               <div class="single-sidebar">
                <h3>Connect with Us</h3>

                <div class="sidebar-body">
                    <div class="social-icons text-center">
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-behance"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
            <!-- Single Sidebar End -->
        </div>
    </div>
    <div class="col-lg-9">
        <div class="car-list-content">
            <!-- Single Car Start -->
            <div class="single-car-wrap">
                <div class="row">
                    <!-- Single Car Thumbnail -->
                    <div class="col-lg-5">
                        <div class="car-list-thumb car-thumb-1"></div>
                    </div>
                    <!-- Single Car Thumbnail -->

                    <!-- Single Car Info -->
                    <div class="col-lg-7">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="car-list-info">
                                    <h2><a href="#">Aston Martin One-77</a></h2>
                                    <h5>39$ Rent /per a day</h5>
                                    <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean inorci luctus et ultrices posuere cubilia.</p>
                                    <ul class="car-info-list">
                                        <li>Air Condition</li>
                                        <li>Diesel</li>
                                        <li>Auto</li>
                                    </ul>
                                    <p class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star unmark"></i>
                                    </p>
                                    <a href="#" class="rent-btn">Book It</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Car info -->
                </div>
            </div>
            <!-- Single Car End -->

            <!-- Single Car Start -->
            <div class="single-car-wrap">
                <div class="row">
                    <!-- Single Car Thumbnail -->
                    <div class="col-lg-5">
                        <div class="car-list-thumb car-thumb-2"></div>
                    </div>
                    <!-- Single Car Thumbnail -->

                    <!-- Single Car Info -->
                    <div class="col-lg-7">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="car-list-info">
                                    <h2><a href="#">Aston Martin One-77</a></h2>
                                    <h5>39$ Rent /per a day</h5>
                                    <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean inorci luctus et ultrices posuere cubilia.</p>
                                    <ul class="car-info-list">
                                        <li>Air Condition</li>
                                        <li>Diesel</li>
                                        <li>Auto</li>
                                    </ul>
                                    <p class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star unmark"></i>
                                    </p>
                                    <a href="#" class="rent-btn">Book It</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Car info -->
                </div>
            </div>
            <!-- Single Car End -->

            <!-- Single Car Start -->
            <div class="single-car-wrap">
                <div class="row">
                    <!-- Single Car Thumbnail -->
                    <div class="col-lg-5">
                        <div class="car-list-thumb car-thumb-4"></div>
                    </div>
                    <!-- Single Car Thumbnail -->

                    <!-- Single Car Info -->
                    <div class="col-lg-7">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="car-list-info">
                                    <h2><a href="#">Aston Martin One-77</a></h2>
                                    <h5>39$ Rent /per a day</h5>
                                    <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean inorci luctus et ultrices posuere cubilia.</p>
                                    <ul class="car-info-list">
                                        <li>Air Condition</li>
                                        <li>Diesel</li>
                                        <li>Auto</li>
                                    </ul>
                                    <p class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star unmark"></i>
                                    </p>
                                    <a href="#" class="rent-btn">Book It</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Car info -->
                </div>
            </div>
            <!-- Single Car End -->
        </div>

        <!-- Page Pagination Start -->
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
        <!-- Page Pagination End -->
    </div>
    <!-- Car List Content End -->

    <!-- Sidebar Area Start -->

    <!-- Sidebar Area End -->
</div>
</div>
</section>
<!--== Car List Area End ==-->

<!--== Footer Area Start ==-->
<?php include 'includes/footer.php'?>
<!--== Footer Area End ==-->

<!--== Scroll Top Area Start ==-->
<div class="scroll-top">
    <img src="assets/img/scroll-top.png" alt="JSOFT">
</div>
<!--== Scroll Top Area End ==-->

<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src="assets/js/jquery-3.2.1.min.js"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src="assets/js/jquery-migrate.min.js"></script>
<!--=== Popper Min Js ===-->
<script src="assets/js/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="assets/js/bootstrap.min.js"></script>
<!--=== Gijgo Min Js ===-->
<script src="assets/js/plugins/gijgo.js"></script>
<!--=== Vegas Min Js ===-->
<script src="assets/js/plugins/vegas.min.js"></script>
<!--=== Isotope Min Js ===-->
<script src="assets/js/plugins/isotope.min.js"></script>
<!--=== Owl Caousel Min Js ===-->
<script src="assets/js/plugins/owl.carousel.min.js"></script>
<!--=== Waypoint Min Js ===-->
<script src="assets/js/plugins/waypoints.min.js"></script>
<!--=== CounTotop Min Js ===-->
<script src="assets/js/plugins/counterup.min.js"></script>
<!--=== YtPlayer Min Js ===-->
<script src="assets/js/plugins/mb.YTPlayer.js"></script>
<!--=== Magnific Popup Min Js ===-->
<script src="assets/js/plugins/magnific-popup.min.js"></script>
<!--=== Slicknav Min Js ===-->
<script src="assets/js/plugins/slicknav.min.js"></script>

<!--=== Mian Js ===-->
<script src="assets/js/main.js"></script>

</body>

</html>