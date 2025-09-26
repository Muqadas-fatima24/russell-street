<?php
  $home = "active"; 
  $pageTitle = "examination and";
  include_once "head.php";   
?>

<body>
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
<section class="contact-header">
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
  <div class="c-wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="paginat py-3 d-flex align-items-center gap-2">
                        <a href="index.php">Home</a>
                        <!-- <div class="c-dif"></div>
                        <a href="">Services</a> -->
                    </div>
                    <div class="heading py-3">
                       <h1 class="most-b text-white">Contact</h1>
                    </div>
                    <div class="green-line mb-3"></div>
                    <p style="visibility: hidden">Objectively integrate enterprise-wide strategic theme areas with functionalized infrastructures. Interactively productize premium technologies whereas interdependent quality vectors. Rapaciously utilize enterprise experiences via 24/7 markets.</p>
                </div>
            </div>
        </div>

</section>  

<!-- 2 -->
 <section class="get-c">
            <div class="wrap">
                <div class="headings">
                    <h3 class="clr-blue2 text-center min-b">Get in touch with</h3>
                    <h2 class="clr-blue3 text-center most-b">Russell Street Dental Care</h2>
                </div>
                <div class="line"></div>
                <div class="contact-g">
                    <div class="d-flex gap-2">
                        <span>
                            <svg class="svg-inline--fa fa-location-dot" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"></path></svg><!-- <i class="fa-solid fa-location-dot"></i> Font Awesome fontawesome.com -->
                        </span>
                        <div>
                            <h4>Address</h4>
                            <p class="mb-0">7 Russell St, Leek, ST13 5JF</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <span><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32zM304 64H80V384H304V64z"></path></svg><!-- <i class="fa-solid fa-mobile-screen-button"></i> Font Awesome fontawesome.com --></span>
                        <div>
                            <h4>Call us</h4>
                            <p class="mb-0"><a href="tel:01538 388822" style="color: inherit;">01538 388822</a></p>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <span><svg class="svg-inline--fa fa-envelope" aria-hidden="true" focusable="false" data-prefix="far" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"></path></svg><!-- <i class="fa-regular fa-envelope"></i> Font Awesome fontawesome.com --></span>
                        <div>
                            <h4>Email Us</h4>
                            <p class="mb-0"><a href="mailto:dentist@russell-street.co.uk" style="color: inherit;">dentist@russell-street.co.uk</a></p>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <span><svg class="svg-inline--fa fa-instagram" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg><!-- <i class="fa-brands fa-instagram"></i> Font Awesome fontawesome.com --></span>
                        <div>
                            <h4>Instagram</h4>
                            <p class="mb-0"><a href="https://www.instagram.com/russellstreetdental.leek/" target="_blank" style="color: inherit;">@russellstreetdental.leek</a></p>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <span><svg class="svg-inline--fa fa-facebook-f" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg><!-- <i class="fa-brands fa-facebook-f"></i> Font Awesome fontawesome.com --></span>
                        <div>
                            <h4>Facebook</h4>
                            <p class="mb-0"><a href="https://www.facebook.com/p/Russell-Street-Dental-Practice-100032389136697" target="_blank" style="color: inherit;">Russell Street Dental Practice</a></p>
                        </div>
                    </div>
                    <!-- <div class="d-none d-md-flex can-book position-relative  flex-column align-items-md-center">
                        <div class="x-line"></div>
                        <h4>See Our Results</h4>
                        <div>
                            <button onclick="location.href='smile-gallery.php'">Smile Gallery</button>
                        </div>
                    </div> -->
                </div>
            </div>
 </section>

