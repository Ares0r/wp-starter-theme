<?php get_header() ?>


    
<!-- SLICK SLIDER -->
<div class="container">
	    <div class="row">
		    <div class="col-12">
                <div class="mb-5 page-slider__wrp">
                        <div class="slider-title__background img-fluid" style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/o-nas-header.jpg)">
                            <div class="slider-title__text-background">
                                <span class="slider-title__text">O Nas</span>
                            </div>
                        </div>
                </div>
		    </div>
	    </div>
    </div>
    <!-- end SLICK SLIDER -->



    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="margin-t-20">
        <div class="container">
            <div class="row">
                <div class="col-12 text-larger">
                    <p class="lead"><?php echo get_the_excerpt(); ?></p>
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row">
	        <div class="container margin-t-sm-20">
            





        <?php 
            $acfFields = get_fields(get_the_ID());
            
        
            $content = $acfFields['content1'];
            


            foreach ($content as $singleContent ) {
                ?>
                
                

                <?php
                // var_export($singleContent);
                $layout = $singleContent['acf_fc_layout'];

                if ($layout == 'text-left') {
                    ?>

                <div class="row d-flex align-items-center">     
                    <div class="col-xs-12 col-sm-6 my-2">
                        <p class="text-larger"><?php echo $singleContent['text']; ?></p>
                    </div>
                    <div class="col-xs-12 col-sm-6 my-2">
                        <img class="img-fluid" src="<?php echo $singleContent['image']; ?>" alt="">
                    </div>
                </div>
                <?php  } elseif ($layout == 'text-right') { ?>
                <div class="row d-flex align-items-center"> 
                    <div class="col-xs-12 col-sm-6 my-2 " >
                        <img class="img-fluid" src="<?php echo $singleContent['image']; ?>" alt="">
                    </div>
                    <div class="col-xs-12 col-sm-6 my-2">
                        <p class="text-larger"><?php echo $singleContent['text']; ?></p>
                    </div>
                </div>
                
                <?php }


            }
        ?>
            
        </div>
        </div>
        </div>
        <!-- end container -->
    </section>
    
    
    <!-- Gallery -->
    <section class="margin-t-sm-30">
        
    <?php $certificates = $acfFields['certificates']; 
        if(count($certificates) == 0) {
        } else {
    ?>
   <div class="container">
    <div class="row">
	    <div class="col-md-12">
			<hr>
	    </div>

        
            <div class="container">

            <h2 class="mx-auto">Certyfikaty i referencje</h2>
			<div class="port portfolio-masonry m-b-30">
                <div class="portfolioContainer row">
                    

				<?php foreach($certificates as $single) { ?>

					
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
        
                <?php } ?>
                </div>
    </section>
 


	<?php endwhile; endif; ?>

<?php get_footer() ?>