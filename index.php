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
                                    <div class="choose-content-wrap">
                                   <div class="row">
                                
                                            <div class="col-lg-4"><a href="local.php"><button  type="submit" name="contact" id="contact" style="    background-color: #ffd000;color: black;font-size: inherit ;">Local</button></a>
                                            </div>
                                            <div  class="col-lg-4"><a href="outstation.php"><button  type="submit" name="contact" id="contact" style="    background-color: #ffd000;color: black;font-size: inherit ;">Outstation</button>
                                            </a></div>
                                             <div  class="col-lg-4"><a href="domestic.php"><button  type="submit"name="contact" id="contact"style="    background-color: #ffd000;color: black;font-size: inherit ;">Domestic</button></a></div>
                                 </div>
                             </div>
                                       <!--  <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="popular_cars" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="popular-cars-wrap">
                                                    <div class="popucar-menu text-center">
                                                        <form action="back.php">
                                                            <div class="pick-location bookinput-item">
                                                                <input type="text" name="picklocation" placeholder="Pick Location">
                                                            </div>
                                                            
                                                            <div class="pick-location bookinput-item">
                                                               <input type="text" name="droplocation" placeholder="Drop Location">
                                                           </div>
                                                           <div class="pick-date bookinput-item">
                                                            <input id="startDate2" placeholder="Pick Date" />
                                                        </div>
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
                                                        <div class="car-choose bookinput-item">
                                                            <select class="custom-select">
                                                              <option selected>Choose Vehicle</option>
                                                              <option value="1">BMW</option>
                                                              <option value="2">Audi</option>
                                                              <option value="3">Lexus</option>
                                                          </select>
                                                      </div>
                                                      <br><br>
                                                      <div class="bookcar-btn bookinput-item">
                                                        <button type="submit">Search Cabs</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="newest_cars" role="tabpanel" aria-labelledby="profile-tab" style="margin-top: 50px;">
                                        <div class="popular-cars-wrap">
                                            <form action="back.php">
                                                <div class="pick-location bookinput-item">
                                                    <input type="text" name="picklocation" placeholder="Pick Location"> 
                                                </div>
                                                <div class="pick-location bookinput-item">
                                                   <input type="text" name="droplocation" placeholder="Drop Location">
                                               </div>
                                               <div class="pick-date bookinput-item" >
                                                <input placeholder="Pickup-date" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date"/>

                                            </div>
                                            <div class="retern-date bookinput-item">
                                                <input id="endDate2" placeholder="Return Date" />
                                            </div>
                                            <div class="car-choose bookinput-item">
                                                <select class="custom-select">
                                                  <option selected>Choose Vehicle</option>
                                                  <option value="1">BMW</option>
                                                  <option value="2">Audi</option>
                                                  <option value="3">Lexus</option>
                                              </select>
                                          </div>
                                          <br><br>
                                          <div class="bookcar-btn bookinput-item">
                                            <button type="submit">Book Car</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="office_map" role="tabpanel" aria-labelledby="contact-tab" style="margin-top: 50px;">
                                <form action="back.php">
                                    <div class="pick-location bookinput-item">
                                        <input type="text" name="picklocation" placeholder="Pick Location">  
                                    </div>
                                    <div class="pick-location bookinput-item">
                                       <input type="text" name="droplocation" placeholder="Drop Location">
                                   </div>
                                   <div class="pick-date bookinput-item">
                                    <input id="startDate2" placeholder="Pick Date" />
                                </div>
                                <div class="retern-date bookinput-item">
                                    <input id="endDate2" placeholder="Return Date" />
                                </div>
                                <div class="car-choose bookinput-item">
                                    <select class="custom-select">
                                      <option selected>Choose Vehicle</option>
                                      <option value="1">BMW</option>
                                      <option value="2">Audi</option>
                                      <option value="3">Lexus</option>
                                  </select>
                              </div>
                              <br><br>
                              <div class="bookcar-btn bookinput-item">
                                <button type="submit">Book Car</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>About us</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <p>Lorem simply dummy is a texted of the printing costed and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="assets/img/home-2-about.png" alt="JSOFT">
                    </div>
                </div>
            </div>
            <div class="about-feature-area">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="about-feature-item active">
                            <i class="fa fa-car"></i>
                            <h3>ALL BRANDS</h3>
                            <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-car"></i>
                            <h3>ALL BRANDS</h3>
                            <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-car"></i>
                            <h3>ALL BRANDS</h3>
                            <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <div id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                <img src="assets/img/partner/client-1.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                      <a href="http://www.journeyworlddmc.com/" target="_blank">
                                    <img src="assets/img/partner/client-2.png" alt="JSOFT"></a>
                                </div>
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                      <a href="http://travelogholiday.com/" target="_blank">
                                    <img src="assets/img/partner/client-3.png" alt="JSOFT"></a>
                                </div>
                            </div>
                        </div>
                         <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                      <a href="http://www.farmerstudy.com/"  target="_blank">
                                    <img src="assets/img/partner/client-33.png" alt="JSOFT"></a>
                                </div>
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                      <a href="http://travelogimmigration.com/" target="_blank">
                                    <img src="assets/img/partner/client-4.png" alt="JSOFT"></a>
                                </div>
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                        <a href="http://www.trustudoctor.com/" target="_blank">
                                    <img src="assets/img/partner/client-55.png" alt="JSOFT"></a>
                                </div>
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/uturn.jpg" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Services</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11 m-auto text-center">
                 <div class="service-container-wrap">
                  <div class="service-item">
                   <i class="fa fa-taxi"></i>
                   <h3>RENTAL CAR</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
               </div>
               <div class="service-item">
                   <i class="fa fa-cog"></i>
                   <h3>CAR REPAIR</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
               </div>
               <div class="service-item">
                   <i class="fa fa-map-marker"></i>
                   <h3>TAXI SERVICE</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
               </div>
               <div class="service-item">
                   <i class="fa fa-life-ring"></i>
                   <h3>life insurance</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
               </div>
               <div class="service-item">
                   <i class="fa fa-bath"></i>
                   <h3>car wash</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
               </div>
               <div class="service-item">
                   <i class="fa fa-phone"></i>
                   <h3>call driver</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
               </div>
           </div>
       </div>
   </div>
