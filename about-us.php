
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
<section class="general-header about-header">
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
    <div class="g-wrap clr-white">
            <div class="heading">
                <h2 class="min-b clr-green">About</h2>
                <h1 class="most-b">Russell Street Dental Practice</h1>
            </div>
            <div class="line"></div>
            <div class="row py-5">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>We are dedicated to offering you the highest standard of personalised dental care in a warm and compassionate environment. Our mission is to restore, enhance and maintain the natural beauty of your smile using state-of-the-art procedures that result in beautiful, long-lasting smiles.</p>
                        </div>
                        <div class="col-lg-6">
                            <p>At Russell Street Dental Practice, we understand that some people may experience anxiety about visiting the dentist. To ensure a comfortable and relaxed experience, we have cultivated a gentle, caring atmosphere, from the moment you walk through our doors until the completion of your treatment.</p>
                        </div>
                        <div class="col-lg-12">
                            <p>We look forward to serving you and your family's dental needs with cutting-edge treatment options and the latest in dental technology. We're not just here to fix your teeth; we're here to ensure your overall health, happiness and satisfaction with your smile.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="assets/a-images/about-header-small-pic.webp" style="width: 100%;" alt="">
                </div>
            </div>
    </div>

</section>    
<!-- 2 -->
 
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
<!-- 3 -->
    <section class="services-about">
        <div class="wrap">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="clr-blue3">
                        <small class="clr-blue2">
                            <u>Russell Street Dental</u>
                        </small>
                        <br>
                        Treatments
                    </h2>
                    <div class="impty-space"></div>
                    <!-- <p>Distinctively exploit optimal alignments for intuitive bandwidth. Quickly coordinate e-business applications through revolutionary catalysts for change. Seamlessly underwhelm optimal testing processes.</p> -->

                </div>
            </div>
            <div class="grid">
                <div class="entity">
                    <div class="img-div">
                        <a href="examinations-hygiene.php">
                            <img src="assets/a-images/about-service.jpg" alt="">
                        </a>
                        <div class="hover-effect"></div>
                    </div>
                    <div class="content">
                        <div class="impty-sp"></div>
                        <h3 class="clr-blue">Examinations &amp; Hygiene</h3>
                        <div class="impty-s"></div>
                        <!--                        <p>Collaboratively expedite quality manufactured products via client-focused results.</p>-->
                        <div class="impty-s"></div>
                        <div class="btn-div">
                            <button onclick="location.href='examinations-hygiene.php'" class="green-btn-type">Learn More</button>
                        </div>
                        <div class="impty-sp"></div>
                    </div>
                </div>
                <div class="entity">
                    <div class="img-div">
                        <a href="invisalign.php">
                            <img src="assets/a-images/invis.webp" alt="">
                        </a>
                        <div class="hover-effect"></div>
                    </div>
                    <div class="content">
                        <div class="impty-sp"></div>
                        <h3 class="clr-blue">Invisalign Aligners</h3>
                        <div class="impty-s"></div>
                        <!--                        <p>Collaboratively expedite quality manufactured products via client-focused results.</p>-->
                        <div class="impty-s"></div>
                        <div class="btn-div">
                            <button onclick="location.href='invisalign.php'" class="green-btn-type">Learn More</button>
                        </div>
                        <div class="impty-sp"></div>
                    </div>
                </div>
                <div class="entity">
                    <div class="img-div">
                        <a href="composite-bonding.php">
                            <img src="assets/a-images/composite-bonding.webp" alt="">
                        </a>
                        <div class="hover-effect"></div>
                    </div>
                    <div class="content">
                        <div class="impty-sp"></div>
                        <h3 class="clr-blue">Composite Bonding</h3>
                        <div class="impty-s"></div>
                        <!--                        <p>Collaboratively expedite quality manufactured products via client-focused results.</p>-->
                        <div class="impty-s"></div>
                        <div class="btn-div">
                            <button onclick="location.href='composite-bonding.php'" class="green-btn-type">Learn More</button>
                        </div>
                        <div class="impty-sp"></div>
                    </div>
                </div>
                <div class="entity">
                    <div class="img-div">
                        <a href="restorative-dentistry.php">
                            <img src="assets/a-images/restorative.webp" alt="">
                        </a>
                        <div class="hover-effect"></div>
                    </div>
                    <div class="content">
                        <div class="impty-sp"></div>
                        <h3 class="clr-blue">Restorative Dentistry</h3>
                        <div class="impty-s"></div>
                        <!--                        <p>Collaboratively expedite quality manufactured products via client-focused results.</p>-->
                        <div class="impty-s"></div>
                        <div class="btn-div">
                            <button onclick="location.href='restorative-dentistry.php'" class="green-btn-type">Learn More</button>
                        </div>
                        <div class="impty-sp"></div>
                    </div>
                </div>
                <div class="entity">
                    <div class="img-div">
                        <a href="teeth-whitening.php">
                            <img src="assets/a-images/whitening.webp" alt="">
                        </a>
                        <div class="hover-effect"></div>
                    </div>
                    <div class="content">
                        <div class="impty-sp"></div>
                        <h3 class="clr-blue">Teeth Whitening</h3>
                        <div class="impty-s"></div>
                        <!--                        <p>Collaboratively expedite quality manufactured products via client-focused results.</p>-->
                        <div class="impty-s"></div>
                        <div class="btn-div">
                            <button onclick="location.href='teeth-whitening.php'" class="green-btn-type">Learn More</button>
                        </div>
                        <div class="impty-sp"></div>
                    </div>
                </div>
                <div class="entity">
                    <div class="img-div">
                        <a href="veeners.php">
                            <img src="assets/a-images/veneers.webp" alt="">
                        </a>
                        <div class="hover-effect"></div>
                    </div>
                    <div class="content">
                        <div class="impty-sp"></div>
                        <h3 class="clr-blue">Porcelain Veneers</h3>
                        <div class="impty-s"></div>
                        <!--                        <p>Collaboratively expedite quality manufactured products via client-focused results.</p>-->
                        <div class="impty-s"></div>
                        <div class="btn-div">
                            <button onclick="location.href='veeners.php'" class="green-btn-type">Learn More</button>
                        </div>
                        <div class="impty-sp"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- 8 -->
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