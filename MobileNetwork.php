<?php
include('header.php');
?>



<style>
.latest-projects-section .gallery-container .img-holder img {
    position: relative !important;
    z-index: 99 !important;
}

/* Add this CSS to your stylesheet */
.popup-container {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
    z-index: 999;
}

.popup-content {
    position: relative;
    background: #fff;
    padding: 20px;
    max-width: 80%;
    height: auto;
    /* Adjust the height as needed */
    overflow: hidden;
    /* Hide overflow to prevent scroll */
    display: flex;
    justify-content: center;
    align-items: center;
}

.popup-img {
    max-width: 100%;
    max-height: 100%;
    width: 350px;
}

.close-popup-btn {
    position: absolute;
    top: 3px;
    right: 3px;
    font-size: 24px;
    cursor: pointer;
    color: #ffffff;
    background: #224893;
    border-radius: 50%;
    padding: 0px 10px;

}

.close-popup-btn:hover {
    background: #062c77;
}

.img-holder img {
    cursor: pointer;
}
</style>

<!-- The popup container -->
<div class="popup-container">
    <div class="popup-content">
        <span class="close-popup-btn">&times;</span>
        <img class="popup-img" src="assets/images/latest-projects/cert-1.png" alt="Popup Image">
    </div>
</div>


<!-- start page-title -->
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <h2>Mobile Network</h2>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Mobile Network</li>
                </ol>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->


<!-- start service-single-section -->
<section class="service-single-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-9 col-md-push-3">
                <div class="service-single-content">
                    <h2>Mobile Network</h2>
                    <p>We support mobile telecommunications operators by developing cabling solutions adapted to their
                        needs. With our RF solutions, cables and hybrid systems integrating energy conductors and
                        optical fiber, we facilitate and optimize the deployment of future infrastructure networks.
                    </p>
                    <div class="benefit clearfix">
                        <div class="img-holder">
                            <img width="250" src="assets/images/service-single/MobileImg1.jpg" alt="">
                        </div>
                        <div class="details mt-4">
                            <h3>System Benefits</h3>
                            <ul>
                                <li><span>1</span> RF Coaxial Cables</li>
                                <li><span>2</span> RF Cable Assemblies</li>
                                <li><span>3</span> RF Connectors</li>
                                <li><span>4</span> RF Passive Components (Spitters, Tappers, Couplers, Attenuators,
                                    Loads)</li>
                                <li><span>5</span> DAS Antennas</li>
                                <li><span>6</span> WLAN Antennas</li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-single-img-holder mt-4">
                        <div class="row">
                            <div class="col col-xs-12 sortable-gallery">
                                <div class="gallery-container project-grids">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="grid chemical">
                                                <div class="inner">
                                                    <div class="img-holder">
                                                        <img src="assets/images/service-single/MobileImg2.jpg" alt>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="grid eudcation oil">
                                                <div class="inner">
                                                    <div class="img-holder">
                                                        <img src="assets/images/service-single/MobileImg3.jpg" alt>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="grid oil eudcation">
                                                <div class="inner">
                                                    <div class="img-holder">
                                                        <img src="assets/images/service-single/MobileImg4.jpg" alt>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="grid chemical mechanical">
                                                <div class="inner">
                                                    <div class="img-holder">
                                                        <img src="assets/images/service-single/MobileImg5.jpg" alt>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="grid oil industrial">
                                                <div class="inner">
                                                    <div class="img-holder">
                                                        <img src="assets/images/service-single/MobileImg6.jpg" alt>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="grid mechanical industrial">
                                                <div class="inner">
                                                    <div class="img-holder">
                                                        <img src="assets/images/service-single/MobileImg7.jpg" alt>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="grid mechanical industrial">
                                                <div class="inner">
                                                    <div class="img-holder">
                                                        <img src="assets/images/service-single/MobileImg8.jpg" alt>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="grid mechanical industrial">
                                                <div class="inner">
                                                    <div class="img-holder">
                                                        <img src="assets/images/service-single/MobileImg9.jpg" alt>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="grid oil industrial">
                                                <div class="inner">
                                                    <div class="img-holder">
                                                        <img src="assets/images/service-single/MobileImg10.jpg" alt>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="grid mechanical industrial">
                                                <div class="inner">
                                                    <div class="img-holder">
                                                        <img src="assets/images/service-single/MobileImg11.jpg" alt>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="grid mechanical industrial">
                                                <div class="inner">
                                                    <div class="img-holder">
                                                        <img src="assets/images/service-single/MobileImg12.jpg" alt>
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
            <div class="col col-md-3 col-md-pull-9">
                <div class="service-sidebar">
                    <div class="widget service-list-widget">
                        <ul>
                            <li><a href="services.php">All Service</a></li>
                            <li><a href="electrical-solution.php">Electrical Solution</a></li>
                            <li><a href="mechanical-solution.php">Mechanical Solutions</a></li>
                            <li><a href="it-solution.php">IT & Networking Solutions</a></li>
                            <li><a href="civil-solution.php">Civil Solutions</a></li>
                            <li><a href="security-solution.php">Security and Automation</a></li>
                            <li><a href="tele-solution.php">Telecommunication Solutions</a></li>
                            <li><a href="audible-visual-solution.php">Audible & Visual Solution</a></li>
                            <li><a href="CopperNetworks.php">Copper Networks</a></li>
                            <li class="current"><a href="MobileNetwork.php">Mobile Network</a></li>
                            <li><a href="FiberOpticSolution.php">Fiber Optic Solutions</a></li>
                            <li><a href="AC-DC-PowerSystems.php">AC-DC Power Systems</a></li>
                            <li><a href="IndustrialPowerRouters.php">Industrial Power Routers</a></li>
                        </ul>
                    </div>
                    <div class="widget download-widget">
                        <ul>
                            <li><a href="https://mvsksa.com/profile/maxil.pdf" target="_blank" download><i
                                        class="ti-zip"></i>Download Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end service-single-section -->




<script>
// Add this JavaScript to your script
document.addEventListener("DOMContentLoaded", function() {
    var openPopupBtns = document.querySelectorAll(".gallery-container .grid .img-holder img");
    var popupContainer = document.querySelector(".popup-container");
    var closePopupBtn = document.querySelector(".close-popup-btn");
    var popupImg = document.querySelector(".popup-img");

    openPopupBtns.forEach(function(img) {
        img.addEventListener("click", function() {
            var imgSrc = img.src;
            popupImg.src = imgSrc;
            popupContainer.style.display = "flex";
        });
    });

    closePopupBtn.addEventListener("click", function() {
        popupContainer.style.display = "none";
    });

    popupContainer.addEventListener("click", function(event) {
        if (event.target === popupContainer) {
            popupContainer.style.display = "none";
        }
    });
});
</script>



<?php
include('footer.php');
?>