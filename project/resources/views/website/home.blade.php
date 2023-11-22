<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Gp Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('website/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('website/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('website/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- carousel -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <style>
    body {
        font-family: "Open Sans", sans-serif;
    }

    /* h2 {
        color: #000;
        font-size: 26px;
        font-weight: 300;
        text-align: center;
        text-transform: uppercase;
        position: relative;
        margin: 30px 0 80px;
    }

    h2 b {
        color: #ffc000;
    }
    
    h2::after {
        content: "";
        width: 100px;
        position: absolute;
        margin: 0 auto;
        height: 4px;
        background: rgba(0, 0, 0, 0.2);
        left: 0;
        right: 0;
        bottom: -20px;
    } */

    .carousel {
        margin: 50px auto;
        padding: 0 70px;
    }

    .carousel .carousel-item {
        min-height: 330px;
        text-align: center;
        overflow: hidden;
    }

    .carousel .carousel-item .img-box {
        height: 160px;
        width: 100%;
        position: relative;
    }

    .carousel .carousel-item img {
        max-width: 100%;
        max-height: 100%;
        display: inline-block;
        position: absolute;
        bottom: 0;
        margin: 0 auto;
        left: 0;
        right: 0;
    }

    .carousel .carousel-item h4 {
        font-size: 18px;
        margin: 10px 0;
    }

    .carousel .carousel-item .btn {
        color: #333;
        border-radius: 0;
        font-size: 11px;
        text-transform: uppercase;
        font-weight: bold;
        background: none;
        border: 1px solid #ccc;
        padding: 5px 10px;
        margin-top: 5px;
        line-height: 16px;
    }

    .carousel .carousel-item .btn:hover,
    .carousel .carousel-item .btn:focus {
        color: #fff;
        background: #000;
        border-color: #000;
        box-shadow: none;
    }

    .carousel .carousel-item .btn i {
        font-size: 14px;
        font-weight: bold;
        margin-left: 5px;
    }

    .carousel .thumb-wrapper {
        text-align: center;
    }

    .carousel .thumb-content {
        padding: 15px;
    }

    .carousel-control-prev,
    .carousel-control-next {
        height: 100px;
        width: 40px;
        background: none;
        margin: auto 0;
        background: rgba(0, 0, 0, 0.2);
    }

    .carousel-control-prev i,
    .carousel-control-next i {
        font-size: 30px;
        position: absolute;
        top: 50%;
        display: inline-block;
        margin: -16px 0 0 0;
        z-index: 5;
        left: 0;
        right: 0;
        color: rgba(0, 0, 0, 0.8);
        text-shadow: none;
        font-weight: bold;
    }

    .carousel-control-prev i {
        margin-left: -3px;
    }

    .carousel-control-next i {
        margin-right: -3px;
    }

    .carousel .item-price {
        font-size: 13px;
        padding: 2px 0;
    }

    .carousel .item-price strike {
        color: #999;
        margin-right: 5px;
    }

    .carousel .item-price span {
        color: #86bd57;
        font-size: 110%;
    }

    .carousel .carousel-indicators {
        bottom: -50px;
    }

    .carousel-indicators li,
    .carousel-indicators li.active {
        width: 10px;
        height: 10px;
        margin: 4px;
        border-radius: 50%;
        border-color: transparent;
        border: none;
    }

    .carousel-indicators li {
        background: rgba(0, 0, 0, 0.2);
    }

    .carousel-indicators li.active {
        background: rgba(0, 0, 0, 0.6);
    }

    .star-rating li {
        padding: 0;
    }

    .star-rating i {
        font-size: 14px;
        color: #ffc000;
    }
    </style>
    <!-- Template Main CSS File -->
    <link href="{{asset('website/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Gp - v4.10.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="index.html">Welfare Of Lawyers<span>.</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="{{asset('website/assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
                    <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> -->
                    <li><a class="nav-link scrollto" href="#testimonials">Lawyers</a></li>
                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="{{('/search')}}" class="get-started-btn scrollto">Search Case</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>Welfare of lawyers forum<span>.</span></h1>
                </div>
            </div>

            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-store-line"></i>
                        <h3><a href="">Lorem Ipsum</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-bar-chart-box-line"></i>
                        <h3><a href="">Dolor Sitema</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-calendar-todo-line"></i>
                        <h3><a href="">Sedare Perspiciatis</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-paint-brush-line"></i>
                        <h3><a href="">Magni Dolores</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-database-2-line"></i>
                        <h3><a href="">Nemos Enimade</a></h3>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Hero -->

    <main id="main">


        <section id="about" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
                        data-aos="fade-right" data-aos-delay="100"></div>
                    <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left"
                        data-aos-delay="100">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3>Voluptatem dignissimos provident quasi</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                            <div class="row">
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-emoji-smile"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="65"
                                            data-purecounter-duration="2" class="purecounter"></span>
                                        <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam
                                            architecto ut.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-journal-richtext"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="85"
                                            data-purecounter-duration="2" class="purecounter"></span>
                                        <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium
                                            et quia dere tan</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-clock"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="35"
                                            data-purecounter-duration="4" class="purecounter"></span>
                                        <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam
                                            ducimus aut voluptate non vel</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-award"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="20"
                                            data-purecounter-duration="4" class="purecounter"></span>
                                        <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et
                                            nemo pad der</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach($show as $key=>$item)

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{url($item->profile)}}" class="testimonial-img" alt="">
                                <h3>{{$item->name}}</h3>
                                <h4>{{$item->post}}</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>





        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>

                <div>
                    <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section>

    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Gp<span>.</span></h3>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('website/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('website/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('website/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('website/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('website/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('website/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('website/assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- carousel -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('website/assets/js/main.js')}}"></script>

</body>

</html>