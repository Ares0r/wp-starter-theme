<?php get_header(); ?>

<?php $lang = get_bloginfo('language'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php 
    get_template_part('partials/page','slider-blog');

?>

    <!----------------- POST CONTENT START-->
    <div class="container second-background">
        <section class="section sec-post-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <div class="sec-desc d-flex flex-column justify-content-start">
                            <div class="sec-title">
                                <h3><?php echo get_the_title() ?></h3>
                            </div>
                            <div>
                               <div class="post-lead">
                                   <p> <?php echo get_the_excerpt()  ?>

                                    </p>
                               </div>
                                
                                <div class="post-img text-center">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="post" class="img-fluid">
                                </div>
                                <?php 
                                    the_content();
                                ?>
                            </div>
                            <div class="post-back">
                            <?php 
                                if ($lang == 'pl-PL') {
                            ?>
                                <a class="read-more-link" href="/category/pl/"><span><img src="<?php echo get_template_directory_uri(); ?>/library/images/svg/navbar-triangle.svg" alt="więcej o nas"></span>Powrót</a>
                            <?php
                                } elseif ( $lang == 'en-GB' ) {
                            ?>
                                <a class="read-more-link" href="/en/category/en/"><span><img src="<?php echo get_template_directory_uri(); ?>/library/images/svg/navbar-triangle.svg" alt="więcej o nas"></span>Powrót</a>
                            <?php
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!----------------- POST CONTENT ENDS -->

	<?php endwhile; endif; ?>


    

    <?php
        get_template_part('partials/page','separator');
    ?>

<?php
    if ($lang == 'pl-PL') {
        get_template_part('partials/page', 'partners');
    } elseif ($lang == 'en-GB') {
        get_template_part('partials/page', 'partners-en');
    }
    showFooter($lang);
?>
