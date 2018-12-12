<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <noscript>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    </noscript>
</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/logo.png" class="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ol class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#technology">Technology</a>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio</a>
                    <ol class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="#">Desktop Development</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Web Development</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Mobile Development</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Guides</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Algorithms</a></li>
                    </ol>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team">The Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ol>
        </div>
    </div>
</nav>

<!-- Slider/Video -->
<div id="slides" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <!--<li data-target="#slides" data-slide-to="1"></li>-->
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="slider-hide-on-mobile">
                <video title="background-promotion-video" id="bgvid" autoplay loop muted poster="http://www.thefrasier.com/wp-content/themes/frasier/images/Frasier_Home_120314.jpg">
                    <source src="http://www.thefrasier.com/wp-content/uploads/2014/12/0_final_reel_home.webm" type="video/webm">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="carousel-caption">
                <h1 class="display-2">Alexander R-K</h1>
                <h3>B.Sc Computer Science | Business Certificate</h3>
                <button type="button" class="btn btn-outline-light btn-lg"><i class="far fa-file-pdf"></i> Resume
                </button>
                <button type="button" class="btn btn-primary btn-lg"><i class="fab fa-github"></i> GitHub</button>
            </div>
        </div>
        <!--<div class="carousel-item">-->
        <!--<img src="images/slider_image2.jpg">-->
        <!--</div>-->
    </div>
</div>

<!-- Jumbotron -->
<div class="container-fluid">
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <h4>Note: HTMLMinifier, CSSNano, and UglifyJS were used to minify resources and increase PageSpeed.</h4>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
            <a href="#">
                <button type="button" class="btn btn-outline-secondary btn-lg"><i class="fab fa-github"></i> Original Code</button>
            </a>
        </div>
    </div>
</div>
?>