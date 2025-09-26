
<?php
  $home = "active"; 
  $pageTitle = "examination and";
  include_once "head.php";   
?>

<body style="overflow-x: hidden;">
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
    <!-- 1top nav -->
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
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                                            class="svg-inline--fa fa-facebook-f" aria-hidden="true" focusable="false"
                                            data-prefix="fab" data-icon="facebook-f" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                            </path>
                                        </svg><!-- <i class="fa-brands fa-facebook-f"></i> Font Awesome fontawesome.com --></span></a>
                            </li>
                            <li><a target="_blank" href="https://www.instagram.com/russellstreetdental.leek/"><span><svg
                                            class="svg-inline--fa fa-instagram" aria-hidden="true" focusable="false"
                                            data-prefix="fab" data-icon="instagram" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
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
        <div class="modal fade" id="bookconsultationmodal" tabindex="-1" aria-labelledby="bookconsultationmodalLabel"
            aria-hidden="true" aria-modal="true" role="dialog">
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

    <!-- ,,,,,,,,,,,,,,,,,,4th part -->
    <section class="single-header nitime-header">
        <div class="grid">
            <!-- 1 -->
            <div class="bg-here">
                <div class="inr">
                    <div class="headings">
                        <h2 class="clr-blue3 min-b">NiTime</h2>
                        <h1 class="clr-blue2 most-b">Aligners</h1>
                    </div>
                    <div class="line"></div>
                    <div class="nitime-header-car owl-carousel owl-theme" id="nitime-header">

                                    <div class="item">
                                        <h2>Embrace the Night, Own the Day</h2>
                                        <p> Wear the aligners only at night. Put your aligners on before bed and take
                                            them out after you wake up.</p>
                                    </div>
                               
                                    <!-- 2 -->
                                    <div class="item">
                                        <h2>No need to wear your aligners all day</h2>
                                        <p>Eat, drink, and talk hassle-free.</p>
                                    </div>
                                        <!-- 3 -->
                                    <div class="item">
                                        <h2>Introducing OrthoFX NiTime</h2>
                                        <p>The first FDA cleared aligner system for night only wear. Get that perfect
                                            smile while you sleep. </p>
                                    </div>
                                   <!-- 4 -->
                                    <div class="item">
                                        <h2>Embrace the Night, Own the Day</h2>
                                        <p> Wear the aligners only at night. Put your aligners on before bed and take
                                            them out after you wake up.</p>
                                    </div>
                                   <!-- 5 -->
                                    <div class="item">
                                        <h2>No need to wear your aligners all day</h2>
                                        <p>Eat, drink, and talk hassle-free.</p>
                                    </div>
                                    <!-- 6 -->
                                    <div class="item">
                                        <h2>Introducing OrthoFX NiTime</h2>
                                        <p>The first FDA cleared aligner system for night only wear. Get that perfect
                                            smile while you sleep. </p>
                                    </div>
                                     <!-- 7 -->
                                    <div class="item">
                                        <h2>Embrace the Night, Own the Day</h2>
                                        <p> Wear the aligners only at night. Put your aligners on before bed and take
                                            them out after you wake up.</p>
                                    </div>
                           
                    </div>
                </div>
            </div>  
             <!-- 2 -->
            <div class="img-div">
                <img src="assets/a-images/header (3).webp" style="width: 100%;" alt="nitime aligners header">
            </div>
        </div>
    </section>



<!-- 5th part -->
 <section class="is-whitening">
        <div class="wrap">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="headings">
                            <h3 class="clr-blue3 min-b">Living with the convenience, flexibility and freedom of</h3>
                            <h2 class="clr-blue2 most-b">NiTime aligners</h2>
                        </div>
                        <!-- <h3>Living with the convenience, flexibility and freedom of NiTime aligners</h3> -->
                        <p>You only have to wear NiTime aligners for 9-12 hours compared to 22 hours for other aligners and the overall treatment time does not increase.</p>
                        <ul class="three-steps-nitime">
                            <li>
                                <span>
                                    <img src="assets/a-images/svgexport-9.webp" alt="">
                                </span>
                                <span>Before bed brush your teeth and do your regular nightly routine. Put your aligners in.</span>
                            </li>
                            <li>
                                <span>
                                    <img src="assets/a-images/svgexport-10.webp" alt="">
                                </span>
                                <span>Dream. Wake up closer to the smile that you have always dreamed of.</span>
                            </li>
                            <li>
                                <span>
                                    <img src="assets/a-images/svgexport-11.webp" alt="">
                                </span>
                                <span>Go about your day with the freedom of not wearing any aligners.</span>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-6">
                        <div class="img-div">
                            <div class="video-container" id="video-container">
                                <video controls="" id="video" preload="metadata" poster="assets/a-images/nitime-videoBG.webp">
                                    <source src="assets/a-images/NiTime_Aligners.mp4" type="video/mp4">
                                </video>

                                <div class="play-button-wrapper">
                                    <div title="Play video" class="play-gif" id="circle-play-b" style="opacity: 1;">
                                        <!-- SVG Play Button -->
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                            <path d="M40 0a40 40 0 1040 40A40 40 0 0040 0zM26 61.56V18.44L64 40z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<script>
    // for play button opacity
