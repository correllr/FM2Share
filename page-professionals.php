<?php
	get_header();?>

<!-- banner -->
<div class='layersubpagina'>	
	<div id="banner-backgroundp">
	</div>
</div>

<!-- THE LOOP!!!! -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Algemene informatie FM2share -->
<div class="background-algemeen">	
	<div class="algemeen pageprofessionals">	
	<?php get_template_part('pagetitle'); ?>
	
	<?php the_content(); ?>
		
	<?php
		endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
<!-- End of the loop!!! -->
		
	<div class="flexboxalgemeen">		
		<div class="voordelen">
		<h3>Onze missie</h3>
		<p>Alle members van FM2Share hebben een eigen expertise en raakvlakken met het vakgebied Facility Management. We stapelen onze kennis en vormen we een sterk netwerk.</p>
			<div class="voordeel"><div class="checkbox"><i class="fas fa-check"></i></div><div class="checkboxtekst">De juiste persoon op de juiste plek</div></div>
			<div class="voordeel"><div class="checkbox"><i class="fas fa-check"></i></div><div class="checkboxtekst">Gamechangers</div></div>
			<div class="voordeel"><div class="checkbox"><i class="fas fa-check"></i></div><div class="checkboxtekst">Continue vernieuwing</div></div>
			<div class="voordeel"><div class="checkbox"><i class="fas fa-check"></i></div><div class="checkboxtekst">Vooroplopende technologieën</div></div>
			<div class="voordeel"><div class="checkbox"><i class="fas fa-check"></i></div><div class="checkboxtekst">Sterk netwerk</div></div>
		</div>

		<div class="futureof">
			<h3>The future of facility management</h3>
			<video width="100%" controls preload='none' poster='/wp-content/uploads/2018/06/videofm2share.png'>
				<source src="/video/futureoffm.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video> 
		</div>
	</div>
</div>


