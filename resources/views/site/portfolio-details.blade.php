<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portfolio Details - Personal Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('site/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('site/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('site/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('site/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('site/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('site/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('site/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('site/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('site/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: MyResume - v4.0.1
    * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper-container">
                        <div class="swiper-wrapper align-items-center">

                            @foreach($portfolios ->images as $image)

                            <div class="swiper-slide">
                                <img src="{{url($image->photo)}}" alt="">
                            </div>

                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: {{$portfolios->category->name}}</li>
                            <li><strong>Name Project</strong>: {{$portfolios->name}}</li>
                            <li><strong>Project date</strong>: {{$portfolios->created_at->format('d M Y ')}}</li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Project Description:</h2>
                        <p>
                            {!! $portfolios->description !!}
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('site/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('site/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('site/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('site/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('site/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('site/assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('site/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('site/assets/vendor/typed.js/typed.min.js')}}"></script>
<script src="{{asset('site/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('site/assets/js/main.js')}}"></script>

</body>

</html>
