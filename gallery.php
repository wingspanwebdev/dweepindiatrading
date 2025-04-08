<?php
include 'header.php';
?>


<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-dark mb-4 animated slideInDown">Our Gallery</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page">Gallery</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Gallery Start -->
<div class="container-xxl contact py-5">
    <div class="container">
        <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium fst-italic text-primary">Our Gallery</p>
            <h1 class="display-6">If You Have Any Query, Please Contact Us</h1>
        </div>
        <div class="container text-center mt-5">
            <div class="row gallery mt-4">
                <div class="col-md-3 col-sm-6 mb-3">
                    <img src="img/aboutus1.jpg" alt="Image 1" class="img-fluid imagehight" onclick="openLightbox(this)" height="250px">
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <img src="img/aboutus2.jpg" alt="Image 2" class="img-fluid imagehight" onclick="openLightbox(this)" height="250px">
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <img src="img/aboutus3.jpg" alt="Image 3" class="img-fluid imagehight" onclick="openLightbox(this)" height="250px">
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <img src="img/aboutus4.jpg" alt="Image 4" class="img-fluid imagehight" onclick="openLightbox(this)" height="250px">
                </div>
            </div>
        </div>

        <div class="lightbox" id="lightbox" onclick="closeLightbox()">
            <span class="close">&times;</span>
            <img id="lightbox-img">
        </div>
    </div>
</div>
<!-- Gallery End -->



<?php
include 'footer.php';
?>