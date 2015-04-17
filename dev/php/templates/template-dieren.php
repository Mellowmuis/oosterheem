<?php
/*
Template Name: dieren
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol12">
				<h2>Dieren</h2><hr>
			</div>
			<div class="u-gridCol5">
				<ul class="tabs">
					<li id="honden" class="active" rel="tab1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Driekoloms_afbeeldingen_2.jpg"></li>
					<li id="katten" rel="tab2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/katten.png"></li>
					<li id="knaagdieren" rel="tab3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/knaagdieren.png"></li>
				</ul>
			</div>

			<div class="u-gridCol7">
				<div>							
					<div class="tab_container">
						<h3 class="d_active tab_drawer_heading" rel="tab1">Tab 1</h3>
						<div id="tab1" class="tab_content ">
							<h2>Honden</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac metus augue.</p>
						</div>
						<!-- #tab1 -->
						<h3 class="tab_drawer_heading" rel="tab2">Tab 2</h3>
						<div id="tab2" class="tab_content katten">
							<h2>Katten</h2>
							<p>Nunc dui velit, scelerisque eu placerat volutpat, dapibus eu nisi. Vivamus eleifend vestibulum odio non vulputate.</p>
						</div>
						<!-- #tab2 -->
						<h3 class="tab_drawer_heading" rel="tab3">Tab 3</h3>
						<div id="tab3" class="tab_content knaagdieren">
							<h2>Knaagdieren</h2>
							<p>Nulla eleifend felis vitae velit tristique imperdiet. Etiam nec imperdiet elit. Pellentesque sem lorem, scelerisque sed facilisis sed, vestibulum sit amet eros.</p>
						</div>
						<!-- #tab3 --> 
					</div><!-- .tab_container -->		
				</div>
			</div>
		</div>

	</div>
	<div class="u-gridContainer dieren">
			
						


		</div>
	</div>
	<div class="green-back scheme1">
		<div class="white-curve">

		</div>
	</div>
<?php get_footer(); ?>