<!-- 3 -->
 <section class="free-q third-c">
            <div class="wrap">
                <div class="grid">
                    <div class="area">
                        <div class="conjest">
                            <div class="headings">
                                <!--                                <h3 class="clr-blue minm-b">Contact Our</h3>-->
                                <h2 class="clr-blue2 most-b" style="font-size: 40px;">Contact Us</h2>
                            </div>
                            <p>Contact our office and we will contact you back regarding the intervention you require.</p>
                            <form action="" class="needs-validation" id="contactForm">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <input type="text" placeholder="Enter your name *" class="form-control" name="name" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <input type="email" name="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" placeholder="Enter your email address *" class=" form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <input type="text" pattern="[0-9]{11}" name="phone" placeholder="Your number *" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <select class="form-select" name="treatment-want" aria-label="Default select example" required="">
                                                <option selected="" disabled="" value="">Treatment you'd like</option>
                                                <option value="Examinations &amp; Hygiene">Examinations &amp; Hygiene</option>
                                                <option value="Invisalign">Invisalign</option>
                                                <option value="Composite Bonding">Composite Bonding</option>
                                                <option value="Teeth Whitening">Teeth Whitening</option>
                                                <option value="Veneers">Veneers</option>
                                                <!-- <option value="Implants">Implants</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <textarea class="form-control" placeholder="Leave us a message" id="exampleFormControlTextarea1" rows="3" name="message" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required="">
                                                <label class="form-check-label clr-black" for="exampleCheck1">I consent to my personal data being collected and stored as per the <a href="privacy-policy.php" style="text-decoration:underline;color: inherit;">Privacy Policy*</a></label>
                                            </div>
                                        </div>
                                    </div>
                                   <div class="col-md-12 mb-3 d-flex justify-content-center">

                                            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" value="0cAFcWeA4LM5CGBmOWrsENxETLPNYN9v21MGydl81tlAgcx8tpRgYSNzbXdM3jhHvZ54jgBC6U_EJhstXFupu7LHfs79OjxaLETp6li7c0p9fQtSpp2h-tedR7TFg0GfENIPK8ee4p2Y2LIGfHpkRxWMoaLsZCpVPxUb_BdHZYpp70nNtW4sn177GNVHyfK4EHj0B_JVt33hvdZd3X32rSgrCbayFmxveEo4SfaNJ_Q_tDFzVTMbizm5omb4KBm1gZ8Ulx8G9uttqcWIET0uAUT5JJScBA7MpMzUgt_qxtAPGHx8dUzwMc6wnzl8UuHAIiWG-gnnlOr3bzlZv6Hi-Y477TdByWSHYQsWA9cEXAylCpjLLVtoQ29g1naQzLeLgmhsnb_rOwNL3PDV6dFzcnlqQGUMnt21SVKFh409LcaQJh_5Pm6RW5cIh7hU8yQgCvIv6ErRC8-DpOrva0ZBPfn3zGP-NpIz72AsY00iU0NGe9afVhIOv3SIUJMAOvJIXd8_EUmUrlosoFdLZlHtLpsXgXMzOj-P0BL-cb95gIR8mNmHjsMHBZBcHuQdUFGIAHMqnedvCZx2vfuSl_HdNq-mYeNVFkZ34ttXNJ-P1--W0v9sXRhcRjFMmPv2-fASrixnUnPhq4ctr46fZVSUKeL_GCo_uKu68MZqr7I79jb16mBCzF4HCxZ1GbXS5lVHI4PcSCDJdVqWgk6sUJayXrTb19VlQ5MQgpX4aPdGxfx6SCAT4peUDnvVfjbSMuG11UY71r-CwmUnBIGOaIspUucjr569JxIeU2BLxMeZvR9d8ID74vrPYaAAtZRuBvrbyhfpW7YV0reWIGlu89ZtY7Khy_vZCfE3tVwIoaobONcL_Rl9zKKRbYQfUP5JuUBUDs4va1Amy4QkSXUQanElbAQ8gXzZAvZ5Ugu_QO7O6_oTxuvPxGiIWQdFofm0w1tbnNg9lJo6AInjA1k1-DOJpKqIQp6kunNlf-EfExn5muCh2_095B6lG-c-B4QiAvIwS-_a9JDbx21bK3oDVm9w8INR3-amoTkpeOGYtsLhue4_XQxTzeV-0GuXzVdYGByO3D5Jw0wOc1ClvdGmI62Tf-x5AsMnpzMBL9ebAbkyI9NwoVwp4Z6LuUMaxz8QCnYhaxMINwHwF-NFyO7fGXwqaaOF7HLzdFshyuxmZA3ytXzKfjpd7xrT372iYNOoNMHoW13pNS9mqpTxlw1lTvCveR2IIZXz-vLIRFto5n2ZeDLZsl73_RQKiW1-maK86WM28A_wgZsZ7tWk-Xs2Y_vBDoev1c6999Y4w6xrIavbmkWYPygaBV-T7qL8VqiiBB-QYtu1c_zEZZ6lahzKFOnRda53p5P7fI2OhFAhv2pKM2tjPpNPut2C5cQVowO2yQ5gi-K0QJKb3L_sRHhliq9DkZowAR8kzdEnSnOv-6Rnf2kjKcEYk3WQh9JqpfR18ZNSZixMq9m5iQL5Jm8j4th1AUsGI91mmlfJC_vLRA_N3f8qkyQK5Whi1N4Lh1KBNBwerrIiYgwB8HO5eZw63f8IoiSFMao5pOfeUsaZO5owFxQ1HYn5wVaZXC902BN6Nhcmzr4nxIWwbjJVpd">
                                            <input type="hidden" name="action" value="validate_captcha">

                               
                                            <span style="color: red; font-weight: bold; display: none;" class="invalid-cap text-center mb-3">Invalid captcha</span>

                                        </div>
                                    <div class="mt-3 d-flex justify-content-center">
                                        <button type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="img-div">
                        <img src="assets/a-images/contact-us-box.webp" alt="">
                    </div>
                </div>
            </div>
        </section>


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
    <!-- 8th part with nav  -->
    <section class="four-c clients-with">
        <div class="wrap">
            <div class="heading-wrap py-4 d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="clr-blue2 min-b">Patients With A</h3>
                    <h2 class="clr-blue3 most-b">Reason To Smile</h2>
                </div>
                <div class="btn-div"><button onclick="location.href='smile-gallery.php'" class="client-test">Smile
                        Gallery</button></div>
            </div>
<div class="team-carousel tm-cr c-thre owl-carousel owl-theme" id="team-carousel">
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
    <!-- this page carousel in 768px -->
<!-- <script>
$(document).ready(function(){
    var owl = $('.sm-price').owlCarousel({
        loop: false,     // keep false for stable tab syncing
        margin: 10,
        nav: true,
        dots: false,
        items: 1
    });

    // 1. When a tab button is clicked → move Owl + show the pane
    $('.sm-price').on('click', 'button[data-bs-toggle="tab"]', function () {
        var index = $(this).parent().index(); // li index
        owl.trigger('to.owl.carousel', [index, 300, true]);

        // let Bootstrap handle the actual tab show
        var tabTrigger = new bootstrap.Tab(this);
        tabTrigger.show();
    });

    // 2. When Owl moves (via nav arrows) → update the tab + pane
    owl.on('changed.owl.carousel', function(event) {
        var currentIndex = event.item.index;
        var currentButton = $('.sm-price .owl-item').eq(currentIndex).find('button');

        // activate Bootstrap tab programmatically
        if (currentButton.length) {
            var tabTrigger = new bootstrap.Tab(currentButton[0]);
            tabTrigger.show();
        }
    });
});
</script> -->


<!-- end -->
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
                 nav: true,
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
        items: 3
    }
}
            });
        });
    </script>

</body>

</html>