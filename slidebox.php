<div class="slidebox">
	
	<!-- Arrows -->
		
	
	
	<!-- Slides control -->	
	<div class="cycle-slideshow" 
		data-cycle-slides=".slide"
		data-cycle-timeout="7000"
		data-cycle-prev="#prev"
        data-cycle-next="#next"
	>
	<span id='prev'><i class="fas fa-chevron-left fa-1x" style="color:#4d9fba"></i></span>
	<span id='next'><i class="fas fa-chevron-right fa-1x" style="color:#4d9fba"></i></span>
	<!-- Testimonial Text -->
		<?php if (is_page('home')) { 
		/* Homepage testimonials */
		echo 
			'<div class="slide">
				<div class="slide-text"><i class="fas fa-quote-left fa-sm"  style="color:#b30931"></i>Hier kunnen we een quote plaatsen van ongeveer drie tot vijf regels. Ik zou het beknopt houden voor de leesbaarheid. Maar je kunt er wel een kort verhaal neerzetten zoals hier. De tekst is een carrousel, dus we kunnen hier bijvoorbeeld drie quotes plaatsen.<i class="fas fa-quote-right fa-sm" style="color:#b30931"></i><br><br><nobr>Voornaam, Achternaam</nobr><br>Bedrijfsnaam</div>
			</div>
			<div class="slide">
				<div class="slide-text"><i class="fas fa-quote-left fa-sm"  style="color:#b30931"></i>We kunnen hier zowel testimonials van zowel opdrachtgevers als members plaatsen. Dat ligt eraan wat jullie wensen zijn.<i class="fas fa-quote-right fa-sm" style="color:#b30931"></i><br><br><nobr>Voornaam, Achternaam</nobr><br>Bedrijfsnaam</div>
			</div>' 
			; }
		else /* Opdrachtgevers en Professionals pages testimonials */ {
			echo
			'<div class="slide">
				<div class="slide-text"><i class="fas fa-quote-left fa-sm"  style="color:#b30931"></i>Hier kunnen we een quote plaatsen van ongeveer drie tot vijf regels. Ik zou het beknopt houden voor de leesbaarheid. Maar je kunt er wel een kort verhaal neerzetten zoals hier. De tekst is een carrousel, dus we kunnen hier bijvoorbeeld drie quotes plaatsen.<i class="fas fa-quote-right fa-sm" style="color:#b30931"></i><br><br><nobr>Voornaam, Achternaam</nobr><br>Bedrijfsnaam</div>
			</div>
			<div class="slide">
				<div class="slide-text"><i class="fas fa-quote-left fa-sm"  style="color:#b30931"></i>Lorem ipsum dolor sit amet, eos ullamcorper complectitur ad. Te saepe suavitate vel, ei has exerci luptatum reprehendunt, ad has dicant pertinacia. Fugit commodo partiendo eu has. Mel ad cibo mollis.<i class="fas fa-quote-right fa-sm" style="color:#b30931"></i><br><br><nobr>Voornaam, Achternaam</nobr><br>Bedrijfsnaam</div>
			</div>
			<div class="slide">
				<div class="slide-text"><i class="fas fa-quote-left fa-sm"  style="color:#b30931"></i>Erant simul qui ex. Eum consectetuer vituperatoribus cu. Pri no aperiam repudiandae, te unum legimus fuisset nam. Et fugit sonet explicari pri, id pro ubique argumentum deterruisset, id sint aperiam sit.<i class="fas fa-quote-right fa-sm" style="color:#b30931"></i><br><br><nobr>Voornaam, Achternaam</nobr><br>Bedrijfsnaam</div>
			</div>' 
			;}
		?>
		
		
		
	</div>
	</div>