<?php
include('header.php');
?>




<!-- start page-title -->
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <h2>Contact us</h2>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact us</li>
                </ol>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->


<!-- start contact-pg-section -->
<section class="contact-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-5 col-md-6 col-sm-8">
                <div class="section-title">
                    <span>Contact With Us</span>
                    <h2>You can contact with us <span>if you have any query</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-7">
                <form method="post" class="contact-validation-active" id="contact-form-main">
                    <div>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
                    </div>
                    <div>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                    </div>
                    <div>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*">
                    </div>
                    <div>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject*">
                    </div>
                    <div class="fullwidth">
                        <textarea class="form-control" name="note" id="note" placeholder="Enter Message..."></textarea>
                    </div>
                    <div class="submit-area">
                        <button type="submit" class="theme-btn">Submit Now</button>
                        <div id="loader">
                            <i class="ti-reload"></i>
                        </div>
                    </div>
                    <div class="clearfix error-handling-messages">
                        <div id="success">Thank you</div>
                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                    </div>
                </form>
            </div>

            <div class="col col-md-5">
                <div class="office-info text-center">
                    <div>
                        <h3>Saudi Arabia</h3>
                        <ul>
                            <li><i class="ti-location-pin"></i>
                                <p style="color: white;">P.O Box 245225, Riyadh 11312, Kingdom of Saudi Arabia</p>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <i class="ti-mobile"></i>
                                <a href="tel:+996112924010" style="color: white;">
                                    <p style="color:white;">+996 11 2924010</p>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:info@maxil.net" style="color: white;">
                                    <p style="color: white;">info@maxil.net</p>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end contact-pg-section -->


<!--  start contact-map -->
<section class="contact-map-section">
    <h2 class="hidden">Contact map</h2>

    <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63839.74957797958!2d46.611134604631694!3d24.734541495385088!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee3b4b3243ecf%3A0xcde50430ebcd119d!2sModern%20Vision%20Contracting!5e0!3m2!1sen!2sus!4v1699873098666!5m2!1sen!2sus"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


</section>
<!-- end contact-map -->




<?php
include('footer.php');
?>