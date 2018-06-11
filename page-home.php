<?php
	get_header();?>

<div class='layer'>	
	<div id="video-background">	
			<video id="video" class="video" playsinline="" loop="" muted="" autoplay="">
				<source src="video/videobannerfm2share.mp4" type="video/mp4">
			</video>
	</div>
	<div id="video-background-tablet">	
			<video width="780" id="video" class="video" playsinline="" loop="" muted="" autoplay="">
				<source src="video/videobannerfm2share.mp4" type="video/mp4">
			</video>
	</div>
	<div id="video-background-mobile">	
			<video width="480" id="video" class="video" playsinline="" loop="" muted="" autoplay="">
				<source src="video/videobannerfm2share.mp4" type="video/mp4">
			</video>
	</div>
	<div id='hometitles'>
		<h1 class="title">Advies, interim en projectmanagement oplossingen</h1>
		<h2 class="title">in bouw | facility management | inkoop | hospitality</h2>
	</div>
	<div id="scrolldown"><img src="/wp-content/uploads/2018/05/211687-48.png" height="50" width="50" alt="Down"></div> <!-- Down arrow from FA scroll past video -->
</div>






<div id="flexbox">
	<div class="pitch">
		<div class="titelhome"><h1>Laat de professionals van FM2Share invliegen</h1></div>	
		<div id="streephome"></div>
		<div class="pitch-tekst"><p>FM2Share bestaat uit een hecht team van samenwerkende zelfstandige professionals. Iedere ondernemer heeft zijn eigen expertise, allemaal hebben we raakvlakken met de vakgebieden bouw, facility management, inkoop en hospitality. We stapelen onze kennis en vormen telkens een andere samenstelling van expertises voor het beste antwoord op uw vraag. </p></div>	
	</div>
	<div id="flex1">
		<div class='iconbox'><img src="/wp-content/uploads/2018/04/opdrachtgevers.png" height="50" width="50" alt="Logo" /> </div>
		<a href="/opdrachtgevers/"><h3>Opdrachtgevers</h3></a>
		<div id="streep"></div>
		<p>We verbinden mensen uit diverse vakgebieden met elkaar en vinden voor u graag de juiste persoon op de juiste plek.</p>
		<a class="button" href="/opdrachtgevers/">Lees meer</a>
	</div>
	<div id="lijn"></div>
	<div id="flex2">
		<div class='iconbox'><img src="/wp-content/uploads/2018/04/membericongrey-1.png" height="50" width="50" alt="Logo" /></div>
		<a href="/professionals/"><h3>Professionals</h3></a>
		<div id="streep"></div>
		<p>Als member maak je onderdeel uit van een krachtig netwerk van professionals en experts op facilitair en aanverwant gebied. </p>
		<a class="button" href="/professionals/">Lees meer</a>
	</div>
</div>

<!-- Testimonials -->

	<div class="testimonial-beeld-home">
		
		<div class="titeltestimonial">
			<h2>Wat members zeggen?</h2>	
			<div id="streepmembersblok"></div>
		</div>
		<?php get_template_part('slidebox'); ?>
		
	</div>




<?php get_footer();
	
?>