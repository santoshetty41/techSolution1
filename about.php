<!doctype html>
<html lang="en">

<head>
    <!-- ====================Required meta tags =========================-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--=============== Bootstrap CSS==================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- ===========================Our Css===================== -->
    <link rel="stylesheet" href="css/style.css">
    <!-- =======================Font Awesome Css================== -->
    <script src="https://kit.fontawesome.com/f60eaee9d1.js" crossorigin="anonymous"></script>
    <!-- =========================AOS Libery Css=================== -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Tech Solution</title>
</head>

<body>

    <!-- ===========================Header============================ -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-scroll ">
        <div class="container-fluid mx-5 navbar-margin">
            <a class="navbar-brand fs-2 fw-bold" href="#">Tech <span class="text-info">Solution</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="services.php">Digital Marketing</a></li>
                            <li><a class="dropdown-item" href="services.php">Web Design</a></li>
                            <li><a class="dropdown-item" href="services.php">Hosting and domain</a></li>
                            <li><a class="dropdown-item" href="services.php">Mobile Application</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="work.php">Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <!-- =======================About us================== -->
    <section class="about-us">
        <div class="container my-5">
            <div class="row">

                <div class="col-sm-12 col-md-6 col-lg-6 about-left d-flex">
                    <img src="images/1.png" data-aos="fade-right" data-aos-offset="300">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 about-right d-flex" data-aos="fade-left" data-aos-offset="300">
                    <h2 class="my-4 fw-bold">Welcome To Tech Solution</h2>
                    <p data-aos=" fade-up">
                        One of the world's leading company providing multi solutions at its best for everyone.
                        We understand the challenges that the sector faces and recognize the unique opportunity to help
                        your company follow its growth plan.<br><br>
                        At It Solution, our team of experts brings solutions for all your back-end IT requirements,
                        while you
                        can focus on building your business. From ensuring integrated data storage, to seamless
                        connectivity to end-point security, our solution ensure every aspect of your IT requirement is
                        taken care of.
                    </p>
                    <a class="btn btn-primary mt-4" href="about.php" role="button">More<i
                            class="fa-solid fa-arrow-right ps-3"></i></a>
                </div>
            </div>


        </div>
        <!-- =========================Our Team================= -->
        <div class="our-team bg-light py-5">
            <h2 class="title mt-3" data-aos="fade-up" data-aos-offset="100">Our Team</h2>
            <hr class="hr" data-aos="fade-up" data-aos-offset="100">
            <div class="container text-center">
                <div class="row  g-4 py-5">
                    <div class="col" data-aos="zoom-in" data-aos-offset="300">
                        <div class="card profile">
                            <img src="images/download (1).jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Saurabh Panday</h5>
                                <p class="card-text text-color">He is a UI and UX Designer educated from America at
                                    University of America and Expirence of 10 years.</p>
                            </div>
                            <div class="d-flex justify-content-evenly p-4 profil-social-icon">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fa-brands fa-linkedin"></i>
                                <i class="fa-solid fa-envelope"></i>
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="zoom-in" data-aos-offset="300">
                        <div class="card profile">
                            <img src="images/download (2).jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Radhika Graham</h5>
                                <p class="card-text text-color">She is a Front-End Developer educated from WashingTon
                                    University of St. Louis and Expirence of 8 years.</p>
                            </div>
                            <div class="d-flex justify-content-evenly p-4 profil-social-icon">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fa-brands fa-linkedin"></i>
                                <i class="fa-solid fa-envelope"></i>
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="zoom-in" data-aos-offset="300">
                        <div class="card profile">
                            <img src="images/download (4).jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">Vinayak Kadge</h5>
                                <p class="card-text text-color">He is a Full Stack Android Development educated from
                                    New Zerland at
                                    University of Amsterdamand and Expirence of 13 years.</p>
                            </div>
                            <div class="d-flex justify-content-evenly p-4 profil-social-icon">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fa-brands fa-linkedin"></i>
                                <i class="fa-solid fa-envelope"></i>
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <a class="btn btn-primary see-more" href="#" role="button" data-aos="fade-up" data-aos-offset="100">View
                More<i class="fa-solid fa-arrow-right ps-3"></i></a>
        </div>
    </section>








    <!-- ========================Map============== -->
    <iframe class="map"
        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d30162.008409823135!2d72.87597624617536!3d19.09663932693256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sdentist!5e0!3m2!1sen!2sin!4v1677323121027!5m2!1sen!2sin"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- =================footer====================== -->
    <footer class="footer-section bg-dark text-light pt-5">
        <div class="footer-title text-center mb-5">
            <h2>Growing Businesses Since 2010</h2>
            <p class="fs-5">Made with <i class="fa-solid fa-heart"></i> in 25 cities around the world</p>
        </div>
        <div class="footer-list d-flex  justify-content-center flex-wrap">
            <ul>
                <li> <a href="#">Email Marketing Services</a></li>
                <li><a href="#">Firewall and Network Services</a></li>
                <li><a href="#">MBusiness Intelligence Services</a></li>
                <li><a href="#">SaaS (Software as a Service)</a></li>
                <li><a href="#">Web-Development Services</a></li>
            </ul>
            <ul>
                <li> <a href="#">Hardware and software support</a></li>
                <li><a href="#">Network Infrastructure Management</a></li>
                <li><a href="#">Mobile device management</a></li>
                <li><a href="#">Data storage and management</a></li>
                <li><a href="#">Cloud services</a></li>
            </ul>

            <ul class="mobile-none">
                <li> <a href="#">Information security </a></li>
                <li><a href="#">Mobile services</a></li>
                <li><a href="#">Web applications</a></li>
                <li><a href="#">Network Security</a></li>
                <li><a href="#">Web Designing Services</a></li>
            </ul>

        </div>
    </footer>
    <!-- =================Sub footer====================== -->
    <footer class="sub-footer-section text-light ">
        <p class="text-center">Copyright &#169; 2023 TECH SOLUTIONS. All rights reserved.</p>
    </footer>


    <!--=======================Bootstrap javascript ===================-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- =================AOS Libery=============== -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>