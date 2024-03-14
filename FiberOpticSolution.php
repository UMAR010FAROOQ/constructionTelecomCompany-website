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
                <h2>Fiber Optic Solutions</h2>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Fiber Optic Solutions</li>
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
                    <h2>Fiber Optic Solutions</h2>
                    <p>These solutions focus on simplicity, cost-effectiveness and speed of installation, along with the
                        pre- and post-installation customer experience, time to revenue generation and reliable
                        subscriber connections that help to improve profitability for the service provide

                    </p>
                    <div class="benefit clearfix">
                        <div class="img-holder">
                            <img width="250" src="assets/images/service-single/FiberImg1.jpg" alt="">
                        </div>
                        <div class="details mt-4">
                            <h3>System Benefits</h3>
                            <ul>
                                <li><span>1</span> Fiber Optic Closures</li>
                                <li><span>2</span> Fiber Optic Cables(indoors, outdoors And FTTH Cables)</li>
                                <li><span>3</span> Fiber Optic Passive-components(Patch cords, Pigtails, Adapters, Attenuators etc)</li>
                                <li><span>4</span> Fiber Optic Rackmount Enclosures</li>
                                <li><span>5</span> Fiber Optic Wall mount Enclosures.</li>
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
                                                        <img src="assets/images/service-single/FiberImg2.jpg" alt>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="grid eudcation oil">
                                                <div class="inner">
                                                    <div class="img-holder">
                                                        <img src="assets/images/service-single/FiberImg3.jpg" alt>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="grid oil eudcation">
                                                <div class="inner">
                                                    <div class="img-holder">
                                                        <img src="assets/images/service-single/FiberImg4.png" alt>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="grid chemical mechanical">
                                                <div class="inner">
                                                    <div class="img-holder">
                                                        <img src="assets/images/service-single/FiberImg5.jpg" alt>
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
                                                        <img src="assets/images/service-single/FiberImg6.jpg" alt>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="grid mechanical industrial">
                                                <div class="inner">
                                                    <div class="img-holder">
                                                        <img src="assets/images/service-single/FiberImg7.jpg" alt>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="grid mechanical industrial">
                                                <div class="inner">
                                                    <div class="img-holder">
                                                        <img src="assets/images/service-single/FiberImg8.jpg" alt>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="grid mechanical industrial">
                                                <div class="inner">
                                                    <div class="img-holder">
                                                        <img src="assets/images/service-single/FiberImg9.jpg" alt>
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
                                                        <img src="assets/images/service-single/FiberImg10.jpg" alt>
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
                            <li><a href="CopperNetworks.php">Copper Networks </a></li>
                            <li><a href="MobileNetwork.php">Mobile Network</a></li>
                            <li class="current"><a href="FiberOpticSolution.php">Fiber Optic Solutions</a></li>
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