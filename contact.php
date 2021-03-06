<!DOCTYPE html>
<html class="no-js" lang="zxx">

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
                        <h2>Contact Us</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Fill in the form below to instantly schedule a call with us.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Contact Page Area Start ==-->
    <div class="contact-page-wrao section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="contact-form">
                        <form action="back.php">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="name-input">
                                         <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="border-color: currentColor"; />
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="email-input">
                                       <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" style="border-color: currentColor";  />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 ">
                                    <div class="website-input">
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" style="border-color: currentColor";  />
                                    </div>
                                </div>

                               <!--  <div class="col-lg-6 col-md-6">
                                    <div class="subject-input">
                                        <input type="text" placeholder="Subject" style="border-color: currentColor";>
                                    </div>
                                </div> -->
                            </div>

                            <div class="message-input">
                                <textarea class="form-control" name="message" rows="5" id="message" placeholder="message"  data-rule="required" data-msg="Please write something for us" placeholder="Message" style="border-color: currentColor";></textarea>
                            </div>

                            <div class="input-submit">
                                <button type="submit" name="contact" id="contact">Submit Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Contact Page Area End ==-->

    <!--== Map Area Start ==-->
   <!--  <div class="maparea">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6361.513597776244!2d73.9008567652628!3d18.547934884400192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c1106d1c4ae7%3A0x1837d77bf3d90734!2sKalyani%20Nagar%20Mitra%20Mandal%20Shri%20Ganesh%20Mandir!5e0!3m2!1sen!2sin!4v1606214388531!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div> -->
    <!--== Map Area End ==-->

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
    <?php include 'includes/script.php'?>

</body>

</html>