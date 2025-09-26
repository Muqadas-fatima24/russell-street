
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
<section class="contact-header pricing-header">
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
                       <h1 class="most-b text-white">Pricing</h1>
                    </div>
                    <div class="green-line mb-3"></div>
                    <p style="visibility: hidden">Objectively integrate enterprise-wide strategic theme areas with functionalized infrastructures. Interactively productize premium technologies whereas interdependent quality vectors. Rapaciously utilize enterprise experiences via 24/7 markets.</p>
                </div>
            </div>
        </div>

</section>  

<!-- 2 -->
 <section class="pricing-tabs">
        <div class="wrap">
            <ul class="nav sm-price-car nav-tabs" id="myTab" role="tablist">

                                        <li class="nav-item item" role="presentation">
                            <button class="nav-link active" id="fee1-tab" data-bs-toggle="tab" data-bs-target="#fee1" type="button" role="tab" aria-controls="fee1" aria-selected="true">Patient Examinations &amp; Hygiene</button>
                        </li>
                                        <li class="nav-item item" role="presentation">
                            <button class="nav-link " id="fee2-tab" data-bs-toggle="tab" data-bs-target="#fee2" type="button" role="tab" aria-controls="fee2" aria-selected="true">Restorative Dentistry</button>
                        </li>
                                        <li class="nav-item item" role="presentation">
                            <button class="nav-link" id="fee3-tab" data-bs-toggle="tab" data-bs-target="#fee3" type="button" role="tab" aria-controls="fee3" aria-selected="true">Invisalign Teeth Straightening</button>
                        </li>
                                        <li class="nav-item item" role="presentation">
                            <button class="nav-link" id="fee4-tab" data-bs-toggle="tab" data-bs-target="#fee4" type="button" role="tab" aria-controls="fee4" aria-selected="true">Composite Bonding</button>
                        </li>
                                        <li class="nav-item item" role="presentation">
                            <button class="nav-link" id="fee5-tab" data-bs-toggle="tab" data-bs-target="#fee5" type="button" role="tab" aria-controls="fee5" aria-selected="true">Teeth Whitening</button>
                        </li>
                                        <li class="nav-item item" role="presentation">
                            <button class="nav-link " id="fee6-tab" data-bs-toggle="tab" data-bs-target="#fee6" type="button" role="tab" aria-controls="fee6" aria-selected="true">Dental Implants</button>
                        </li>
                                        <li class="nav-item item" role="presentation">
                            <button class="nav-link " id="fee7-tab" data-bs-toggle="tab" data-bs-target="#fee7" type="button" role="tab" aria-controls="fee7" aria-selected="true">Bite Guards</button>
                        </li>
                
            
            </ul>
             <!-- <ul class="sm-price-car d-md-none sm-price owl-carousel owl-theme" role="tablist">

                                        <li class="nav-item item" role="presentation">
                            <button class="nav-link active" id="fee1-tab" data-bs-toggle="tab" data-bs-target="#fee1" type="button" role="tab" aria-controls="fee1" aria-selected="true">Patient Examinations &amp; Hygiene</button>
                        </li>
                                        <li class="nav-item item" role="presentation">
                            <button class="nav-link" id="fee2-tab" data-bs-toggle="tab" data-bs-target="#fee2" type="button" role="tab" aria-controls="fee2" aria-selected="true">Restorative Dentistry</button>
                        </li>
                                        <li class="nav-item item" role="presentation">
                            <button class="nav-link" id="fee3-tab" data-bs-toggle="tab" data-bs-target="#fee3" type="button" role="tab" aria-controls="fee3" aria-selected="true">Invisalign Teeth Straightening</button>
                        </li>
                                        <li class="nav-item item" role="presentation">
                            <button class="nav-link" id="fee4-tab" data-bs-toggle="tab" data-bs-target="#fee4" type="button" role="tab" aria-controls="fee4" aria-selected="true">Composite Bonding</button>
                        </li>
                                        <li class="nav-item item" role="presentation">
                            <button class="nav-link" id="fee5-tab" data-bs-toggle="tab" data-bs-target="#fee5" type="button" role="tab" aria-controls="fee5" aria-selected="true">Teeth Whitening</button>
                        </li>
                                        <li class="nav-item item" role="presentation">
                            <button class="nav-link" id="fee6-tab" data-bs-toggle="tab" data-bs-target="#fee6" type="button" role="tab" aria-controls="fee6" aria-selected="true">Dental Implants</button>
                        </li>
                                        <li class="nav-item item" role="presentation">
                            <button class="nav-link" id="fee7-tab" data-bs-toggle="tab" data-bs-target="#fee7" type="button" role="tab" aria-controls="fee7" aria-selected="true">Bite Guards</button>
                        </li>
                
            
            </ul> -->
            <div class="tab-content" id="myTabContent">

                                        <div class="tab-pane fade show active" id="fee1" role="tabpanel" aria-labelledby="fee1-tab">
                            <div class="row">

                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>New Patient Examination</h5>
                                                    <h5 class="clr-blue2">£79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        
                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Routine Examination*</h5>
                                                    <h5 class="clr-blue3">£42</h5>
                                                </div>
                                            </div>
                                        </div>
                                           
                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Emergency Appointment (Assessment)</h5>
                                                    <h5 class="clr-blue3">£50</h5>
                                                </div>
                                            </div>
                                        </div>
                                          
                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Scale &amp; Polish</h5>
                                                    <h5 class="clr-blue2">from £42</h5>
                                                </div>
                                            </div>
                                        </div>
                                           
                                                            </div>
                        </div>
                                        <div class="tab-pane fade show " id="fee2" role="tabpanel" aria-labelledby="fee2-tab">
                            <div class="row">

                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Filling</h5>
                                                    <h5 class="clr-blue2">from £145</h5>
                                                </div>
                                            </div>
                                        </div>
                                           
                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Root Canal Treatment</h5>
                                                    <h5 class="clr-blue3">from £462</h5>
                                                </div>
                                            </div>
                                        </div>
                                           
                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Extractions</h5>
                                                    <h5 class="clr-blue3">from £164</h5>
                                                </div>
                                            </div>
                                        </div>
                                           
                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Crown</h5>
                                                    <h5 class="clr-blue2">from £520</h5>
                                                </div>
                                            </div>
                                        </div>
                                          
                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Bridge</h5>
                                                    <h5 class="clr-blue2">from £604</h5>
                                                </div>
                                            </div>
                                        </div>
                                           
                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Veneers</h5>
                                                    <h5 class="clr-blue3">from £730</h5>
                                                </div>
                                            </div>
                                        </div>
                                         
                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Dentures</h5>
                                                    <h5 class="clr-blue3">from £688</h5>
                                                </div>
                                            </div>
                                        </div>
                                        
                                                            </div>
                        </div>
                                        <div class="tab-pane fade show " id="fee3" role="tabpanel" aria-labelledby="fee3-tab">
                            <div class="row">

                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Invisalign Consultation</h5>
                                                    <h5 class="clr-blue2">£75</h5>
                                                </div>
                                            </div>
                                        </div>
                                           
                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Invisalign/Clear Aligners</h5>
                                                    <h5 class="clr-blue3">from £2,895</h5>
                                                </div>
                                            </div>
                                        </div>
                                           
                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Vivera Retainers</h5>
                                                    <h5 class="clr-blue3">£440</h5>
                                                </div>
                                            </div>
                                        </div>
                                            
                                                            </div>
                        </div>
                                        <div class="tab-pane fade show " id="fee4" role="tabpanel" aria-labelledby="fee4-tab">
                            <div class="row">

                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Mock Up (per tooth)</h5>
                                                    <h5 class="clr-blue2">£50</h5>
                                                </div>
                                            </div>
                                        </div>
                                            
                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Edge bonding (per tooth)</h5>
                                                    <h5 class="clr-blue3">from £200</h5>
                                                </div>
                                            </div>
                                        </div>
                                          
                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Composite Veneer (per tooth)</h5>
                                                    <h5 class="clr-blue3">from £295</h5>
                                                </div>
                                            </div>
                                        </div>
                                    
                                                            </div>
                        </div>
                                        <div class="tab-pane fade show " id="fee5" role="tabpanel" aria-labelledby="fee5-tab">
                            <div class="row">

                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Take Home Whitening</h5>
                                                    <h5 class="clr-blue2">£295</h5>
                                                </div>
                                            </div>
                                        </div>
                                       
                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Whitening Top Up (2 syringes)</h5>
                                                    <h5 class="clr-blue3">from £50</h5>
                                                </div>
                                            </div>
                                        </div>

                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Whitening Top Up (4 syringes)</h5>
                                                    <h5 class="clr-blue3">from £90</h5>
                                                </div>
                                            </div>
                                        </div>
                                                            </div>
                        </div>
                                        <div class="tab-pane fade show " id="fee6" role="tabpanel" aria-labelledby="fee6-tab">
                            <div class="row">

                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Implant Consultation</h5>
                                                    <h5 class="clr-blue2">£75</h5>
                                                </div>
                                            </div>
                                        </div>
                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Implant with Crown</h5>
                                                    <h5 class="clr-blue3">from £2,500</h5>
                                                </div>
                                            </div>
                                        </div>
                                                            </div>
                        </div>
                                        <div class="tab-pane fade show " id="fee7" role="tabpanel" aria-labelledby="fee7-tab">
                            <div class="row">

                                                                        <div class="col-lg-6">
                                            <div class="name-prices">
                                                <div class="inr-f">
                                                    <h5>Night Guard</h5>
                                                    <h5 class="clr-blue2">£105</h5>
                                                </div>
                                            </div>
                                        </div>
                                                            </div>
                        </div>
                
                
            </div>
        </div>
    </section>




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