</div>
</section>
<section id="funfact-area" class="overlay section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-md-12 m-auto">
                <div class="funfact-content-wrap">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-funfact">
                                <div class="funfact-icon">
                                    <i class="fa fa-smile-o"></i>
                                </div>
                                <div class="funfact-content">
                                    <p><span class="counter">550</span>+</p>
                                    <h4>HAPPY CLIENTS</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-funfact">
                                <div class="funfact-icon">
                                    <i class="fa fa-car"></i>
                                </div>
                                <div class="funfact-content">
                                    <p><span class="counter">250</span>+</p>
                                    <h4>CARS IN STOCK</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-funfact">
                                <div class="funfact-icon">
                                    <i class="fa fa-bank"></i>
                                </div>
                                <div class="funfact-content">
                                    <p><span class="counter">50</span>+</p>
                                    <h4>office in cities</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="choose-car" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Choose your Car</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="choose-ur-cars">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="home2-car-filter">
                                <a href="#" data-filter="*" class="active">all</a>
                                <a href="#" data-filter=".con">Conver</a>
                                <a href="#" data-filter=".hat">Truck</a>
                                <a href="#" data-filter=".mpv">MPV</a>
                                <a href="#" data-filter=".sedan">Sedan</a>
                                <a href="#" data-filter=".suv">SUV</a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row popular-car-gird">
                                <div class="col-lg-6 col-md-6 con suv mpv">
                                    <div class="single-popular-car">
                                        <div class="p-car-thumbnails">
                                            <a class="car-hover" href="assets/img/car/car-1.jpg">
                                                <img src="assets/img/car/car-1.jpg" alt="JSOFT">
                                            </a>
                                        </div>
                                        <div class="p-car-content">
                                            <h3>
                                                <a href="#">Dodge Ram 1500</a>
                                                <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                            </h3>
                                            <h5>HATCHBACK</h5>
                                            <div class="p-car-feature">
                                                <a href="#">2017</a>
                                                <a href="#">manual</a>
                                                <a href="#">AIR CONDITION</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 hat sedan">
                                    <div class="single-popular-car">
                                        <div class="p-car-thumbnails">
                                            <a class="car-hover" href="assets/img/car/car-2.jpg">
                                                <img src="assets/img/car/car-2.jpg" alt="JSOFT">
                                            </a>
                                        </div>
                                        <div class="p-car-content">
                                            <h3>
                                                <a href="#">Dodge Ram 1500</a>
                                                <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                            </h3>
                                            <h5>HATCHBACK</h5>
                                            <div class="p-car-feature">
                                                <a href="#">2017</a>
                                                <a href="#">manual</a>
                                                <a href="#">AIR CONDITION</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 suv con mpv">
                                    <div class="single-popular-car">
                                        <div class="p-car-thumbnails">
                                            <a class="car-hover" href="assets/img/car/car-3.jpg">
                                               <img src="assets/img/car/car-3.jpg" alt="JSOFT">
                                           </a>
                                       </div>
                                       <div class="p-car-content">
                                        <h3>
                                            <a href="#">Dodge Ram 1500</a>
                                            <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                        </h3>
                                        <h5>HATCHBACK</h5>
                                        <div class="p-car-feature">
                                            <a href="#">2017</a>
                                            <a href="#">manual</a>
                                            <a href="#">AIR CONDITION</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 con hat">
                                <div class="single-popular-car">
                                    <div class="p-car-thumbnails">
                                        <a class="car-hover" href="assets/img/car/car-4.jpg">
                                            <img src="assets/img/car/car-4.jpg" alt="JSOFT">
                                        </a>
                                    </div>
                                    <div class="p-car-content">
                                        <h3>
                                            <a href="#">Dodge Ram 1500</a>
                                            <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                        </h3>
                                        <h5>HATCHBACK</h5>
                                        <div class="p-car-feature">
                                            <a href="#">2017</a>
                                            <a href="#">manual</a>
                                            <a href="#">AIR CONDITION</a>
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
<section id="pricing-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Only quality for clients</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-pricing-table">
                    <h3>BUSINESS</h3>
                    <h2>$ 55.99</h2>
                    <h5>PER MONTH</h5>
                    <ul class="package-list">
                        <li>FREE VEHICLE DELIVERY</li>
                        <li>WEDDINGS CELEBRATIONS</li>
                        <li>FULL INSURANCE INCLUDED</li>
                        <li>TRANSPORT ABROAD</li>
                        <li>ALL INCLUSIVE MINI BAR</li>
                        <li>CHAUFFER INCLUDED IN PRICE</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-pricing-table">
                    <h3>Trial</h3>
                    <h2>Free</h2>
                    <h5>PER MONTH</h5>
                    <ul class="package-list">
                        <li>FREE VEHICLE DELIVERY</li>
                        <li>OTHER CELEBRATIONS</li>
                        <li>FULL INSURANCE</li>
                        <li>TRANSPORT ABROAD</li>
                        <li>MINI BAR</li>
                        <li>INCLUDED IN PRICE</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-pricing-table">
                    <h3>standard</h3>
                    <h2>$ 35.99</h2>
                    <h5>PER MONTH</h5>
                    <ul class="package-list">
                        <li>DELIVERY AT AIRPORT</li>
                        <li>WEDDINGS AND OTHER</li>
                        <li>FULL INCLUDED</li>
                        <li>TRANSPORT ABROAD</li>
                        <li>ALL MINI BAR</li>
                        <li>CHAUFFER PRICE</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="team-area" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Our Creative Persons</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Lorem ipsum dolor sit amet elit.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="team-content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="team-tab-menu">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="tab_item_1" data-toggle="tab" href="#team_member_1" role="tab" aria-selected="true">
                                            <div class="team-mem-icon">
                                                <img src="assets/img/team/team-mem-thumb-1.png" alt="JSOFT">
                                            </div>
                                            <h5>Raju Ahammad</h5>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab_item_2" data-toggle="tab" href="#team_member_2" role="tab" aria-selected="true">
                                            <div class="team-mem-icon">
                                                <img src="assets/img/team/team-mem-thumb-3.png" alt="JSOFT">
                                            </div>
                                            <h5>Vongchong Smith</h5>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab_item_3" data-toggle="tab" href="#team_member_3" role="tab" aria-selected="true">
                                            <div class="team-mem-icon">
                                                <img src="assets/img/team/team-mem-thumb-2.png" alt="JSOFT">
                                            </div>
                                            <h5>Alex Tuntuni</h5>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab_item_4" data-toggle="tab" href="#team_member_4" role="tab" aria-selected="true">
                                            <div class="team-mem-icon">
                                                <img src="assets/img/team/team-mem-thumb-4.png" alt="JSOFT">
                                            </div>
                                            <h5>Any Anderssen</h5>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="team_member_1" role="tabpanel" aria-labelledby="tab_item_1">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="team-member-pro-pic">
                                            <img src="assets/img/team/team-mem-1.png" alt="JSOFT">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="team-member-info text-center">
                                                <h4>Raju Ahammad</h4>
                                                <h5>Developer</h5>
                                                <span class="quote-icon"><i class="fa fa-quote-left"></i></span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sollicitudin fermentum dolor. Nunc nec augue urna. Cras varius orci vitae lacinia efficitur.</p>
                                                <div class="team-social-icon">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="team_member_2" role="tabpanel" aria-labelledby="tab_item_2">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="team-member-pro-pic">
                                            <img src="assets/img/team/team-mem-3.png" alt="JSOFT">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="team-member-info text-center">
                                                <h4>Vongchong Smith</h4>
                                                <h5>Designer</h5>
                                                <span class="quote-icon"><i class="fa fa-quote-left"></i></span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sollicitudin fermentum dolor. Nunc nec augue urna. Cras varius orci vitae lacinia efficitur.</p>
                                                <div class="team-social-icon">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="team_member_3" role="tabpanel" aria-labelledby="tab_item_3">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="team-member-pro-pic">
                                            <img src="assets/img/team/team-mem-2.png" alt="JSOFT">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="team-member-info text-center">
                                                <h4>Alex Tuntuni</h4>
                                                <h5>Marketer</h5>
                                                <span class="quote-icon"><i class="fa fa-quote-left"></i></span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sollicitudin fermentum dolor. Nunc nec augue urna. Cras varius orci vitae lacinia efficitur.</p>
                                                <div class="team-social-icon">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="team_member_4" role="tabpanel" aria-labelledby="tab_item_4">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="team-member-pro-pic">
                                            <img src="assets/img/team/team-mem-4.png" alt="JSOFT">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="team-member-info text-center">
                                                <h4>Any Anderssen</h4>
                                                <h5>Manager</h5>
                                                <span class="quote-icon"><i class="fa fa-quote-left"></i></span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sollicitudin fermentum dolor. Nunc nec augue urna. Cras varius orci vitae lacinia efficitur.</p>
                                                <div class="team-social-icon">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                                    <a href="#"><i class="fa fa-dribbble"></i></a>
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
<div id="mobileapp-video-bg"></div>
<section id="mobile-app-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="mobile-app-content">
                    <h2>SAVE 30% WITH THE APP</h2>
                    <p>Easy &amp; Fast - Book a car in 60 seconds</p>
                    <div class="app-btns">
                        <a href="#"><i class="fa fa-android"></i> Android Store</a>
                        <a href="#"><i class="fa fa-apple"></i> Apple Store</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="tips-article-area" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Tips and articles</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <article class="single-article">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="article-thumb">
                                <img src="assets/img/article/arti-thumb-1.jpg" alt="JSOFT">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="article-body">
                                        <h3><a href="article-details.html">Wliquam sit amet urna eullam</a></h3>
                                        <div class="article-meta">
                                            <a href="#" class="author">By :: <span>Admin</span></a>
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
            </div>
            <div class="col-lg-12">
                <article class="single-article middle">
                    <div class="row">
                        <div class="col-lg-5 d-xl-none">
                            <div class="article-thumb">
                                <img src="assets/img/article/arti-thumb-2.jpg" alt="JSOFT">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="article-body">
                                        <h3><a href="article-details.html">fringilla oremedad ipsum dolor sit</a></h3>
                                        <div class="article-meta">
                                            <a href="#" class="author">By :: <span>Admin</span></a>
                                            <a href="#" class="commnet">Comments :: <span>10</span></a>
                                        </div>
                                        <div class="article-date">14<span class="month">feb</span></div>
                                        <p>Wlam aiber vestibulum fringilla oremedad ipsum dolor sit amet consectetur adipisicing elit sed doned eiusmod tempored incididunt ut labore et dolore magna aliquaa enimd ad minim veniad.</p>
                                        <a href="article-details.html" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 d-none d-xl-block">
                            <div class="article-thumb">
                                <img src="assets/img/article/arti-thumb-2.jpg" alt="JSOFT">
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-12">
                <article class="single-article">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="article-thumb">
                                <img src="assets/img/article/arti-thumb-3.jpg" alt="JSOFT">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="article-body">
                                        <h3><a href="article-details.html">Tempored incididunt ut labore</a></h3>
                                        <div class="article-meta">
                                            <a href="#" class="author">By :: <span>Admin</span></a>
                                        <a href="#" class="commnet">Comments :: <span>10</span></a>
                                        </div>
                                    <div class="article-date">17 <span class="month">feb</span></div>
                                        <p>Wlam aiber vestibulum fringilla oremedad ipsum dolor sit amet consectetur adipisicing elit sed doned eiusmod tempored incididunt ut labore et dolore magna aliquaa enimd ad minim veniad.</p>
                                        <a href="article-details.html" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
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
</html>