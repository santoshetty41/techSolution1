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



    <!-- -=====================Contact ===========================> -->
    <section class=" contact-section  bg-light">
        <div class="container mt-5 py-5">

            <h2 class=" title h1-responsive font-weight-bold text-center my-4">Contact Us</h2>
            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to
                contact us
                directly. Our team will come back to you within
                a matter of hours to help you.</p>

            <div class="row">
                <div class="col-md-9 mb-md-0 mb-5 mx-auto">
                    <form id="contact-form" name="contact-form" action="send_email.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-4">
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-4">
                                    <textarea id="message" name="message" rows="5" class="form-control md-textarea"
                                        placeholder="Enter Your Message" required></textarea>
                                </div>
                            </div>
                        </div>
                            <div class="text-center text-md-left mt-3">
                        <button type="submit" class="btn btn-primary">Send Email</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>




    <!-- ========================Map============== -->
    <iframe class="map mt-0"
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