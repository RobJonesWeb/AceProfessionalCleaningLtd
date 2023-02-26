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
                height: 300px;
            }
        }

    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background: #212529">
    <div class="container">
        <?php if(false) { ?>
        <a class="d-block d-md-none navbar-brand col-6 col-md-2 me-auto text-center text-md-start mb-3 mb-md-0"
           href="javascript:void(0)">
            <img src="/wp-content/uploads/2022/11/logo.png" class="img-fluid" width="84"
                 height="50" alt="Company Brand">
        </a>
        <button class="navbar-toggler ms-auto border-0 mx-4 py-md-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbar-collapse" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php } ?>
        <div class="collapse navbar-collapse" data-bs-target="navbar" id="navbar-collapse">
            <a class="d-none d-md-block navbar-brand col-6 col-md-2 me-auto text-center text-md-start mb-3 mb-md-0"
               href="javascript:void(0)">
                <img src="/wp-content/uploads/2022/11/logo.png" class="img-fluid" width="84"
                     height="50" alt="Company Brand">
            </a>
            <?php if(false) { ?>
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
            <?php } ?>
        </div>
    </div>
</nav>

<!-- End Navbar -->

<!-- Carousel -->
<?php if( have_rows('carousel_slide') ): $carouselSlide = 1 ?>
<section id="heroCarousel" class="carousel-container p-0 m-0">
    <div class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner mh-75">
            <?php while( have_rows('carousel_slide') ) : the_row(); $carousel_image = get_sub_field('carousel_image')?>
                    <div class="carousel-item <?= $carouselSlide === 1 ? 'active' : ''?> ">
                        <img class="d-block w-100"
                            src=<?= $carousel_image['url'] ?>
                            data-holder-rendered="true">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?php the_sub_field('carousel_header') ?></h5>
                            <p><?php the_sub_field('carousel_caption') ?></p>
                        </div>
                    </div>
                <?php $carouselSlide++ ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- End Carousel -->

<!-- Pre-Header -->
<div class="container-fluid px-0">

