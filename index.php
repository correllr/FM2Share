<?php

get_header();
 ?>

 <!-- banner -->
<div class='layersubpagina'>	
	<div id="banner-backgroundn">
	</div>
</div>
 
<!-- body -->

<div class="background-algemeen-nieuws">
	
		
<div id="containerindex">
	<div id="titelspace">
		<div id='nieuwstitel'> <!-- Om streep in center te krijgen -->
			<h1>Nieuws</h1>
			<div id="streepsubpage"></div>
		</div>
	</div>
	<div class="algemeen-nieuws">
		
	<?php if ( have_posts() ) : ?>
	
	<!-- PAGINATION -->
		

		<?php 
		while ( have_posts() ) : the_post();
		?>

		<div id="excerptcontainer">
			<div id="nieuws-blok">
					<?php  $post_thumbnail_id = get_post_thumbnail_id();
					$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
				
				<div id="nieuws-content">
					<div id="nieuws-title">
						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></a></h2>
						<div class="nieuws-date"><p><i class="far fa-calendar-alt"></i><?php the_time('d/m/y'); ?></p></div>
						<div class="nieuws-date"><p>door: <?php the_author(); ?></p> </div>
					</div>
					
					<div id="nieuws-excerpt">
					<!-- BEELD --><div id="nieuws-image" style="background-image:url(<?php echo $post_thumbnail_url; ?>)">
								</div>
					<!-- TEKST --><?php echo get_the_excerpt(); ?>... <br><a href="<?php the_permalink(); ?>" class="readmorelink">Lees meer &raquo;</a></div>
				</div>
			</div>
		</div>
		

			<?php
				endwhile; the_posts_pagination();
				
				else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
			
	</div>


	<div id="twitterfeed">
		<h3>Stay connected met FM2Share</h3>
		<?php echo do_shortcode('[custom-twitter-feeds]'); ?>
	</div>
	
</div>
</div>

<?php 

get_footer();

?>