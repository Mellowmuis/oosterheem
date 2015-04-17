<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol3">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content Content--home" id="post-<?php the_ID(); ?>">
						<h2><span>Welkom bij</span> Dierenkliniek Oosterheem</h2><hr>
						<div>
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div><hr>
					</article>
				<?php endwhile; endif; ?>
			</div>
			<div class="u-gridCol9 inner-shadow">
				<div class="Slider"> 

					<?php

						$args = array(
							'post_type' => 'slides',
							'posts_per_page'=>999
						);
						$slides = new WP_Query( $args );
						$num = count($slides);
						$counter = 0;
						if( $slides->have_posts() ) {
							while( $slides->have_posts() ) {
								$slides->the_post();
								$counter++;
								?>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
									  $image_url = $image[0];
								?>
								<div class="slide" style="">
									<img src="<?php echo $image_url; ?>" />
								</div>
								<?php
							}
						}
					?>
				</div>
			</div>
		</div>

	</div>
	<div class="green-back scheme1">
		<div class="white-curve">

		</div>
		<div class="u-gridContainer">
			<div class="u-gridRow">
				<div class="u-gridCol4">
					<div class="thumb-home">
						<img class="abso-gif" src="<?php echo get_stylesheet_directory_uri(); ?>/img/oosterheem_actie_button.gif">
						<div class="thumb-head">	
							<h3>Maand van het gebit</h3>
						</div>
						<div class="thumb-text">
							<p style="margin-left:75px;">
								Nu 20 % korting op een gebitsbehandeling in 
								de maand februari van dit jaar zowel voor uw 
								hond als voor uw kat.
							</p>
							<div class="u-cf">
								<img class="u-objLeft" src="<?php echo get_stylesheet_directory_uri(); ?>/img/1.png">

								<button class="button-1 u-objLef thumb-button">
									Neem contact <br>
									op voor een 
									afspraak.
								</button>
							</div>
					
						</div>
					</div>
				</div>
				<div class="u-gridCol2">
					<div class="thumb-home">
						
						<div class="thumb-head">	
							<h3>Afspraken</h3>
						</div>
						
						<div class="thumb-text">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/2.png">
							<p>
								<b>ONLINE AFSRAAK MAKEN</b>
							Wij maken het u gemakkelijk. 
							U kunt via de website een 
							afspraak inplannen. 
							</p>
						</div>
					</div>
				</div>
				<div class="u-gridCol2">
					<div class="thumb-home">
						<div class="thumb-head">	
							<h3>informatie</h3>
						</div>
						<div class="thumb-text">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/3.png">
							<p>
							Vaccinatie- en ontworm 
							schema’s, verschillende 
							ziektes in binnen- en 
							buitenland
							</p>
						</div>
					</div>
				</div>
				<div class="u-gridCol2">
					<div class="thumb-home">
						
						<div class="thumb-head">	
							<h3>Patienten</h3>
						</div>
						<div class="thumb-text">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/4.png">
							<p>
							<b>BIJZONDERE PATIËNTEN</b>
							Nieuwsgierig welke bijzondere patiënten onze kliniek 
							binnenkomen en verlaten? 
							</p>
						</div>
					</div>
				</div>
				<div class="u-gridCol2">
					<div class="thumb-home">
						
						<div class="thumb-head">	
							<h3>Nieuws & Tips</h3>
						</div>
						<div class="thumb-text">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/5.png">
							<p>
							<b>BLIJF OP DE HOOGTE!</b><br>
							Bekijk onze laatste nieuwsbrief of onze leuke acties 
							en tips! En meld je aan!
							</p>
						</div>
					</div>
				</div>


			</div>

		</div>

	</div>

<?php get_footer(); ?>
