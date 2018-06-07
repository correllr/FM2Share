<?php
	get_header();?>

<!-- banner -->
<div class='layersubpagina'>	
	<?php  $post_thumbnail_id = get_post_thumbnail_id();
		$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
	<div id="newsbanner" style="background-image:url(<?php echo $post_thumbnail_url; ?>)">
	</div>
</div>

<!-- Nieuwsbericht -->

<div class="background-algemeen-nieuws">
	
	<div class="algemeen-nieuwsbericht">	
		<div id="titelspace">
			<div id="nieuws-title">
				<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></a></h1>
				<div class="nieuws-date"><p><i class="far fa-calendar-alt"></i><?php the_time('d/m/y'); ?></p></div>
			</div>
		</div>
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		
			<div id="nieuws-blok-page">	
				
				<div id="nieuwsbericht">
				<?php the_content(); ?></div>
			</div>

		<?php
		endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
		
		<!-- Twitter block -->
			<div id="twitterfeed">
				<h3>Stay connected met FM2Share</h3>
				<?php echo do_shortcode('[custom-twitter-feeds]'); ?>
			</div>
	</div>
	
	
</div>
	
<?php get_footer();
	
?>