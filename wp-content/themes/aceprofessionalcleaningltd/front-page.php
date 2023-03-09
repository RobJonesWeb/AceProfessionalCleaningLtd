<?php
wp_head();
get_header();
?>
    <!-- USP's -->
    <?php if (have_rows('usp')): ?>
    <div class="row col-12 justify-content-center usp-container my-5">
        <?php while (have_rows('usp')) : the_row(); $uspImage = get_sub_field('usp_image'); ?>
        <div class="card col-12 col-md-4 text-center border-0 py-3 py-md-0">
            <img class="usp-image mx-auto"
                 src="<?= $uspImage['url'] ?>"
                 alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php the_sub_field('usp_title') ?></h5>
                <p class="card-text"><?php the_sub_field('usp_description') ?></p>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
    <!-- End USPs -->

    <!-- Services -->
    <?php if (have_rows('service')): $serviceCount = 1;?>
    <div class="row col-12 py-3 services-container px-0 mx-0">
        <?php while (have_rows('service')) : the_row(); $serviceImage = get_sub_field('service_image'); ?>
            <?php if ($serviceCount % 2): ?>
            <div class="col-12 col-md-6 px-0 ">
                <img src=<?= $serviceImage['url'] ?> class="img-fluid" />
            </div>
            <div class="col-12 col-md-6 bg-dark text-white p-5">
                <h2><?php the_sub_field('service_heading')?></h2>
                <p><?php the_sub_field('service_description')?></p>
            <a href="javascript:void(0)" id="servicesButton" data-service="<?php the_sub_field('service_heading') ?> Query" class="btn btn-lg btn-primary">Contact</a>
            </div>
            <?php else: ?>
            <div class="col-12 col-md-6 bg-dark text-white p-5">
                <h2><?php the_sub_field('service_heading')?></h2>
                <p><?php the_sub_field('service_description')?></p>
            <a href="javascript:void(0)" id="servicesButton" data-service="<?php the_sub_field('service_heading') ?> Query" class="btn btn-lg btn-primary">Contact</a>
            </div> 
            <div class="col-12 col-md-6 px-0 ">
                <img src=<?= $serviceImage['url'] ?> class="img-fluid" />
            </div>
            <?php endif; ?>
            <?php $serviceCount++ ?>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
    <!-- End Services -->

    <!-- Testimonials -->
    <div class="row col-12 testimonials bg-light">
        <div class="slick-container"
             data-slick='{"autoplay": true, "infinite": true, "slidesToShow": 5, "slidesToScroll": 1, "responsive": [{"breakpoint": 600, "settings":{"slidesToShow": 1}}]}'>
            <div class="card bg-light border-light rounded col-12 col-md-3 text-center">
                <img class="card-img-top mx-auto mt-3 img-fluid"
                     src="https://t4.ftcdn.net/jpg/03/59/58/91/360_F_359589186_JDLl8dIWoBNf1iqEkHxhUeeOulx0wOC5.jpg"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title mb-3">Customer #1</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur
                        felis vitae tortor venenatis, sit amet mollis leo consectetur. Nam accumsan egestas consectetur.
                        Nunc malesuada sapien ac feugiat fringilla.</p>
                </div>
            </div>
            <div class="card bg-light border-light rounded col-12 col-md-3 text-center">
                <img class="card-img-top mx-auto mt-3"
                     src="https://t4.ftcdn.net/jpg/03/59/58/91/360_F_359589186_JDLl8dIWoBNf1iqEkHxhUeeOulx0wOC5.jpg"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title mb-3">Customer #2</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur
                        felis vitae tortor venenatis, sit amet mollis leo consectetur. Nam accumsan egestas consectetur.
                        Nunc malesuada sapien ac feugiat fringilla.</p>
                </div>
            </div>
            <div class="card bg-light border-light rounded col-12 col-md-3 text-center">
                <img class="card-img-top mx-auto mt-3"
                     src="https://t4.ftcdn.net/jpg/03/59/58/91/360_F_359589186_JDLl8dIWoBNf1iqEkHxhUeeOulx0wOC5.jpg"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title mb-3">Customer #3</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur
                        felis vitae tortor venenatis, sit amet mollis leo consectetur. Nam accumsan egestas consectetur.
                        Nunc malesuada sapien ac feugiat fringilla.</p>
                </div>
            </div>
            <div class="card bg-light border-light rounded col-12 col-md-3 text-center">
                <img class="card-img-top mx-auto mt-3"
                     src="https://t4.ftcdn.net/jpg/03/59/58/91/360_F_359589186_JDLl8dIWoBNf1iqEkHxhUeeOulx0wOC5.jpg"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title mb-3">Customer #4</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur
                        felis vitae tortor venenatis, sit amet mollis leo consectetur. Nam accumsan egestas consectetur.
                        Nunc malesuada sapien ac feugiat fringilla.</p>
                </div>
            </div>
            <div class="card bg-light border-light rounded col-12 col-md-3 text-center">
                <img class="card-img-top mx-auto mt-3"
                     src="https://t4.ftcdn.net/jpg/03/59/58/91/360_F_359589186_JDLl8dIWoBNf1iqEkHxhUeeOulx0wOC5.jpg"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title mb-3">Customer #5</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur
                        felis vitae tortor venenatis, sit amet mollis leo consectetur. Nam accumsan egestas consectetur.
                        Nunc malesuada sapien ac feugiat fringilla.</p>
                </div>
            </div>
            <div class="card bg-light border-light rounded col-12 col-md-3 text-center">
                <img class="card-img-top mx-auto mt-3"
                     src="https://t4.ftcdn.net/jpg/03/59/58/91/360_F_359589186_JDLl8dIWoBNf1iqEkHxhUeeOulx0wOC5.jpg"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title mb-3">Customer #6</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur
                        felis vitae tortor venenatis, sit amet mollis leo consectetur. Nam accumsan egestas consectetur.
                        Nunc malesuada sapien ac feugiat fringilla.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Certifications -->

    <!-- End Certifications -->

    <!-- Contact Form -->
    <section class="bg-dark text-white contact-container">
        <div class="container">
            <div class="row p-5">
                <h2 class="py-2">Contact Us</h2>
                <hr>
                <?= do_shortcode('[contact-form-7 id="5" title="Contact Banner" html_id="contact"]'); ?>
            </div>
        </div>
    </section>
    <!-- End Contact Form -->
<?php
get_footer();
wp_footer();
?>
