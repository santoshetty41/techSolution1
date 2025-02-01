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

    <!-- ============================Services====================== -->
    <div class="container my-5 pt-5">
        <h2 class="title mt-3" data-aos="zoom-in" data-aos-offset="100">Services</h2>
        <div class="row services d-flex flex-wrap">

            <div class="card col-sm-12 col-lg-4 col-md-4 col-12" data-aos="fade-right" data-aos-offset="300">
                <div class="icon">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div class="card-body service-card-content">
                    <h5 class="card-title text-center mt-3">Active Support team</h5>
                    <p class="card-text">Every member of our team commitment to a group effort--that is what makes
                        teamwork, a company work, a society work, a civilization work.</p>
                    <button type="button" class="btn btn-primary btn-sm fs-6 mx-auto d-block mt-4 mb-3 more-btn">More<i
                            class="fa-solid fa-arrow-right ps-3 fs-6"></i> </button>
                </div>
            </div>

            <div class="card col-sm-12 col-lg-4 col-md-4 col-12" data-aos="fade-down" data-aos-offset="300">
                <div class="icon">
                    <i class="fa-solid fa-w"></i>
                </div>
                <div class="card-body service-card-content">
                    <h5 class="card-title text-center mt-3">Web Design</h5>
                    <p class="card-text">Our web design & development team has established a host of effective services
                        to facilitate the growth of your business.</p>
                    <button type="button" class="btn btn-primary btn-sm fs-6 mx-auto d-block mt-4 mb-3 more-btn">More<i
                            class="fa-solid fa-arrow-right ps-3 fs-6"></i> </button>
                </div>
            </div>

            <div class="card col-sm-12 col-lg-4 col-md-4 col-12" data-aos="fade-left" data-aos-offset="300">
                <div class="icon">
                    <i class="fa-solid fa-spray-can"></i>
                </div>
                <div class="card-body service-card-content">
                    <h5 class="card-title text-center mt-3">Graphic Design</h5>
                    <p class="card-text">Your brand brought to life. Our professional graphic designers have the
                        creative capabilities to take your company personality and translate it to visual design.</p>
                    <button type="button" class="btn btn-primary btn-sm fs-6 mx-auto d-block mt-4 mb-3 more-btn">More<i
                            class="fa-solid fa-arrow-right ps-3 fs-6"></i> </button>
                </div>
            </div>

            <div class="card col-sm-12 col-lg-4 col-md-4 col-12" data-aos="fade-right" data-aos-offset="300">
                <div class="icon">
                    <i class="fa-brands fa-squarespace"></i>
                </div>
                <div class="card-body service-card-content">
                    <h5 class="card-title text-center mt-3">Website Hosting</h5>
                    <p class="card-text">Our managed hosting services offer a flexible, low-cost web hosting solution
                        tailored for your business. We will take care of all daily hosting operations.</p>
                    <button type="button" class="btn btn-primary btn-sm fs-6 mx-auto d-block mt-4 mb-3 more-btn">More<i
                            class="fa-solid fa-arrow-right ps-3 fs-6"></i> </button>
                </div>
            </div>

            <div class="card col-sm-12 col-lg-4 col-md-4 col-12" data-aos="fade-down" data-aos-offset="300">
                <div class="icon">
                    <i class="fa-solid fa-sitemap"></i>
                </div>
                <div class="card-body service-card-content">
                    <h5 class="card-title text-center mt-3">Website Architecture</h5>
                    <p class="card-text">An easy-to-navigate, logical page structure helps your users, and the search
                        engines find what they are looking for.</p>
                    <button type="button" class="btn btn-primary btn-sm fs-6 mx-auto d-block mt-4 mb-3 more-btn">More<i
                            class="fa-solid fa-arrow-right ps-3 fs-6"></i> </button>
                </div>
            </div>

            <div class="card col-sm-12 col-lg-4 col-md-4 col-12" data-aos="fade-left" data-aos-offset="300">
                <div class="icon">
                    <i class="fa-brands fa-searchengin"></i>
                </div>
                <div class="card-body service-card-content ">
                    <h5 class="card-title text-center mt-3">SEO Services</h5>
                    <p class="card-text">If you're looking to command your market online, you need comprehensive SEO
                        strategy that delivers results, Target the right traffic,Rank higher in search.</p>
                    <button type="button" class="btn btn-primary btn-sm fs-6 mx-auto d-block mt-4 mb-3 more-btn">More<i
                            class="fa-solid fa-arrow-right ps-3 fs-6"></i> </button>
                </div>
            </div>
            <div class="card col-sm-12 col-lg-4 col-md-4 col-12" data-aos="fade-right" data-aos-offset="300">
                <div class="icon">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div class="card-body service-card-content">
                    <h5 class="card-title text-center mt-3">Active Support team</h5>
                    <p class="card-text">Every member of our team commitment to a group effort--that is what makes
                        teamwork, a company work, a society work, a civilization work.</p>
                    <button type="button" class="btn btn-primary btn-sm fs-6 mx-auto d-block mt-4 mb-3 more-btn">More<i
                            class="fa-solid fa-arrow-right ps-3 fs-6"></i> </button>
                </div>
            </div>

            <div class="card col-sm-12 col-lg-4 col-md-4 col-12" data-aos="fade-down" data-aos-offset="300">
                <div class="icon">
                    <i class="fa-solid fa-w"></i>
                </div>
                <div class="card-body service-card-content">
                    <h5 class="card-title text-center mt-3">Web Design</h5>
                    <p class="card-text">Our web design & development team has established a host of effective services
                        to facilitate the growth of your business.</p>
                    <button type="button" class="btn btn-primary btn-sm fs-6 mx-auto d-block mt-4 mb-3 more-btn">More<i
                            class="fa-solid fa-arrow-right ps-3 fs-6"></i> </button>
                </div>
            </div>

            <div class="card col-sm-12 col-lg-4 col-md-4 col-12" data-aos="fade-left" data-aos-offset="300">
                <div class="icon">
                    <i class="fa-solid fa-spray-can"></i>
                </div>
                <div class="card-body service-card-content">
                    <h5 class="card-title text-center mt-3">Graphic Design</h5>
                    <p class="card-text">Your brand brought to life. Our professional graphic designers have the
                        creative capabilities to take your company personality and translate it to visual design.</p>
                    <button type="button" class="btn btn-primary btn-sm fs-6 mx-auto d-block mt-4 mb-3 more-btn">More<i
                            class="fa-solid fa-arrow-right ps-3 fs-6"></i> </button>
                </div>
            </div>

            <div class="card col-sm-12 col-lg-4 col-md-4 col-12" data-aos="fade-right" data-aos-offset="300">
                <div class="icon">
                    <i class="fa-brands fa-squarespace"></i>
                </div>
                <div class="card-body service-card-content">
                    <h5 class="card-title text-center mt-3">Website Hosting</h5>
                    <p class="card-text">Our managed hosting services offer a flexible, low-cost web hosting solution
                        tailored for your business. We will take care of all daily hosting operations.</p>
                    <button type="button" class="btn btn-primary btn-sm fs-6 mx-auto d-block mt-4 mb-3 more-btn">More<i
                            class="fa-solid fa-arrow-right ps-3 fs-6"></i> </button>
                </div>
            </div>

            <div class="card col-sm-12 col-lg-4 col-md-4 col-12" data-aos="fade-down" data-aos-offset="300">
                <div class="icon">
                    <i class="fa-solid fa-sitemap"></i>
                </div>
                <div class="card-body service-card-content">
                    <h5 class="card-title text-center mt-3">Website Architecture</h5>
                    <p class="card-text">An easy-to-navigate, logical page structure helps your users, and the search
                        engines find what they are looking for.</p>
                    <button type="button" class="btn btn-primary btn-sm fs-6 mx-auto d-block mt-4 mb-3 more-btn">More<i
                            class="fa-solid fa-arrow-right ps-3 fs-6"></i> </button>
                </div>
            </div>

            <div class="card col-sm-12 col-lg-4 col-md-4 col-12" data-aos="fade-left" data-aos-offset="300">
                <div class="icon">
                    <i class="fa-brands fa-searchengin"></i>
                </div>
                <div class="card-body service-card-content ">
                    <h5 class="card-title text-center mt-3">SEO Services</h5>
                    <p class="card-text">If you're looking to command your market online, you need comprehensive SEO
                        strategy that delivers results, Target the right traffic,Rank higher in search.</p>
                    <button type="button" class="btn btn-primary btn-sm fs-6 mx-auto d-block mt-4 mb-3 more-btn">More<i
                            class="fa-solid fa-arrow-right ps-3 fs-6"></i> </button>
                </div>
            </div>
            <div class="card col-sm-12 col-lg-4 col-md-4 col-12" data-aos="fade-right" data-aos-offset="300">
                <div class="icon">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div class="card-body service-card-content">
                    <h5 class="card-title text-center mt-3">Active Support team</h5>
                    <p class="card-text">Every member of our team commitment to a group effort--that is what makes
                        teamwork, a company work, a society work, a civilization work.</p>
                    <button type="button" class="btn btn-primary btn-sm fs-6 mx-auto d-block mt-4 mb-3 more-btn">More<i
                            class="fa-solid fa-arrow-right ps-3 fs-6"></i> </button>
                </div>
            </div>

            <div class="card col-sm-12 col-lg-4 col-md-4 col-12" data-aos="fade-down" data-aos-offset="300">
                <div class="icon">
                    <i class="fa-solid fa-w"></i>
                </div>
                <div class="card-body service-card-content">
                    <h5 class="card-title text-center mt-3">Web Design</h5>
                    <p class="card-text">Our web design & development team has established a host of effective services
                        to facilitate the growth of your business.</p>
                    <button type="button" class="btn btn-primary btn-sm fs-6 mx-auto d-block mt-4 mb-3 more-btn">More<i
                            class="fa-solid fa-arrow-right ps-3 fs-6"></i> </button>
                </div>
            </div>

            <div class="card col-sm-12 col-lg-4 col-md-4 col-12" data-aos="fade-left" data-aos-offset="300">
                <div class="icon">
                    <i class="fa-solid fa-spray-can"></i>
                </div>
                <div class="card-body service-card-content">
                    <h5 class="card-title text-center mt-3">Graphic Design</h5>
                    <p class="card-text">Your brand brought to life. Our professional graphic designers have the
                        creative capabilities to take your company personality and translate it to visual design.</p>
                    <button type="button" class="btn btn-primary btn-sm fs-6 mx-auto d-block mt-4 mb-3 more-btn">More<i
                            class="fa-solid fa-arrow-right ps-3 fs-6"></i> </button>
                </div>
            </div>

            <div class="card col-sm-12 col-lg-4 col-md-4 col-12" data-aos="fade-right" data-aos-offset="300">
                <div class="icon">
                    <i class="fa-brands fa-squarespace"></i>
                </div>
                <div class="card-body service-card-content">
                    <h5 class="card-title text-center mt-3">Website Hosting</h5>
                    <p class="card-text">Our managed hosting services offer a flexible, low-cost web hosting solution
                        tailored for your business. We will take care of all daily hosting operations.</p>
                    <button type="button" class="btn btn-primary btn-sm fs-6 mx-auto d-block mt-4 mb-3 more-btn">More<i
                            class="fa-solid fa-arrow-right ps-3 fs-6"></i> </button>
                </div>
            </div>

            <div class="card col-sm-12 col-lg-4 col-md-4 col-12" data-aos="fade-down" data-aos-offset="300">
                <div class="icon">
                    <i class="fa-solid fa-sitemap"></i>
                </div>
                <div class="card-body service-card-content">
                    <h5 class="card-title text-center mt-3">Website Architecture</h5>
                    <p class="card-text">An easy-to-navigate, logical page structure helps your users, and the search
                        engines find what they are looking for.</p>
                    <button type="button" class="btn btn-primary btn-sm fs-6 mx-auto d-block mt-4 mb-3 more-btn">More<i
                            class="fa-solid fa-arrow-right ps-3 fs-6"></i> </button>
                </div>
            </div>

            <div class="card col-sm-12 col-lg-4 col-md-4 col-12" data-aos="fade-left" data-aos-offset="300">
                <div class="icon">
                    <i class="fa-brands fa-searchengin"></i>
                </div>
                <div class="card-body service-card-content ">
                    <h5 class="card-title text-center mt-3">SEO Services</h5>
                    <p class="card-text">If you're looking to command your market online, you need comprehensive SEO
                        strategy that delivers results, Target the right traffic,Rank higher in search.</p>
                    <button type="button" class="btn btn-primary btn-sm fs-6 mx-auto d-block mt-4 mb-3 more-btn">More<i
                            class="fa-solid fa-arrow-right ps-3 fs-6"></i> </button>
                </div>
            </div>


        </div>
    </div>












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