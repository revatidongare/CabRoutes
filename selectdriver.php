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
                                $name = $_POST['name'];
                                $vname = $_POST['vname'];
                                $type = $_POST['type'];
                                $limit = $_POST['limit'];
                               $route1 = $_POST['route1'];
                               $route2 = $_POST['route2'];
                               $route3 = $_POST['route3'];
                               $route4 = $_POST['route4'];
                                $query = "SELECT * FROM `drivermaster` WHERE `Route1`  = '%route1%' OR `Route2`  = '%route2%' OR `Route3`  = '%route3%' OR `Route3`  = '%route4%' AND  `Fullname`= '$name' AND `Cartype` = '$type' AND `Passengerlimit` = '$limit'";
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
                            <div class="col-lg-5">
                                <div class="article-thumb">
                                    <img src="assets/img/driver/<?php echo $driver['DriverPhoto']?>" alt="driver image">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a href="article-details.html"><?php echo $driver['name']?></a></h3>
                                            <div class="article-meta">
                                                <a href="#" class="author"><?php echo $driver['vname']?></a>
                                                <a href="#" class="commnet">Comments :: <span>10</span></a>
                                            </div>

                                            <div class="article-date">25 <span class="month">jan</span></div>

                                            <p>Wlam aiber vestibulum fringilla oremedad ipsum dolor sit amet consectetur adipisicing elit sed doned eiusmod tempored incididunt ut labore et dolore magna aliquaa enimd ad minim veniad.</p>

                                            <a href="article-details.html" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
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