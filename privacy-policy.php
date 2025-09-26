
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

<main>
  <section class="treatments-section">
        <div class="treatments-text">
            <h2>PRIVACY &amp; COOKIE POLICY</h2>
            <div class="text-left">
                <div>
                    Welcome to the Russell Street Dental Limited (Russell Street Dental) privacy notice. Russell Street Dental respects your privacy and
                    is committed to protecting your personal data. This privacy notice will inform you as to how we look
                    after your personal data when you visit our website (regardless of where you visit it from) and tell you
                    about your privacy rights and how the law protects you.<br>
                    This privacy notice is provided in a layered format, so you can click through to the specific areas set
                    out below. Please also use the Glossary to understand the meaning of some of the terms used in this
                    privacy notice.
                    <br><br>
                    <h4>CONTENTS</h4>
                    1. Important information and who we are<br>
                    1.1 Purpose of this privacy notice<br>
                    1.2 Controller<br>
                    1.3 Contact details<br>
                    1.4 Changes to the privacy notice and your duty to inform us of changes<br>
                    1.5 Third-party links<br>
                    2. The data we collect about you<br>
                    2.1 If you fail to provide personal data<br>
                    3. How is your personal data collected?<br>
                    4. How we use your personal data<br>
                    4.1 Purposes for which we will use your personal data<br>
                    4.2 Marketing<br>
                    4.3 Promotional offers from us<br>
                    4.4 Third-party marketing<br>
                    4.5 Opting out<br>
                    4.6 Cookies<br>
                    4.7 Change of purpose<br>
                    5. Disclosures of your personal data<br>
                    6. International transfers<br>
                    7. Data security<br>
                    8. Data retention<br>
                    8.1 How long will you use my personal data for?<br>
                    9. Your legal rights<br>
                    9.1 No fee usually required<br>
                    9.2 What we may need from you<br>
                    9.3 Time limit to respond<br>
                    10. Glossary<br>
                    10.1 Lawful basis<br>
                    10.2 Third parties<br>
                    11. Your legal rights<br>
                    12. Cookies notice
                </div>

                <div>
                    <br><br>
                    <h4>1. IMPORTANT INFORMATION AND WHO WE ARE</h4>
                    <br><br>
                    <h5>1.1 Purpose of this privacy notice</h5>
                    This privacy notice aims to give you information on how Russell Street Dental collects and processes your personal
                    data through your use of this website, including any data you may provide through this website when you
                    sign up to our newsletter or request information on our services.<br>
                    This website is not intended for children and we do not knowingly collect data relating to children.<br>
                    It is important that you read this privacy notice together with any other privacy notice or fair
                    processing notice we may provide on specific occasions when we are collecting or processing personal
                    data about you so that you are fully aware of how and why we are using your data. This privacy notice
                    supplements the other notices and is not intended to override them.
                    <br><br>
                    <h5>1.2 Controller</h5>
                    Russell Street Dental: is the controller and responsible for your personal data (collectively referred to as
                    [“COMPANY”], “we”, “us” or “our” in this privacy notice).<br>
                    If you have any questions about this privacy notice, including any requests to exercise your legal
                    rights, please contact us using the details set out below.
                    <br><br>
                    <h5>1.3 Contact details</h5>
                    Our full details are:<br>
                    Full name of legal entity: Russell Street Dental Limited<br>
                    Email address: dentist@russell-street.co.uk<br>
                    Postal address: 98 Huddersfield Rd, Mirfield WF14 8AF<br><br>


                    You have the right to make a complaint at any time to the Information Commissioner’s Office (ICO), the
                    UK supervisory authority for data protection issues (www.ico.org.uk). We would, however, appreciate the
                    chance to deal with your concerns before you approach the ICO, so please contact us in the first
                    instance.
                    <br><br>
                    <h5>1.4 Changes to the privacy notice and your duty to inform us of changes</h5>
                    This version was last updated on 1/11/2020<br>
                    It is important that the personal data we hold about you is accurate and current. Please keep us
                    informed if your personal data changes during your relationship with us.
                    <br><br>
                    <h5>1.5 Third-party links</h5>
                    The Russell Street Dental website www.russell-street.co.uk may include links to third-party websites, plug-ins and
                    applications. Clicking on those links or enabling those connections may allow third parties to collect
                    or share data about you. We do not control these third-party websites and are not responsible for their
                    privacy statements. When you leave our website, we encourage you to read the privacy notice of every
                    website you visit.
                    <br><br>
                    <h4>2. THE DATA WE COLLECT ABOUT YOU</h4>
                    Personal data, or personal information, means any information about an individual from which that person
                    can be identified. It does not include data where the identity has been removed (anonymous data).
                    We may collect, use, store and transfer different kinds of personal data about you which we have grouped
                    together follows:<br><br>
                    • Identity data includes first name, last name, username or similar identifier, title and job title.<br>
                    • Contact data includes postal address, email address and telephone numbers.<br>
                    • Technical data includes internet protocol (IP) address, your login data, browser type and version,
                    time zone setting and location, browser plug-in types and versions, operating system and platform and
                    other technology on the devices you use to access our website.<br>
                    • Profile data includes your interests, preferences, feedback and survey responses.<br>
                    • Usage data includes information about how you use our website, products and services.<br>
                    • Marketing and communications data includes your preferences in receiving marketing from us and our
                    third parties and your communication preferences.<br><br>
                    We also collect, use and share aggregated data such as statistical or demographic data for any purpose.
                    Aggregated data may be derived from your personal data but is not considered personal data in law as
                    this data does not directly or indirectly reveal your identity. For example, we may aggregate your usage
                    data to calculate the percentage of users accessing a specific website feature. However, if we combine
                    or connect aggregated data with your personal data so that it can directly or indirectly identify you,
                    we treat the combined data as personal data which will be used in accordance with this privacy notice.
                    We do not collect any special categories of personal data about you (this includes details about your
                    race or ethnicity, religious or philosophical beliefs, sex life, sexual orientation, political opinions,
                    trade union membership, information about your health and genetic and biometric data). Nor do we collect
                    any information about criminal convictions and offences.
                    <br><br>
                    <h5>2.1 If you fail to provide personal data</h5>
                    Where we need to collect personal data by law, or under the terms of a contract we have with you and you
                    fail to provide that data when requested, we may not be able to perform the contract we have or are
                    trying to enter into with you (for example, to provide you with goods or services). In this case, we may
                    have to cancel a product or service you have with us, but we will notify you if this is the case at the
                    time.
                    <br><br>
                    <h4>3. HOW IS YOUR PERSONAL DATA COLLECTED?</h4>
                    We use different methods to collect data from and about you including through:<br>
                    • Direct interactions. You may give us your identity and contact data by filling in forms or by
                    corresponding with us by post, phone, email or otherwise. This includes personal data you provide when
                    you:<br><br>
                    – apply for services;<br>
                    – subscribe to our service or publications;<br>
                    – request marketing to be sent to you; or<br>
                    – give us some feedback.<br><br>
                    • Automated technologies or interactions. As you interact with our website, we may automatically collect
                    technical data about your equipment, browsing actions and patterns. We collect this personal data by
                    using cookies and other similar technologies. We may also receive technical data about you if you visit
                    other websites employing our cookies. Please see our cookies notice.<br>
                    • Third parties or publicly available sources. We may receive personal data about you from various third
                    parties and public sources as set out below:<br><br>
                    – Technical data from the following parties:<br>
                    a. analytics providers such as Google based outside the EU; and<br>
                    b. advertising networks and events based inside the EU.<br>
                    – Identity and contact data from data brokers or aggregators such as event managers and marketing lead
                    providers based inside the EU.<br>
                    – Identity and contact data from publicly availably sources such as Companies House and the Electoral
                    Register based inside the EU.<br>

                    <br><br>
                    <h4>4. HOW WE USE YOUR PERSONAL DATA</h4>
                    We will only use your personal data when the law allows us to. Most commonly, we will use your personal
                    data in the following circumstances:<br>
                    • Where we need to perform the contract we are about to enter into or have entered into with you.<br>
                    • Where it is necessary for our legitimate interests (or those of a third party) and your interests and
                    fundamental rights do not override those interests.<br>
                    • Where we need to comply with a legal or regulatory obligation.<br>
                    Generally, we do not rely on consent as a legal basis for processing your personal data other than in
                    relation to sending third party direct marketing communications to you via email, text message or
                    postage. You have the right to withdraw consent to marketing at any time by contacting us at
                    dentist@russell-street.co.uk.<br>

                    <br><br>
                    <h5>4.1 Purposes for which we will use your personal data</h5>
                    We have set out below, in a table format, a description of all the ways we plan to use your personal
                    data, and which of the legal bases we rely on to do so. We have also identified what our legitimate
                    interests are where appropriate.<br>
                    Note that we may process your personal data for more than one lawful ground depending on the specific
                    purpose for which we are using your data. Please contact us at dentist@russell-street.co.uk if you need details
                    about the specific legal ground we are relying on to process your personal data where more than one
                    ground has been set out in the table below.<br><br>

                    Purpose/Activity Type of data Lawful basis for processing including basis of legitimate interest
                    To register you as a new customer (a) Identity<br>
                    (b) Contact Performance of a contract with you<br>
                    To manage our relationship with you which will include:<br>
                    (a) Notifying you about changes to our terms or privacy policy<br>
                    (b) Asking you to leave a review or take a survey (a) Identity<br>
                    (b) Contact<br>
                    (c) Profile<br>
                    (d) Marketing and Communications (a) Performance of a contract with you<br>
                    (b) Necessary to comply with a legal obligation<br>
                    (c) Necessary for our legitimate interests (to keep our records updated and to study how customers use
                    our products/services)<br>
                    To administer and protect our business and our website (including troubleshooting, data analysis,
                    testing, system maintenance, support, reporting and hosting of data) <br>
                    (a) Identity<br>
                    (b) Contact<br>
                    (c) Technical <br><br>
                    (a) Necessary for our legitimate interests (for running our business, provision of
                    administration and IT services, network security, to prevent fraud and in the context of a business
                    reorganisation or group restructuring exercise)<br>
                    (b) Necessary to comply with a legal obligation<br><br>
                    To deliver relevant website content and advertisements to you and measure or understand the
                    effectiveness of the advertising we serve to you <br>(a) Identity<br>
                    (b) Contact<br>
                    (c) Profile<br>
                    (d) Usage<br>
                    (e) Marketing and Communications<br>
                    (f) Technical Necessary for our legitimate interests (to study how customers use our products/services,
                    to develop them, to grow our business and to inform our marketing strategy)<br><br>
                    To use data analytics to improve our website, products/services, marketing, customer relationships and
                    experiences <br>(a) Technical<br>
                    (b) Usage Necessary for our legitimate interests (to define types of customers for our products and
                    services, to keep our website updated and relevant, to develop our business and to inform our marketing
                    strategy)<br><br>
                    To make suggestions and recommendations to you about goods or services that may be of interest to
                    you<br>
                    (a) Identity<br>
                    (b) Contact<br>
                    (c) Technical<br>
                    (d) Usage<br>
                    (e) Profile Necessary for our legitimate interests (to develop our products/services and grow our
                    business)<br><br>

                    <br><br>
                    <h5>4.2 Marketing</h5>
                    We strive to provide you with choices regarding certain personal data uses, particularly around
                    marketing and advertising.
                    <br><br>
                    <h5>4.3 Promotional offers from us</h5>
                    We may use your identity, contact, technical, usage and profile data to form a view on what we think you
                    may want or need, or what may be of interest to you. This is how we decide which products, services and
                    offers may be relevant for you (we call this marketing).<br>
                    You will receive marketing communications from us if you have requested information from us or if you
                    provided us with your details when you subscribe for news and updates, in each case, you have not opted
                    out of receiving that marketing.
                    <br><br>
                    <h5>4.4 Third-party marketing</h5>
                    We will get your express opt-in consent before we share your personal data with any company outside of
                    Russell Street Dental for marketing purposes.
                    <br><br>
                    <h5>4.5 Opting out</h5>
                    You can ask us or third parties to stop sending you marketing messages at any time by following the
                    opt-out links on any marketing message sent to you or by contacting us at dentist@russell-street.co.uk.
                    <br><br>
                    <h5>4.6 Cookies</h5>
                    You can set your browser to refuse all or some browser cookies, or to alert you when websites set or
                    access cookies. If you disable or refuse cookies, please note that some parts of our website may become
                    inaccessible or not function properly. For more information about the cookies we use, please see cookies
                    notice.
                    <br><br>
                    <h5>4.7 Change of purpose</h5>
                    We will only use your personal data for the purposes for which we collected it, unless we reasonably
                    consider that we need to use it for another reason and that reason is compatible with the original
                    purpose. If you wish to get an explanation as to how the processing for the new purpose is compatible
                    with the original purpose, please contact us at dentist@russell-street.co.uk.<br>
                    If we need to use your personal data for an unrelated purpose, we will notify you and we will explain
                    the legal basis which allows us to do so.<br>
                    Please note that we may process your personal data without your knowledge or consent, in compliance with
                    the above rules, where this is required or permitted by law.
                    <br><br>
                    <h4>5. DISCLOSURES OF YOUR PERSONAL DATA</h4>
                    We may have to share your personal data with the parties set out below for the purposes set out in the
                    glossary section, this includes:<br>
                    • Internal third parties;<br>
                    • External third parties; or<br>
                    • Third parties to whom we may choose to sell, transfer, or merge parts of our business or our
                    assets.<br><br>
                    Alternatively, we may seek to acquire other businesses or merge with them. If a change happens to our
                    business, then the new owners may use your personal data in the same way as set out in this privacy
                    notice.<br>
                    We require all third parties to respect the security of your personal data and to treat it in accordance
                    with the law. We do not allow our third-party service providers to use your personal data for their own
                    purposes and only permit them to process your personal data for specified purposes and in accordance
                    with our instructions.
                    <br><br>
                    <h4>6. INTERNATIONAL TRANSFERS</h4>
                    Whenever we transfer your personal data out of the EEA, we ensure a similar degree of protection is
                    afforded to it by ensuring at least one of the following safeguards is implemented:<br>
                    • We will only transfer your personal data to countries that have been deemed to provide an adequate
                    level of protection for personal data by the European Commission. For further details, see European
                    Commission: Adequacy of the protection of personal data in non-EU countries.<br>
                    • Where we use certain service providers, we may use specific contracts approved by the European
                    Commission which give personal data the same protection it has in Europe. For further details, see
                    European Commission: Model contracts for the transfer of personal data to third countries.<br>
                    • Where we use providers based in the United States of America, we may transfer data to them if they are
                    part of the Privacy Shield which requires them to provide similar protection to personal data shared
                    between the Europe and the United States of America. For further details, see European Commission: EU-US
                    Privacy Shield.<br>
                    Please contact us at dentist@russell-street.co.uk if you want further information on the specific mechanism
                    used by us when transferring your personal data out of the EEA.

                    <br><br>
                    <h4>7. DATA SECURITY</h4>
                    We have put in place appropriate security measures to prevent your personal data from being accidentally
                    lost, used or accessed in an unauthorised way, altered or disclosed. In addition, we limit access to
                    your personal data to those employees, agents, contractors and other third parties who have a business
                    need to know. They will only process your personal data on our instructions and they are subject to a
                    duty of confidentiality.<br>
                    We have put in place procedures to deal with any suspected personal data breach and will notify you and
                    any applicable regulator of a breach where we are legally required to do so.
                    <br><br>
                    <h4>8. DATA RETENTION</h4>
                    <br><br>
                    <h5>8.1 How long will you use my personal data for?</h5>
                    We will only retain your personal data for as long as necessary to fulfil the purposes we collected it
                    for, including for the purposes of satisfying any legal, accounting, or reporting requirements.<br>
                    To determine the appropriate retention period for personal data, we consider the amount, nature, and
                    sensitivity of the personal data, the potential risk of harm from unauthorised use or disclosure of your
                    personal data, the purposes for which we process your personal data and whether we can achieve those
                    purposes through other means, and the applicable legal requirements.<br>
                    In some circumstances you can ask us to delete your data: see request erasure below for further
                    information.<br>
                    In some circumstances we may anonymise your personal data (so that it can no longer be associated with
                    you) for research or statistical purposes in which case we may use this information indefinitely without
                    further notice to you.
                    <br><br>
                    <h4>9. YOUR LEGAL RIGHTS</h4>
                    Under certain circumstances, you have rights under data protection laws in relation to your personal
                    data. Please click on Your legal rights below to find out more about these rights:<br>
                    • Request access to your personal data.<br>
                    • Request correction of your personal data.<br>
                    • Request erasure of your personal data.<br>
                    • Object to processing of your personal data.<br>
                    • Request restriction of processing your personal data.<br>
                    • Right to withdraw consent.<br>
                    If you wish to exercise any of the rights set out above, please contact us at dentist@russell-street.co.uk.

                    <br><br>
                    <h5>9.1 No fee usually required</h5>
                    You will not have to pay a fee to access your personal data (or to exercise any of the other rights).
                    However, we may charge a reasonable fee if your request is clearly unfounded, repetitive or excessive.
                    Alternatively, we may refuse to comply with your request in these circumstances.
                    <br><br>
                    <h5>9.2 What we may need from you</h5>
                    We may need to request specific information from you to help us confirm your identity and ensure your
                    right to access your personal data (or to exercise any of your other rights). This is a security measure
                    to ensure that personal data is not disclosed to any person who has no right to receive it. We may also
                    contact you to ask you for further information in relation to your request to speed up our response.
                    <br><br>
                    <h5>9.3 Time limit to respond</h5>
                    We try to respond to all legitimate requests within one month. Occasionally it may take us longer than a
                    month if your request is particularly complex or you have made a number of requests. In this case, we
                    will notify you and keep you updated.
                    <br><br>
                    <h4>10. GLOSSARY</h4>
                    <br><br>
                    <h5>10.1 Lawful basis</h5>
                    Legitimate interest means the interest of our business in conducting and managing our business to enable
                    us to give you the best service/product and the best and most secure experience. We make sure we
                    consider and balance any potential impact on you (both positive and negative) and your rights before we
                    process your personal data for our legitimate interests. We do not use your personal data for activities
                    where our interests are overridden by the impact on you (unless we have your consent or are otherwise
                    required or permitted to by law). You can obtain further information about how we assess our legitimate
                    interests against any potential impact on you in respect of specific activities by contacting us at
                    dentist@russell-street.co.uk.<br>
                    Performance of contract means processing your data where it is necessary for the performance of a
                    contract to which you are a party or to take steps at your request before entering into such a contract.
                    Comply with a legal or regulatory obligation means processing your personal data where it is necessary
                    for compliance with a legal or regulatory obligation that we are subject to.

                    <br><br>
                    <h5>10.2 Third parties</h5>
                    Internal third parties<br>
                    Other companies in the business acting as joint controllers or processors, who are based in the EU and
                    provide IT and system administration services and leadership reporting.<br><br>
                    External third parties<br>
                    • Service providers acting as processors based in the United Kingdom who provide IT and system
                    administration services.<br>
                    • Professional advisers acting as processors or joint controllers including lawyers, bankers, auditors
                    and insurers based in the United Kingdom who provide consultancy, banking, legal, insurance and
                    accounting services.<br>
                    • HM Revenue &amp; Customs, regulators and other authorities acting as processors or joint controllers based
                    in the United Kingdom who require reporting of processing activities in certain circumstances.

                    <br><br>
                    <h4>11. YOUR LEGAL RIGHTS</h4>
                    You have the right to:<br>
                    Request access to your personal data (commonly known as a “data subject access request”). This enables
                    you to receive a copy of the personal data we hold about you and to check that we are lawfully
                    processing it.<br>
                    Request correction of the personal data that we hold about you. This enables you to have any incomplete
                    or inaccurate data we hold about you corrected, though we may need to verify the accuracy of the new
                    data you provide to us.<br>
                    Request erasure of your personal data. This enables you to ask us to delete or remove personal data
                    where there is no good reason for us continuing to process it. You also have the right to ask us to
                    delete or remove your personal data where you have successfully exercised your right to object to
                    processing (see below), where we may have processed your information unlawfully or where we are required
                    to erase your personal data to comply with local law. Note, however, that we may not always be able to
                    comply with your request of erasure for specific legal reasons which will be notified to you, if
                    applicable, at the time of your request.<br>
                    Object to processing of your personal data where we are relying on a legitimate interest (or those of a
                    third party) and there is something about your particular situation which makes you want to object to
                    processing on this ground as you feel it impacts on your fundamental rights and freedoms. You also have
                    the right to object where we are processing your personal data for direct marketing purposes. In some
                    cases, we may demonstrate that we have compelling legitimate grounds to process your information which
                    override your rights and freedoms.<br>
                    Request restriction of processing of your personal data. This enables you to ask us to suspend the
                    processing of your personal data in the following scenarios: (a) if you want us to establish the data’s
                    accuracy; (b) where our use of the data is unlawful but you do not want us to erase it; (c) where you
                    need us to hold the data even if we no longer require it as you need it to establish, exercise or defend
                    legal claims; or (d) you have objected to our use of your data but we need to verify whether we have
                    overriding legitimate grounds to use it.<br>
                    Withdraw consent at any time where we are relying on consent to process your personal data. However,
                    this will not affect the lawfulness of any processing carried out before you withdraw your consent. If
                    you withdraw your consent, we may not be able to provide certain products or services to you. We will
                    advise you if this is the case at the time you withdraw your consent.

                    <br><br>
                    <h4>12. COOKIES NOTICE</h4>
                    This Cookies notice applies to our website www.russell-street.co.uk all branded pages on third party
                    platforms and applications accessed or used through such websites or third-party platforms (the
                    “Sites”), which are operated by or on behalf of Russell Street Dental (“we”, “us”, “our”).<br>
                    BY USING OUR SITES, YOU ARE CONSENTING TO OUR USE OF COOKIES IN ACCORDANCE WITH THIS COOKIES NOTICE.
                    What is a cookie? A cookie is a small text file stored by your web browser on your computer or mobile
                    device. Some cookies are essential for the Sites to work and help us provide you with relevant
                    information. They also allow us to recognise your computer (but not specifically who is using it) when
                    you access our Sites and to improve the usability and performance of our Sites.<br>
                    What do we use cookies for? We use cookies to compile anonymous, aggregated statistics that allow us to
                    understand how people use our sites and to help us improve their structure and content. We cannot
                    identify you personally from this information.<br>
                    Cookie Name/Title Purpose<br>
                    Google Analytics (__utma,<br>
                    __utmb, __utmc, __utmz) Google set a number of cookies on pages which include a Google Map. These
                    cookies measure the number and behaviour of Google Maps users.<br>
                    Google Maps (SID, SAPISID, APISID, SSID, HSID, NID, PREF) These cookies are used to collect information
                    about how visitors use our Sites. The information includes the time of the current visit, whether you
                    have been to the Site before and what website referred you here. We use this information to estimate our
                    audience size and usage pattern, so that we can improve our Sites by understanding how people use them.
                    Click here for further information from Google on Google Analytics and your privacy.<br>
                    Turning off and deleting cookies. You may refuse to accept cookies by activating the setting on your
                    browser which allows you to refuse the setting of cookies. If you select this setting you may be unable
                    to access certain parts of our sites. Unless you have adjusted your browser settings so that it will
                    refuse cookies, our system will issue cookies when you access our sites. If you use different devices to
                    view and access our sites (for example, your computer, smart phone, tablet etc.) you will need to ensure
                    that each browser on each device is adjusted to suit your cookie preferences.<br>
                    If you disable the cookies that we use this may impact your experience while on the sites.<br>
                    Changes to this notice. We may revise this cookies notice from time to time. Any changes we may make to
                    our cookies notice in the future will be posted on this page.<br>
                    Contact us. Questions, comments and requests regarding this cookies notice are welcomed. Please contact
                    us at dentist@russell-street.co.uk.
                </div>
            </div>
        </div>
    </section>
</main>


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


</body>
</html>