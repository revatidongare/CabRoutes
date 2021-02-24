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
    <section id="slideslow-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="slideshowcontent">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h1>BOOK A CAR NOW!</h1>
                                <p>Serving You Happy Travel</p>
                                <div class="book-ur-car">
                                    <div class="col-lg-4" style="align-self: center;"><a href="index.php"><button  type="submit" name="contact" id="contact" style="    background-color: #ffd000;color: black;font-size: inherit ;">Local</button></a>
                                            </div>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="popular_cars" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="popular-cars-wrap">
                                                    <div class="popucar-menu text-center">
                                                        <form action="back.php">
                                                            <div class="car-choose bookinput-item">

                                                        <select class="custom-select" id="pickup_select" name="pickup_select">
                                                             <option selected>Pickup Location</option>
                                                            <?php 
                                                $query = "SELECT * FROM `pickup` where `flag`=1";
                                                include 'config.php';
                                                $stmt=$conn->prepare($query);
                                                $stmt->execute();
                                                $result=$stmt->fetchAll();
                                                $conn=null;
                                                foreach($result as $location){
                                                    ?>
                                                       
                                                        <option><?php echo $location['location']?></option>
                                                         <?php }?>
                                                          </select>
                                                      </div>

                                                      <div class="car-choose bookinput-item">

                                                        <select class="custom-select" id="subpickup_id" name="subpickup_id">
                                                             <option selected>Pickup Sub-Location</option>
                                                          </select>
                                                      </div>
                                                      
                                                            
                                                    <div class="car-choose bookinput-item">
                                                        <select class="custom-select" id="drop_select">
                                                             <option selected>Drop Location</option>
                                                            <?php 
                                                $query = "SELECT * FROM `droplocation` where `flag`=1";
                                                include 'config.php';
                                                $stmt=$conn->prepare($query);
                                                $stmt->execute();
                                                $result=$stmt->fetchAll();
                                                $conn=null;
                                                foreach($result as $location){
                                                    ?>
                                                       
                                                        <option><?php echo $location['location']?></option>
                                                         <?php }?>
                                                          </select>
                                                      </div>

                                                       <div class="car-choose bookinput-item">

                                                        <select class="custom-select" id="subdrop_id" name="subdrop_id">
                                                             <option selected>Drop Sub-Location</option>
                                                          </select>
                                                      </div>
                        
                                                           <div class="pick-date bookinput-item">
                                                            <input id="startDate2" placeholder="Pick Date" />
                                                        </div>
                                                        <!-- <div class="retern-date bookinput-item">
                                                <input id="endDate2" placeholder="Return Date" />
                                            </div> -->
                                             <div class="car-choose bookinput-item">
                                                        <select class="form-control" data-testid="selectTime">
                                                        <option value="12:00 AM">Pickup Time</option>
                                                            <option value="12:15 AM">12:15 AM</option>
                                                            <option value="12:30 AM">12:30 AM</option>
                                                            <option value="12:45 AM">12:45 AM</option>
                                                            <option value="01:00 AM">01:00 AM</option>
                                                            <option value="01:15 AM">01:15 AM</option>
                                                            <option value="01:30 AM">01:30 AM</option>
                                                            <option value="01:45 AM">01:45 AM</option>
                                                            <option value="02:00 AM">02:00 AM</option>
                                                            <option value="02:15 AM">02:15 AM</option>
                                                            <option value="02:30 AM">02:30 AM</option>
                                                            <option value="02:45 AM">02:45 AM</option>
                                                            <option value="03:00 AM">03:00 AM</option>
                                                            <option value="03:15 AM">03:15 AM</option>
                                                            <option value="03:30 AM">03:30 AM</option>
                                                            <option value="03:45 AM">03:45 AM</option>
                                                            <option value="04:00 AM">04:00 AM</option>
                                                            <option value="04:15 AM">04:15 AM</option>
                                                            <option value="04:30 AM">04:30 AM</option>
                                                            <option value="04:45 AM">04:45 AM</option>
                                                            <option value="05:00 AM">05:00 AM</option>
                                                            <option value="05:15 AM">05:15 AM</option>
                                                            <option value="05:30 AM">05:30 AM</option>
                                                            <option value="05:45 AM">05:45 AM</option>
                                                            <option value="06:00 AM">06:00 AM</option>
                                                            <option value="06:15 AM">06:15 AM</option>
                                                            <option value="06:30 AM">06:30 AM</option>
                                                            <option value="06:45 AM">06:45 AM</option>
                                                            <option value="07:00 AM">07:00 AM</option>
                                                            <option value="07:15 AM">07:15 AM</option>
                                                            <option value="07:30 AM">07:30 AM</option>
                                                            <option value="07:45 AM">07:45 AM</option>
                                                            <option value="08:00 AM">08:00 AM</option>
                                                            <option value="08:15 AM">08:15 AM</option>
                                                            <option value="08:30 AM">08:30 AM</option>
                                                            <option value="08:45 AM">08:45 AM</option>
                                                            <option value="09:00 AM">09:00 AM</option>
                                                            <option value="09:15 AM">09:15 AM</option>
                                                            <option value="09:30 AM">09:30 AM</option>
                                                            <option value="09:45 AM">09:45 AM</option>
                                                            <option value="10:00 AM">10:00 AM</option>
                                                            <option value="10:15 AM">10:15 AM</option>
                                                            <option value="10:30 AM">10:30 AM</option>
                                                            <option value="10:45 AM">10:45 AM</option>
                                                            <option value="11:00 AM">11:00 AM</option>
                                                            <option value="11:15 AM">11:15 AM</option>
                                                            <option value="11:30 AM">11:30 AM</option>
                                                            <option value="11:45 AM">11:45 AM</option>
                                                            <option value="12:00 PM">12:00 PM</option>
                                                            <option value="12:15 PM">12:15 PM</option>
                                                            <option value="12:30 PM">12:30 PM</option>
                                                            <option value="12:45 PM">12:45 PM</option>
                                                            <option value="01:00 PM">01:00 PM</option>
                                                            <option value="01:15 PM">01:15 PM</option>
                                                            <option value="01:30 PM">01:30 PM</option>
                                                            <option value="01:45 PM">01:45 PM</option>
                                                            <option value="02:00 PM">02:00 PM</option>
                                                            <option value="02:15 PM">02:15 PM</option>
                                                            <option value="02:30 PM">02:30 PM</option>
                                                            <option value="02:45 PM">02:45 PM</option>
                                                            <option value="03:00 PM">03:00 PM</option>
                                                            <option value="03:15 PM">03:15 PM</option>
                                                            <option value="03:30 PM">03:30 PM</option>
                                                            <option value="03:45 PM">03:45 PM</option>
                                                            <option value="04:00 PM">04:00 PM</option>
                                                            <option value="04:15 PM">04:15 PM</option>
                                                            <option value="04:30 PM">04:30 PM</option>
                                                            <option value="04:45 PM">04:45 PM</option>
                                                            <option value="05:00 PM">05:00 PM</option>
                                                            <option value="05:15 PM">05:15 PM</option>
                                                            <option value="05:30 PM">05:30 PM</option>
                                                            <option value="05:45 PM">05:45 PM</option>
                                                            <option value="06:00 PM">06:00 PM</option>
                                                            <option value="06:15 PM">06:15 PM</option>
                                                            <option value="06:30 PM">06:30 PM</option>
                                                            <option value="06:45 PM">06:45 PM</option>
                                                            <option value="07:00 PM">07:00 PM</option>
                                                            <option value="07:15 PM">07:15 PM</option>
                                                            <option value="07:30 PM">07:30 PM</option>
                                                            <option value="07:45 PM">07:45 PM</option>
                                                            <option value="08:00 PM">08:00 PM</option>
                                                            <option value="08:15 PM">08:15 PM</option>
                                                            <option value="08:30 PM">08:30 PM</option>
                                                            <option value="08:45 PM">08:45 PM</option>
                                                            <option value="09:00 PM">09:00 PM</option>
                                                            <option value="09:15 PM">09:15 PM</option>
                                                            <option value="09:30 PM">09:30 PM</option>
                                                            <option value="09:45 PM">09:45 PM</option>
                                                            <option value="10:00 PM">10:00 PM</option>
                                                            <option value="10:15 PM">10:15 PM</option>
                                                            <option value="10:30 PM">10:30 PM</option>
                                                            <option value="10:45 PM">10:45 PM</option>
                                                            <option value="11:00 PM">11:00 PM</option>
                                                            <option value="11:15 PM">11:15 PM</option>
                                                            <option value="11:30 PM">11:30 PM</option>
                                                            <option value="11:45 PM">11:45 PM</option>  
                                                        </select>  
                                                      </div>

                                                       <div class="retern-date bookinput-item">
                                                <input id="endDate2" placeholder="Return Date" />
                                            </div>
                                             <br>
                                             <br>
                                            <div class="car-choose bookinput-item">
                                                            <select class="custom-select">
                                                             <option selected>Passenger Limit</option>
                                                            <?php 
                                                $query = "SELECT * FROM `passengerlimit`";
                                                include 'config.php';
                                                $stmt=$conn->prepare($query);
                                                $stmt->execute();
                                                $result=$stmt->fetchAll();
                                                $conn=null;
                                                foreach($result as $limit){
                                                    ?>
                                                       
                                                        <option><?php echo $limit['passengerlim']?></option>
                                                         <?php }?>
                                                             
                                                          </select>
                                                      </div>
                                           
                                                     
                                                        <div class="car-choose bookinput-item">
                                                        <select class="custom-select">
                                                              <option selected>Choose Vehicle</option>
                                                            <?php 
                                                $query = "SELECT * FROM `addcar`";
                                                include 'config.php';
                                                $stmt=$conn->prepare($query);
                                                $stmt->execute();
                                                $result=$stmt->fetchAll();
                                                $conn=null;
                                                foreach($result as $car){
                                                    ?>
                                                       
                                                        <option><?php echo $car['cartype']?></option>
                                                         <?php }?>
                                                          </select>
                                                      </div>
                                                   
                                                      <div class="bookcar-btn bookinput-item">
                                                        <button type="submit" name="search">Search Cabs</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>                                   
                </div>
            </div>
                                </div>
                            </div>
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
<?php include 'includes/script.php'?>
</body>


