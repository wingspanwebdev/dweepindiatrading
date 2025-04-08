 <!-- Footer Start -->
 <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i><b>Office Adress</b> -  Durga Kutir, Goga gate, Bikaner, Rajasthan, India
                    Agriculture marekt yard office- 301, New Grain Mandi, Bikaner Rajasthan</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i><b>Sea-Port Office</b> -  42, mirza corner,adani port road, near hotel 4 way, Mundra, Gujarat</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+91 6367851403</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@dweepindiatrading.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="https://www.instagram.com/dweep_india_trading"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="https://www.facebook.com/share/19EaxijprZ/?mibextid=wwXIfr"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Products</a>
                    <a class="btn btn-link" href="">FAQ</a>
                    <a class="btn btn-link" href="">Gallery</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Product Category</h4>
                    <p class="mb-1">Oil Seeds</p>
                    <p class="mb-1">Spices</p>
                    <p class="mb-1">Powders</p>
                    <p class="mb-1">Dehydrated Item</p>
                    <p class="mb-1">Pulses and Grain</p>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium" href="#">Dweep India Trading</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
    function openTab(event, tabId) {
        // Hide all tab content
        document.querySelectorAll('.tab-content').forEach(tab => tab.classList.remove('active'));

        // Remove active class from all buttons
        document.querySelectorAll('.tab-button').forEach(button => button.classList.remove('active'));

        // Show the selected tab and highlight button
        document.getElementById(tabId).classList.add('active');
        event.currentTarget.classList.add('active');
    }

    

    $(document).ready(function() {
    $("#toggle-btn").click(function() {
        $("#social-icons").slideToggle(300);
    });
});

function openLightbox(img) {
            document.getElementById("lightbox-img").src = img.src;
            document.getElementById("lightbox").style.display = "flex";
        }
        function closeLightbox() {
            document.getElementById("lightbox").style.display = "none";
        }
    
</script>
</body>

</html>