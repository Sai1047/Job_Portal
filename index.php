<?php

//To Handle Session Variables on This Page
session_start();

//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chakri Lagbe?</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="./assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="./assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">SJ IT Center</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="jobs.php" class="nav-item nav-link active">Jobs</a>
                    <a href="#" class="nav-item nav-link">Candidates</a>
                    <a href="company.php" class="nav-item nav-link">Company</a>
                    <a href="jobs.php" class="nav-item nav-link">Jobs</a>
                    <a href="#" class="nav-item nav-link">About Us</a>
                    <?php if (empty($_SESSION['id_user']) && empty($_SESSION['id_company'])) { ?>
                        <a href="login.php" class="nav-item nav-link">Login</a>
                        <a href="sign-up.php" class="nav-item nav-link">Sign Up</a>
                    <?php } else {
                        if (isset($_SESSION['id_user'])) { ?>
                            <a href="user/index.php" class="nav-item nav-link">Dashboard</a>
                        <?php } else if (isset($_SESSION['id_company'])) { ?>
                            <a href="company/index.php" class="nav-item nav-link">Dashboard</a>
                        <?php } ?>
                        <a href="logout.php" class="nav-item nav-link">Logout</a>
                    <?php } ?>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="./assets/img/carousel-1.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Find The Perfect Job That
                                        You Deserve</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">For job seekers, our user-friendly interface allows you to browse through a wide range of job listings, filter by industry, location, and experience level, and apply with just a few clicks.</p>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Search
                                        A Job</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Find A
                                        Talent</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="./assets/img/carousel-2.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Find The Best Startup Job
                                        That Fits You</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Employers, on the other hand, can take advantage of our robust recruitment platform to post job openings, manage applications, and identify top talent efficiently.</p>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Search
                                        A Job</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Find A
                                        Talent</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="./assets/img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="./assets/img/about-2.jpg"
                                    style="width: 85%; margin-top: 15%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="./assets/img/about-3.jpg" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="./assets/img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">We Help You Get The Best Job And Find Talent</h1>
                        <p class="mb-4">We understand that finding the right job or the perfect candidate can be daunting. That's why we've created a platform that streamlines the process, making it easier for both employers and job seekers to find their perfect match.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Navigating Careers, Building Futures</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Connecting Talent with Opportunity, Seamlessly</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Empowering Dreams, One Job at a Time</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Empowering Careers, Enriching Companies</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listings</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                                href="#tab-1">
                                <h6 class="mt-n1 mb-0">Featured</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill"
                                href="#tab-2">
                                <h6 class="mt-n1 mb-0">Full Time</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill"
                                href="#tab-3">
                                <h6 class="mt-n1 mb-0">Part Time</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="./assets/img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Software Engineer</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex align-items-center justify-content-start justify-content-md-end">
                                        <div class="d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="./assets/img/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Marketing Manager</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex align-items-center justify-content-start justify-content-md-end">
                                        <div class="d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="./assets/img/com-logo-3.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Product Designer</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex align-items-center justify-content-start justify-content-md-end">
                                        <div class="d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="./assets/img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Software Engineer</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex align-items-center justify-content-start justify-content-md-end">
                                        <div class="d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="./assets/img/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Marketing Manager</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex align-items-center justify-content-start justify-content-md-end">
                                        <div class="d-flex">
                                            <a class="btn btn-light btn-square me-3" href=""><i
                                                    class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded"
                                            src="./assets/img/com-logo-3.jpg" alt="" style="width: 80px; height: 80px;">