<script type="text/javascript">

   $(document).ready(function() {
      $("#pick_select").change(function() {
        var id = $(this).val();
        
        if(id != "") {
          $.ajax({
             
            url:"searchdriver.php",
            data:{pickup_select:id},
            type:'POST',
            success:function(response) {
              var resp = $.trim(response);
              $("#subpickup_id").html(resp);
            }
          });
        } else {
          $("#subpickup_id").html("<option value=''>------- Select --------</option>");
        }
      });

      // $("#subpickup_id").change(function() {
      //   var id = $(this).val();
                
      //   if(id != "") {
      //     $.ajax({
      //       url:"back.php",
      //       data:{SCHOOL_id:id},
      //       type:'POST',
      //       success:function(response){
      //         var resp = $.trim(response);
      //         $("#CLASS_select").html(resp);
      //       }
      //     });
      //   } 
        // else {
        //   $("#CLASS_select").html("<option value=''>------- Select --------</option>");
        // }
      // });

       $("#drop_select").change(function() {
        var id = $(this).val();
                
        if(id != "") {
          $.ajax({
            url:"searchdriver.php",
            data:{drop_select:id},
            type:'POST',
            success:function(response){
              var resp = $.trim(response);
              $("#subdrop_id").html(resp);
            }
          });
        } 
        else {
          $("#subdrop_id").html("<option value=''>------- Select --------</option>");
        }
      });
    
    });

</script>



</html>

