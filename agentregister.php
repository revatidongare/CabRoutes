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
                            <h3>Agent Register</h3>
                            <form action="agentregisterback.php" method="post" enctype="multipart/form-data">
                                <div class="name">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Agency Name " name="aname" id="aname" >
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Agent Full Name " name="name" id="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="username">
                                    <input type="address" placeholder="Agency Address " name="address" id="address">
                                </div>
                                <div class="username">
                                    <input type="text" placeholder="Agent Designation " name="designation" id="designation">
                                </div>
                                 <div class="row">
                                <div class="col-md-5" style="margin:auto";>
                                     <label>Agency Type(Proprietor/ Partner / Private Limited  /LLP )</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="file" name="type" id="type">
                                </div>
                                </div>
                                 <div class="row">
                                <div class="col-md-5" style="margin:auto";>
                                     <label>Agency Shop act license</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="file" name="shopact" id="shopact">
                                </div>
                                </div>
                                 <div class="row">
                                <div class="col-md-5" style="margin:auto";>
                                     <label>Agency Pan Card </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="file"name="pancard" id="pancard">
                                </div>
                                </div>
                                 <div class="row">
                                <div class="col-md-5" style="margin:auto";>
                                     <label>Agent Photo</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="file" name="photo" id="photo">
                                </div>
                                </div>
                                   <div class="row">
                                <div class="col-md-5" style="margin:auto";>
                                     <label>Agency Owner Aadhaar Card</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="file" name="aadharcard" id="aadharcard">
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Contact Number" name="cnumber" id="cnumber">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Emergency Contact Number" name="enumber" id="enumber">
                                </div>
                                </div>
                                
                                <div class="password">
                                    <input type="text" placeholder="Email Address" name="email" id="email">
                                </div>
                                 <div class="row">
                                <div class="col-md-2">
                                   <label class="focus-label" style="margin-top: 30px;"> Password </label>
                                </div>
                                <div class="col-md-6">
                                   <input type="password"style="margin: 20px;background-color: aliceblue; border-color: black"; name="password" id="password">
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
                                   <a href="agentterms.php">Terms and Conditions</a> 
                                </div>
                                </div>
                                <div class="log-btn">
                                    <button type="agentregister" name="agentregister" id="agentregister"><i class="fa fa-check-square"></i> Register</button>
                                </div>
                                <div class="create-ac">
                            <p>Have an account? <a href="agentlogin.php">Sign In</a></p>
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
    <script type="text/javascript">
    function myFunction() {
  var x = document.getElementById("myInput");
  if
    (x.type === "password") {
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