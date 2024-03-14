<?php
include('header.php');
?>

<style>
      .latest-projects-section .gallery-container .img-holder img{
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
        height: 90vh; /* Adjust the height as needed */
        overflow: hidden; /* Hide overflow to prevent scroll */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .popup-img {
        max-width: 100%;
        max-height: 100%;
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
    .close-popup-btn:hover{
    background: #062c77;
    }
  .img-holder img{
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
                        <h2>Certificate</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li>Certificate</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start latest-projects-section -->
        <section class="latest-projects-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="section-title-s3">
                            <span>Certificate</span>
                            <h2>See Latest Certificate</h2>
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12 sortable-gallery">
                        <div class="gallery-container project-grids">
                            <div class="grid chemical">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/latest-projects/cert-1.png" alt>
                                    </div>
                                    <div class="details">
                                        <div class="arrow"><a href="#"><i class="fi flaticon-next"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid eudcation oil">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/latest-projects/cert-2.png" alt>
                                    </div>
                                    <div class="details">
                                        <div class="arrow"><a href="#"><i class="fi flaticon-next"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid oil eudcation">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/latest-projects/cert-3.png" alt>
                                    </div>
                                    <div class="details">
                                        <div class="arrow"><a href="#"><i class="fi flaticon-next"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid chemical mechanical">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/latest-projects/cert-4.png" alt>
                                    </div>
                                    <div class="details">
                                        <div class="arrow"><a href="#"><i class="fi flaticon-next"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid oil industrial">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/latest-projects/cert-5.png" alt>
                                    </div>
                                    <div class="details">
                                        <div class="arrow"><a href="#"><i class="fi flaticon-next"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid mechanical industrial">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="assets/images/latest-projects/cert-6.png" alt>
                                    </div>
                                    <div class="details">
                                        <div class="arrow"><a href="#"><i class="fi flaticon-next"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end latest-projects-section -->



        
<script>
    // Add this JavaScript to your script
document.addEventListener("DOMContentLoaded", function () {
    var openPopupBtns = document.querySelectorAll(".gallery-container .grid .img-holder img");
    var popupContainer = document.querySelector(".popup-container");
    var closePopupBtn = document.querySelector(".close-popup-btn");
    var popupImg = document.querySelector(".popup-img");

    openPopupBtns.forEach(function (img) {
        img.addEventListener("click", function () {
            var imgSrc = img.src;
            popupImg.src = imgSrc;
            popupContainer.style.display = "flex";
        });
    });

    closePopupBtn.addEventListener("click", function () {
        popupContainer.style.display = "none";
    });

    popupContainer.addEventListener("click", function (event) {
        if (event.target === popupContainer) {
            popupContainer.style.display = "none";
        }
    });
});
</script>



<?php
include('footer.php');
?>