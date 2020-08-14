<?php get_header() ?>


    
<!-- SLICK SLIDER -->
<div class="container">
	    <div class="row">
		    <div class="col-12">
                <div class="mb-5 page-slider__wrp">
                        <div class="slider-title__background img-fluid" style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/kontakt-header.jpg)">
                            <div class="slider-title__text-background">
                                <span class="slider-title__text">Kontakt</span>
                            </div>
                        </div>
                </div>
		    </div>
	    </div>
    </div>
    <!-- end SLICK SLIDER -->



    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="margin-t-30">
        <div class="container">

            <div class="row margin-t-50">
                <div class="col-lg-4 address-box">
                    <div>
                        <h2>Dane kontaktowe:</h2>
                    </div>
                    <div>
                        <h4>Eugeniusz <a class="muted-href" href="tel:+48607619372">607 619 372</a></h4>
                        <a class="muted-href" href="mailto:eugeniusz.swiety@drestol.pl">eugeniusz.swiety@drestol.pl</a>
                        <!-- <p class="text-muted">support.yourdomain@email.com</p> -->
                    </div>
                    <div class="margin-t-30">
                        <h4>Siedziba firmy i dane do faktury:</h4>
                    </div>
                    <div class="margin-t-30">
                        <p class="plain-black-text">Drestol Eugeniusz Święty <br/>
                        Biuro i stolarnia Drestol <br/>
                        bud.5 mag.37 <br/>
                        ul. Wólczyńska 133 <br/>
                        01-919 Warszawa <br/>
                        NIP: 8421396287</p>
                        <h5 class="plain-black-text">Numer konta:</h5>
                        <p class="margin-t-10 plain-black-text">53 1140 2004 0000 3102 3709 9564</p>

                    </div>
                    
                </div>
                <div class="col-lg-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1562.1140827402373!2d20.91515922124101!3d52.28231788973029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471eca3e8d75167d%3A0x5b4941af9692ada5!2sW%C3%B3lczy%C5%84ska%20133%2C%2001-919%20Warszawa!5e0!3m2!1sen!2spl!4v1594848498031!5m2!1sen!2spl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

        </div>
        <!-- end container -->
    </section>

    <!-- <section class="margin-t-50">
        <div class="container">

            <div class="row margin-t-30">
                <div class="col-lg-2">
                    <div class="client-box">
                        <img src="images/clients/clients-1.png" class="img-fluid" alt="client-logo">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-box">
                        <img src="images/clients/clients-2.png" class="img-fluid" alt="client-logo">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-box">
                        <img src="images/clients/clients-3.png" class="img-fluid" alt="client-logo">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-box">
                        <img src="images/clients/clients-4.png" class="img-fluid" alt="client-logo">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-box">
                        <img src="images/clients/clients-5.png" class="img-fluid" alt="client-logo">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-box">
                        <img src="images/clients/clients-6.png" class="img-fluid" alt="client-logo">
                    </div>
                </div>
            </div>

        </div>
        <!-- end container 
    </section> -->


	<?php endwhile; endif; ?>

<?php get_footer() ?>