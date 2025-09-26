 <?php
  $home = "active"; 
  $pageTitle = "examination and";
  include_once "head.php";   
?>

<body style="overflow:hidden">
    <!-----------------------------HEADER-------------------------->
    <!-- preloader -->
     <div class="preloaderBg" id="preloader">
    <div class="preloader-wrap">
        <div class="preloader-logo"></div>
        <div class="preloader-circle"></div>
    </div>
</div>
<script>
    window.addEventListener('load', function() {
  const preloader = document.getElementById('preloader');
  setTimeout(function() {
    preloader.style.transition = 'opacity 0.5s ease-in-out';
    preloader.style.opacity = '0';
    setTimeout(function() {
      preloader.style.display = 'none';
    }, 500); 
  }, 350);

  document.documentElement.style.overflowY = 'auto';
});
</script>

    <!-- 1 -->
    <header>
        <div class="top-nav">
            <div class="wrap">
                <div class=" d-flex justify-content-end">
                    <!-- 1 -->
                    <div class="d-flex align-items-center">
                        <!-- 1 -->
                        <span>
                            <svg class="svg-inline--fa fa-location-dot" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z">
                                </path>
                            </svg><!-- <i class="fa fa-location-dot"></i> Font Awesome fontawesome.com -->
                        </span>
                        <!-- 2 -->
                        <h6>7 Russell St, Leek, ST13 5JF</h6>
                    </div>
                    <!-- 2 -->
                    <div class="d-flex align-items-center">
                        <span><svg class="svg-inline--fa fa-envelope" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z">
                                </path>
                            </svg><!-- <i class="fa-solid fa-envelope"></i> Font Awesome fontawesome.com -->
                        </span>
                        <h6>
                            <a style="text-decoration: none; color: white"
                                href="mailto:dentist@russell-street.co.uk">dentist@russell-street.co.uk</a>
                        </h6>
                    </div>
                    <!-- 3 -->
                    <div class="d-flex align-items-center justify-content-center">
                        <button onclick="window.location.href = 'tel:01538 388822';">
                            <span><svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-phone"></i> Font Awesome fontawesome.com --></span>
                            01538 388822
                        </button>
                        <button data-bs-toggle="modal" data-bs-target="#bookconsultationmodal">
                            Book a Consultation
                        </button>
                    </div>
                    <!--  -->

                </div>
            </div>

        </div>
    </header>
    <!-- 2 -->
    <section class="perfect-smile-forall">
        <div class="main-navbar" id="nav_bar">
            <div class="wrap">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <!-- 1 -->
                        <div class="brand-btn">
                            <a class="navbar-brand" href="index.php"><img src="assets/a-images/logo-footer (1).png"
                                    alt="logo-footer"></a>
                            <button class="navbar-toggler" data-target="#navbarSupportedContent" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- 3 -->
                        <div class="collapse lateral-left navbar-collapse" id="navbarSupportedContent">

                            <div class="brand-sm">
                                <a class="navbar-b" href="index.php">
                                    <img src="assets/a-images/logo-footer (1).png" alt="logo-footer"></a>
                            </div>
                            <ul class="navbar-nav m-lg-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="about-us.php">About Us</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        aria-expanded="false">
                                        Treatments
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="examinations-hygiene.php">Examinations &amp;
                                                Hygiene</a></li>
                                        <li><a class="dropdown-item" href="restorative-dentistry.php">Restorative
                                                Dentistry</a></li>
                                        <li><a class="dropdown-item" href="invisalign.php">Invisalign</a></li>
                                        <li><a class="dropdown-item" href="nitime-aligners.php">NiTime Aligners</a></li>
                                        <li><a class="dropdown-item" href="composite-bonding.php">Composite Bonding</a>
                                        </li>
                                        <li><a class="dropdown-item" href="teeth-whitening.php">Teeth Whitening</a></li>
                                        <li><a class="dropdown-item" href="veeners.php">Veneers</a></li>
                                        <!--                                <li><a class="dropdown-item" href="implants.php">Implants</a></li>-->
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="smile-gallery.php">Smile Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pricing.php">Prices</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link green-button" href="contact.php">Contact Us</a>
                                </li>
                            </ul>
                            <!-- book consultation button startts  -->
                            <div class="d-md-flex b-con-div mt-lg-0 mt-3 d-lg-none justify-content-center">
                                <button data-bs-toggle="modal" data-bs-target="#bookconsultationmodal">
                                    Book a Consultation
                                </button>
                            </div>
                            <!-- book consultation button ends  -->
                            <ul class="icon-items">
                                <!-- <li><a href=""><span><i class="fa-solid fa-bag-shopping"></i></span></a></li>
                        <li><a href=""><span><i class="fa-solid fa-magnifying-glass"></i></span></a></li> -->
                                <li><a target="_blank"
                                        href="https://www.facebook.com/p/Russell-Street-Dental-Practice-100032389136697"><span><svg
                                                class="svg-inline--fa fa-facebook-f" aria-hidden="true"
                                                focusable="false" data-prefix="fab" data-icon="facebook-f" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                                </path>
                                            </svg><!-- <i class="fa-brands fa-facebook-f"></i> Font Awesome fontawesome.com --></span></a>
                                </li>
                                <li><a target="_blank"
                                        href="https://www.instagram.com/russellstreetdental.leek/"><span><svg
                                                class="svg-inline--fa fa-instagram" aria-hidden="true" focusable="false"
                                                data-prefix="fab" data-icon="instagram" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                                </path>
                                            </svg><!-- <i class="fa-brands fa-instagram"></i> Font Awesome fontawesome.com --></span></a>
                                </li>
                            </ul>

                        </div>
                        <!-- 4 -->

                        <!-- 5 -->

                        <!--  -->
                    </div>
                </nav>
            </div>
        </div>
    </section>
    <!-- 3 -->
    <div class="team-modal">
        <div class="modal fade" id="bookconsultationmodal" tabindex="-1" aria-labelledby="bookconsultationmodalLabel"
            aria-hidden="true" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="dentist-modal-bg">
                            <div class="consultation-modal">
                                <div>
                                    <p>You can now book in directly with a member of the team for a free consultation
                                        for Teeth Whitening and Clear Aligners.</p>
                                </div>
                                <div class="d-flex btn-div justify-content-center gap-2">
                                    <button type="button" class="green-btn"
                                        onclick="javascript:window.open('https://onlineappointment.carestack.uk/?dn=rsdp&amp;ln=1#/select-reason', '_blank');">Book
                                        A Consultation</button>
                                    <button type="button" class="green-btn" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 4 -->
    <section class="mst-header position-relative perfect-smile-forall">
        <div id="video-div">
            <!-- <video src="assets/videos/home-header-video.mp4" autoplay muted loop></video>
                <img src="assets/videos/home-header-mobile-gif.gif" alt="home-header-mobile-gif"> -->
            <video class="d-none d-md-block" src="assets/videos/home-header-video.mp4" autoplay="" loop=""
                muted></video>
            <img class="d-md-none d-block mobile-video" src="assets/a-images/home-header-mobile-gif.gif" alt="">
        </div>

        <div class="header-content">
            <div class="single-1">
                <div>
                    <div class="headings">
                        <h2 class="tag clr-green min-b local-heading">Your <br class="header-br"> Local Dentist<br
                                class="header-br"> in Leek</h2>
                        <h2 class="tag clr-green min-b welc-heading">Welcome to Russell Street Dental Practice</h2>
                        <!-- <h2 class="most-b clr-white">RUSSELL STREET DENTAL</h2> -->
                    </div>
                    <div class="btn-divs carsl_cnt">
                        <button class="green-btn" onclick="location.href='contact.php'">Contact Us</button>
                        <!--                            <button class="whit-btn" onclick="location.href='smile-gallery.php'">Smile Gallery</button>-->
                    </div>
                </div>
                <div class="img-logo">
                    <img src="assets/a-images/logo-footer (1).png" alt="logo-footer">
                </div>
            </div>
        </div>
    </section>
    <!------------------------------HEADER END---------------------->
    <!-- for circles 5-->
    <section class="index-treatments perfect-smile-forall">
        <div class="wrap">
            <div class="grid">
                <a data-aos="fade-up" href="examinations-hygiene.php" class="aos-init">
                    <div class="entit box-bot">
                        <div class="img-div green-bord">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 400 338.46"
                                style="enable-background:new 0 0 400 338.46;" xml:space="preserve">
                                <path class="st0"
                                    d="M92.03,67.64c3.4-1.23,5.15-5,3.91-8.39c-1.23-3.4-4.99-5.15-8.4-3.92C70.94,61.37,63.29,75.81,60.2,83.89	c-5.95,15.58-5.77,33.67,0.51,50.93c0.97,2.66,3.48,4.31,6.15,4.31c0.75,0,1.5-0.13,2.24-0.4c3.4-1.23,5.15-5,3.91-8.39	c-5.2-14.3-5.41-29.14-0.58-41.77C74.73,82.58,80.31,71.9,92.03,67.64z M257.44,258.81c-3.56-0.7-6.99,1.63-7.68,5.18	c-5.85,29.95-20.92,50.88-36.65,50.88c-11.25,0-26.21-7.47-26.21-72.07v-6.55c0-14.45-11.76-26.2-26.21-26.2	c-14.45,0-26.21,11.74-26.21,26.2v6.55c0,64.6-14.96,72.07-26.21,72.07c-21.31,0-39.31-36-39.31-78.63c0-4.79,0.25-9.59,0.7-14.28	c1.6-16.69-3.65-32.99-14.78-45.9c-8.11-9.42-14.44-20.28-18.81-32.29c-8.44-23.19-8.57-47.79-0.36-69.26	c8.08-21.14,23.3-36.71,42.87-43.83c31.37-11.42,67.84,1.66,90.78,32.55c2.16,2.89,6.26,3.5,9.17,1.35c2.9-2.16,3.51-6.26,1.35-9.17	c-2.94-3.95-6.1-7.6-9.4-11.03c22.01-17.14,48.58-22.3,72.33-13.64c6.21,2.26,12.12,5.5,17.59,9.62c2.89,2.19,7,1.61,9.17-1.28	c2.18-2.89,1.61-6.99-1.28-9.17c-6.5-4.91-13.57-8.78-21-11.48c-28.71-10.45-60.68-4.07-86.58,16.98	c-25.37-20.62-57.71-27.57-86.61-17.04C50.91,26.8,32.94,45.08,23.48,69.83c-9.33,24.42-9.23,52.27,0.29,78.41	c4.92,13.51,12.05,25.74,21.2,36.36c8.78,10.19,12.91,23.01,11.66,36.1c-0.49,5.1-0.76,10.33-0.76,15.53	c0,51.44,23.02,91.73,52.41,91.73c34.84,0,39.31-45.52,39.31-85.18v-6.55c0-7.22,5.88-13.1,13.1-13.1c7.23,0,13.1,5.87,13.1,13.1	v6.55c0,39.66,4.47,85.18,39.31,85.18c22.79,0,42.23-24.13,49.51-61.47C263.31,262.95,260.99,259.5,257.44,258.81z M285.17,52.8	c-54.19,0-98.27,44.08-98.27,98.27c0,54.19,44.09,98.27,98.27,98.27s98.27-44.08,98.27-98.27C383.45,96.88,339.36,52.8,285.17,52.8z	 M285.17,236.25c-46.97,0-85.17-38.21-85.17-85.17s38.21-85.17,85.17-85.17c46.97,0,85.17,38.21,85.17,85.17	S332.14,236.25,285.17,236.25z M319.85,120.23l-47.78,47.78l-21.57-21.57c-2.56-2.56-6.71-2.56-9.26,0c-2.56,2.56-2.56,6.71,0,9.26	l26.2,26.21c1.28,1.28,2.96,1.92,4.63,1.92c1.68,0,3.35-0.64,4.63-1.92l52.42-52.41c2.56-2.56,2.56-6.7,0-9.26	C326.55,117.68,322.41,117.68,319.85,120.23z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3>Examinations &amp; Hygiene</h3>
                            <!--                            <p>Competently parallel task researched data process.</p>-->
                        </div>
                    </div>
                </a>
                <a data-aos="fade-up" href="invisalign.php" class="aos-init">
                    <div class="entit ">
                        <div class="img-div blue-bord">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 400 338.46"
                                style="enable-background:new 0 0 400 338.46;" xml:space="preserve">
                                <path class="st0"
                                    d="M92.03,67.64c3.4-1.23,5.15-5,3.91-8.39c-1.23-3.4-4.99-5.15-8.4-3.92C70.94,61.37,63.29,75.81,60.2,83.89	c-5.95,15.58-5.77,33.67,0.51,50.93c0.97,2.66,3.48,4.31,6.15,4.31c0.75,0,1.5-0.13,2.24-0.4c3.4-1.23,5.15-5,3.91-8.39	c-5.2-14.3-5.41-29.14-0.58-41.77C74.73,82.58,80.31,71.9,92.03,67.64z M257.44,258.81c-3.56-0.7-6.99,1.63-7.68,5.18	c-5.85,29.95-20.92,50.88-36.65,50.88c-11.25,0-26.21-7.47-26.21-72.07v-6.55c0-14.45-11.76-26.2-26.21-26.2	c-14.45,0-26.21,11.74-26.21,26.2v6.55c0,64.6-14.96,72.07-26.21,72.07c-21.31,0-39.31-36-39.31-78.63c0-4.79,0.25-9.59,0.7-14.28	c1.6-16.69-3.65-32.99-14.78-45.9c-8.11-9.42-14.44-20.28-18.81-32.29c-8.44-23.19-8.57-47.79-0.36-69.26	c8.08-21.14,23.3-36.71,42.87-43.83c31.37-11.42,67.84,1.66,90.78,32.55c2.16,2.89,6.26,3.5,9.17,1.35c2.9-2.16,3.51-6.26,1.35-9.17	c-2.94-3.95-6.1-7.6-9.4-11.03c22.01-17.14,48.58-22.3,72.33-13.64c6.21,2.26,12.12,5.5,17.59,9.62c2.89,2.19,7,1.61,9.17-1.28	c2.18-2.89,1.61-6.99-1.28-9.17c-6.5-4.91-13.57-8.78-21-11.48c-28.71-10.45-60.68-4.07-86.58,16.98	c-25.37-20.62-57.71-27.57-86.61-17.04C50.91,26.8,32.94,45.08,23.48,69.83c-9.33,24.42-9.23,52.27,0.29,78.41	c4.92,13.51,12.05,25.74,21.2,36.36c8.78,10.19,12.91,23.01,11.66,36.1c-0.49,5.1-0.76,10.33-0.76,15.53	c0,51.44,23.02,91.73,52.41,91.73c34.84,0,39.31-45.52,39.31-85.18v-6.55c0-7.22,5.88-13.1,13.1-13.1c7.23,0,13.1,5.87,13.1,13.1	v6.55c0,39.66,4.47,85.18,39.31,85.18c22.79,0,42.23-24.13,49.51-61.47C263.31,262.95,260.99,259.5,257.44,258.81z M285.17,52.8	c-54.19,0-98.27,44.08-98.27,98.27c0,54.19,44.09,98.27,98.27,98.27s98.27-44.08,98.27-98.27C383.45,96.88,339.36,52.8,285.17,52.8z	 M285.17,236.25c-46.97,0-85.17-38.21-85.17-85.17s38.21-85.17,85.17-85.17c46.97,0,85.17,38.21,85.17,85.17	S332.14,236.25,285.17,236.25z M319.85,120.23l-47.78,47.78l-21.57-21.57c-2.56-2.56-6.71-2.56-9.26,0c-2.56,2.56-2.56,6.71,0,9.26	l26.2,26.21c1.28,1.28,2.96,1.92,4.63,1.92c1.68,0,3.35-0.64,4.63-1.92l52.42-52.41c2.56-2.56,2.56-6.7,0-9.26	C326.55,117.68,322.41,117.68,319.85,120.23z">
                                </path>
                            </svg>


                        </div>
                        <div>
                            <h3>Invisalign Aligners</h3>
                            <!--                            <p>Leverage other resource leveling convergence data.</p>-->
                        </div>
                    </div>
                </a>
                <a data-aos="fade-up" href="composite-bonding.php" class="aos-init">
                    <div class="entit ">
                        <div class="img-div green-bord">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 400 338.46"
                                style="enable-background:new 0 0 400 338.46;" xml:space="preserve">
                                <path class="st0"
                                    d="M92.03,67.64c3.4-1.23,5.15-5,3.91-8.39c-1.23-3.4-4.99-5.15-8.4-3.92C70.94,61.37,63.29,75.81,60.2,83.89	c-5.95,15.58-5.77,33.67,0.51,50.93c0.97,2.66,3.48,4.31,6.15,4.31c0.75,0,1.5-0.13,2.24-0.4c3.4-1.23,5.15-5,3.91-8.39	c-5.2-14.3-5.41-29.14-0.58-41.77C74.73,82.58,80.31,71.9,92.03,67.64z M257.44,258.81c-3.56-0.7-6.99,1.63-7.68,5.18	c-5.85,29.95-20.92,50.88-36.65,50.88c-11.25,0-26.21-7.47-26.21-72.07v-6.55c0-14.45-11.76-26.2-26.21-26.2	c-14.45,0-26.21,11.74-26.21,26.2v6.55c0,64.6-14.96,72.07-26.21,72.07c-21.31,0-39.31-36-39.31-78.63c0-4.79,0.25-9.59,0.7-14.28	c1.6-16.69-3.65-32.99-14.78-45.9c-8.11-9.42-14.44-20.28-18.81-32.29c-8.44-23.19-8.57-47.79-0.36-69.26	c8.08-21.14,23.3-36.71,42.87-43.83c31.37-11.42,67.84,1.66,90.78,32.55c2.16,2.89,6.26,3.5,9.17,1.35c2.9-2.16,3.51-6.26,1.35-9.17	c-2.94-3.95-6.1-7.6-9.4-11.03c22.01-17.14,48.58-22.3,72.33-13.64c6.21,2.26,12.12,5.5,17.59,9.62c2.89,2.19,7,1.61,9.17-1.28	c2.18-2.89,1.61-6.99-1.28-9.17c-6.5-4.91-13.57-8.78-21-11.48c-28.71-10.45-60.68-4.07-86.58,16.98	c-25.37-20.62-57.71-27.57-86.61-17.04C50.91,26.8,32.94,45.08,23.48,69.83c-9.33,24.42-9.23,52.27,0.29,78.41	c4.92,13.51,12.05,25.74,21.2,36.36c8.78,10.19,12.91,23.01,11.66,36.1c-0.49,5.1-0.76,10.33-0.76,15.53	c0,51.44,23.02,91.73,52.41,91.73c34.84,0,39.31-45.52,39.31-85.18v-6.55c0-7.22,5.88-13.1,13.1-13.1c7.23,0,13.1,5.87,13.1,13.1	v6.55c0,39.66,4.47,85.18,39.31,85.18c22.79,0,42.23-24.13,49.51-61.47C263.31,262.95,260.99,259.5,257.44,258.81z M285.17,52.8	c-54.19,0-98.27,44.08-98.27,98.27c0,54.19,44.09,98.27,98.27,98.27s98.27-44.08,98.27-98.27C383.45,96.88,339.36,52.8,285.17,52.8z	 M285.17,236.25c-46.97,0-85.17-38.21-85.17-85.17s38.21-85.17,85.17-85.17c46.97,0,85.17,38.21,85.17,85.17	S332.14,236.25,285.17,236.25z M319.85,120.23l-47.78,47.78l-21.57-21.57c-2.56-2.56-6.71-2.56-9.26,0c-2.56,2.56-2.56,6.71,0,9.26	l26.2,26.21c1.28,1.28,2.96,1.92,4.63,1.92c1.68,0,3.35-0.64,4.63-1.92l52.42-52.41c2.56-2.56,2.56-6.7,0-9.26	C326.55,117.68,322.41,117.68,319.85,120.23z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3>Composite Bonding</h3>
                            <!--                            <p>User generated content in real time offshoring.</p>-->
                        </div>
                    </div>
                </a>
                <a data-aos="fade-up" href="restorative-dentistry.php" class="aos-init">
                    <div class="entit ">
                        <div class="img-div blue-bord">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                                style="enable-background:new 0 0 50 50;" xml:space="preserve">

                                <path class="st0" d="M44.18,13.23c-1.1-2.89-3.2-5.02-5.91-6c-3.35-1.22-7.08-0.48-10.1,1.98C25.22,6.8,21.44,6,18.07,7.23
	c-2.71,0.98-4.8,3.12-5.91,6c-1.09,2.85-1.08,6.1,0.03,9.15c0.57,1.58,1.41,3,2.47,4.24c1.02,1.19,1.51,2.68,1.36,4.21
	c-0.06,0.59-0.09,1.2-0.09,1.81c0,6,2.69,10.7,6.11,10.7c4.06,0,4.59-5.31,4.59-9.94v-0.76c0-0.84,0.69-1.53,1.53-1.53
	c0.84,0,1.53,0.69,1.53,1.53v0.76c0,4.63,0.52,9.94,4.59,9.94c3.43,0,6.11-4.7,6.11-10.7c0-0.61-0.03-1.22-0.09-1.81
	c-0.15-1.53,0.34-3.02,1.36-4.21c1.07-1.24,1.9-2.67,2.47-4.24C45.26,19.33,45.27,16.08,44.18,13.23z M13.59,13.78
	c0.24-0.62,0.53-1.2,0.87-1.74l1.59,2.65c0.11,0.18,0.28,0.31,0.49,0.35c0.2,0.05,0.42,0.01,0.59-0.11l1.34-0.9l0.81,4.05
	l-1.27-1.27c-0.26-0.26-0.66-0.3-0.96-0.1l-1.77,1.18l-2.21-2.21C13.18,15.03,13.36,14.4,13.59,13.78z M42.71,21.86
	c-0.51,1.4-1.25,2.67-2.19,3.77c-1.3,1.51-1.91,3.41-1.72,5.35c0.05,0.55,0.08,1.11,0.08,1.67c0,4.97-2.1,9.17-4.59,9.17
	c-1.31,0-3.06-0.87-3.06-8.41v-0.76c0-1.69-1.37-3.06-3.06-3.06c-1.69,0-3.06,1.37-3.06,3.06v0.76c0,7.54-1.74,8.41-3.06,8.41
	c-2.49,0-4.59-4.2-4.59-9.17c0-0.56,0.03-1.12,0.08-1.67c0.19-1.95-0.43-3.85-1.72-5.35c-0.95-1.1-1.68-2.37-2.19-3.77
	c-0.5-1.38-0.75-2.79-0.75-4.18l1.75,1.75c0.26,0.26,0.66,0.3,0.96,0.1l1.77-1.18l2.61,2.61c0.15,0.15,0.34,0.22,0.54,0.22
	c0.12,0,0.25-0.03,0.36-0.09c0.3-0.16,0.45-0.49,0.39-0.82l-1.53-7.64c-0.05-0.25-0.22-0.46-0.46-0.56c-0.24-0.1-0.5-0.07-0.72,0.07
	l-1.63,1.08l-1.48-2.47c0.87-0.93,1.93-1.65,3.12-2.08c3-1.09,6.41-0.26,9.02,2.07c0.03,0.04,0.07,0.07,0.11,0.1
	c0.53,0.48,1.02,1.03,1.47,1.63c0.25,0.34,0.73,0.41,1.07,0.16c0.34-0.25,0.41-0.73,0.16-1.07c-0.34-0.46-0.71-0.89-1.1-1.3
	c2.57-2,5.67-2.6,8.44-1.59c2.28,0.83,4.06,2.65,5,5.11C43.71,16.28,43.7,19.15,42.71,21.86z M10.01,11.95l-2.87-1.05
	c-0.4-0.14-0.84,0.06-0.98,0.46c-0.14,0.4,0.06,0.84,0.46,0.98l2.87,1.05c0.09,0.03,0.17,0.05,0.26,0.05c0.31,0,0.61-0.19,0.72-0.5
	C10.62,12.53,10.41,12.1,10.01,11.95z M12.33,9.87c0.27-0.32,0.23-0.81-0.09-1.08L9.89,6.83C9.57,6.56,9.09,6.6,8.82,6.93
	C8.55,7.25,8.59,7.73,8.91,8l2.34,1.97c0.14,0.12,0.32,0.18,0.49,0.18C11.96,10.15,12.18,10.06,12.33,9.87z M9.49,19.79l-2.87,1.05
	c-0.4,0.14-0.6,0.58-0.46,0.98c0.11,0.31,0.41,0.5,0.72,0.5c0.09,0,0.18-0.01,0.26-0.05l2.87-1.05c0.4-0.14,0.6-0.58,0.46-0.98
	C10.33,19.85,9.89,19.65,9.49,19.79z M9.83,16.59c0-0.42-0.34-0.76-0.76-0.76H6c-0.42,0-0.76,0.34-0.76,0.76
	c0,0.42,0.34,0.76,0.76,0.76h3.06C9.48,17.36,9.83,17.01,9.83,16.59z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3>Restorative Dentistry</h3>
                            <!--                            <p>Engage fully tested process top line platform clients.</p>-->
                        </div>
                    </div>
                </a>
                <a data-aos="fade-up" href="teeth-whitening.php" class="aos-init">
                    <div class="entit ">
                        <div class="img-div green-bord">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                                style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                <path class="st0"
                                    d="M12.98,12.97c0.4-0.14,0.6-0.58,0.46-0.98c-0.14-0.4-0.58-0.6-0.98-0.46c-1.94,0.71-2.83,2.39-3.19,3.33
	c-0.69,1.82-0.67,3.93,0.06,5.94c0.11,0.31,0.41,0.5,0.72,0.5c0.09,0,0.18-0.01,0.26-0.05c0.4-0.14,0.6-0.58,0.46-0.98
	c-0.61-1.67-0.63-3.4-0.07-4.87C10.96,14.71,11.61,13.47,12.98,12.97z M43.16,29.59c-1.34,0-3.06-1.71-3.06-3.06
	c0-0.42-0.34-0.76-0.76-0.76s-0.76,0.34-0.76,0.76c0,1.34-1.71,3.06-3.06,3.06c-0.42,0-0.76,0.34-0.76,0.76
	c0,0.42,0.34,0.76,0.76,0.76c1.34,0,3.06,1.71,3.06,3.06c0,0.42,0.34,0.76,0.76,0.76s0.76-0.34,0.76-0.76
	c0-1.34,1.71-3.06,3.06-3.06c0.42,0,0.76-0.34,0.76-0.76C43.92,29.93,43.58,29.59,43.16,29.59z M39.34,31.92
	c-0.41-0.61-0.96-1.16-1.57-1.57c0.61-0.41,1.16-0.96,1.57-1.57c0.41,0.61,0.96,1.16,1.57,1.57C40.29,30.76,39.75,31.31,39.34,31.92
	z M27.87,13.53c-0.42,0-0.76,0.34-0.76,0.76c0,0.42,0.34,0.76,0.76,0.76c2.74,0,6.12,3.37,6.12,6.12c0,0.42,0.34,0.76,0.76,0.76
	s0.76-0.34,0.76-0.76c0-2.74,3.37-6.12,6.12-6.12c0.42,0,0.76-0.34,0.76-0.76c0-0.42-0.34-0.76-0.76-0.76
	c-2.74,0-6.12-3.37-6.12-6.12c0-0.42-0.34-0.76-0.76-0.76S33.98,7,33.98,7.42C33.98,10.16,30.61,13.53,27.87,13.53z M34.75,10.26
	c0.86,1.66,2.37,3.17,4.04,4.04c-1.66,0.86-3.17,2.37-4.04,4.04c-0.86-1.66-2.37-3.17-4.04-4.04
	C32.38,13.43,33.88,11.93,34.75,10.26z M35.95,24.56c0.21-0.37,0.09-0.83-0.28-1.04c-0.37-0.21-0.83-0.09-1.04,0.28
	c-0.38,0.66-0.81,1.27-1.29,1.82c-1.3,1.51-1.91,3.41-1.72,5.36c0.05,0.55,0.08,1.11,0.08,1.67c0,4.97-2.1,9.17-4.59,9.17
	c-1.31,0-3.06-0.87-3.06-8.41v-0.76c0-1.69-1.37-3.06-3.06-3.06c-1.69,0-3.06,1.37-3.06,3.06v0.76c0,7.54-1.74,8.41-3.06,8.41
	c-2.49,0-4.59-4.2-4.59-9.17c0-0.56,0.03-1.12,0.08-1.67c0.19-1.95-0.42-3.85-1.72-5.36c-0.95-1.1-1.69-2.37-2.2-3.77
	c-0.98-2.71-1-5.57-0.04-8.08c0.94-2.47,2.72-4.28,5-5.11c3.66-1.33,7.92,0.19,10.59,3.8c0.25,0.34,0.73,0.41,1.07,0.16
	c0.34-0.25,0.41-0.73,0.16-1.07c-0.34-0.46-0.71-0.89-1.1-1.29c2.57-2,5.67-2.6,8.44-1.59c0.19,0.07,0.37,0.15,0.55,0.24
	c0,0,0.05,0.02,0.05,0.03c0.38,0.18,0.81,0,0.99-0.39c0.18-0.38-0.02-0.85-0.4-1.03c-0.22-0.1-0.44-0.2-0.67-0.29
	c-3.35-1.22-7.08-0.47-10.1,1.98c-2.96-2.4-6.73-3.22-10.1-1.99c-2.71,0.98-4.8,3.12-5.91,6c-1.09,2.85-1.08,6.1,0.03,9.15
	c0.57,1.57,1.41,3,2.47,4.24c1.02,1.19,1.5,2.68,1.36,4.21c-0.06,0.59-0.09,1.2-0.09,1.81c0,6,2.69,10.7,6.12,10.7
	c4.07,0,4.59-5.31,4.59-9.94v-0.76c0-0.84,0.69-1.53,1.53-1.53s1.53,0.69,1.53,1.53v0.76c0,4.63,0.52,9.94,4.59,9.94
	c3.43,0,6.12-4.7,6.12-10.7c0-0.61-0.03-1.22-0.09-1.81c-0.15-1.53,0.34-3.02,1.36-4.21C35.03,26,35.52,25.31,35.95,24.56z"></path>
                            </svg>

                        </div>
                        <div>
                            <h3>Teeth Whitening</h3>
                            <!--                            <p>Incubate standards great channels scalable benefits.</p>-->
                        </div>
                    </div>
                </a>
                <a data-aos="fade-up" href="veeners.php" class="aos-init">
                    <div class="entit ">
                        <div class="img-div blue-bord">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                                style="enable-background:new 0 0 50 50;" xml:space="preserve">

                                <path class="st0" d="M41.01,13.23c-1.1-2.89-3.2-5.02-5.91-6C31.76,6.01,28.03,6.75,25,9.21C22.04,6.8,18.27,6,14.9,7.23
	c-2.71,0.98-4.8,3.12-5.91,6c-1.09,2.85-1.08,6.1,0.03,9.15c0.57,1.57,1.4,3,2.47,4.24c1.02,1.19,1.51,2.68,1.36,4.21
	c-0.06,0.6-0.09,1.21-0.09,1.81c0,6,2.69,10.7,6.11,10.7c4.23,0,4.59-4.15,4.59-8.41v-0.76c0-0.84,0.69-1.53,1.53-1.53
	c0.84,0,1.53,0.69,1.53,1.53v0.76c0,4.25,0.35,8.41,4.59,8.41c3.43,0,6.11-4.7,6.11-10.7c0-0.61-0.03-1.22-0.09-1.81
	c-0.15-1.53,0.34-3.02,1.36-4.21c1.07-1.24,1.9-2.67,2.47-4.24C42.09,19.33,42.1,16.08,41.01,13.23z M35.62,30.98
	c0.05,0.55,0.08,1.11,0.08,1.67c0,4.97-2.1,9.17-4.59,9.17c-2.03,0-3.06-1.06-3.06-6.88v-0.76c0-1.69-1.37-3.06-3.06-3.06
	c-1.69,0-3.06,1.37-3.06,3.06v0.76c0,5.82-1.03,6.88-3.06,6.88c-2.49,0-4.59-4.2-4.59-9.17c0-0.56,0.03-1.12,0.08-1.67
	c0.14-1.47-0.18-2.92-0.9-4.19c3.19,0.92,7.84,1.27,11.52,1.27c3.69,0,8.33-0.35,11.52-1.27C35.8,28.06,35.48,29.51,35.62,30.98z
	 M39.54,21.86c-0.34,0.93-0.78,1.79-1.32,2.59c-1.91,1.23-7.29,2.08-13.22,2.08c-5.93,0-11.31-0.85-13.22-2.08
	c-0.53-0.8-0.98-1.66-1.32-2.59c-0.98-2.71-1-5.57-0.04-8.08c0.94-2.47,2.72-4.28,5-5.11c3-1.09,6.41-0.26,9.02,2.07
	c0.03,0.04,0.07,0.07,0.11,0.1c0.53,0.48,1.02,1.03,1.47,1.63c0.25,0.34,0.73,0.41,1.07,0.16c0.34-0.25,0.41-0.73,0.16-1.07
	c-0.34-0.46-0.71-0.89-1.1-1.3c2.57-2,5.67-2.6,8.44-1.59c2.28,0.83,4.06,2.65,5,5.11C40.54,16.28,40.52,19.15,39.54,21.86z
	 M16.47,11.54c-1.94,0.71-2.83,2.39-3.19,3.33c-0.7,1.82-0.67,3.93,0.06,5.94c0.11,0.31,0.41,0.5,0.72,0.5
	c0.09,0,0.18-0.01,0.26-0.05c0.4-0.14,0.6-0.58,0.46-0.98c-0.61-1.67-0.63-3.4-0.07-4.87c0.27-0.7,0.92-1.94,2.28-2.44
	c0.4-0.14,0.6-0.58,0.46-0.98C17.3,11.6,16.86,11.39,16.47,11.54z"></path>
                            </svg>

                        </div>
                        <div>
                            <h3>Porcelain Veneers</h3>
                            <!--                            <p>Synthesize integrated schemas with networks.</p>-->
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- for two cards main 6 -->
    <section class="d-professionals perfect-smile-forall">
        <div class="wrap">
            <div class="grid">
                <div class="img-div aos-init" data-aos="fade-up">
                    <img src="assets/a-images/img-dental-professionals-home.webp" alt="dental-professionals">
                </div>
                <div class="content align-self-center aos-init" data-aos="fade-down">
                    <div>
                        <div class="headings aos-init" data-aos="zoom-in">
                            <h3 class="clr-blue2 min-b">The Dental</h3>
                            <h2 class="clr-blue3 most-b">Professionals</h2>
                        </div>
                        <div class="para aos-init" data-aos="zoom-in-up">
                            <p>Sam and the team welcome you to Russell Street Dental Practice, where we strive to
                                achieve dental excellence. We take pride in our ability to deliver high quality dental
                                care using the best materials, cutting edge equipment and modern techniques. From
                                general dentistry, to advanced cosmetic changes and everything in between, Russell
                                Street Dental has you covered.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7th part -->
    <section class="card-main">
        <div class="wrap">
            <h2 class="tag clr-blue3  min-b d-block d-md-none">Meet the team</h2>
            <div class="container-full">

                <div class="tm-cr c-thre owl-carousel owl-theme" id="tm-cr">
                    <!-- <div class="entity item1">
                        <div class="bg-img">
                            <img src="https://cms.smile-mc.co.uk/assets/Russell/team/349759709.webp" alt="">
                            <div class="hover-efct"></div>
                        </div>
                        <div class="content">
                            <h5>Dental Hygienist</h5>
                            <h3 class="clr-white">Kelly <strong>Teburi</strong></h3>
                           
                            <div class="para">
                                <p>Kelly qualified in 2001 as a Dental Hygienist from Manchester Dental
                                    Hospital. She has worked at Russell Dental Practice since 2021.
                                </p>
                                <div>During her time here she has developed a special relationship with her
                                    patients to make seeing the hygienist an enjoyable experience.
                                </div>
                                <div>Laughter can be regularly heard from her surgery as she likes to make the
                                    appointment as enjoyable as possible, making the patients always want to
                                    come back.
                                </div>
                                <div>Her speciality is treating nervous patients.
                                </div>
                                <div>She does this by making the patients feel in control of their own treatment
                                    with reassurance and education.</div>
                                <p></p>
                            </div>
                            <div class="btn-logos">
                               >
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal94">Read
                                    More</button>
                            </div>
                        </div>
                    </div> -->
                    <div class="entity item2">
                        <div class="bg-img">
                            <img src="https://cms.smile-mc.co.uk/assets/Russell/team/347719074.webp" alt="">
                            <div class="hover-efct"></div>
                        </div>
                        <div class="content">
                            <h5>Trainee Dental Nurse</h5>
                            <h3 class="clr-white">Emily <strong></strong></h3>
                            <!--                    <h5 class="clr-white">GDC No: 271535</h5>-->
                            <!-- <h5 class="clr-white"><a class="clr-white" href="https://olr.gdc-uk.org/SearchRegister/SearchResult?RegistrationNumber=271535" target="_blank">GDC No: 271535</a></h5> -->
                            <div class="para">
                                <p>Emily joined the practice as a trainee dental nurse in May 2023, she loves
                                    learning about oral health and assisting our amazing dental team in
                                    providing the best dental care.</p>
                                <div>Outside of work she enjoys trying out new recipes, spending time with
                                    friends and family and enjoys taking long walks in new areas, she also loves
                                    to travel.</div>
                                <p></p>
                            </div>
                            <div class="btn-logos">
                                <!-- <button onclick="location.href='about-us.php'">Read More</button> -->
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal96">Read
                                    More</button>
                            </div>
                        </div>
                    </div>
                    <div class="entity item3">
                        <div class="bg-img">
                            <img src="https://cms.smile-mc.co.uk/assets/Russell/team/105826253.webp" alt="">
                            <div class="hover-efct"></div>
                        </div>
                        <div class="content">
                            <h5>Dental Nurse</h5>
                            <h3 class="clr-white">Aimee <strong>Underwood</strong></h3>
                            <!--                    <h5 class="clr-white">GDC No: 271535</h5>-->
                            <!-- <h5 class="clr-white"><a class="clr-white" href="https://olr.gdc-uk.org/SearchRegister/SearchResult?RegistrationNumber=271535" target="_blank">GDC No: 271535</a></h5> -->
                            <div class="para">
                                <p>Aimee qualified in May 2023 and joined the team here at Russell Street in
                                    January 2024. Aimee loves all aspects of Dental Nursing, and particularly
                                    enjoys learning new things. She is excited to develop her nursing career
                                    further. Outside&nbsp;of work, Aimee enjoys spending time with her friends
                                    and family, going to comedy shows and going on long walks with her dog.</p>
                            </div>
                            <div class="btn-logos">
                                <!-- <button onclick="location.href='about-us.php'">Read More</button> -->
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal93">Read
                                    More</button>
                            </div>
                        </div>
                    </div>
                    <div class="entity item4">
                        <div class="bg-img">
                            <img src="https://cms.smile-mc.co.uk/assets/Russell/team/1634703716.webp" alt="">
                            <div class="hover-efct"></div>
                        </div>
                        <div class="content">
                            <h5>Principal Dentist</h5>
                            <h3 class="clr-white">Sam <strong>Chapman</strong></h3>
                            <!--                    <h5 class="clr-white">GDC No: 271535</h5>-->
                            <!-- <h5 class="clr-white"><a class="clr-white" href="https://olr.gdc-uk.org/SearchRegister/SearchResult?RegistrationNumber=271535" target="_blank">GDC No: 271535</a></h5> -->
                            <div class="para">
                                <p>Since graduating in 2017, Sam has worked in numerous roles across the country
                                    ranging from general dentistry to Maxillofacial Surgery. He has completed
                                    further qualifications in endodontics (root canals), Advanced restorative
                                    and cosmetic dentistry, orthodontics (invisalign) and has started on a
                                    year-long programme to be able to place implants. Sam is a keen educator,
                                    and while he has dedicated many hours to ensure he is the best dentist he
                                    can be, he also makes sure that all his patients are given the time they
                                    need to fully&nbsp;understand&nbsp;their own oral health needs. With the use
                                    of cameras, radiographs and a terrible sense of humour, Sam will guide you
                                    on your journey to the smile you've always wanted. Sam is a friendly face at
                                    the practice, so if you have any questions about how he can help you with
                                    your smile, or just a general chit chat, he will be happy to help!</p>
                            </div>
                            <div class="btn-logos">
                                <!-- <button onclick="location.href='about-us.php'">Read More</button> -->
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal83">Read
                                    More</button>
                            </div>
                        </div>
                    </div>
                    <div class="entity item5">
                        <div class="bg-img">
                            <img src="https://cms.smile-mc.co.uk/assets/Russell/team/1998403423.webp" alt="">
                            <div class="hover-efct"></div>
                        </div>
                        <div class="content">
                            <h5>Dentist</h5>
                            <h3 class="clr-white">Emma <strong>Sunderland</strong></h3>
                            <!--                    <h5 class="clr-white">GDC No: 271535</h5>-->
                            <!-- <h5 class="clr-white"><a class="clr-white" href="https://olr.gdc-uk.org/SearchRegister/SearchResult?RegistrationNumber=271535" target="_blank">GDC No: 271535</a></h5> -->
                            <div class="para">
                                <p>Emma is an enthusiastic&nbsp;and driven dentist who is passionate about
                                    delivering the highest&nbsp;levels of dental care to all patients. Emma
                                    studied&nbsp;at the University&nbsp;of Manchester before beginning work in
                                    General Practice. Since graduating, Emma has undertaken&nbsp;a
                                    number&nbsp;of postgraduate courses. These include Invisalign, advanced
                                    aesthetic restorative dentistry and endodontics (root canals). Outside of
                                    work, Emma keeps busy playing netball, walking her dog and spending time
                                    with friends and family.</p>
                            </div>
                            <div class="btn-logos">
                                <!-- <button onclick="location.href='about-us.php'">Read More</button> -->
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal84">Read
                                    More</button>
                            </div>
                        </div>
                    </div>
                    <div class="entity item7">
                        <div class="bg-img">
                            <img src="https://cms.smile-mc.co.uk/assets/Russell/team/349759709.webp" alt="">
                            <div class="hover-efct"></div>
                        </div>
                        <div class="content">
                            <h5>Dental Hygienist</h5>
                            <h3 class="clr-white">Kelly <strong>Teburi</strong></h3>
                            <!--                    <h5 class="clr-white">GDC No: 271535</h5>-->
                            <!-- <h5 class="clr-white"><a class="clr-white" href="https://olr.gdc-uk.org/SearchRegister/SearchResult?RegistrationNumber=271535" target="_blank">GDC No: 271535</a></h5> -->
                            <div class="para">
                                <p>Kelly qualified in 2001 as a Dental Hygienist from Manchester Dental
                                    Hospital. She has worked at Russell Dental Practice since 2021.
                                </p>
                                <div>During her time here she has developed a special relationship with her
                                    patients to make seeing the hygienist an enjoyable experience.
                                </div>
                                <div>Laughter can be regularly heard from her surgery as she likes to make the
                                    appointment as enjoyable as possible, making the patients always want to
                                    come back.
                                </div>
                                <div>Her speciality is treating nervous patients.
                                </div>
                                <div>She does this by making the patients feel in control of their own treatment
                                    with reassurance and education.</div>
                                <p></p>
                            </div>
                            <div class="btn-logos">
                                <!-- <button onclick="location.href='about-us.php'">Read More</button> -->
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal94">Read
                                    More</button>
                            </div>
                        </div>
                    </div>
                    <div class="entity item6">
                        <div class="bg-img">
                            <img src="https://cms.smile-mc.co.uk/assets/Russell/team/1411793548.webp" alt="">
                            <div class="hover-efct"></div>
                        </div>
                        <div class="content">
                            <h5>Dental Nurse</h5>
                            <h3 class="clr-white">Jess <strong>Holt</strong></h3>
                            <!--                    <h5 class="clr-white">GDC No: 271535</h5>-->
                            <!-- <h5 class="clr-white"><a class="clr-white" href="https://olr.gdc-uk.org/SearchRegister/SearchResult?RegistrationNumber=271535" target="_blank">GDC No: 271535</a></h5> -->
                            <div class="para">
                                <p>Jess qualified in 2015 and has worked here at Russell Street Dental Practice
                                    since 2017. Jess is enthusiastic about all things dentistry. Jess works with
                                    all members of the dental team and also nurses along side our visiting
                                    Implantologist. She will go above and beyond to help patients through their
                                    dental journey with a little help from her bright smile and caring nature.
                                    She lives locally with her husband and two young children. She enjoys days
                                    out with her family and friends, eating out and catching up on plenty of
                                    Netflix.</p>
                            </div>
                            <div class="btn-logos">
                                <!-- <button onclick="location.href='about-us.php'">Read More</button> -->
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal93">Read
                                    More</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        </div>
    </section>
    <!-- MODALS ........... -->
    <div class="team-modal">
        <!-- 196 -->
        <div class="modal fade" id="exampleModal96" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content position-relative">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="dentist-modal-bg">
                            <div class=" dr-header container-fluid">
                                <div class="row flex-row-reverse align-items-center">
                                    <div class="col-lg-7 py-lg-0 py-3">
                                        <h3>Trainee Dental Nurse</h3>
                                        <div class="heading">
                                            <h1>
                                                <small><u>Emily</u></small> <br>
                                            </h1>
                                        </div>





                                        <div class="content text-dark">
                                            <p>Emily joined the practice as a trainee dental nurse in May 2023, she
                                                loves learning about oral health and assisting our amazing dental team
                                                in providing the best dental care.</p>
                                            <div>Outside of work she enjoys trying out new recipes, spending time with
                                                friends and family and enjoys taking long walks in new areas, she also
                                                loves to travel.</div>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 align-self-end position-relative pak-img">
                                        <div class="img-div">
                                            <img src="https://cms.smile-mc.co.uk/assets/Russell/team/301475244.webp"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- 93 -->
        <div class="modal fade" id="exampleModal93" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content position-relative">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="dentist-modal-bg">
                            <div class=" dr-header container-fluid">
                                <div class="row flex-row-reverse align-items-center">
                                    <div class="col-lg-7 py-lg-0 py-3">
                                        <h3>Dental Nurse</h3>
                                        <div class="heading">
                                            <h1>
                                                <small><u>Jess</u></small> <br>
                                                Holt
                                            </h1>
                                        </div>

                                        <h5><a class="clr-white"
                                                href="https://olr.gdc-uk.org/SearchRegister/SearchResult?RegistrationNumber=288856"
                                                target="_blank">GDC No: 288856</a></h5>

                                        <!-- <h5 class="clr-blue">BDS Hons (LON) BSc Hons (KCL)</h5> -->


                                        <div class="content text-dark">
                                            <p>Jess qualified in 2015 and has worked here at Russell Street Dental
                                                Practice since 2017. Jess is enthusiastic about all things dentistry.
                                                Jess works with all members of the dental team and also nurses along
                                                side our visiting Implantologist. She will go above and beyond to help
                                                patients through their dental journey with a little help from her bright
                                                smile and caring nature. She lives locally with her husband and two
                                                young children. She enjoys days out with her family and friends, eating
                                                out and catching up on plenty of Netflix.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 align-self-end position-relative">
                                        <div class="img-div">
                                            <img src="https://cms.smile-mc.co.uk/assets/Russell/team/1557710173.webp"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--84  -->

        <div class="modal fade" id="exampleModal84" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content position-relative">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="dentist-modal-bg">
                            <div class=" dr-header container-fluid">
                                <div class="row flex-row-reverse align-items-center">
                                    <div class="col-lg-7 py-lg-0 py-3">
                                        <h3>Dentist</h3>
                                        <div class="heading">
                                            <h1>
                                                <small><u>Emma</u></small> <br>
                                                Sunderland
                                            </h1>
                                        </div>

                                        <h5><a class="clr-white"
                                                href="https://olr.gdc-uk.org/SearchRegister/SearchResult?RegistrationNumber=290147"
                                                target="_blank">GDC No: 290147</a></h5>

                                        <!-- <h5 class="clr-blue">BDS Hons (LON) BSc Hons (KCL)</h5> -->

                                        <h5 class="clr-blue">BDS</h5>

                                        <div class="content text-dark">
                                            <p>Emma is an enthusiastic&nbsp;and driven dentist who is passionate about
                                                delivering the highest&nbsp;levels of dental care to all patients. Emma
                                                studied&nbsp;at the University&nbsp;of Manchester before beginning work
                                                in General Practice. Since graduating, Emma has undertaken&nbsp;a
                                                number&nbsp;of postgraduate courses. These include Invisalign, advanced
                                                aesthetic restorative dentistry and endodontics (root canals). Outside
                                                of work, Emma keeps busy playing netball, walking her dog and spending
                                                time with friends and family.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 align-self-end position-relative">
                                        <div class="img-div">
                                            <img src="https://cms.smile-mc.co.uk/assets/Russell/team/1583436320.webp"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- 99 -->
        <div class="modal fade" id="exampleModal99" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content position-relative">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="dentist-modal-bg">
                            <div class=" dr-header container-fluid">
                                <div class="row flex-row-reverse align-items-center">
                                    <div class="col-lg-7 py-lg-0 py-3">
                                        <h3>Dental Nurse</h3>
                                        <div class="heading">
                                            <h1>
                                                <small><u>Aimee</u></small> <br>
                                                Underwood
                                            </h1>
                                        </div>

                                        <h5><a class="clr-white"
                                                href="https://olr.gdc-uk.org/SearchRegister/SearchResult?RegistrationNumber=311836"
                                                target="_blank">GDC No: 311836</a></h5>

                                        <!-- <h5 class="clr-blue">BDS Hons (LON) BSc Hons (KCL)</h5> -->


                                        <div class="content text-dark">
                                            <p>Aimee qualified in May 2023 and joined the team here at Russell Street in
                                                January 2024. Aimee loves all aspects of Dental Nursing, and
                                                particularly enjoys learning new things. She is excited to develop her
                                                nursing career further. Outside&nbsp;of work, Aimee enjoys spending time
                                                with her friends and family, going to comedy shows and going on long
                                                walks with her dog.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 align-self-end position-relative">
                                        <div class="img-div">
                                            <img src="https://cms.smile-mc.co.uk/assets/Russell/team/2121876364.webp"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- 94 -->

        <div class="modal fade" id="exampleModal94" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content position-relative">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="dentist-modal-bg">
                            <div class=" dr-header container-fluid">
                                <div class="row flex-row-reverse align-items-center">
                                    <div class="col-lg-7 py-lg-0 py-3">
                                        <h3>Dental Hygienist</h3>
                                        <div class="heading">
                                            <h1>
                                                <small><u>Kelly</u></small> <br>
                                                Teburi
                                            </h1>
                                        </div>

                                        <h5><a class="clr-white"
                                                href="https://olr.gdc-uk.org/SearchRegister/SearchResult?RegistrationNumber=5886"
                                                target="_blank">GDC No: 5886</a></h5>

                                        <!-- <h5 class="clr-blue">BDS Hons (LON) BSc Hons (KCL)</h5> -->


                                        <div class="content text-dark">
                                            <p>Kelly qualified in 2001 as a Dental Hygienist from Manchester Dental
                                                Hospital. She has worked at Russell Dental Practice since 2021.
                                            </p>
                                            <div>During her time here she has developed a special relationship with her
                                                patients to make seeing the hygienist an enjoyable experience.
                                            </div>
                                            <div>Laughter can be regularly heard from her surgery as she likes to make
                                                the appointment as enjoyable as possible, making the patients always
                                                want to come back.
                                            </div>
                                            <div>Her speciality is treating nervous patients.
                                            </div>
                                            <div>She does this by making the patients feel in control of their own
                                                treatment with reassurance and education.</div>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 align-self-end position-relative">
                                        <div class="img-div">
                                            <img src="https://cms.smile-mc.co.uk/assets/Russell/team/824644429.webp"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- 83 -->

        <div class="modal fade" id="exampleModal83" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content position-relative">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="dentist-modal-bg">
                            <div class=" dr-header container-fluid">
                                <div class="row flex-row-reverse align-items-center">
                                    <div class="col-lg-7 py-lg-0 py-3">
                                        <h3>Principal Dentist</h3>
                                        <div class="heading">
                                            <h1>
                                                <small><u>Sam</u></small> <br>
                                                Chapman
                                            </h1>
                                        </div>

                                        <h5><a class="clr-white"
                                                href="https://olr.gdc-uk.org/SearchRegister/SearchResult?RegistrationNumber=271535"
                                                target="_blank">GDC No: 271535</a></h5>

                                        <!-- <h5 class="clr-blue">BDS Hons (LON) BSc Hons (KCL)</h5> -->

                                        <h5 class="clr-blue">BDS, PgDip Advanced Aesthetic and Restorative Dentistry,
                                            PgDip Endodontics</h5>

                                        <div class="content text-dark">
                                            <p>Since graduating in 2017, Sam has worked in numerous roles across the
                                                country ranging from general dentistry to Maxillofacial Surgery. He has
                                                completed further qualifications in endodontics (root canals), Advanced
                                                restorative and cosmetic dentistry, orthodontics (invisalign) and has
                                                started on a year-long programme to be able to place implants. Sam is a
                                                keen educator, and while he has dedicated many hours to ensure he is the
                                                best dentist he can be, he also makes sure that all his patients are
                                                given the time they need to fully&nbsp;understand&nbsp;their own oral
                                                health needs. With the use of cameras, radiographs and a terrible sense
                                                of humour, Sam will guide you on your journey to the smile you've always
                                                wanted. Sam is a friendly face at the practice, so if you have any
                                                questions about how he can help you with your smile, or just a general
                                                chit chat, he will be happy to help!</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 align-self-end position-relative">
                                        <div class="img-div">
                                            <img src="https://cms.smile-mc.co.uk/assets/Russell/team/799881994.webp"
                                                alt="">
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
    <!-- card-with 4 -->
    <!-- 8th part -->
    <section class="clients-with">
        <div class="wrap">
            <div class="heading-wrap py-4 d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="clr-blue2 min-b">Patients With A</h3>
                    <h2 class="clr-blue3 most-b">Reason To Smile</h2>
                </div>
                <div class="btn-div"><button onclick="location.href='smile-gallery.php'" class="client-test">Smile
                        Gallery</button></div>
            </div>
