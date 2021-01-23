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
                            <form action="driverregisterback.php" method="post" enctype="multipart/form-data">
                                <div class="name">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Driver Full Name" name="name" id="name">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Vehical Number " name="vname" id="vname">
                                        </div>
                                    </div>
                                </div>
                                <div class="username">
                                    <input type="address" placeholder="Driver Address" name="address" id="address">
                                </div> 
                                 <div class="car-choose bookinput-item">
                                    <select class="carr" name="type">
                                        <option selected>Car Type</option>
                                                <?php 
                                                $query = "SELECT * FROM `addcar`";
                                                include 'config.php';
                                                $stmt=$conn->prepare($query);
                                                $stmt->execute();
                                                $result=$stmt->fetchAll();
                                                $conn=null;
                                                foreach($result as $car){
                                                    ?>
                                                    <option value="<?php echo $car['cartype']?>"><?php echo $car['cartype']?></option>
                                                         <?php }?>
                                        </select>
                                    </div>
                                    <br>
                                <br>
                               <div class="car-choose bookinput-item">
                                    <select class="carrr" name="limit">
                                        <option selected>Passenger Limit</option>
                                                            <?php 
                                            $query = "SELECT * FROM `passengerlimit`";
                                                include 'config.php';
                                                $stmt=$conn->prepare($query);
                                                $stmt->execute();
                                                $result=$stmt->fetchAll();
                                                $conn=null;
                                                foreach($result as $passenger){
                                                    ?>
                                                       
                                                        <option value="<?php echo $passenger['passengerlim']?>"><?php echo $passenger['passengerlim']?></option>
                                                         <?php }?>
                                                          </select>
                                                      </div>
                                                      <br>
                                                      <br>
                                    <div class="car-choose bookinput-item">
                                    <select class="route" name="route1">
                                        <option selected>Select Route-1</option>
                                                            <?php 
                                            $query = "SELECT * FROM `addroute`";
                                                include 'config.php';
                                                $stmt=$conn->prepare($query);
                                                $stmt->execute();
                                                $result=$stmt->fetchAll();
                                                $conn=null;
                                                foreach($result as $route){
                                                    ?>
                                                       
                                                        <option value="<?php echo $route['route']?>"><?php echo $route['route']?></option>
                                                         <?php }?>
                                                          </select>
                                                      </div>
                                                      <br>
                                                      <br>
                                                      <div class="car-choose bookinput-item">
                                    <select class="route1" name="route2">
                                        <option selected>Select Route-2</option>
                                                            <?php 
                                            $query = "SELECT * FROM `addroute`";
                                                include 'config.php';
                                                $stmt=$conn->prepare($query);
                                                $stmt->execute();
                                                $result=$stmt->fetchAll();
                                                $conn=null;
                                                foreach($result as $route1){
                                                    ?>
                                                       
                                                        <option value="<?php echo $route1['route']?>"><?php echo $route1['route']?></option>
                                                         <?php }?>
                                                          </select>
                                                      </div>
                                                      <br>
                                                      <br>
                                                      <div class="car-choose bookinput-item">
                                    <select class="route2" name="route3">
                                        <option selected>Select Route-3</option>
                                                            <?php 
                                            $query = "SELECT * FROM `addroute`";
                                                include 'config.php';
                                                $stmt=$conn->prepare($query);
                                                $stmt->execute();
                                                $result=$stmt->fetchAll();
                                                $conn=null;
                                                foreach($result as $route2){
                                                    ?>
                                                       
                                                        <option value="<?php echo $route2['route']?>"><?php echo $route2['route']?></option>
                                                         <?php }?>
                                                          </select>
                                                      </div>
                                                      <br>
                                                      <br>
                                                <div class="car-choose bookinput-item">
                                    <select class="route3" name="route4">
                                        <option selected>Select Route-4</option>
                                                            <?php 
                                            $query = "SELECT * FROM `addroute`";
                                                include 'config.php';
                                                $stmt=$conn->prepare($query);
                                                $stmt->execute();
                                                $result=$stmt->fetchAll();
                                                $conn=null;
                                                foreach($result as $route3){
                                                    ?>
                                                       
                                                        <option value="<?php echo $route3['route']?>"><?php echo $route3['route']?></option>
                                                         <?php }?>
                                                          </select>
                                                      </div>
                                                      <br>
                                                      <br>
                               
                                 <div class="row">
                                <div class="col-md-5" style="margin:auto";>
                                     <label>Driver Photos</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="file" name="i" id="i">
                                </div>
                                </div>
                                 <div class="row">
                                <div class="col-md-5" style="margin:auto";>
                                     <label>Vehicle Photos with Vehicle Number</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="file" name="im" id="im">
                                </div>
                                </div>
                                 <div class="row">
                                <div class="col-md-5" style="margin:auto";>
                                     <label>Vehicle Amenities</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="file"name="ima" id="ima">
                                </div>
                                </div>
                                 <div class="row">
                                <div class="col-md-5" style="margin:auto";>
                                     <label>Driver License Copy</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="file" name="imag" id="imag">
                                </div>
                                </div>
                                   <div class="row">
                                <div class="col-md-5" style="margin:auto";>
                                     <label>Driver Aadhaar Card</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="file" name="image" id="image">
                                </div>
                                </div>
                                 <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Email Address" name="email" id="email">
                                </div>
                                 <div class="col-md-6">
                                    <input type="text" placeholder="Driver total driving experience" name="texp" id="texp">
                                </div>
                            </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <label>Driver License Issued  date</label>
                                    <input type="date"name="idate" id="idate">
                                </div>
                                <div class="col-md-6">
                                    <label>Driver License Expiry Date</label>
                                    <input type="date" name="edate" id="edate">
                                </div>
                                </div>
                                   <div class="row">
                                <div class="col-md-12">
                                    <label>Vehicle Insurance Issue date</label>
                                    <input type="date"name="iidate" id="iidate">
                                </div>
                                
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Contact Number" name="cnumber" id="cnumber">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Emergency Contact Number
                                    " name="enumber" id="enumber">
                                </div>
                                </div>
                                
                                 <div class="row">
                                <div class="col-md-2">
                                   <label class="focus-label"  style="margin-top: 30px;"> Password </label>
                                </div>
                                <div class="col-md-6">
                                   <input type="password" value="" id="myInput" style="margin: 20px;background-color: aliceblue; border-color: black"; name="password" id="password">
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
                                    <button type="driverregister" name="driverregister"><i class="fa fa-check-square"></i> Register</button>
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