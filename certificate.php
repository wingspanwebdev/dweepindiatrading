<?php
include 'header.php';
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-dark mb-4 animated slideInDown">Company Certificate</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page">Certificate</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- certificate Start -->
<section class="certificate-container">
        <div class="container">
            <h2 class="text-center mb-4">Our Certificates</h2>
            <div class="row g-4">
                <!-- Certificate 1 -->
                <div class="col-md-4 col-sm-6">
                    <div class="certificate-card">
                        <img src="img/certificate1.jpg" alt="Certificate 1" class="certificate-img" data-bs-toggle="modal" data-bs-target="#certModal1">
                    </div>
                </div>

                <!-- Certificate 2 -->
                <div class="col-md-4 col-sm-6">
                    <div class="certificate-card">
                        <img src="img/certificate2.jpg" alt="Certificate 2" class="certificate-img" data-bs-toggle="modal" data-bs-target="#certModal2">
                    </div>
                </div>

                <!-- Certificate 3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="certificate-card">
                        <img src="img/certificate3.jpg" alt="Certificate 3" class="certificate-img" data-bs-toggle="modal" data-bs-target="#certModal3">
                    </div>
                </div>

                <!-- Certificate 4 -->
                <div class="col-md-4 col-sm-6">
                    <div class="certificate-card">
                        <img src="img/certificate4.jpg" alt="Certificate 4" class="certificate-img" data-bs-toggle="modal" data-bs-target="#certModal4">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Modal for Lightbox Effect -->
    <div class="modal fade" id="certModal1" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Certificate 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <img src="img/certificate1.jpg" class="modal-img" alt="Certificate 1">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="certModal2" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Certificate 2</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <img src="img/certificate2.jpg" class="modal-img" alt="Certificate 2">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="certModal3" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Certificate 3</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <img src="img/certificate3.jpg" class="modal-img" alt="Certificate 3">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="certModal4" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Certificate 4</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <img src="img/certificate4.jpg" class="modal-img" alt="Certificate 4">
                </div>
            </div>
        </div>
    </div>


<!-- certificate End -->




<?php
include 'footer.php';
?>