<div class="team-carousel tm-cr owl-carousel owl-theme" id="team-carousel">
    <div class="item">
        <div class="profile d-flex justify-content-between">
            <div class="headings">
                <h4>A Twigg</h4>
            </div>
            <div class="img-div">
                <img src="assets/a-images/logo-footer.png" alt="logo-footer">
            </div>
        </div>
        <div class="para">
            <p>Normally, I am very anxious, when I need a filling as I don’t like needles. I was even more nervous, when my dentist of 17 years left and I had to have a filling by the new dentist. I found Sam to be calm; friendly and efficient, which put me at ease.<br><br><br></p>
        </div>
    </div>
    <div class="item">
        <div class="profile d-flex justify-content-between">
            <div class="headings">
                <h4>Richard Goldstraw</h4>
            </div>
            <div class="img-div">
                <img src="assets/a-images/logo-footer.png" alt="logo-footer">
            </div>
        </div>
        <div class="para">
            <p>Sam the new dentist is fantastic and today I met the hygienist Kelly who is excellent no longer scared of going to the dentist thank team<br><br><br></p>
        </div>
    </div>
    <div class="item">
        <div class="profile d-flex justify-content-between">
            <div class="headings">
                <h4>Marie Claire</h4>
            </div>
            <div class="img-div">
                <img src="assets/a-images/logo-footer.png" alt="logo-footer">
            </div>
        </div>
        <div class="para">
            <p>This is the most kindest dentist surgery I have been to. As someone who is nervous of going to the dentist, the ease they put me at and care they gave me was wonderful. Can’t be more grateful.<br><br><br></p>
        </div>
    </div>
       <div class="item">
        <div class="profile d-flex justify-content-between">
            <div class="headings">
                <h4>A Twigg</h4>
            </div>
            <div class="img-div">
                <img src="assets/a-images/logo-footer.png" alt="logo-footer">
            </div>
        </div>
        <div class="para">
            <p>Normally, I am very anxious, when I need a filling as I don’t like needles. I was even more nervous, when my dentist of 17 years left and I had to have a filling by the new dentist. I found Sam to be calm; friendly and efficient, which put me at ease.<br><br><br></p>
        </div>
    </div>
    <div class="item">
        <div class="profile d-flex justify-content-between">
            <div class="headings">
                <h4>Richard Goldstraw</h4>
            </div>
            <div class="img-div">
                <img src="assets/a-images/logo-footer.png" alt="logo-footer">
            </div>
        </div>
        <div class="para">
            <p>Sam the new dentist is fantastic and today I met the hygienist Kelly who is excellent no longer scared of going to the dentist thank team<br><br><br></p>
        </div>
    </div>
    <div class="item">
        <div class="profile d-flex justify-content-between">
            <div class="headings">
                <h4>Marie Claire</h4>
            </div>
            <div class="img-div">
                <img src="assets/a-images/logo-footer.png" alt="logo-footer">
            </div>
        </div>
        <div class="para">
            <p>This is the most kindest dentist surgery I have been to. As someone who is nervous of going to the dentist, the ease they put me at and care they gave me was wonderful. Can’t be more grateful.<br><br><br></p>
        </div>
    </div>
