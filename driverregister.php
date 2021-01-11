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
                <div class="col-lg-6 col-md-6 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <h3>Driver Register</h3>
                            <form action="index.html">
                                <div class="name">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Driver Full Name ">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Vehical Number ">
                                        </div>
                                    </div>
                                </div>
                                <div class="username">
                                    <input type="address" placeholder="Driver Address ">
                                </div>
                               
                                 <div class="row">
                                <div class="col-md-5" style="margin:auto";>
                                     <label>Driver Photos</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="file" name="image">
                                </div>
                                </div>
                                 <div class="row">
                                <div class="col-md-5" style="margin:auto";>
                                     <label>Vehicle Photos with Vehicle Number</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="file" name="image">
                                </div>
                                </div>
                                 <div class="row">
                                <div class="col-md-5" style="margin:auto";>
                                     <label>Vehicle Amenities</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="file" name="image">
                                </div>
                                </div>
                                 <div class="row">
                                <div class="col-md-5" style="margin:auto";>
                                     <label>Driver License Copy</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="file" name="image">
                                </div>
                                </div>
                                   <div class="row">
                                <div class="col-md-5" style="margin:auto";>
                                     <label>Driver Aadhaar Card</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="file" name="image">
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Driver License Issued  date">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Driver License Expiry Date">
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Driver total driving experience">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Vehicle Insurance Issue date">
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Contact Number">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Emergency Contact Number
                                    ">
                                </div>
                                </div>
                                
                                <div class="password">
                                    <input type="text" placeholder="Email Address-1">
                                </div>
                                <div class="password">
                                    <input type="text" placeholder="Email Address-2">
                                </div>
                                 <div class="row">
                                <div class="col-md-2">
                                   <label class="focus-label" style="margin-top: 30px;"> Password </label>
                                </div>
                                <div class="col-md-6">
                                   <input type="password" value="" id="myInput" style="margin: 20px;background-color: aliceblue; border-color: black";>
                               </div>
                                     <div class="col-md-4">
                                    <input type="checkbox" onclick="myFunction()">Show Password
                                </div>
                                </div>
                                  <div class="row">
                                <div class="col-md-1" style="margin:auto";>
                                     <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                </div>
                                <div class="col-md-11" style="margin: auto;padding-right: 300px;";>
                                   <a href="driverterms.php">Terms and Conditions</a> 
                                </div>
                                </div>
                                <div class="log-btn">
                                    <button type="submit"><i class="fa fa-check-square"></i> Register</button>
                                </div>
                                <div class="create-ac">
                            <p>Have an account? <a href="driverlogin.php">Sign In</a></p>
                        </div>
                            </form>
                        </div>
                        <!-- <div class="create-ac">
                            <p>Have an account? <a href="login.html">Sign In</a></p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
      <?php include 'includes/footer.php'?>
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <script type="text/javascript">
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
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