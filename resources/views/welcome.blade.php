<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet">

    <!-- title of site -->
    <title>Yasir Autos</title>

    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--linear icon css-->
    <link rel="stylesheet" href="assets/css/linearicons.css">

    <!--flaticon.css-->
    <link rel="stylesheet" href="assets/css/flaticon.css">

    <!--animate.css-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- bootsnav -->
    <link rel="stylesheet" href="assets/css/bootsnav.css">

    <!--style.css-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>
    <section id="home" class="welcome-hero">

        <!-- top-area Start -->
        <div class="top-area">
            <div class="header-area">
                <!-- Start Navigation -->
                <nav class="navbar navbar-default bootsnav navbar-sticky navbar-scrollspy" data-minus-value-desktop="70"
                    data-minus-value-mobile="55" data-speed="1000">

                    <div class="container">

                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="index.html">Yasir Autos<span></span></a>

                        </div><!--/.navbar-header-->
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class="scroll active"><a href="#home">home</a></li>
                                <li class="scroll"><a href="#service">service</a></li>
                                <li class="scroll"><a href="#featured-cars">featured cars</a></li>
                                <li class="scroll"><a href="#new-cars">new cars</a></li>
                                <li class="scroll"><a href="#brand">brands</a></li>
                                <li class="scroll"><a href="#contact">contact</a></li>


                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>




                            </ul><!--/.nav -->
                        </div><!-- /.navbar-collapse -->
                    </div><!--/.container-->
                </nav><!--/nav-->
                <!-- End Navigation -->
            </div><!--/.header-area-->
            <div class="clearfix"></div>

        </div><!-- /.top-area-->
        <!-- top-area End -->

        <div class="container">
            <div class="welcome-hero-txt">
                <h2>Get your desired car part at a reasonable price</h2>
                <p>
                    Explore a vast selection of high-quality automotive parts for all your vehicle needs at our one-stop
                    shop. From engine components to accessories, we've got you covered with a wide variety of reliable
                    and top-notch products.
                </p>
                <button class="welcome-btn" onclick="window.location.href='#'">Contact Us</button>
            </div>
        </div>

    </section><!--/.welcome-hero-->
    <!--welcome-hero end -->

    <!--service start -->
    <section id="service" class="service">
        <div class="container">
            <div class="service-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service-item">
                            <div class="single-service-icon">
                                <i class="flaticon-car"></i>
                            </div>
                            <h2><a href="#">Largest Dealership <span> of</span> Car</a></h2>
                            <p>
                                Explore the widest collection of cars at our dealership. We offer a variety of options
                                to suit your preferences and requirements.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service-item">
                            <div class="single-service-icon">
                                <i class="flaticon-car-repair"></i>
                            </div>
                            <h2><a href="#">Unlimited Repair Warranty</a></h2>
                            <p>
                                Avail our unlimited repair warranty to ensure peace of mind. Our skilled technicians are
                                committed to providing quality repairs and services.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service-item">
                            <div class="single-service-icon">
                                <i class="flaticon-car-1"></i>
                            </div>
                            <h2><a href="#">Insurance Support</a></h2>
                            <p>
                                Get comprehensive insurance support for your vehicle. We ensure that you have the
                                coverage you need in case of unexpected events.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/.service-->
    <!--service end-->

    <!--new-cars start -->
    <section id="new-cars" class="new-cars">
        <div class="container">
            <div class="section-header">
                <p>Check out <span>the</span> latest cars</p>
                <h2>Newest Cars</h2>
            </div><!--/.section-header-->
            <div class="new-cars-content">
                <div class="owl-carousel owl-theme" id="new-cars-carousel">
                    <div class="new-cars-item">
                        <div class="single-new-cars-item">
                            <div class="row">
                                <div class="col-md-7 col-sm-12">
                                    <div class="new-cars-img">
                                        <img src="assets/images/corolla/c_main.jpg" alt="Toyota Corolla" />
                                    </div><!--/.new-cars-img-->
                                </div>
                                <div class="col-md-5 col-sm-12">
                                    <div class="new-cars-txt">
                                        <h2><a href="#">Toyota Corolla</a></h2>
                                        <p>
                                            The Toyota Corolla is a trusted and fuel-efficient vehicle that seamlessly
                                            blends style and performance. Ideal for everyday commuting, it comes
                                            equipped with advanced safety features to ensure a secure driving
                                            experience.
                                        </p>
                                        <p class="new-cars-para2">
                                            Explore the unparalleled driving experience with cutting-edge technology and
                                            design, making every journey enjoyable and safe. The Toyota Corolla is your
                                            ideal companion on the road.
                                        </p>
                                        <button class="welcome-btn new-cars-btn"
                                            onclick="window.location.href='{{ route('main') }}'">
                                            Buy Parts
                                        </button>
                                    </div><!--/.new-cars-txt-->
                                </div><!--/.col-->
                            </div><!--/.row-->
                        </div><!--/.single-new-cars-item-->
                    </div><!--/.new-cars-item-->
                    <div class="new-cars-item">
                        <div class="single-new-cars-item">
                            <div class="row">
                                <div class="col-md-7 col-sm-12">
                                    <div class="new-cars-img">
                                        <img src="assets/images/civic/ci_main.jpeg" alt="Honda Civic" />
                                    </div><!--/.new-cars-img-->
                                </div>
                                <div class="col-md-5 col-sm-12">
                                    <div class="new-cars-txt">
                                        <h2><a href="#">Honda Civic</a></h2>
                                        <p>
                                            The Honda Civic is a stylish and versatile car known for its performance and
                                            cutting-edge technology. Experience a smooth ride with modern features.
                                        </p>
                                        <p class="new-cars-para2">
                                            Explore the city in style with the Honda Civic. Its aerodynamic design and
                                            advanced features make every drive enjoyable.
                                        </p>
                                        <button class="welcome-btn new-cars-btn"
                                            onclick="window.location.href='{{ route('main') }}'">
                                            Buy Parts
                                        </button>
                                    </div><!--/.new-cars-txt-->
                                </div><!--/.col-->
                            </div><!--/.row-->
                        </div><!--/.single-new-cars-item-->
                    </div><!--/.new-cars-item-->
                    <div class="new-cars-item">
                        <div class="single-new-cars-item">
                            <div class="row">
                                <div class="col-md-7 col-sm-12">
                                    <div class="new-cars-img">
                                        <img src="assets/images/swift/swift_main.jpg" alt="Suzuki Swift" />
                                    </div><!--/.new-cars-img-->
                                </div>
                                <div class="col-md-5 col-sm-12">
                                    <div class="new-cars-txt">
                                        <h2><a href="#">Suzuki Swift</a></h2>
                                        <p>
                                            The Suzuki Swift is a compact and efficient car designed for urban
                                            adventures. Enjoy nimble handling and a comfortable interior for your daily
                                            drives.
                                        </p>
                                        <p class="new-cars-para2">
                                            Conquer the urban jungle with the Suzuki Swift. Its compact design and agile
                                            performance make it the perfect companion for city life.
                                        </p>
                                        <button class="welcome-btn new-cars-btn"
                                            onclick="window.location.href='{{ route('main') }}'">
                                            Buy Parts
                                        </button>
                                    </div><!--/.new-cars-txt-->
                                </div><!--/.col-->
                            </div><!--/.row-->
                        </div><!--/.single-new-cars-item-->
                    </div><!--/.new-cars-item-->
                </div><!--/#new-cars-carousel-->
            </div><!--/.new-cars-content-->
        </div><!--/.container-->
    </section><!--/.new-cars-->
    <!--new-cars end -->

    <!--featured-cars start -->
    <section id="featured-cars" class="featured-cars">
        <div class="container">
            <div class="section-header">
                <h2>Featured Car Spare Parts</h2>
            </div><!--/.section-header-->
            <div class="featured-cars-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="assets/images/corolla/c_main.jpg" alt="Toyota Corolla">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        Model: 2017
                                        <span class="featured-hp-span">160 HP</span>
                                        <a href="{{ route('main') }}" class="btn btn-primary btn-sm">Buy
                                            Accessories</a>
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2><a href="#">Toyota Corolla</a></h2>
                                <p>
                                    Explore high-quality spare parts for the 2017 Toyota Corolla. Find the perfect
                                    accessories for your car's maintenance and enhancement.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="assets/images/civic/ci_main.jpeg" alt="Honda Civic">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        Model: 2023
                                        <span class="featured-hp-span">180 HP</span>
                                        <a href="{{ route('main') }}" class="btn btn-primary btn-sm">Buy
                                            Accessories</a>
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2><a href="#">Honda Civic</a></h2>
                                <p>
                                    Enhance your 2023 Honda Civic with our featured spare parts. Discover top-notch
                                    accessories for a superior driving experience.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="assets/images/swift/swift_main.jpg" alt="Suzuki Swift">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        Model: 2020
                                        <span class="featured-hp-span">140 HP</span>
                                        <a href="{{ route('main') }}" class="btn btn-primary btn-sm">Buy
                                            Accessories</a>
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2><a href="#">Suzuki Swift</a></h2>
                                <p>
                                    Upgrade your 2020 Suzuki Swift with our premium spare parts collection. Find the
                                    right accessories for improved performance and style.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/.featured-cars-->
    <!--featured-cars end -->


    <!-- clients-say start -->
    <section id="clients-say" class="clients-say">
        <div class="container">
            <div class="section-header">
                <h2>What Our Clients Say</h2>
            </div><!--/.section-header-->
            <div class="row">
                <div class="owl-carousel testimonial-carousel">
                    <div class="col-sm-3 col-xs-12">
                        <div class="single-testimonial-box">
                            <div class="testimonial-description">
                                <div class="testimonial-info">
                                    <div class="testimonial-img">
                                        <img src="assets/images/clients/c1.png" alt="Image of clients person" />
                                    </div><!--/.testimonial-img-->
                                </div><!--/.testimonial-info-->
                                <div class="testimonial-comment">
                                    <p>
                                        "Yasir Autos provided top-notch service! I found the perfect car parts for my
                                        vehicle, and the quality exceeded my expectations."
                                    </p>
                                </div><!--/.testimonial-comment-->
                                <div class="testimonial-person">
                                    <h2><a href="#">Tomas Lili</a></h2>
                                    <h4>New York</h4>
                                </div><!--/.testimonial-person-->
                            </div><!--/.testimonial-description-->
                        </div><!--/.single-testimonial-box-->
                    </div><!--/.col-->
                    <div class="col-sm-3 col-xs-12">
                        <div class="single-testimonial-box">
                            <div class="testimonial-description">
                                <div class="testimonial-info">
                                    <div class="testimonial-img">
                                        <img src="assets/images/clients/c2.png" alt="Image of clients person" />
                                    </div><!--/.testimonial-img-->
                                </div><!--/.testimonial-info-->
                                <div class="testimonial-comment">
                                    <p>
                                        "I am impressed with the wide range of car parts available at Yasir Autos. The
                                        quality and durability are exceptional."
                                    </p>
                                </div><!--/.testimonial-comment-->
                                <div class="testimonial-person">
                                    <h2><a href="#">Romi Rain</a></h2>
                                    <h4>London</h4>
                                </div><!--/.testimonial-person-->
                            </div><!--/.testimonial-description-->
                        </div><!--/.single-testimonial-box-->
                    </div><!--/.col-->
                    <div class="col-sm-3 col-xs-12">
                        <div class="single-testimonial-box">
                            <div class="testimonial-description">
                                <div class="testimonial-info">
                                    <div class="testimonial-img">
                                        <img src="assets/images/clients/c3.png" alt="Image of clients person" />
                                    </div><!--/.testimonial-img-->
                                </div><!--/.testimonial-info-->
                                <div class="testimonial-comment">
                                    <p>
                                        "Yasir Autos is my go-to for car parts. The service is fantastic, and I always
                                        find what I need for my vehicle."
                                    </p>
                                </div><!--/.testimonial-comment-->
                                <div class="testimonial-person">
                                    <h2><a href="#">John Doe</a></h2>
                                    <h4>Washington</h4>
                                </div><!--/.testimonial-person-->
                            </div><!--/.testimonial-description-->
                        </div><!--/.single-testimonial-box-->
                    </div><!--/.col-->
                </div><!--/.testimonial-carousel-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/.clients-say-->
    <!-- clients-say end -->

    <!-- ... (other sections) ... -->

    <!-- contact start -->
    <footer id="contact" class="contact">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="footer-logo">
                                <a href="index.html">Yasir Autos</a>
                            </div>
                            <p>
                                Welcome to Yasir Autos, your one-stop shop for high-quality automotive parts. Our
                                mission is to provide top-notch service and a vast selection of reliable products to
                                meet all your vehicle needs.
                            </p>
                        </div>
                    </div>
                    <!-- ... (other footer content) ... -->
                </div>
            </div>
        </div><!--/.container-->
    </footer><!--/contact-->
    <!-- contact end -->

    <div class="footer-contact">
        <p>info@yasirautos.com</p>
        <p>+92 (322)6132835</p>
    </div>
    </div>
    </div>
    <div class="col-md-2 col-sm-6">
        <div class="single-footer-widget">
            <h2>about Yasir Autos</h2>
            <ul>
                <li><a href="#">about us</a></li>
                <li><a href="#">career</a></li>
                <li><a href="#">terms <span> of service</span></a></li>
                <li><a href="#">privacy policy</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-3 col-xs-12">
        <div class="single-footer-widget">
            <h2>top brands</h2>
            <div class="row">
                <div class="col-md-7 col-xs-6">
                    <ul>
                        <li><a href="#">BMW</a></li>
                        <li><a href="#">lamborghini</a></li>
                        <li><a href="#">camaro</a></li>
                        <li><a href="#">audi</a></li>
                        <li><a href="#">infiniti</a></li>
                        <li><a href="#">nissan</a></li>
                    </ul>
                </div>
                <div class="col-md-5 col-xs-6">
                    <ul>
                        <li><a href="#">ferrari</a></li>
                        <li><a href="#">porsche</a></li>
                        <li><a href="#">land rover</a></li>
                        <li><a href="#">aston martin</a></li>
                        <li><a href="#">mersedes</a></li>
                        <li><a href="#">opel</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-3 col-sm-6">
        <div class="single-footer-widget">
            <h2>news letter</h2>
            <div class="footer-newsletter">
                <p>
                    Subscribe to get latest news update and informations
                </p>
            </div>
            <div class="hm-foot-email">
                <div class="foot-email-box">
                    <input type="text" class="form-control" placeholder="Add Email">
                </div><!--/.foot-email-box-->
                <div class="foot-email-subscribe">
                    <span><i class="fa fa-arrow-right"></i></span>
                </div><!--/.foot-email-icon-->
            </div><!--/.hm-foot-email-->
        </div>
    </div>
    </div>
    </div>
    <div class="footer-copyright">
        <div class="row">

            <div class="col-sm-6">
                <div class="footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </div><!--/.footer-copyright-->
    </div><!--/.container-->

    <div id="scroll-Top">
        <div class="return-to-top">
            <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title=""
                data-original-title="Back to Top" aria-hidden="true"></i>
        </div>

    </div><!--/.scroll-Top-->

    </footer><!--/.contact-->
    <!--contact end-->



    <!-- Include all js compiled plugins (below), or include individual files as needed -->

    <script src="assets/js/jquery.js"></script>

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--bootstrap.min.js-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- bootsnav js -->
    <script src="assets/js/bootsnav.js"></script>

    <!--owl.carousel.js-->
    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--Custom JS-->
    <script src="assets/js/custom.js"></script>

</body>

</html>