document.addEventListener("DOMContentLoaded", function() {
    
    const video = document.getElementById('video');
    const playButton = document.getElementById('circle-play-b');
   // 1. 
 playButton.addEventListener('click', function() {
    if (video.paused) {
       
        video.play();
    } else {
      
        video.pause();
    }
});
  // 2.
    video.addEventListener('play', function() {
        playButton.style.opacity = '0';
    });

    // 3. 
    video.addEventListener('pause', function() {
        playButton.style.opacity = '1';
    });
});
</script>
<!-- end -->


<!-- 6th part -->

<section class="self-care">
        <div class="wrap">
            <div class="heading-div">
                <h2 class="most-b">No one has to know that you’re straightening your teeth.</h2>
            </div>
            <div class="para-upr">
                <p>During the day you are free to eat, snack and go about your busy life without the need to wear an aligner.</p>
            </div>
            <div class="grid grid-four">
                <div class="entity">
                    <div class="main-svg">
                        <div class="svg-div">
                            <img src="assets/a-images/Sandy01.webp" loading="lazy" alt="">
                        </div>
                    </div>
                    <div class="heading-main">
                        <div class="heading">
                            <h3 class="">1.</h3>
                            <h3>Want that coffee? No problem. No aligners.</h3>
                        </div>
                    </div>
                    <div class="para">
                        <p>Sandy goes about her day without wearing any aligners. She has her morning coffee.</p>
                    </div>
                </div>
                <div class="entity">
                    <div class="main-svg">
                        <div class="svg-div brown">
                            <img src="assets/a-images/Sandy02.webp" loading="lazy" alt="">
                        </div>
                    </div>
                    <div class="heading-main">
                        <div class="heading">
                            <h3 class="">2.</h3>
                            <h3>Want to eat? No problem. No aligners.</h3>
                        </div>
                    </div>
                    <div class="para">
                        <p>Eats breakfast. Goes to work. Has meetings. And no one knows she’s straightening her smile.</p>
                    </div>
                </div>
                <div class="entity">
                    <div class="main-svg">
                        <div class="svg-div">
                            <img src="assets/a-images/Sandy03.webp" loading="lazy" alt="">
                        </div>
                    </div>
                    <div class="heading-main">
                        <div class="heading">
                            <h3 class="">3.</h3>
                            <h3>Work without any aligners during the day.</h3>
                        </div>
                    </div>
                    <div class="para">
                        <p>No one knows she’s getting a beautiful and healthy smile, but her.</p>
                    </div>
                </div>
                <div class="entity">
                    <div class="main-svg">
                        <div class="svg-div">
                            <img src="assets/a-images/Sandy04.webp" loading="lazy" alt="">
                        </div>
                    </div>
                    <div class="heading-main">
                        <div class="heading">
                            <h3 class="">4.</h3>
                            <h3>Only wear your aligners at night!</h3>
                        </div>
                    </div>
                    <div class="para">
                        <p>She doesn’t have to let anyone know. It’s her NiTime secret.</p>
                    </div>
                </div>
            </div>
            <div class="btn-div">
                <a href="contact.php" class="green-btn">Contact Us</a>
            </div>
        </div>
</section>

<!-- 7th part -->

<section class="faq-section">
        <div class="wrap">
            <h2 class="most-b">Frequently Asked Questions</h2>
            <p class="upper-para">HAVE QUESTIONS? WE’RE HERE TO HELP.</p>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item ">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            How long do I have to wear NiTime aligners each day?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                The aligners need to be worn for 9-12 hours a day.
                            </p>
                        </div>
                    </div>
                </div>
               <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            I don’t sleep for 9 hours, will it still work for me?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                It’s worth brushing your teeth after the last meal of the day and putting the aligners in then until the morning.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item ">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Will I have to wear the NiTime aligners longer than normal all day aligners?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                No, that’s the impressive bit. Opting for NiTime aligners will not extend the length of your treatment compared to if you wore other brands for 22 hours a day.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item ">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Will I experience more discomfort with NiTime aligners?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                NiTime aligners may be more comfortable than industry-standard aligners. NiTime aligners use smaller but optimal forces, whereas some other aligners exert more force than what is required causing more discomfort.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- 8th part -->


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

<!-- for nitime aligners carousel -->
     <script>
        $(document).ready(function () {
            $("#nitime-header").owlCarousel({
                // Carousel options
                loop: true,
                // margin: 10,
                responsiveClass: true,
                autoplay: true,
                nav:false,
                dots:false,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,

                    },
                    768: {
                        items: 1,
                    },
                    992: {
                        items: 1,
                    }
                }
            });
        });
    </script>
</body>

</html>