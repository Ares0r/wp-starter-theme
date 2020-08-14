<?php get_header(); ?>


<?php $page = get_page_by_title('systemy-hettich-glowna'); 
	// var_export($page);
?>

<!-- SLICK SLIDER -->
<div class="container">
	    <div class="row">
		    <div class="col-12">
                <div class="mb-5 page-slider__wrp">
                        <div class="slider-title__background img-fluid" style="background-image: url(<?php echo get_the_post_thumbnail_url($page->ID, 'full'); ?>)">
                            <div class="slider-title__text-background">
                                <span class="slider-title__text">Systemy Hettich</span>
                            </div>
                        </div>
                </div>
		    </div>
	    </div>
    </div>
    <!-- end SLICK SLIDER -->

	<section class="margin-t-sm-30">
		
		<div class="container">
			<div class="row">
			<div class="container">
				<p><?php echo $page->post_excerpt; ?></p>
			</div>
		</div>
		</div>

	</section>



    <section class="margin-t-sm-30">
	    <div class="container">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    <div class="row">
                
                <div class="col-xs-12 col-md-6 page-title">
				    <h2><?php echo get_the_title(); ?></h2>
				    <p><?php echo get_the_excerpt(); ?></p>
				    <a href="<?php echo get_permalink() ?>" class="btn btn-outline btn-rounded">Zobacz więcej</a>
			    </div>
                
                <div class="col-xs-12 col-md-6">
				    <a href="<?php echo get_permalink() ?>"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="<?php echo get_the_title(); ?>" /></a>
			    </div>

		    </div>
            
<!-- divider -->
            <div class="row">
				<div class="col-12">
					<div class="my-sm-5"><hr></div>
				</div>
            </div>


			<?php endwhile; endif; ?>   


	    </div>
    </section>

<?php get_footer(); ?>
