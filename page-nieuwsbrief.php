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
	
		<div class="intro-nieuwsbrief">
		<?php the_content(); ?>
		
	<?php
		endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
<!-- End of the loop!!! -->
		</div>

		<div class="contactformspace-nieuws">
			<h3>Aanmelden nieuwsbrief</h3>
			<?php echo do_shortcode('[contact-form-7 id="139" title="Aanmeldformulier nieuwsbrief"]'); ?>
		</div>
	
</div>
	
<?php get_footer();
	
?>