<!-- Members-->
<div class="background-members">
		
	<div class="titelmembersblok"><h2>Wie zijn de bestuursleden van FM2Share?</h2>	
		<div id="streepmembersblok"></div>	
	</div>
	
	<!-- Bestuursleden -->
	<div class="membersblok">	
		<div class="flexboxmembers">
			<div class="professional-info">
				<div class="member"><div class="social-overlay"><a href="maxine.mccombs@fm2share.nl" target="_blank"><i class="far fa-envelope"></i></a><a href="https://www.linkedin.com/in/maxinemccombs/" target="_blank"><i class="fab fa-linkedin-in"></i></a></div><img src="/wp-content/uploads/2018/05/fm2share-maxine-mccombs.jpg"></div>
				<h3>Maxine McCombs</h3>
				<h4>Projectmanager | Interim Manager Facility | Management | Trainer</h4>
			</div>
			<div class="professional-info">
				<div class="member"><div class="social-overlay"><a href="Axel.vannielen@fm2share.nl" target="_blank"><i class="far fa-envelope"></i></a><a href="https://www.linkedin.com/in/axelvannielen/" target="_blank"><i class="fab fa-linkedin-in"></i></a></div><img src="/wp-content/uploads/2018/05/fm2share-axel-van-nielen.jpg"></div>
				<div class="p-titel"><h3>Axel van Nielen</h3></div>
				<div class="subtitel-m"><h4>Manager | Coaching | Ontwikkeling | Expertise</h4></div>
			</div>
			<div class="professional-info">
				<div class="member"><div class="social-overlay"><a href="Wilfred.schipperen@fm2share.nl" target="_blank"><i class="far fa-envelope"></i></a><a href="https://www.linkedin.com/in/wilfred-schipperen-5220499" target="_blank"><i class="fab fa-linkedin-in"></i></a></div><img src="/wp-content/uploads/2018/05/fm2share-wilfred-schipperen.jpg"></div>
				<div class="p-titel"><h3>Wilfred Schipperen</h3></div>
				<div class="subtitel-m"><h4>Project manager hospitality (cure en care) eten & drinken en gastvrijheid</h4></div>
			</div>
		</div>
	</div>
	
	<!-- Members-->
	<div class="titelmembersblok"><h2>Wie zijn de members van FM2Share?</h2>	
		<div id="streepmembersblok"></div>	
	</div>
	
	<div class="membersblok">
		<div class="flexboxmembers">
			<div class="professional-info">
				<div class="member"><div class="social-overlay"><a href="https://www.linkedin.com/in/wendybak/" target="_blank"><i class="fab fa-linkedin-in"></i></a></div><img src="/wp-content/uploads/2018/05/fm2share-wendy-bak.jpg"></div>
				<div class="p-titel"><h3>Wendy Bak</h3></div>
				<div class="subtitel-m"><h4>Inkoop professional | Europees aanbesteden | BVP </h4></div>
			</div>
			<div class="professional-info">
				<div class="member"><div class="social-overlay"><a href="https://www.linkedin.com/in/rene-bont-1a91063/" target="_blank"><i class="fab fa-linkedin-in"></i></a></div><img src="/wp-content/uploads/2018/05/fm2share-rene-bont.jpg"></div>
				<div class="p-titel"><h3>René Bont</h3></div>
				<div class="subtitel-m"><h4>Facilitair manager</h4></div>
			</div>
			<div class="professional-info">
				<div class="member"><div class="social-overlay"><a href="https://www.linkedin.com/in/asta-van-cleef-6038421/" target="_blank"><i class="fab fa-linkedin-in"></i></a></div><img src="/wp-content/uploads/2018/05/fm2share-asta-van-cleef.jpg"></div>
				<div class="p-titel"><h3>Asta van Cleef</h3></div>
				<div class="subtitel-m"><h4>Facility specialist</h4></div>
			</div>

			<div class="professional-info">
				<div class="member"><div class="social-overlay"><a href="https://www.linkedin.com/in/elmijansen/" target="_blank"><i class="fab fa-linkedin-in"></i></a></div><img src="/wp-content/uploads/2018/05/Elmi-Jansen-zw.jpg"></div>
				<div class="p-titel"><h3>Elmi Janssen</h3></div>
				<div class="subtitel-m"><h4>Interieurarchitect en ontwerper</h4></div>
			</div>
			<div class="professional-info">
				<div class="member"><div class="social-overlay"><a href="https://www.linkedin.com/in/anita-van-limpt-mre-2b75ab21/" target="_blank"><i class="fab fa-linkedin-in"></i></a></div><img src="/wp-content/uploads/2018/05/fm2share-anita-van-limpt.jpg"></div>
				<div class="p-titel"><h3>Anita van Limpt</h3></div>
				<div class="subtitel-m"><h4>Strategisch adviseur vastgoed</h4></div>
			</div>
			<div class="professional-info">
				<div class="member"><div class="social-overlay"><a href="https://www.linkedin.com/in/mirella-mesu-b332a310/" target="_blank"><i class="fab fa-linkedin-in"></i></a></div><img src="/wp-content/uploads/2018/05/Mirella-Mesu.jpg"></div>
				<div class="p-titel"><h3>Mirella Mesu</h3></div>
				<div class="subtitel-m"><h4>Design & interieur ontwerper</h4></div>
			</div>

			<div class="professional-info">
				<div class="member"><div class="social-overlay"><a href="https://www.linkedin.com/in/annemiekdemeulmeester/" target="_blank"><i class="fab fa-linkedin-in"></i></a></div><img src="/wp-content/uploads/2018/05/fm2share-annemiek-de-meulmeester-grobbe.jpg"></div>
				<div class="p-titel"><h3>Annemiek de Meulmeester</h3></div>
				<div class="subtitel-m"><h4>Coaching & (team)building</h4></div>
			</div>
			<div class="professional-info">
				<div class="member"><div class="social-overlay"><a href="https://www.linkedin.com/in/enijhof/" target="_blank"><i class="fab fa-linkedin-in"></i></a></div><img src="/wp-content/uploads/2018/05/fm2share-erik-nijhof.jpg"></div>
				<div class="p-titel"><h3>Erik Nijhof</h3></div>
				<div class="subtitel-m"><h4>Inkoop professional | contract manager </h4></div>
			</div>
		</div>
	</div>	
</div>



<!-- Testimonials -->

	<div class="testimonial-beeld">
		<div class="titeltestimonial">
			<h2>Wat zeggen members?</h2>	
			<div id="streepmembersblok"></div>
		</div>
		<!-- Slideshow --><?php get_template_part('slidebox'); ?>
	</div>
	
<div class="background-cta">	
	<div class="cta">
		<h2>Wil jij member worden? Meld je vandaag nog aan.</h2><a class="buttonproducten" href="/contact/">Member worden</a>
	</div>
</div>
	
<?php get_footer();
	
?>