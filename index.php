<?php
include 'NGO/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SadBhavna Welfare Trust</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/Favicon.ico" type="image/x-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- <link href="../lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->

    <style>
        <?php
        include("css/style.css");
        include("lib/flaticon/font/flaticon.css");
        include("lib/animate/animate.min.css");
        include("lib/owlcarousel/assets/owl.carousel.min.css");
        ?>
    </style>
    <!-- Template Stylesheet -->
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
</head>

<body>
    <!-- Top Bar Start -->
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div class="text">
                            <i class="fa fa-phone-alt"></i>
                            <?php
                            $sql = "SELECT * FROM `social`";
                            $resultt = mysqli_query($link, $sql);
                            $numm = mysqli_num_rows($resultt);
                            if ($numm > 0) {
                                for ($i = 1; $i <= $numm; $i++) {
                                    $roww = mysqli_fetch_assoc($resultt);

                                    ?>
                                    <p>+91
                                        <?php echo $roww['s_number']; ?>
                                    </p>
                                </div>
                                <div class="text">
                                    <i class="fa fa-envelope"></i>
                                    <p>
                                        <?php echo $roww['s_email']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="top-bar-right">
                                <div class="social">
                                    <a href="<?php echo $roww['s_twiter']; ?>"><i class="fab fa-twitter"></i></a>
                                    <a href="<?php echo $roww['s_fb']; ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a href="<?php echo $roww['s_ld']; ?>"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="<?php echo $roww['s_insta']; ?>"><i class="fab fa-instagram"></i></a>
                                    <a href="NGO/admin.php" class="nav-item nav-link">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->


            <div class="navbar navbar-expand-lg bg-dark navbar-dark">
                <div>
                    <img src="img/NGOlogo-removebg-preview.png" style="margin-right:22px;" width="100" height="100">
                </div>
                <div class="container-fluid">
                    <!-- <img src="img/NGOlogo.jpg" alt="Girl in a jacket" width="500" height="600">  -->
                    <a href="" class="navbar-brand" style="font-size:20px;margin-right:22px;">Sadbhavna Trust</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav ml-auto">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About us
                                </a>
                                <div class="dropdown-menu">
                                    <a href="" class="dropdown-item">Organization Information</a>
                                    <a href="" class="dropdown-item">Vision and Misson</a>
                                    <a href="" class="dropdown-item">Reach and Presence</a>
                                    <a href="" class="dropdown-item">Impact</a>
                                    <!-- <a href="volunteer.html" class="dropdown-item">Bec</a> -->
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Area of Intervention
                                </a>
                                <div class="dropdown-menu">
                                    <a href="" class="dropdown-item">Health</a>
                                    <a href="" class="dropdown-item">Education</a>
                                    <a href="" class="dropdown-item">Livelihoods</a>
                                    <a href="" class="dropdown-item">Environment</a>
                                    <!-- <a href="volunteer.html" class="dropdown-item">Become A Volunteer</a> -->
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Where we
                                    Work
                                </a>
                                <div class="dropdown-menu">
                                    <a href="" class="dropdown-item">Anand</a>
                                    <a href="" class="dropdown-item">Kheda</a>
                                    <a href="" class="dropdown-item">Dahod</a>
                                    <a href="" class="dropdown-item">Ahmedabad</a>
                                    <!-- <a href="volunteer.html" class="dropdown-item">Become A Volunteer</a> -->
                                </div>
                            </div>
                            <!-- <a href="about.html" class="nav-item nav-link">About</a> -->
                            <!-- <a href="causes.html" class="nav-item nav-link">Causes</a> -->
                            <!-- <a href="event.html" class="nav-item nav-link">Events</a> -->
                            <!-- <a href="blog.html" class="nav-item nav-link">Blog</a> -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Resources</a>
                                <div class="dropdown-menu">
                                    <a href="" class="dropdown-item">Photographs</a>
                                    <a href="" class="dropdown-item">Videos</a>
                                    <a href="" class="dropdown-item">Annual Report</a>
                                    <a href="" class="dropdown-item">Publication</a>
                                    <a href="" class="dropdown-item">Events</a>
                                    <a href="" class="dropdown-item">Innovations</a>
                                </div>
                            </div>
                            <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                            <!-- <a href="NGO/login.php" class="nav-item nav-link">Donate Now</a> -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- Nav Bar End -->


            <!-- Carousel Start -->
            <div class="carousel">
                <div class="container-fluid">
                    <div class="owl-carousel">
                        <div class="carousel-item">
                            <div class="carousel-img">
                                <img src="img/ngo1.jpg" alt="Image">
                            </div>
                            <div class="carousel-text">
                                <!-- <h1>Let's be kind for children</h1>
                            <p>
                                Fund-raising & donations can be done effectively
                            </p> -->
                                <!-- <div class="carousel-btn">
                                <a class="btn btn-custom" href="NGO/index.html">Donate Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/channel/UCsd0grUAFIl_2egRXN1acOw" data-target="#videoModal">Watch Video</a>
                            </div> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-img">
                                <img src="img/ngo2.jpg" alt="Image">
                            </div>
                            <div class="carousel-text">
                                <!-- <h1>Get Involved with helping hand</h1>
                            <p>
                               It will focus on develop INDIA mission through social awareness
                            </p> -->
                                <!-- <div class="carousel-btn">
                                <a class="btn btn-custom" href="">Donate Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                            </div> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-img">
                                <img src="img/ngo3.jpg" alt="Image">
                            </div>
                            <div class="carousel-text">
                                <!-- <h1>Bringing smiles to millions</h1>
                            <p>
                                Easily  provide Orphange Management System facilities to children & needy persons
                            </p> -->
                                <!-- <div class="carousel-btn">
                                <a class="btn btn-custom" href="">Donate Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                            </div> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-img">
                                <img src="img/ngo4.jpg" alt="Image">
                            </div>
                            <div class="carousel-text">
                                <!-- <h1>Bringing smiles to millions</h1>
                            <p>
                                Easily  provide Orphange Management System facilities to children & needy persons
                            </p> -->
                                <!-- <div class="carousel-btn">
                                <a class="btn btn-custom" href="">Donate Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                            </div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Carousel End -->

            <!-- Video Modal Start-->
            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                    allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video Modal End -->


            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img" data-parallax="scroll" data-image-src="img/th.jpg"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-header">
                                <p>Learn About Us</p>
                                <h2>SadBhavna Trust</h2>
                            </div>
                            <div class="about-tab">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                                </li> -->
                                </ul>

                                <div class="tab-content">
                                    <div id="tab-content-1" class="container tab-pane active">
                                        Sadbhavna Trust is a Gujarat-based NGO registered
                                        as a society, working with the vision to create an
                                        equitable society where all the vulnerable and
                                        under-privileged sections of the society have access
                                        to education, healthcare services and livelihood
                                        opportunities. We work in Charotar region (Anand
                                        and Kheda districts of Central Gujarat) where
                                        poverty of large section of community is masked
                                        with overall prosperity of the region. We focus
                                        on poor and marginalized households, homeless,
                                        widows, children, landless, and daily wage earner
                                        families to work with them for providing social and
                                        economic security and thereby bringing them out
                                        of the vicious cycle of poverty.
                                    </div>
                                    <!-- <div id="tab-content-2" class="container tab-pane fade">
                                   

.
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                   
                                    
                                </div>  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Service Start -->
            <!-- <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>We believe that we can save more lifes with you</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-diet"></i>
                            </div>
                            <div class="service-text">
                                <h3>Healthy Food</h3>
                                <p>Organic Yogurt. Men and women between 19 and 50 years of age need 1000 milligrams of calcium a day and 1200 milligrams if 50 or older</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-water"></i>
                            </div>
                            <div class="service-text">
                                <h3>Pure Water</h3>
                                <p>While most sources of public drinking water are closely regulated and safe to drink, many prefer to drink purified water.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-healthcare"></i>
                            </div>
                            <div class="service-text">
                                <h3>Health Care</h3>
                                <p>Health care is delivered by health professionals and allied health fields.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-education"></i>
                            </div>
                            <div class="service-text">
                                <h3>Primary Education</h3>
                                <p>Primary education is typically the first stage of formal education, coming after preschool/kindergarten and before secondary school.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-home"></i>
                            </div>
                            <div class="service-text">
                                <h3>Residence Facilities</h3>
                                <p>Residence or residence facility means multi-family facilities including apartments, townhouses, condominiums, dormitories, hotels, motels, resorts, extended care facilities, or similar entities, facilities, or structures.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-social-care"></i>
                            </div>
                            <div class="service-text">
                                <h3>Social Care</h3>
                                <p>Social care is a term that generally describes all forms of personal care and other practical assistance for children, young people and adults who need extra support.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        Service End -->


            <!-- Facts Start
        <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">100</h3>
                                <p>Countries</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">300</h3>
                                <p>Volunteers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">10000</h3>
                                <p>Our Goal</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">3000</h3>
                                <p>Raised</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->


            <!-- Causes Start -->
            <!-- <div class="causes">
            <div class="container">
                <div class="section-header text-center">
                    <p>Popular Causes</p>
                    <h2>Let's know about charity causes around the world</h2>
                </div>
                <div class="owl-carousel causes-carousel">
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-1.jpg" alt="Image">
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span>85%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> 100000</p>
                                <p><strong>Goal:</strong> 50000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>Help a stranger and make their day</h3>
                            <p>According to the World Giving Index 2018, 63% of people in the UK helped a stranger last year. Why not carry on the trend and hold a door open, give up your seat on the train</p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom">Learn More</a>
                            <a class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-2.jpg" alt="Image">
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span>85%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> 100000</p>
                                <p><strong>Goal:</strong> 
                                50000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>Teach your kids about giving</h3>
                            <p> Giving unwanted toys to those less fortunate, smiling at someone on the street, holding doors open for people or visiting a sick relative is still charity because it warms someone's heart.</p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom">Learn More</a>
                            <a class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-3.jpg" alt="Image">
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span>65%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> 100000</p>
                                <p><strong>Goal:</strong> 50000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>Donate blankets, gloves, coats etc.</h3>
                            <p>Spare a thought for those who are homeless or in temporary accommodation. Use our charity search to donate to a homeless charity near you.</p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom">Learn More</a>
                            <a class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-4.jpg" alt="Image">
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span>85%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> 100000</p>
                                <p><strong>Goal:</strong> 50000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>Volunteer your time homeless shelter</h3>
                            <p>Charities really appreciate volunteers and there are likely to be organisations in your community that could use an extra pair of helping hands.</p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom">Learn More</a>
                            <a class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     -->


            <!-- Donate Start -->
            <!-- <div class="donate" data-parallax="scroll" data-image-src="img/donate.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="donate-content">
                            <div class="section-header">
                                <p>Donate Now</p>
                                <h2>Let's donate to needy people for better lives</h2>
                            </div>
                            <div class="donate-text">
                                <p>
                                   A little help with a little smile gives meaning to human life.” “Help those less fortunate than you, for it is real human existence.”
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="donate-form">
                            <form>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-custom active">
                                        <input type="radio" name="options" checked> 100
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" name="options"> 200
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" name="options">300
                                    </label>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Donate Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>  -->
            <!-- Donate End -->


            <!-- Event Start -->
            <div class="event">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Upcoming Events</p>
                        <h2>Be ready for our upcoming events</h2>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <?php

                            $sql = "SELECT * FROM `addevent`";
                            $result = mysqli_query($link, $sql);
                            $num = mysqli_num_rows($result);
                            if ($num > 0) {
                                for ($i = 1; $i <= $num; $i++) {
                                    $row = mysqli_fetch_assoc($result);

                                    ?>
                                    <div class="event-item">
                                        <img src="img/ngo1.jpg" alt="Image">
                                        <div class="event-content">
                                            <div class="event-meta">
                                                <p><i class="fa fa-calendar-alt"></i>

                                                    <?php
                                                    echo substr($row['e_date'], 8, 2) . "-" . substr($row['e_date'], 5, 2) . "-" . substr($row['e_date'], 0, 4) ?>

                                                    <!-- echo $row['e_date'] ?> -->
                                                </p>
                                                <p><i class="far fa-clock"></i>
                                                    <?php echo $row['e_time'] ?>
                                                </p>
                                                <p><i class="fa fa-map-marker-alt"></i>
                                                    <?php echo $row['location'] ?>
                                                </p>
                                            </div>
                                            <div class="event-text">
                                                <h3>
                                                    <?php echo $row['e_name'] ?>

                                                </h3>
                                                <p>
                                                    <?php echo $row['e_details'] ?>

                                                </p>
                                                <!-- <a class="btn btn-custom" href="">Join Now</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Event End -->
            <div class="blog">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Our Blog</p>
                        <h2>Latest news & articles directly from our blog</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="img/b13.jpg" alt="Image">
                                </div>
                                <div class="blog-text">
                                    <h3><a href="#">Title of news or blog</a></h3>
                                    <p>description about news or blog </p>

                                </div>
                                <!-- <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div> -->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="img/b11.png" alt="Image">
                                </div>
                                <div class="blog-text">
                                    <h3><a href="#">Title of news or blog</a></h3>
                                    <p>
                                        description about news or blog
                                    </p>
                                </div>
                                <!-- <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div> -->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="img/b12.jpg" alt="Image">
                                </div>
                                <div class="blog-text">
                                    <h3><a href="#">Title of news or blog</a></h3>
                                    <p> description about news or blog </p>
                                </div>
                                <!-- <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- Team Start -->
            <div class="team">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Meet Our Team</p>
                        <h2>Awesome guys behind our NGO activities</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <?php
                            $sql = "SELECT * FROM `addvol`";
                            $result = mysqli_query($link, $sql);
                            $num = mysqli_num_rows($result);
                            if ($num > 0) {
                                for ($i = 1; $i <= $num; $i++) {
                                    $row = mysqli_fetch_assoc($result);

                                    ?>

                                    <div class="team-item">
                                        <div class="team-img">
                                            <img src="NGO/<?php echo $row['v_img']; ?>" width="80px" height="200" alt="Team Image">
                                        </div>
                                        <div class="team-text">
                                            <h2>
                                                <?php echo $row['v_name']; ?>
                                            </h2>
                                            <p>
                                                <?php echo $row['v_deg']; ?>
                                            </p>
                                            <!-- <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
                <!-- Team End -->


                <!-- Volunteer Start
        <div class="volunteer" data-parallax="scroll" data-image-src="img/volunteer.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="volunteer-form">
                            <form>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" placeholder="Why you want to become a volunteer?" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Become a volunteer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="volunteer-content">
                            <div class="section-header">
                                <p>Become A Volunteer</p>
                                <h2>Let’s make a difference in the lives of others</h2>
                            </div>
                            <div class="volunteer-text">
                                <p>
                                    It is the way of life. Perhaps you are changing the lives of those around you, and yet you are unaware of. Your smile, your voluntary work, helping a friend, etc. all this makes a difference. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Volunteer End -->


                <!-- Testimonial Start
        <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>What people are talking about our charity activities</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/swami-ramdev.png" alt="Image">
                            <div class="testimonial-name">
                                <h3>Yoga Guru Baba Ramdev</h3>
                                <p>Co-founder, Patanjali Ayurved Ltd.</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                
            Narayan Seva Sansthan has treated around 3,70,000 polio afflicted children to stand on their own and made a world record. This is a pious ritual of Flawless Service in which Narayana Seva Sansthan is continuously engaged.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/1.png" alt="Image">
                            <div class="testimonial-name">
                                <h3>mukesh dhirubhai ambani</h3>
                                <p>Reliance Industries Ltd.</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                               
            I had heard a lot about Narayana Seva Sansthan and I respect them for their wonderful work.
            My blessings are with you and hope you have a good treatment.
            
        
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/ravishankar-thumb.png" alt="Image">
                            <div class="testimonial-name">
                                <h3>SRI SRI RAVI SHANKAR</h3>
                                <p>Founder art of living foundation</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Narayan Seva Sansthan is working hard day and night for the welfare of the poor mass community.
 
            Narayan Seva Sansthan has only one motto i.e; to bring back the happiness on the faces of more and more people, serving people of our own country and making their lives better and easier.
            
                            </p>
                        </div>
                    </div>

                     <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/Modi.jpg" alt="Image">
                            <div class="testimonial-name">
                                <h3>Narendra Modi</h3>
                                <p>Prime Minister</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                               The world is seeing India with a ray of hope and our diaspora can play a crucial role in further spreading it
            
                            </p>
                        </div>
                    </div>
                   
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->



                <div class="contact">
                    <div class="container">
                        <div class="section-header text-center">
                            <p>Get In Touch</p>
                            <h2>Contact for any query</h2>
                        </div>
                        <div class="contact-img">
                            <img src="img/contact.jpg" alt="Image">
                        </div>
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email"
                                        required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject"
                                        required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" placeholder="Message" required="required"
                                        data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>







                <!-- Footer Start -->
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-contact">
                                    <h2>Our Head Office</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>Sadbhavna Trust
                                        At and PO: Anand, Ta & Dist.: Anand
                                        Gujarat, India</p>
                                    <p><i class="fa fa-phone-alt"></i>Himanshu Supat (Managing Trustee)
                                        Mob: 8849335465</p>
                                    <p><i class="fa fa-envelope"></i>ngo.sbt@gmail.com</p>
                                    <div class="footer-social">
                                        <a class="btn btn-custom" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-custom" href="https://www.facebook.com/sadbhavnawelfaretrust"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-custom" href=""><i class="fab fa-youtube"></i></a>
                                        <a class="btn btn-custom" href=""><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-custom" href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-link">
                                    <h2>Popular Links</h2>
                                    <a href="">About Us</a>
                                    <a href="">Contact Us</a>
                                    <!-- <a href="">Popular Causes</a> -->
                                    <a href="">Upcoming Events</a>
                                    <a href="">Latest Blog</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-link">
                                    <h2>Useful Links</h2>
                                    <a href="">Terms of use</a>
                                    <a href="">Privacy policy</a>
                                    <a href="">Cookies</a>
                                    <a href="">Help</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-newsletter">
                                    <h2>Newsletter</h2>
                                    <form>
                                        <input class="form-control" placeholder="Email goes here">
                                        <button class="btn btn-custom">Submit</button>
                                        <label>Don't worry, we don't spam!</label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container copyright">
                        <div class="row">
                            <div class="col-md-6">
                                <p>&copy; <a href="#">SadBhavna Welfare Trust</a>, All Right Reserved.</p>
                            </div>
                            <!-- <div class="col-md-6">
                        <p>Designed By <a href="https://htmlcodex.com">Sadbhavna </a></p>
                    </div>  -->
                        </div>
                    </div>
                </div>
                <!-- Footer End -->

                <!-- Back to top button -->
                <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

                <!-- Pre Loader -->
                <div id="loader" class="show">
                    <div class="loader"></div>
                </div>

                <!-- JavaScript Libraries -->
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
                <script src="lib/easing/easing.min.js"></script>
                <script src="lib/owlcarousel/owl.carousel.min.js"></script>
                <script src="lib/waypoints/waypoints.min.js"></script>
                <script src="lib/counterup/counterup.min.js"></script>
                <script src="lib/parallax/parallax.min.js"></script>

                <!-- Contact Javascript File -->
                <script src="mail/jqBootstrapValidation.min.js"></script>
                <script src="mail/contact.js"></script>

                <!-- Template Javascript -->
                <script src="js/main.js"></script>
        </body>
        <?php
                                }
                            }
                            ?>

</html>