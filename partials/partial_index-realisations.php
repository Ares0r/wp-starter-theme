<section class="section">
        <div class="container">

            <!-- SECTION FILTER
                ================================================== -->

            <div class="port portfolio-masonry m-b-30">
                <div class="portfolioContainer row">
                    
                    <?php 
                        $realizacjePage = get_page_by_title('realizacje');
                        $acfFields = get_fields($realizacjePage->ID);
                        $realizacje = $acfFields['realizacja'];
                        // var_export($realizacje);


                        foreach ($realizacje as $single) {
                            // var_export($single['czy_na_glownej']);
                            if ($single['czy_na_glownej'] == 'Tak') {
                                $categoriesClasses = array();
                                $categoriesPL	= array();
                                $ileKat = count($single['kategoria']);
                                for ($i=0; $i < $ileKat; $i++) {
                                    array_push($categoriesClasses,$single['kategoria'][$i]['value']);
                                    array_push($categoriesPL,$single['kategoria'][$i]['label']);
                                }
                                $valueCategories = implode(' ',$categoriesClasses);
                                $labelCategories = implode(', ',$categoriesPL);
                                // var_export($single);
                                


                                ?>

<div class="col-lg-4 <?php echo $valueCategories; ?>">
    <a href="<?php echo $single['zdjecie']; ?>" data-lightbox="image-1" data-title="<?php echo $single['opis'] ?>" >
        <div class="portfolio-box">
            <div class="portfolio-box-img">
                <img src="<?php echo $single['zdjecie']; ?>" class="img-fluid" alt="<?php echo $single['opis'] ?>">
            </div>
            <div class="portfolio-box-detail">
                <p><?php echo $labelCategories ?></p>
                <h4><?php echo $single['opis'] ?></h4>
            </div>
        </div>
    </a>
</div>

                                <?php
                            }

                        }


                    ?>
                    
                       

                </div>
                <!-- end portfoliocontainer-->
            </div>
            <!-- End row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center margin-t-30">
                        <a href="/realizacje/" class="btn btn-outline btn-rounded">Więcej realizacji</a>
                    </div>
                </div>
            </div>
             <div class="row">
				<div class="col-12">
					<div class="mt-5"><hr></div>
				</div>
    		</div>

        </div>
        <!-- end container -->
    </section>