</div>
                </div>
        <!-- </div> -->
    </section>

    <!-- 9th part -->
    <section class="perfect-smile perfect-smile-forall">
        <div class="wrap">
            <div class="row">
                <div class="col-lg-6 mb-lg-0 mb-3">
                    <div class="headingss">
                        <h3 class="clr-blue3 min-b">See Our</h3>
                        <h2 class="clr-blue2 most-b">Beautiful Smiles</h2>
                    </div>
                    <div class="perfect-smile-car owl-carousel owl-theme">
                        <div class="item">
                            <img src="assets/a-images/3.webp" alt="Smile-Gallery3">
                        </div>
                        <div class="item">
                            <img src="assets/a-images/8.webp" alt="Smile-Gallery8">
                        </div>
                        <div class="item">
                            <img src="assets/a-images/9.webp" alt="Smile-Gallery8">
                        </div>
                        <div class="item">
                            <img src="assets/a-images/10.webp" alt="Smile-Gallery10">
                        </div>
                        <div class="item">
                            <img src="assets/a-images/1.webp" alt="Smile-Gallery">
                        </div>
                        <div class="item">
                            <img src="assets/a-images/6.webp" alt="Smile-Gallery6">
                        </div>
                        <div class="item">
                            <img src="assets/a-images/2.webp" alt="Smile-Gallery2">
                        </div>
                    </div>
                    <div class="btn-div d-none d-lg-flex justify-content-center mt-3">
                        <button class="green-btn" onclick="location.href='smile-gallery.php'">Check Smile
                            Gallery</button>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col-lg-6 aos-init smile-part2" data-aos="zoom-out">

                    <div class="something-new">
                        <div class="image-container">
                            <img class=" image-fluid image-before slider-image" src="assets/a-images/teeth-after.webp"
                                alt="teeth-after">
                            <img class=" image-fluid image-after slider-image" src="assets/a-images/teeth-before.webp"
                                alt="teeth-before">
                        </div>
                        <input type="range" min="0" max="100" value="50" aria-label="Percentage of before photo shown"
                            class="slider">
                        <div class="slider-line" aria-hidden="true"></div>
                        <div class="slider-button" aria-hidden="true">
                            <svg class="svg-inline--fa fa-circle" aria-hidden="true" focusable="false" data-prefix="fas"
                                data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="btn-div d-lg-none d-flex justify-content-center mt-3">
                        <button class="green-btn" onclick="location.href='smile-gallery.php'">Check Smile
                            Gallery</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 10th part -->
    <section class="d-professionals nitime-home py-3 perfect-smile-forall">
        <div class="wrap">
            <div class="grid">
                <div class="img-div aos-init" data-aos="fade-up">
                    <img style="object-fit: cover;height:100%" src="assets/a-images/header.webp" alt="nitime-aligners">
                </div>
                <div class="content align-self-center aos-init" data-aos="fade-down">
                    <div>
                        <div class="headings aos-init" data-aos="zoom-in">
                            <h3 class="clr-blue2 min-b">Living with the convenience, flexibility and freedom of</h3>
                            <h2 class="clr-blue3 most-b">NiTime Aligners</h2>
                        </div>
                        <div class="para aos-init" data-aos="zoom-in-up">
                            <ul>
                                <li>
                                    <h2>Introducing OrthoFX NiTime</h2>
                                    <p>The first FDA cleared aligner system for night only wear. Get that perfect smile
                                        while you sleep. </p>
                                </li>
                                <li>
                                    <h2>Embrace the Night, Own the Day</h2>
                                    <p> Wear the aligners only at night. Put your aligners on before bed and take them
                                        out after you wake up.</p>
                                </li>
                                <li>
                                    <h2>No need to wear your aligners all day</h2>
                                    <p>Eat, drink, and talk hassle-free.</p>
                                </li>
                            </ul>
                            <div class="btn-div mt-3 d-flex justify-content-center">
                                <button class="green-btn" onclick="location.href='nitime-aligners.php'">Read
                                    More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 8 -->
    <section class="free-q perfect-smile-forall">
        <div class="wrap">
            <div class="grid">
                <div class="area aos-init" data-aos="zoom-in-left">
                    <div class="conjest">
                        <div class="heading">
                            <h2><strong>Contact Us</strong></h2>
                        </div>
                        <div class="form-q">
                            <form action="" class="needs-validation" id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <input type="text" placeholder="Your name *" class="form-control"
                                                name="name" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <input type="email" placeholder="Your email address *" name="email"
                                                pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" class=" form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <input type="text" pattern="[0-9]{11}" name="phone"
                                                placeholder="Your number *" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <select class="form-select" name="treatment-want"
                                                aria-label="Default select example" required="">
                                                <option selected="" disabled="" value="">Treatment you'd like</option>
                                                <option value="Examinations &amp; Hygiene">Examinations &amp; Hygiene
                                                </option>
                                                <option value="Invisalign">Invisalign</option>
                                                <option value="Composite Bonding">Composite Bonding</option>
                                                <option value="Teeth Whitening">Teeth Whitening</option>
                                                <option value="Veneers">Veneers</option>
                                                <!-- <option value="Implants">Implants</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea class="form-control" placeholder="Leave us a message" name="message"
                                            id="" cols="30" rows="5" required=""></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                                required="">
                                            <label class="form-check-label" for="exampleCheck1">I consent to my personal
                                                data being collected and stored as per the <a href="privacy-policy.php"
                                                    style="text-decoration:underline;color: inherit;">Privacy
                                                    Policy*</a></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3 d-flex justify-content-center">

                                        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response"
                                            value="0cAFcWeA4pz-nh97fXP_s2C4amf6Qj-HbM7CRctiM5iNRI6a-muuw3eXTM9oJF_quIKqp4zdm3uiBrgPEI0mkPn8fyTqAWnG4NkGS6CbtXYtCYdRNIQAX-MsHqgArqJP-KeGzuwQA8Eq7mLkf9TXMDnyT6lhQAjw0yX1r9dA1TQ33lPt8cNiWDPK2Qr5lI44hPggb7aNpyf8uyDgSTO6KdaKDKv72zzCh6IckE5dyScC4oTgJMb4cjDzO3fEbxOhc0AMCuc9hAXhXYNl6EmGb069KaEsfgX3yH5pC7ik49qgzgtygv_4FKI1GoLFf6ONrW8Mdp9qqwPUJRCaRjBtR7r3CZfvDC1STDhVxb8BEIawGIw8sqwBCXnEdCsMFo1mLxhCEhULfEC0VIiuE1ZeI9vg8gXsawtQ3z-CeNWQVK1wspHSYvk2dhe43-9YXu-6SsvR-jXYCy3x47g40DbNzbvQvDGuR81WLMLcsVJoqRn8S-P3FGpSVQnNVM8StcRFChNsoOFdQXedcLmCa6J1kpJUQRGqK0g9Xdht94BwBaRM8LzSYnEH2-na7vAUZLFDncTEZD3qgyegIpqZAMZSHOn2J9rx0is3v9rRS8olFNgnQqPq7NFtJZ25zSDBqTnCk39QJ2fd-EShL58eMXoGN9NW763AiZAm_fz0G58rSDCdEartgvj6hvh1K9TutwuBBRxKDjV-QGTLYuP7tDXYT5rROg5jIeiSyC5A-KAw0QhqQdJlLgsXG7CUeexQs2xXYWRBEhFfhs_pVMZI-V6eUqBI8GiUkOyFyU1M2noTi-1jYBlbtv4WzFfapY9Qh7wMhbFsizGC_lqLFdRuvKqljMc5hiSx2EegiqeFJWoyxcS95rAWkkv0BJNLGHo8GeLRB1AJD8SpTyrQsBUq7rWeKdx_e0z-2Bqw3nJGk7LytsrfNwGZ-Or6R9L1ewszCHpi5XM0trckR1zLJzbzB8Tnd7IUaCEdtYPTmloVX9Bg8RMZ4FXrFDr5lZsx8Vz00VNkyIthNxPG94uQ1ozpCgrvH0nhgCJX4ygejMtMLLJ-O2ZAW2HC01WLE8hEMnjTKECcHzqXp36DKSWumHpvDKaLctX-wukQExTBxc8TqNMExLdXhUGeac7GXY30ZYLZ4wlD37L5FbcsmzRVRwZm7fCHdfvLSGiDk8N-QIDKspyNATk1JsT1UM5NanxOZJj_w7G8_sT-vN6rHSp8IAb41WnQn8XHt50B81OAN8-r7uRKxD_m4Pcmd0k_Rfw0v4-RXV6x7_65xy-Z9GxywB107DGqHugjLKSQiP-4GViYanvU9MBuseH8mM3IwVO4ZIhGS2wh0Ao099RUb7A4Csg8rTKiC-kqaaGSVhvTr-lzICDoD8Gk13_0MojQT0TqADS_VY870rqealXNaTHUl46mwORMdr_aT3mv4IF7ifrwmZAzGYB1eliESd1m8tBkeYy-pZJaubREwct1qq5PZad9b0C-pW03dQYKLspRQcVRJOXRk0j3_WBfMSKOGxmbcPsXPmK7JzKCQ4smjEBewKpc8pGsdUoLJc8d8gS_rfkgj_LecE2ssLLVv-JmHugB3xKznWrW6VELWro_OrYFEIMdNXH1YYahMg7brjcy7Upg">
                                        <input type="hidden" name="action" value="validate_captcha">


                                        <span style="color: red; font-weight: bold; display: none;"
                                            class="invalid-cap text-center mb-3">Invalid captcha</span>

                                    </div>
                                    <div class="mt-3 d-flex justify-content-center">
                                        <button type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="img-div aos-init" data-aos="zoom-in-right">
                    <img src="assets/a-images/home-page-contact-form.webp" alt="contact-form">
                </div>
            </div>
        </div>
    </section>
    <!-- 9 -->
    <section class="pd-members perfect-smile-forall">
        <div class="wrap">
            <h2 class="clr-blue2 text-center most-b mb-3">Proud Suppliers</h2>
            <div class="img-grid">
                <img src="assets/a-images/itero-logo.webp" alt="itero-logo">
                <img src="assets/a-images/invisalign-logo.webp" alt="invisalign-logo">
                <img src="assets/a-images/botique-logo.webp" alt="botique-logo">
            </div>
        </div>
    </section>
    <!-- 10 something new -->

    <!-------------------------------MAIN--------------------------->
    <!-------------------------------MAIN END----------------------->
    <!-- error popup -->
     <div class="error-popup" id="error-popup">
        <div class="popup-wrap">
            <div class="hide-popup" onclick="hidePopup()">
                x
            </div>
            <div class="popup-text">
                Form has been submitted Successfully
            </div>
        </div>
    </div>
    <!--------------------------------FOOTER------------------------>
