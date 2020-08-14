<?php get_header() ?>


    
<?php 

    get_template_part('partials/partial_index','slider'); 
    $indexPage = get_page_by_title( 'strona_glowna');
?>

    
    <section>
	    <div class="container">
		    <div class="row">
			    <div class="col-md-6 page-title">
				    <h2><strong>STOLARNIA DRESTOL</strong> - MEBLE NA WYMIAR I POD ZABUDOWĘ</h2>
				    <p class="subtitle"><?php echo $indexPage->post_excerpt; ?></p>
				    <a href="/o-nas/" class="btn btn-outline btn-rounded">Więcej o nas</a>
			    </div>
			    <div class="col-md-6">
				    <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($indexPage->ID, 'full'); ?> " alt="Drestol zdjęcie ciętego blatu" />
			    </div>
		    </div>
		    <div class="row">
				<div class="col-12">
					<div class="mt-5"><hr></div>
				</div>
    		</div>
	    </div>
    </section>
    
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title text-center mt-3">
                        <h2>WYBRANE REALIZACJE</h2>
                        <h4 class="subtitle text-muted">Sprawdź nasze najnowsze realizację - najwyższa jakość wykonania i montażu. Nam możesz zaufać.</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <?php 
    get_template_part('partials/partial_index','realisations');
 ?>
    
     <section class="margin-t-30">
	    <div class="container">
		    <div class="row">
                <div class="col-md-6">
				    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/library/images/hettich-home1.jpg" alt="SYSTEMY HETTICH" />
			    </div>
			    <div class="col-md-6 page-title">
				    <h2>SYSTEMY HETTICH</h2>
				    <p class="subtitle">Hetich jest dostawcą okuć i akcesorii meblowych dla firmy DRESTOL.</p>
				    <p>Dobre meble potrzebują dobrych rozwiązań do mieszkania, pracy i życia.</p>
				    <a href="/systemy/" class="btn btn-outline btn-rounded">Więcej o systemach</a>
			    </div>

		    </div>
		    <div class="row">
				<div class="col-12">
					<div class="mt-5"><hr></div>
				</div>
    		</div>
	    </div>
    </section>
    
    <section class="margin-t-30">
        <div class="container">
			<div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-lg-9">
                                <h2>OFERTA NASZEGO ZAKŁADU STOLARSKIEGO</h2>
                                <h4 class="subtitle text-muted">Ofertę zawsze dopasowujemy do klienta. Bierzemy pod uwagę wymagania i potrzeby klienta. Zbieramy informacje, wykonujemy pomiary i realizujemy projekty ustalone z klientem.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/ico-zabudowa-kuchenna.png" alt="Zabudowa kuchenna" />
                        </div>
                        <h4 class="text-uppercase service-title mt-3">Zabudowa kuchenna</h4>

                        <p class="text-muted">Tworzymy spersonalizowane projekty wykorzystując wysokiej jakości materiały.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/ico-zabudowa-lazienkowa.png" alt="Zabudowa łazienkowa" />
                        </div>
                        <h4 class="text-uppercase service-title mt-3">Zabudowa łazienkowa</h4>

                        <p class="text-muted">Dopasowujemy projekty do danej przestrzeni używając najlepszych materiałów.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/ico-zabudowa-garderoby.png" alt="Szafy i garderoby" />
                        </div>
                        <h4 class="text-uppercase service-title mt-3">Szafy i garderoby</h4>

                        <p class="text-muted">Tworzymy dedykowane projekty. Wykorzystujemy pod zabudowę wolne miejsca w pomieszczeniach.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/ico-zabudowa-biurowa.png" alt="Zabudowa biurowa" />
                        </div>
                        <h4 class="text-uppercase service-title mt-3">Zabudowa biurowa</h4>

                        <p class="text-muted">Wykonujemy spersonalizowane projekty wykorzystując przestrzeń biurową.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/ico-zabudowa-biurowa.png" alt="Komody" />
                        </div>
                        <h4 class="text-uppercase service-title mt-3">Komody</h4>

                        <p class="text-muted">Tworzymy projekty pod wymiar. Dobieramy materiały zgodnie z wymaganiami klienta.</p>
                    </div>
                </div>

            </div>

        </div>
        <!-- end container -->
    </section>

<?php get_footer() ?>