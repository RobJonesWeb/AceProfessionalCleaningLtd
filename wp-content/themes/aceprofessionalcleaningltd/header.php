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
        <a class="row col-12 text-center"
           href="/">
            <img src="/wp-content/uploads/2022/11/logo.png" class="img-fluid" width="84"
                 height="50" alt="Company Brand">
        </a>
    </div>
</nav>

<!-- End Navbar -->

<!-- Carousel -->
<?php if (have_rows('carousel_slide')): $carouselSlide = 1 ?>
    <section id="heroCarousel" class="carousel-container p-0 m-0">
        <div class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner mh-75">
                <?php while (have_rows('carousel_slide')) : the_row();
                    $carousel_image = get_sub_field('carousel_image') ?>
                    <div class="carousel-item <?= $carouselSlide === 1 ? 'active' : '' ?> ">
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

