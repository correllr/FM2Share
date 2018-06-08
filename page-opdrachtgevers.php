<?php
	get_header();?>

<!-- banner -->
<div class='layersubpagina'>	
	<div id="banner-background">
	</div>
</div>

<!-- THE LOOP!!!! -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Algemene informatie FM2share -->
<div class="background-algemeen">	
	<div class="algemeen">	
		<!-- Title met streep --> <?php get_template_part('pagetitle'); ?>
		
	<?php the_content(); ?>
		
	<?php
		endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
<!-- End of the loop!!! -->

	<div class="flexboxalgemeen">		
		<div class="voordelen">
		<h3>Onze missie</h3>
		<p>Iedere ondernemer heeft zijn eigen expertise en allemaal hebben we raakvlakken met het vakgebied Facility Management. We stapelen onze kennis en vormen we een sterk netwerk.</p>
			<div class="voordeel"><div class="checkbox"><i class="fas fa-check"></i></div><div class="checkboxtekst">De juiste persoon op de juiste plek</div></div>
			<div class="voordeel"><div class="checkbox"><i class="fas fa-check"></i></div><div class="checkboxtekst">Gamechangers</div></div>
			<div class="voordeel"><div class="checkbox"><i class="fas fa-check"></i></div><div class="checkboxtekst">Continue vernieuwing</div></div>
			<div class="voordeel"><div class="checkbox"><i class="fas fa-check"></i></div><div class="checkboxtekst">Vooroplopende technologieën</div></div>
			<div class="voordeel"><div class="checkbox"><i class="fas fa-check"></i></div><div class="checkboxtekst">Sterk netwerk</div></div>
		</div>

		<div class="futureof">
			<h3>The future of facility management</h3>
			 <video width="100%" controls poster='/wp-content/uploads/2018/04/Nearfuturefm.png'>
				<source src="/video/futureoffm.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video> 
		</div>
	</div>
</div>

<!-- Producten -->
<div class="background-producten">	
	<div class="producten">	
		<div class="flexboxproducten">
			<div class="flexhelp">
				<div class="product">
					<div class="p-icon"><i class="fas fa-clock fa-2x" style="color:#7b7b7b"></i></div>
					<div class="p-titel"><h3>Interimmanagement</h3></div>
					<div class="p-tekst"><p>FM2Share levert door haar jarenlange ervaring en grote diversiteit interim managers die van wanten weten. Van medior tot door de wol geverfde interimmers.</p></div>
				</div>
				<div class="product">
					<div class="p-icon"><i class="fas fa-clipboard-check fa-2x" style="color:#7b7b7b"></i></div>
					<div class="p-titel"><h3>Projectmanagement</h3></div>
					<div class="p-tekst"><p>De projectmanagers van FM2Share zijn als geen ander in staat om én de juiste systemische aanpak te kiezen én de juiste tone of voice te kiezen.</p></div>
				</div>
			</div>
			<div class="flexhelp">
				<div class="product">
					<div class="p-icon"><i class="fas fa-chart-line fa-2x" style="color:#7b7b7b"></i></div>
					<div class="p-titel"><h3>Kennisontwikkeling</h3></div>
					<div class="p-tekst"><p>FM2Share blijft up-to-date om jouw organisatie maximaal van dienst te zijn. Blijf je ook aangehaakt? Stay Connected!</p></div>
				</div>
				<div class="product">
					<div class="p-icon"><i class="fas fa-users fa-2x" style="color:#7b7b7b"></i></div>
					<div class="p-titel"><h3>Zwermadvies</h3></div>
					<div class="p-tekst"><p>Het zwermadvies is een uniek product waarbij je binnen één werkdag een advies van ons ontvangt naar aanleiding van jouw vraagstuk.</p></div>
				</div>
			</div>
		</div>
		<a class="buttonproducten" href="/contact/">Vraag meer informatie aan</a>
	</div>	
</div>


<!-- Testimonials -->


	<div class="testimonial-beeld">
		
		<div class="titeltestimonial">
			<h2>Wat zeggen members?</h2>	
			<div id="streepmembersblok"></div>
		</div>
		<?php get_template_part('slidebox'); ?>
		
	</div>


	
<?php get_footer();
	
?>