<script>
    function hidePopup() {
        document.getElementById('error-popup').style.display = "none"
    }
</script>


<!-- popup cookie -->
<div class="cookie-popup" id="cookie-popup">
    <div class="cnt223">
        <div class="close" style="color:white;font-size: 12px;text-align:end;" onclick="hidePopupp();">
            <svg class="svg-inline--fa fa-xmark" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"></path></svg>
        </div>
        <p>
            We use cookies to improve your browsing experience on our website. By browsing our website, you consent to our use of cookies and other tracking technologies.
        </p>
        <div class="btn-div d-flex" style="gap:10px">
            <button class="close client-test" onclick="acceptCookies();" style="font-size: 14px">Accept</button>
            <button class="client-test" onclick="location.href='privacy-policy.php'">Cookie Policy</button>
        </div>
    </div>
</div>

<script>
    const popup = document.getElementById("cookie-popup");

    // Function to hide the popup
    function hidePopupp() {
        popup.style.display = 'none';
    }

    // Function to accept cookies and hide popup
    function acceptCookies() {
        localStorage.setItem('cookieAccepted', 'true');
        hidePopup();
    }

    // Check on page load if cookies have been accepted
    window.onload = function() {
        if (localStorage.getItem('cookieAccepted') === 'true') {
            hidePopupp();
        }
    };
</script>

<!-- end  -->

    <section>
<?php include_once "footer.php" ?>
</section>

    <!--------------------------------FOOTER END-------------------->
    <!-- JAVASCRIPT FILES LINK -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"></script>
    <script></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- 1st carousel -->
    <script>
        $(document).ready(function () {
            $("#tm-cr").owlCarousel({
                // Carousel options
                loop: true,
                margin: 10,
                responsiveClass: true,
                autoplay: true,
                // dotsContainer: '#custom-dots', 
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        //  nav: true, 
                        dots: 6,
                    },
                    768: {
                        items: 2,
                        //  nav: true, 
                        dots: 3,
                    },
                    992: {
                        items: 3,
                        //  nav: true, 
                        dots: 2,
                    }
                }
            });
        });
    </script>
    <!-- 2nd carousel -->
    <script>
        $(document).ready(function () {
            $("#team-carousel").owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                autoplay: true,
                 nav: false,
                 dots:true,
                 
                // dotsContainer: '#custom-dots', 
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
responsive: {
    0: {
        items: 1
    },
    600: {
        items: 2
    },
    992: {
        items: 4
    }
}
            });
        });
    </script>

</body>

</html>