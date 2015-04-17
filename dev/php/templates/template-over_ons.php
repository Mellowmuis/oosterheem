<?php
/*
Template Name: over ons
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="u-gridRow  overons">
			<div class="u-gridCol7">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content Content--home" id="post-<?php the_ID(); ?>">
						<h2>Over ons</h2><hr>
						<div>
							Wij streven naar een praktijk waar zowel het baasje als de patiënt zich prettig en ontspannen voelt. U bent altijd welkom in Zoetermeer om met uw viervoeter binnen te lopen, ook zonder dat hij of zij voor behandeling komt. Bijvoorbeeld om te wegen of voor iets lekkers…

Het team streeft naar continuïteit van kennis en ervaring met oog voor nieuwe ontwikkelingen. Indien u een vraag wilt stellen neem dan contact met ons op. Voor spoedgevallen zijn wij dag en nacht bereikbaar. De telefoon is doorgeschakeld dus u krijgt gelijk de dierenarts aan de lijn. Anders hoort u een voicemailbericht met daarin verdere instructies en het te bellen nummer voor de dierenarts.
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div><hr>
					</article>
				<?php endwhile; endif; ?>
			</div>
			<div class="u-gridCol5">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pup.jpg">
			</div>

			
		</div>

	</div>
	<div class="u-gridContainer team">
			<div class="u-gridRow ">
				<div class="u-gridRow ">
					<div class="u-gridCol12">
						<h2>Ons Team</h2><hr><br/>
					</div>

				<div class="u-gridCol3">

					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dierenarts-Faribourz-Soheil_2.png">
					<h3> Dierenarts </br> Faribourz Soheil</h3>
					<p> Mijn naam is Faribourz Soheil. Ik ben in 2004 afgestudeerd als dierenarts aan de Universiteit Utrecht.
						Na enige jaren gewerkt te hebben bij verschillende  dierenklinieken  wilde ik voor mezelf beginnen.

						In 2012 heb ik een dierenkliniek geopend in de wijk Oosterheem te Zoetermeer. Mijn interessegebied is chirurgie, ook interne ziektes en diagnostiek hebben mijn belangstelling.

						Ik ben lid van  het  Royal College of Veterinary Surgeons in Engeland. Mijn hobby's zijn wandelen, fietsen, muziek luisteren en ik reis graag.
						</p>

				</div>

				<div class="u-gridCol3">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dierenarts-Angelina-Schraverus---de-Jong.png">
					<h3> Dierenarts </br> Faribourz Soheil</h3>
					<p>	
					Mijn naam is Angelina Schraverus - de Jong, en ik ben dierenarts sinds 2003. Na een aantal omzwervingen ben ik terechtgekomen bij de Dierenopvang in Rotterdam, mijn laatste werkgever, waar ik naast ontelbaar veel asieldieren ook veel klanten heb geholpen met een beperkt budget. Dat gaf enerzijds veel beperkingen, maar ook veel vrijheid waardoor ik veel ervaring heb opgedaan in met name de chirurgie - ik ben bedreven geworden in operaties die meestal doorgestuurd worden naar specialisten, maar waar onze klanten daar geen geld voor hadden.

					Ook heb ik intensief de knaagdierenopvang begeleid. Konijnen hebben altijd een speciaal plekje gehad bij mij. Ik heb me dan ook extra verdiept in de ziektes en behandelingen van deze bijzondere dieren, en zie ze graag op het spreekuur. In mijn vrije tijd mag ik graag sporten, lezen en reizen. Er lopen bij mij thuis drie geweldige katten rond, maar ook twee hele lieve jongetjes waar ik graag mijn tijd aan besteed. 

					Tot ziens bij de Dierenkliniek!</p>


				</div>
				<div class="u-gridCol3">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/foto+operatie+009.jpg">
					<h3>Tiny Visser</h3>
					<p>	
	
Mijn naam is Tiny Visser. Ik werk al meer dan 30 jaar als apothekersassistente.
Ook diergeneeskunde heeft mijn interesse.

Mijn kennis en ervaring wil ik inzetten bij het assisteren in de dierenkliniek.</p>


				</div>
				<div class="u-gridCol3">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/DSC00109.jpg">
					<h3>Assistent Carla Alberts </h3>
					<p>		
Hallo,<br/>
Mijn naam is Carla Alberts.Ik ben 41 jaar,getrouwd en heb 2 dochters. Momenteel ben ik dierenartsassistent in opleiding. Ik werk elke vrijdag hier in de praktijk wat ik erg leuk vind.Mijn hobby's zijn mijn dieren Vaco de hond die ik geadopteerd heb uit Spanje en nu bijna drie jaar bij mij is,en dan mijn vlaamse reus Amber die ik nu bijna drie jaar heb.Ook heb in een jaar als vrijwilligster bij de dierenambulance gewerkt.</p>

				</div>





            </div>
					
				


		</div>
	</div>
	<div class="green-back scheme1">
		<div class="white-curve">

		</div>
	</div>
<?php get_footer(); ?>
