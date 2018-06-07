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
	
		<div class="intro-contact">
		<?php the_content(); ?>
		
	<?php
		endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
<!-- End of the loop!!! -->
		</div>
	<div class="flexboxcontact">		
		<div class="contactgegevens">
		<h3>Contact FM2Share</h3>
			<div class="socialbutton"><i class="fab fa-whatsapp fa-l" style="color:#006a8c"></i><p><a href="callto:0645575803" target="_blank">06 45 57 58 03</a></p></div>
			<br><div class="socialbutton"><i class="far fa-envelope" style="color:#006a8c"></i><p><a href="info@fm2share.nl" target="_blank">info@fm2share.nl</a></p></div>
			<br><br>Postadres:
			<br>Hommelseweg 249<br>
			6821 LH Arnhem<br>
		</div>

		<div class="contactformspace">
			<h3>Contactformulier</h3>
			<?php echo do_shortcode('[contact-form-7 id="134" title="Contact form 1"]'); ?>
		</div>
	</div>
</div>
	
<?php get_footer();
	
?>