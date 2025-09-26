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
        window.addEventListener('load', function () {
            const preloader = document.getElementById('preloader');
            setTimeout(function () {
                preloader.style.transition = 'opacity 0.5s ease-in-out';
                preloader.style.opacity = '0';
                setTimeout(function () {
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
                                    data-prefix="fas" data-icon="location-dot" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
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
                                        data-prefix="fas" data-icon="phone" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
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
        <div class="navbar-whit main-navbar" id="nav_bar">
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
        <!-- 3 -->
        <div class="team-modal">
            <div class="modal fade" id="bookconsultationmodal" tabindex="-1"
                aria-labelledby="bookconsultationmodalLabel" aria-hidden="true" aria-modal="true" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="dentist-modal-bg">
                                <div class="consultation-modal">
                                    <div>
                                        <p>You can now book in directly with a member of the team for a free
                                            consultation
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


    </section>
    <!-- 2 -->
    <section class="single-header">
        <div class="grid">
            <div class="bg-here">
                <div class="inr">
                    <div class="headings">
                        <h2 class="clr-blue3 min-b">Composite</h2>
                        <h1 class="clr-blue2 most-b">Bonding</h1>
                    </div>

                    <div class="line"></div>
                    <p>Are you seeking an effective solution to enhance the appearance of your smile? Look no further. With composite bonding, you can experience a complete smile makeover in just one visit to our dental practice.</p>
                    <p>Composite bonding, also known as dental bonding, is a non-invasive, cost-effective, and incredibly versatile cosmetic dentistry treatment. It is an excellent choice for patients wanting to correct various aesthetic dental issues, including chipped, discoloured, or gapped teeth.</p>
                </div>
            </div>
            <div class="img-div">
                <img src="assets/a-images/header (5).webp" alt="header">
            </div>
        </div>
    </section>
    <!-- 3 -->
    <section class="is-whitening">
        <div class="wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="headings">
                            <h3 class="clr-blue3 min-b">Why You Should Consider</h3>
                            <h2 class="clr-blue2 most-b">Composite Bonding</h2>
                        </div>
                        <!-- <p>This innovative treatment involves applying a tooth-coloured composite resin to your existing teeth. This material is carefully matched to the natural shade of your teeth, ensuring a seamless integration with your smile. Our highly skilled dentists then artfully shape and mould the resin to create a beautiful, natural-looking finish. Once the desired shape is achieved, the resin is hardened with a special light, securely bonding the material to your tooth.</p> -->
                        <p>Composite bonding is a great solution if you:</p>
                        <ul>
                            <li>Have chipped or fractured teeth</li>
                            <li>Gaps between your teeth</li>
                            <li>Have discoloured teeth</li>
                            <li>Want to change the shape and size of your teeth</li>
                        </ul>
                        <p>One of the key advantages of composite bonding is its preservation of your natural tooth structure. Unlike crowns or veneers, which often require some element of tooth preparation, composite bonding is a surface treatment, meaning more of your natural tooth is left intact.</p>
                        <!-- <p>Additionally, composite bonding can be completed in a single appointment, so you don't need to wait for laboratory work. You can walk out of our practice with an improved smile in just a couple of hours.</p> -->
                        <div class="demo-gallery">
                            <ul id="lightgallery">
                                <li data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/1-375.jpg 375, https://sachinchoolur.github.io/lightgallery.js/static/img/1-480.jpg 480, https://sachinchoolur.github.io/lightgallery.js/static/img/1.jpg 800" 
                                data-src="assets/a-images/single-o (3).webp" alt="single-o" data-lg-id="2c33af2d-35f0-433d-93b9-3c5227d35fe5">
                                    <a href="">
                                        <img class="img-responsive" src="assets/a-images/single-o (3).webp" alt="single-o">
                                        <div class="demo-gallery-poster">
                                            <img src="https://sachinchoolur.github.io/lightgallery.js/static/img/zoom.png" alt="zoom">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/2-375.jpg 375, https://sachinchoolur.github.io/lightgallery.js/static/img/2-480.jpg 480, https://sachinchoolur.github.io/lightgallery.js/static/img/2.jpg 800"
                                 data-src="assets/a-images/single-two (3).webp" alt="single-two" data-lg-id="9720dea4-b6df-47e5-b2e2-f831c120f890">
                                    <a href="">
                                        <img class="img-responsive" src="assets/a-images/single-two (3).webp" alt="single-two">
                                        <div class="demo-gallery-poster">
                                            <img src="https://sachinchoolur.github.io/lightgallery.js/static/img/zoom.png" alt="zoom">
                                        </div>
                                    </a>
                                </li>
                                <li data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/13-375.jpg 375, https://sachinchoolur.github.io/lightgallery.js/static/img/13-480.jpg 480, https://sachinchoolur.github.io/lightgallery.js/static/img/13.jpg 800" 
                                data-src="assets/a-images/single-three (3).webp" alt="single-three" data-lg-id="79750e09-e01c-4b89-a339-332b322dd720">
                                    <a href="">
                                        <img class="img-responsive" src="assets/a-images/single-three (3).webp" alt="single-three">
                                        <div class="demo-gallery-poster">
                                            <img src="https://sachinchoolur.github.io/lightgallery.js/static/img/zoom.png" alt="zoom">
                                        </div>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <p>Despite its simplicity, the transformative effect of composite bonding can be extraordinary. A beautifully crafted and well-maintained bonded tooth can last for many years, providing an aesthetic improvement that truly boosts your confidence.</p>
                        <div class="line"></div>
                        <div class="row">
                            <div class="col-lg-7">
                                <p>Good oral hygiene practices and regular check-ups will ensure the longevity of your bonding treatment.</p>
                                <p>At Russell Street Dental Practice, we are passionate about crafting smiles that reflect the confidence and personality of our patients. If you're considering composite bonding, we invite you to book a consultation with us. We would be more than happy to discuss whether this treatment might be the right option for you.</p>
                            </div>
                            <div class="col-lg-5">
                                <div class="something-new">
                                    <div class="image-container">
                                        <img class="image-before slider-image" src="assets/a-images/teeth-before.webp" alt="color photo">
                                        <img class="image-after slider-image" src="assets/a-images/teeth-after.webp" alt="black and white">
                                    </div>
                                    <!-- step="10" -->
                                    <input type="range" min="0" max="100" value="50" aria-label="Percentage of before photo shown" class="slider">
                                    <div class="slider-line" aria-hidden="true"></div>
                                    <div class="slider-button" aria-hidden="true">
                                        <svg class="svg-inline--fa fa-circle" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"></path></svg><!-- <i class="fa fa-circle"></i> Font Awesome fontawesome.com -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5">
                        
<div class="sec-s">
    <h3 class="clr-blue2 mb-0 minm-b">Get In Touch With Us</h3>
    <div class="line"></div>
    <div class="cal-mail d-flex align-items-center gap-2">
        <span><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32zM304 64H80V384H304V64z"></path></svg><!-- <i class="fa-solid fa-mobile-screen-button"></i> Font Awesome fontawesome.com --></span>
        <div>
            <h4 class="clr-blue2">Call us</h4>
            <p><a href="tel:01538 388822" style="color: inherit;">01538 388822</a></p>
        </div>
    </div>
    <div class="line"></div>
    <div class="cal-mail d-flex align-items-center gap-2">
        <span><svg class="svg-inline--fa fa-envelope" aria-hidden="true" focusable="false" data-prefix="far" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"></path></svg><!-- <i class="fa-regular fa-envelope"></i> Font Awesome fontawesome.com --></span>
        <div>
            <h4 class="clr-blue2">Email Us</h4>
            <p><a href="mailto:dentist@russell-street.co.uk" style="color: inherit;">dentist@russell-street.co.uk</a></p>
            </div>
        </div>
        <!--                            <div class="blank-line"></div>-->
        <!--                            <h3 class="clr-green mb-0 minm-b">Book An Appointment</h3>-->
        <div class="line"></div>
        <p>Fill out the form below and we will contact you back.</p>
        <form action="" class="needs-validation" id="contactForm">
            <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Enter your name *" required="">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" name="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" placeholder="Enter your email address *" required="">
            </div>
            <div class="mb-3">
                <input type="text" pattern="[0-9]{11}" name="phone" placeholder="Your number *" class="form-control" required="">
            </div>
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
            <div class="mb-3">
                <textarea class="form-control" placeholder="Leave us a message" id="exampleFormControlTextarea1" rows="3" name="message" required=""></textarea>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required="">
                    <label class="form-check-label clr-black" for="exampleCheck1">I consent to my personal data being collected and stored as per the <a href="privacy-policy.php" style="text-decoration:underline;color: inherit;">Privacy Policy*</a></label>
                </div>
            </div>
            <div class="col-md-12 mb-3 d-flex justify-content-center">

                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" value="0cAFcWeA7L5ynNsp8rh30HvJ9EyF76bXkIvzwgqG6Kj884t_Gh79u7CDOC47_AwyAaB5LMEU40kJXo7Psx5G5SYna3zNnqBjY211e6tDAzvjgWTh9S4yQsaTHem2HHh4JCpNKnbeyyi6NeS96HvrUSKYqG7e5RAAQIL4Fi6iqyY9hPAZNE9QWbFxPmOVRiLjLlkL9t8i8oZamCaBKY4PQCmEYghDJvPCj1MZMq_xGxl1ziGbNjGxhTHPDiI1Y0MhlQBsY28uVxsJK8XZ067dYxFQAk7DqOjyUhl-nnLDaoLfEQD_HVaJNrp47-bg2HGTHc4UDDrZb1CmBtGFlOqJraARhyvucD1nl7fX7TNgACSEPh1mmgjDJD3m0bcl9zDRy3x5zOgQKauT-g4FhKijl5Thc6aclH9lNayYdKtMDUL73jpfPSVI--RdzhrwBJugovFWE41u5a9E7ckvVioMWOtiC0wDcXRMgokjQ4NueGoA7HOWRFkJVNyo20CTOXMuQ4WTwVYQL_5K8US3cvaFBQiWOibO7UvzuHAPuzD123Z0xPOgBUgwYwLDCEo27OZSpbXZC6bXTpPnESG0K3JiEeFVIYQCTOWUwmIWnAHWQC_yWYtN03RA04wi-wFArRdqs6SxPI6kjIfsLPeydJY32kVYcpwiXgKqv8kQdIjXPH9XS-RHZKGLCmjFSzvD2YBW6SJVxYKckxGlfVqr9fOTWCRfovp1dLc6qTQIhaPsbwY_0eDjTBCXB5TuWx3ZMXDjz8C8TkFgXRqI9oNQyYixMPy74rqndadgUIupu7U3xmVAK0lS-f1pFbt3MSh1X0kUQA2qRO9CrRE7EWHhJrYZxC3YZwJH0eVxkRwt6BEfdL6Fpldzaa9Egf_l_uDhZlrPYLcz2kOQT0tdukeCdYpQu9N6b77w3A0nluqqU7OJJj6BGaN7qsFtDGhZh6cdo5BQZ4i3X5BFEqyCQhpCiFqDooBRfh04rHvoyDP5nAmwqaokXCsPVfgkXquObdpp-_C-m3wAM8yFt4DX8bMJat-dEuDxM21yCBNoGv3K2chCShYSc2lBSODi9il0mDSoCFIrONt2D7CL5dW5gG38zinYpbGDwN_nWai1izm8-W2Y7Sn0A1TUTyxLsrGXjMVTjeph0u_la6yDRMpivfIc1-HKnhNoXajaPW2CUxyLhT9QkPoiXWW0neJNo7kDAmTT6zAXIqi0iVF5ex17FJxGkzY5_GZpnVAe7FE6q6m_41v1F93zlimzVuJwPeoxRn-YLkgX_btlTiO--bgXpvwpUVErxNsIDnhQxRy0ieMMLEKxNl76ApzI5G2jSYFrkrmlwjM0Q0QPhwlKZvRFxn7M6Wxss6kkQs7-2_fw2RSn5PyYnHiR6hbChgB3LnJBQRjiLMfYVXqw9jybCxQm-t8zdyYW8YU02lm0PypFtA21zUyMTJh3-Q3ozXQeIGDl8UjW-3UNC7p3YoIqeQ-1wFGtueWb4k9IYHo-jMtfLPN27L3Xd6NrCCmkNN09M6ovz3rNuzgFQAe77nWroSb4zOBC3l-F7u9VJDKwZjhtembAydJqBcjXEsaCBCq_yCMIQUJfpxdmIRhLyq6_D0n6BF">
                <input type="hidden" name="action" value="validate_captcha">


                <span style="color: red; font-weight: bold; display: none;" class="invalid-cap text-center mb-3">Invalid captcha</span>

            </div>
            <div class=" d-flex justify-content-center">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>                    </div>
                </div>
            </div>
        </div>
        
    </section>
        <!-- script  for light gallery -->
    <script>
        // A simple way to initialize the gallery
        $(document).ready(function () {
            lightGallery(document.getElementById('lightgallery'), {
                // Options can go here, like plugins
                plugins: [],
                // This option removes the download button.
                download: false
            });
        });
    </script>

<!-- end -->
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

    <!--  what ever you want -->
    <!-- you should part -->
    <section class="you-should">
        <div class="wrap">
            <div class="headings">
                <h3 class="clr-white text-center min-b">Why You Should Choose</h3>
                <h2 class="clr-blue3 text-center mb-0 most-b">Russell Street Dental</h2>
            </div>
            <div class="grid d-none d-md-grid">
                <div class="entity">
                    <div class="img-div text-center">
                        <span><svg class="svg-inline--fa fa-hospital-user" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="hospital-user" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M48 0C21.5 0 0 21.5 0 48V256H144c8.8 0 16 7.2 16 16s-7.2 16-16 16H0v64H144c8.8 0 16 7.2 16 16s-7.2 16-16 16H0v80c0 26.5 21.5 48 48 48H265.9c-6.3-10.2-9.9-22.2-9.9-35.1c0-46.9 25.8-87.8 64-109.2V271.8 48c0-26.5-21.5-48-48-48H48zM152 64h16c8.8 0 16 7.2 16 16v24h24c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16H184v24c0 8.8-7.2 16-16 16H152c-8.8 0-16-7.2-16-16V152H112c-8.8 0-16-7.2-16-16V120c0-8.8 7.2-16 16-16h24V80c0-8.8 7.2-16 16-16zM512 272c0-44.2-35.8-80-80-80s-80 35.8-80 80s35.8 80 80 80s80-35.8 80-80zM288 477.1c0 19.3 15.6 34.9 34.9 34.9H541.1c19.3 0 34.9-15.6 34.9-34.9c0-51.4-41.7-93.1-93.1-93.1H381.1c-51.4 0-93.1 41.7-93.1 93.1z">
                                </path>
                            </svg><!-- <i class="fa-solid fa-hospital-user"></i> Font Awesome fontawesome.com --></span>
                    </div>
                    <h3 class="text-center">Caring Team</h3>
                    <p class="text-center">A team that has nothing but your best interests at heart.</p>
                </div>
                <div class="entity">
                    <div class="img-div text-center">
                        <span><svg class="svg-inline--fa fa-hospital" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="hospital" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M192 48c0-26.5 21.5-48 48-48H400c26.5 0 48 21.5 48 48V512H368V432c0-26.5-21.5-48-48-48s-48 21.5-48 48v80H192V48zM48 96H160V512H48c-26.5 0-48-21.5-48-48V320H80c8.8 0 16-7.2 16-16s-7.2-16-16-16H0V224H80c8.8 0 16-7.2 16-16s-7.2-16-16-16H0V144c0-26.5 21.5-48 48-48zm544 0c26.5 0 48 21.5 48 48v48H560c-8.8 0-16 7.2-16 16s7.2 16 16 16h80v64H560c-8.8 0-16 7.2-16 16s7.2 16 16 16h80V464c0 26.5-21.5 48-48 48H480V96H592zM312 64c-8.8 0-16 7.2-16 16v24H272c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16h24v24c0 8.8 7.2 16 16 16h16c8.8 0 16-7.2 16-16V152h24c8.8 0 16-7.2 16-16V120c0-8.8-7.2-16-16-16H344V80c0-8.8-7.2-16-16-16H312z">
                                </path>
                            </svg><!-- <i class="fa-solid fa-hospital"></i> Font Awesome fontawesome.com --></span>
                    </div>
                    <h3 class="text-center">Welcoming</h3>
                    <p class="text-center">Modern, comfortable and friendly environment for your ease.</p>
                </div>
                <div class="entity">
                    <div class="img-div text-center">
                        <span><svg class="svg-inline--fa fa-microscope" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="microscope" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M168 32c0-17.7 14.3-32 32-32h16c17.7 0 32 14.3 32 32h8c17.7 0 32 14.3 32 32V288c0 17.7-14.3 32-32 32h-8c0 17.7-14.3 32-32 32H200c-17.7 0-32-14.3-32-32h-8c-17.7 0-32-14.3-32-32V64c0-17.7 14.3-32 32-32l8 0zM32 448H320c70.7 0 128-57.3 128-128s-57.3-128-128-128V128c106 0 192 86 192 192c0 49.2-18.5 94-48.9 128H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H320 32c-17.7 0-32-14.3-32-32s14.3-32 32-32zm80-64H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z">
                                </path>
                            </svg><!-- <i class="fa-solid fa-microscope"></i> Font Awesome fontawesome.com --></span>
                    </div>
                    <h3 class="text-center">Technology</h3>
                    <p class="text-center">Using the latest technology to give you the best outcomes.</p>
                </div>
                <div class="entity">
                    <div class="img-div text-center">
                        <span><svg class="svg-inline--fa fa-tooth" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="tooth" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M154.1 52.1C137.3 39.1 116.7 32 95.5 32C42.7 32 0 74.7 0 127.5v6.2c0 15.8 3.7 31.3 10.7 45.5l23.5 47.1c4.5 8.9 7.6 18.4 9.4 28.2L80.4 460.2c2 11.2 11.6 19.4 22.9 19.8s21.4-7.4 24-18.4l28.9-121.3C160.2 323.7 175 312 192 312s31.8 11.7 35.8 28.3l28.9 121.3c2.6 11.1 12.7 18.8 24 18.4s20.9-8.6 22.9-19.8l36.7-205.8c1.8-9.8 4.9-19.3 9.4-28.2l23.5-47.1c7.1-14.1 10.7-29.7 10.7-45.5v-2.1c0-55-44.6-99.6-99.6-99.6c-24.1 0-47.4 8.8-65.6 24.6l-3.2 2.8 19.5 15.2c7 5.4 8.2 15.5 2.8 22.5s-15.5 8.2-22.5 2.8l-24.4-19-37-28.8z">
                                </path>
                            </svg><!-- <i class="fa-solid fa-tooth"></i> Font Awesome fontawesome.com --></span>
                    </div>
                    <h3 class="text-center">Service</h3>
                    <p class="text-center">Treating you like the unique individual that you are.</p>
                </div>
                <div class="entity">
                    <div class="img-div text-center">
                        <span><svg class="svg-inline--fa fa-magnifying-glass-location" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="magnifying-glass-location" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM288 176c0-44.2-35.8-80-80-80s-80 35.8-80 80c0 48.8 46.5 111.6 68.6 138.6c6 7.3 16.8 7.3 22.7 0c22.1-27 68.6-89.8 68.6-138.6zm-48 0c0 17.7-14.3 32-32 32s-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32z">
                                </path>
                            </svg><!-- <i class="fa-solid fa-magnifying-glass-location"></i> Font Awesome fontawesome.com --></span>
                    </div>
                    <h3 class="text-center">Great Location</h3>
                    <p class="text-center">Situated in the heart of Leek to provide care to the community.</p>
                </div>

            </div>
            <div class="d-block d-md-none">
                <div class="you-should-car owl-carousel owl-theme" id="you-should-car">
                                <!-- 1 -->
                                    <div class="entity">
                                        <div class="img-div text-center">
                                            <span><svg class="svg-inline--fa fa-tooth" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="tooth" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M154.1 52.1C137.3 39.1 116.7 32 95.5 32C42.7 32 0 74.7 0 127.5v6.2c0 15.8 3.7 31.3 10.7 45.5l23.5 47.1c4.5 8.9 7.6 18.4 9.4 28.2L80.4 460.2c2 11.2 11.6 19.4 22.9 19.8s21.4-7.4 24-18.4l28.9-121.3C160.2 323.7 175 312 192 312s31.8 11.7 35.8 28.3l28.9 121.3c2.6 11.1 12.7 18.8 24 18.4s20.9-8.6 22.9-19.8l36.7-205.8c1.8-9.8 4.9-19.3 9.4-28.2l23.5-47.1c7.1-14.1 10.7-29.7 10.7-45.5v-2.1c0-55-44.6-99.6-99.6-99.6c-24.1 0-47.4 8.8-65.6 24.6l-3.2 2.8 19.5 15.2c7 5.4 8.2 15.5 2.8 22.5s-15.5 8.2-22.5 2.8l-24.4-19-37-28.8z">
                                                    </path>
                                                </svg><!-- <i class="fa-solid fa-tooth"></i> Font Awesome fontawesome.com --></span>
                                        </div>
                                        <h3 class="text-center">Service</h3>
                                        <p class="text-center">Treating you like the unique individual that you are.</p>
                                    </div>
                                <!-- 2 -->
                                    <div class="entity">
                                        <div class="img-div text-center">
                                            <span><svg class="svg-inline--fa fa-hospital" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="hospital" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M192 48c0-26.5 21.5-48 48-48H400c26.5 0 48 21.5 48 48V512H368V432c0-26.5-21.5-48-48-48s-48 21.5-48 48v80H192V48zM48 96H160V512H48c-26.5 0-48-21.5-48-48V320H80c8.8 0 16-7.2 16-16s-7.2-16-16-16H0V224H80c8.8 0 16-7.2 16-16s-7.2-16-16-16H0V144c0-26.5 21.5-48 48-48zm544 0c26.5 0 48 21.5 48 48v48H560c-8.8 0-16 7.2-16 16s7.2 16 16 16h80v64H560c-8.8 0-16 7.2-16 16s7.2 16 16 16h80V464c0 26.5-21.5 48-48 48H480V96H592zM312 64c-8.8 0-16 7.2-16 16v24H272c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16h24v24c0 8.8 7.2 16 16 16h16c8.8 0 16-7.2 16-16V152h24c8.8 0 16-7.2 16-16V120c0-8.8-7.2-16-16-16H344V80c0-8.8-7.2-16-16-16H312z">
                                                    </path>
                                                </svg><!-- <i class="fa-solid fa-hospital"></i> Font Awesome fontawesome.com --></span>
                                        </div>
                                        <h3 class="text-center">Welcoming</h3>
                                        <p class="text-center">Modern, comfortable and friendly environment for your
                                            ease.</p>
                                    </div>
                                <!-- 3 -->
                                    <div class="entity">
                                        <div class="img-div text-center">
                                            <span><svg class="svg-inline--fa fa-microscope" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="microscope"
                                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M168 32c0-17.7 14.3-32 32-32h16c17.7 0 32 14.3 32 32h8c17.7 0 32 14.3 32 32V288c0 17.7-14.3 32-32 32h-8c0 17.7-14.3 32-32 32H200c-17.7 0-32-14.3-32-32h-8c-17.7 0-32-14.3-32-32V64c0-17.7 14.3-32 32-32l8 0zM32 448H320c70.7 0 128-57.3 128-128s-57.3-128-128-128V128c106 0 192 86 192 192c0 49.2-18.5 94-48.9 128H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H320 32c-17.7 0-32-14.3-32-32s14.3-32 32-32zm80-64H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z">
                                                    </path>
                                                </svg><!-- <i class="fa-solid fa-microscope"></i> Font Awesome fontawesome.com --></span>
                                        </div>
                                        <h3 class="text-center">Technology</h3>
                                        <p class="text-center">Using the latest technology to give you the best
                                            outcomes.</p>
                                    </div>
                                <!-- 4 -->
                                    <div class="entity">
                                        <div class="img-div text-center">
                                            <span><svg class="svg-inline--fa fa-magnifying-glass-location"
                                                    aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="magnifying-glass-location" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM288 176c0-44.2-35.8-80-80-80s-80 35.8-80 80c0 48.8 46.5 111.6 68.6 138.6c6 7.3 16.8 7.3 22.7 0c22.1-27 68.6-89.8 68.6-138.6zm-48 0c0 17.7-14.3 32-32 32s-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32z">
                                                    </path>
                                                </svg><!-- <i class="fa-solid fa-magnifying-glass-location"></i> Font Awesome fontawesome.com --></span>
                                        </div>
                                        <h3 class="text-center">Great Location</h3>
                                        <p class="text-center">Situated in the heart of Leek to provide care to the
                                            community.</p>
                                    </div>
                                <!-- 5 -->
                                    <div class="entity">
                                        <div class="img-div text-center">
                                            <span><svg class="svg-inline--fa fa-hospital-user" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="hospital-user"
                                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M48 0C21.5 0 0 21.5 0 48V256H144c8.8 0 16 7.2 16 16s-7.2 16-16 16H0v64H144c8.8 0 16 7.2 16 16s-7.2 16-16 16H0v80c0 26.5 21.5 48 48 48H265.9c-6.3-10.2-9.9-22.2-9.9-35.1c0-46.9 25.8-87.8 64-109.2V271.8 48c0-26.5-21.5-48-48-48H48zM152 64h16c8.8 0 16 7.2 16 16v24h24c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16H184v24c0 8.8-7.2 16-16 16H152c-8.8 0-16-7.2-16-16V152H112c-8.8 0-16-7.2-16-16V120c0-8.8 7.2-16 16-16h24V80c0-8.8 7.2-16 16-16zM512 272c0-44.2-35.8-80-80-80s-80 35.8-80 80s35.8 80 80 80s80-35.8 80-80zM288 477.1c0 19.3 15.6 34.9 34.9 34.9H541.1c19.3 0 34.9-15.6 34.9-34.9c0-51.4-41.7-93.1-93.1-93.1H381.1c-51.4 0-93.1 41.7-93.1 93.1z">
                                                    </path>
                                                </svg><!-- <i class="fa-solid fa-hospital-user"></i> Font Awesome fontawesome.com --></span>
                                        </div>
                                        <h3 class="text-center">Caring Team</h3>
                                        <p class="text-center">A team that has nothing but your best interests at heart.
                                        </p>
                                    </div>
                                <!-- 6 -->
                                    <div class="entity">
                                        <div class="img-div text-center">
                                            <span><svg class="svg-inline--fa fa-tooth" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="tooth" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M154.1 52.1C137.3 39.1 116.7 32 95.5 32C42.7 32 0 74.7 0 127.5v6.2c0 15.8 3.7 31.3 10.7 45.5l23.5 47.1c4.5 8.9 7.6 18.4 9.4 28.2L80.4 460.2c2 11.2 11.6 19.4 22.9 19.8s21.4-7.4 24-18.4l28.9-121.3C160.2 323.7 175 312 192 312s31.8 11.7 35.8 28.3l28.9 121.3c2.6 11.1 12.7 18.8 24 18.4s20.9-8.6 22.9-19.8l36.7-205.8c1.8-9.8 4.9-19.3 9.4-28.2l23.5-47.1c7.1-14.1 10.7-29.7 10.7-45.5v-2.1c0-55-44.6-99.6-99.6-99.6c-24.1 0-47.4 8.8-65.6 24.6l-3.2 2.8 19.5 15.2c7 5.4 8.2 15.5 2.8 22.5s-15.5 8.2-22.5 2.8l-24.4-19-37-28.8z">
                                                    </path>
                                                </svg><!-- <i class="fa-solid fa-tooth"></i> Font Awesome fontawesome.com --></span>
                                        </div>
                                        <h3 class="text-center">Service</h3>
                                        <p class="text-center">Treating you like the unique individual that you are.</p>
                                    </div>
                                <!-- 7 -->
                                    <div class="entity">
                                        <div class="img-div text-center">
                                            <span><svg class="svg-inline--fa fa-hospital" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="hospital" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M192 48c0-26.5 21.5-48 48-48H400c26.5 0 48 21.5 48 48V512H368V432c0-26.5-21.5-48-48-48s-48 21.5-48 48v80H192V48zM48 96H160V512H48c-26.5 0-48-21.5-48-48V320H80c8.8 0 16-7.2 16-16s-7.2-16-16-16H0V224H80c8.8 0 16-7.2 16-16s-7.2-16-16-16H0V144c0-26.5 21.5-48 48-48zm544 0c26.5 0 48 21.5 48 48v48H560c-8.8 0-16 7.2-16 16s7.2 16 16 16h80v64H560c-8.8 0-16 7.2-16 16s7.2 16 16 16h80V464c0 26.5-21.5 48-48 48H480V96H592zM312 64c-8.8 0-16 7.2-16 16v24H272c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16h24v24c0 8.8 7.2 16 16 16h16c8.8 0 16-7.2 16-16V152h24c8.8 0 16-7.2 16-16V120c0-8.8-7.2-16-16-16H344V80c0-8.8-7.2-16-16-16H312z">
                                                    </path>
                                                </svg><!-- <i class="fa-solid fa-hospital"></i> Font Awesome fontawesome.com --></span>
                                        </div>
                                        <h3 class="text-center">Welcoming</h3>
                                        <p class="text-center">Modern, comfortable and friendly environment for your
                                            ease.</p>
                                    </div>
                                    <!-- 8 -->
                                    <div class="entity">
                                        <div class="img-div text-center">
                                            <span><svg class="svg-inline--fa fa-microscope" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="microscope"
                                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M168 32c0-17.7 14.3-32 32-32h16c17.7 0 32 14.3 32 32h8c17.7 0 32 14.3 32 32V288c0 17.7-14.3 32-32 32h-8c0 17.7-14.3 32-32 32H200c-17.7 0-32-14.3-32-32h-8c-17.7 0-32-14.3-32-32V64c0-17.7 14.3-32 32-32l8 0zM32 448H320c70.7 0 128-57.3 128-128s-57.3-128-128-128V128c106 0 192 86 192 192c0 49.2-18.5 94-48.9 128H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H320 32c-17.7 0-32-14.3-32-32s14.3-32 32-32zm80-64H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z">
                                                    </path>
                                                </svg><!-- <i class="fa-solid fa-microscope"></i> Font Awesome fontawesome.com --></span>
                                        </div>
                                        <h3 class="text-center">Technology</h3>
                                        <p class="text-center">Using the latest technology to give you the best
                                            outcomes.</p>
                                    </div>
                                    <!-- 9 -->
                                    <div class="entity">
                                        <div class="img-div text-center">
                                            <span><svg class="svg-inline--fa fa-magnifying-glass-location"
                                                    aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="magnifying-glass-location" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM288 176c0-44.2-35.8-80-80-80s-80 35.8-80 80c0 48.8 46.5 111.6 68.6 138.6c6 7.3 16.8 7.3 22.7 0c22.1-27 68.6-89.8 68.6-138.6zm-48 0c0 17.7-14.3 32-32 32s-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32z">
                                                    </path>
                                                </svg><!-- <i class="fa-solid fa-magnifying-glass-location"></i> Font Awesome fontawesome.com --></span>
                                        </div>
                                        <h3 class="text-center">Great Location</h3>
                                        <p class="text-center">Situated in the heart of Leek to provide care to the
                                            community.</p>
                                    </div>
                                    <!-- 10 -->
                                    <div class="entity">
                                        <div class="img-div text-center">
                                            <span><svg class="svg-inline--fa fa-hospital-user" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="hospital-user"
                                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M48 0C21.5 0 0 21.5 0 48V256H144c8.8 0 16 7.2 16 16s-7.2 16-16 16H0v64H144c8.8 0 16 7.2 16 16s-7.2 16-16 16H0v80c0 26.5 21.5 48 48 48H265.9c-6.3-10.2-9.9-22.2-9.9-35.1c0-46.9 25.8-87.8 64-109.2V271.8 48c0-26.5-21.5-48-48-48H48zM152 64h16c8.8 0 16 7.2 16 16v24h24c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16H184v24c0 8.8-7.2 16-16 16H152c-8.8 0-16-7.2-16-16V152H112c-8.8 0-16-7.2-16-16V120c0-8.8 7.2-16 16-16h24V80c0-8.8 7.2-16 16-16zM512 272c0-44.2-35.8-80-80-80s-80 35.8-80 80s35.8 80 80 80s80-35.8 80-80zM288 477.1c0 19.3 15.6 34.9 34.9 34.9H541.1c19.3 0 34.9-15.6 34.9-34.9c0-51.4-41.7-93.1-93.1-93.1H381.1c-51.4 0-93.1 41.7-93.1 93.1z">
                                                    </path>
                                                </svg><!-- <i class="fa-solid fa-hospital-user"></i> Font Awesome fontawesome.com --></span>
                                        </div>
                                        <h3 class="text-center">Caring Team</h3>
                                        <p class="text-center">A team that has nothing but your best interests at heart.
                                        </p>
                                    </div>
                                    <!-- 11 -->
                                    <div class="entity">
                                        <div class="img-div text-center">
                                            <span><svg class="svg-inline--fa fa-tooth" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="tooth" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M154.1 52.1C137.3 39.1 116.7 32 95.5 32C42.7 32 0 74.7 0 127.5v6.2c0 15.8 3.7 31.3 10.7 45.5l23.5 47.1c4.5 8.9 7.6 18.4 9.4 28.2L80.4 460.2c2 11.2 11.6 19.4 22.9 19.8s21.4-7.4 24-18.4l28.9-121.3C160.2 323.7 175 312 192 312s31.8 11.7 35.8 28.3l28.9 121.3c2.6 11.1 12.7 18.8 24 18.4s20.9-8.6 22.9-19.8l36.7-205.8c1.8-9.8 4.9-19.3 9.4-28.2l23.5-47.1c7.1-14.1 10.7-29.7 10.7-45.5v-2.1c0-55-44.6-99.6-99.6-99.6c-24.1 0-47.4 8.8-65.6 24.6l-3.2 2.8 19.5 15.2c7 5.4 8.2 15.5 2.8 22.5s-15.5 8.2-22.5 2.8l-24.4-19-37-28.8z">
                                                    </path>
                                                </svg><!-- <i class="fa-solid fa-tooth"></i> Font Awesome fontawesome.com --></span>
                                        </div>
                                        <h3 class="text-center">Service</h3>
                                        <p class="text-center">Treating you like the unique individual that you are.</p>
                                    </div>
               </div>              
            </div>
        </div>
    </section>

    <!-- for examination 1 -->
      <script>
        $(document).ready(function () {
            $("#you-should-car").owlCarousel({
                // Carousel options
                loop: true,
                // margin: 10,
                responsiveClass: true,
                autoplay: true,
                // dotsContainer: '#custom-dots', 
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 1,

                    }
                    // 992: {
                    //     items: ,

                    // }
                }
            });
        });
    </script>


<!-- end -->


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
                dots: true,

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