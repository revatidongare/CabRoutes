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
                <div class="col-lg-4 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                           
                             <h4>Driver Login</h4>
                           <form action="driversession.php" method="post">
                                <div class="username">
                                     <input type="text" name="email" id="email" placeholder="Email or Username">
                                </div>
                                <div class="password">
                        <input type="password" name="password" id="password" placeholder="Password">
                                </div>
                                <div class="text-right">
                                <a class="forgot-link" href="driverregister.php">No account Yet? </a>
                                </div>
                                <div class="log-btn">
                                    <button type="submit" name="driverlogin" id="driverlogin"><i class="fa fa-sign-in"></i> Log In</button>
                                </div>
                                 <div class="text-right">
                                    <a class="forgot-link" href="driverlogin.php">Forgot Password</a>
                                            </div>
                            </form>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
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