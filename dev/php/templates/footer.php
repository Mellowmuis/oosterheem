	<div class="Footer">
		<div class="u-gridContainer">
			<div class="u-gridCol2">
				<b>ADRESGEGEVENS</b>
				<ul>
					<li>Dierenkliniek Oosterheem</li>
					<li>Willem Dreeslaan 386</li>
					<li>2729 NK  Zoetermeer</li>
				</ul>
			</div>
			<div class="u-gridCol3">
				<b>CONTACT</b>
				<ul>
					<li>079 - 34 24 340</li>
					<li>06 - 40 99 67 90 (spoed)</li>
					<li>info@dierenkliniekoosterheem.nl</li>
				</ul>
			</div>
			<div class="u-gridCol1 socialicons">

				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fb.png">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/youtube.png">
		
			</div>
			<div class="u-gridCol3 u-cf">
				<b>OPENINGSTIJDEN</b>
				  <hr>
				<ul style="float:left; margin-right:20px;"> 
					<li>Ma t/m woe</li>
					<li>Donderdag</li>
					<li>Vrijdag</li> 
					<li>Zaterdag</li>
					<li>Zondag</li>
				</ul>
				<ul style="float:left">
					<li>8.30 - 19.30 uur</li>
					<li>8.30 - 17.00 uur</li>
					<li>8.30 - 19.30 uur</li>
					<li>10.00 - 14.00 uur</li>
					<li>Gesloten</li>
				</ul>
			</div>
			
			<div class="u-gridCol2">
				<b>SITEMAP</b>
				<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
				<div class="Footer-inner u-gridRow">
					<?php dynamic_sidebar( 'footer-widgets' ); ?>
				</div>
				<?php endif; ?>	
			</div>

			
		</div>
	</div>


	<div class="Socket">
		<div class="u-gridContainer">
			<!-- Copyright info -->
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
					<a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden</a>
			</p>
		</div>
	</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/tabs.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  
 
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
