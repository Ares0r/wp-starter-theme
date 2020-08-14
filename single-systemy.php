<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- SLICK SLIDER -->
<div class="container">
	    <div class="row">
		    <div class="col-12">
                <div class="mb-5 page-slider__wrp">
                <div class="slider-title__background img-fluid" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>)">
                            <div class="slider-title__text-background">
                                <span class="slider-title__text"><?php echo get_the_title(); ?></span>
                            </div>
                        </div>
                </div>
		    </div>
	    </div>
    </div>
    <!-- end SLICK SLIDER -->


<div class="container">
    <div class="row text-larger">
        <div class="col-md-9">
	        <div class="page-title">
	            <h2 class="page-top-title"><?php echo get_the_title(); ?></h2>
	        
            	<p class="margin-t-20"><?php echo get_the_excerpt(); ?></p>
	        </div>
				<div class="margin-t-20"><?php echo the_content(); ?></div>

        </div>
        <div class="col-md-3">
	       
            <?php get_sidebar('systemy'); ?>
        </div>
    </div>
</div>


    <!-- Gallery -->
    <section class="margin-t-30">
        
    
    <?php 
        $acfFields = get_fields();
        // var_export($acfFields);
    
    
    
    $gallery = $acfFields['galeria']; 
        if(count($gallery) == 0) {
        } else {
    ?>
        <div class="row">
            <div class="container">
<hr>
            <!-- <h2 class="mx-auto">Certyfikaty</h2> -->
    <div class="port portfolio-masonry m-b-30">
                <div class="portfolioContainer row">
                    

				<?php foreach($gallery as $single) { ?>

					
<div class="col-lg-4">
    <a href="<?php echo $single['image']; ?>" data-lightbox="image-1" data-title="<?php echo $single['opis'] ?>" >
        <div class="portfolio-box">
            <div class="portfolio-box-img">
                <img src="<?php echo $single['image']; ?>" class="img-fluid" alt="<?php echo $single['opis'] ?>">
            </div>
            <div class="portfolio-box-detail">
                <h4><?php echo $single['opis'] ?></h4>
            </div>
        </div>
    </a>
</div>


				<?php  } ?>


                </div>
                <!-- end portfoliocontainer-->
            </div>


            </div>
        </div>
                <?php } ?>

    </section>

















    <!----------------- POST CONTENT ENDS -->

	<?php endwhile; endif; ?>


<?php
get_footer();
?>
