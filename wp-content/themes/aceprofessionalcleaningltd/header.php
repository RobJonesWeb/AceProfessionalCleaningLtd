<!DOCTYPE html>
<head>
    <title>Ace Professional Cleaning Ltd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>

    <?php wp_head(); ?>

    <style>
        .usp-image {
            width: 128px;
        }

        .tawk-button {
            width: 40px
        }

        @media screen and (max-width: 600px) {
            #heroCarousel img {
                height: 500px;
            }
        }

    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background: #212529">
    <div class="container">

        <a class="d-block d-md-none navbar-brand col-6 col-md-2 me-auto text-center text-md-start mb-3 mb-md-0"
           href="javascript:void(0)">
            <img src="/wp-content/uploads/2022/11/logo.png" class="img-fluid" width="168"
                 height="50" alt="Company Brand">
        </a>
        <button class="navbar-toggler ms-auto border-0 mx-4 py-md-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbar-collapse" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" data-bs-target="navbar" id="navbar-collapse">
            <a class="d-none d-md-block navbar-brand col-6 col-md-2 me-auto text-center text-md-start mb-3 mb-md-0"
               href="javascript:void(0)">
                <img src="/wp-content/uploads/2022/11/logo.png" class="img-fluid" width="168"
                     height="50" alt="Company Brand">
            </a>
            <ul class="navbar-nav col-10 col-md-8 fw-bold">
                <li class="nav-item px-2">
                    <a class="nav-link text-light" href="javascript:void(0)">Services</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-light" href="javascript:void(0)">About Ace</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-light" href="javascript:void(0)">Contact Us</a>
                </li>
            </ul>
            <ul class="navbar-nav col-12 col-md-2">
                <div class="row text-center text-md-start p-3 p-md-0">
                    <li class="nav-item col-4 col-md px-2">
                        <a class="nav-link text-light" href="javascript:void(0)"><i class="fa-solid fa-1x fa-phone"></i></a>
                    </li>
                    <li class="nav-item col-4 col-md px-2">
                        <a class="nav-link text-light" href="javascript:void(0)"><i
                                    class="fa-solid fa-1x fa-envelope"></i></a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>

<!-- End Navbar -->

<!-- Carousel -->
<section id="heroCarousel" class="carousel-container p-0 m-0">
    <div class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner mh-75">
            <div class="carousel-item active">
                <img class="d-block w-100"
                     data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide"
                     alt="First slide [800x400]"
                     src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_18468e71daa%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_18468e71daa%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.921875%22%20y%3D%22217.7%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                     data-holder-rendered="true">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    <a href="javascript:void(0)" class="btn btn-lg btn-primary">Go here</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                     data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=Second slide"
                     alt="Second slide [800x400]"
                     src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_18468e71daa%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_18468e71daa%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.921875%22%20y%3D%22217.7%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                     data-holder-rendered="true">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    <a href="javascript:void(0)" class="btn btn-lg btn-primary">Go here</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                     data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=Third slide"
                     alt="Third slide [800x400]"
                     src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_18468e71daa%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_18468e71daa%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.921875%22%20y%3D%22217.7%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                     data-holder-rendered="true">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    <a href="javascript:void(0)" class="btn btn-lg btn-primary">Go here</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Carousel -->

<!-- Pre-Header -->
<div class="container-fluid px-0">

