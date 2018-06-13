<?php wp_footer(); ?>
<div class="footer-flex-background">
	<div class="footer-flex">
				<div class="footer1">
					<h3>Navigatie</h3>
					<nav class="site-navfooter">
						<?php
							$args = array(
							'theme_location' => 'primary'
							);
						?>
						<?php wp_nav_menu( $args ); ?>	
					</nav>
				</div>
		<div class="footer2">
			<h3>FM2Share contact</h3>
			<div class="socialbutton"><i class="fab fa-whatsapp fa-l" style="color:#006a8c"></i><p><a href="callto:0645575803" target="_blank">06 45 57 58 03</a></p></div>
			<div class="socialbutton"><i class="far fa-envelope" style="color:#006a8c"></i><p><a href="info@fm2share.nl" target="_blank">info@fm2share.nl</a></p></div>
			<p>Hommelseweg 249<br>
			6821 LH Arnhem</p>
		</div>
		<div class="footer3">
				<h3>Stay connected</h3>
				<div class="socialbutton socialicon"><a href="https://twitter.com/fm2share" target="_blank"><i class="fab fa-twitter"></i></a></div>
				<div class="socialbutton socialicon"><a href="https://www.linkedin.com/groups/4143899" target="_blank"><i class="fab fa-linkedin-in"></i></a></div>
				<div class="nieuwsbrief"><p>Graag onze nieuwsbrief ontvangen?</p></div>
				<a class="buttonnieuwsbrief" href="/nieuwsbrief/">Schrijf je nu in</a>
		</div>
	</div>
</div>

<div class="copyright">
	&copy; <?php echo date('Y');?> <?php bloginfo('name'); ?>FM2Share <a href="/wp-content/uploads/2018/06/AVG-2018-Privacy-Statement-FM2Share.pdf" target="_blank">Privacy Statement</a>
</div>

</div><!-- container -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.js"></script>	

</body>
</html>