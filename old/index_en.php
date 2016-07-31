<?php include("header.php"); ?>

<div id="sidenav">
	<ul>
		<li><a href="#music">/ Music</a></li>
		<li><a href="#videos">/ Video</a></li>
		<li><a href="#über">/ About</a></li>
		<li><a href="#konzerte">/ Concerts</a></li>
		<li><a href="#presse">/ Press</a></li>
		<li><a href="index_de.php" style="font-size:0.5em;">/ deutsch</a></li>

	</ul>
</div>

<div class="contentwrap">

	<img id="ikaruspic" img src="img/ikarus.png"></img>

	<h2 id="ikarustitle"> <span style="letter-spacing:-0.05em;">IKARUS</span> <br/> <span style="position:relative;top:-0.7em;left:-0.02em;letter-spacing:0.16em;">ECHO</span> </h2>

	<h2 id="music">MUSIC</h2>
		<?php include("audio.php"); ?>

	<h2 id="videos">Video</h2>
		<?php include("video.php"); ?>

	<h2 id="über">About</h2>
			<a traget="_blank" href="img/Ikarus_Pressefoto.jpg"><img src="img/Ikarus_Pressefoto_klein.jpg"/></a>

		<p>ECHO is the first album by IKARUS, the band surrounding 25-year old composer and drummer Ramón Oliveras. Together with Stefanie Suhner (Vocals), Andreas Lareida (Vocals), Lucca Fries (Piano) and Mo Meyer (Bass) Oliveras realizes his elaborate compositions with skilful consistency. The band, which considers itself a musical organism, involves the wordless vocals as additional instruments and tone colours. Asked about his musical influences, Oliveras responds: "Bartók meets James Blake, Arvo Pärt meets Eivind Aarset. We call our sound Contemporary Evocative Music."</p>
		<p>The result is music that is settled between silence and storm and gains its momentum and energy from nimble minimal-grooves, psychedelic soundscapes and jazz-related interlocking rhythms. Both rugged riffs and delicately interwoven melodies are part of ECHO's musical dramaturgies - the songs frequently oscillate between these opposing elements: as organic transformations or sudden rifts.</p>
		<p>IKARUS aspire to create sensuous post-genre Music, which despite the above-mentioned influences remains first and foremost self-referential. It strives to excite the listeners’ sense of fantastical hearing and lure them into a state of mind where surreal dreams and ghosts are evoked.</p>


	<h2 id="konzerte">Concerts </h2>
      	<?php include("concerts.php"); ?>	

	<h2 id="presse">Press</h2>	
		<p class="quote">"Shows off so much emotion in such an organic line of movement, that it’s hard to believe"</p>
		<p>D4AM (Review) - Juni 2015</p>

		<p class="quote">„Room filling minimal-music“ </p>
		<p>Kultur-Tipp (CD-Highlight) - Mai 2015</p>

		<p class="quote">„Echoing appearance“ 5/5 Punkten</p>
		<p>Jazz’n’More (Portrait) - Mai 2015</p>

		<p class="quote">„You should remember this band. Unbelievable beautiful“</p>
		<p>Sonntagszeitung (CD-Tipp) - April 2015</p>

		<p class="quote">„Like an exhibition of surrealistic pictures“</p>
		<p>Südostschweiz (Portrait) - April 2015</p>

		<p class="quote">„Greetings from Hitchcock"</p>
		<p>Allaboutjazz (Download of the Day) - April 2015</p>

		<p class="quote">„An energetic and distinct sound-world“</p>
		<p>Wiler Tagblatt (Concert Review) - April 2015</p>
	
		<p class="quote"><a href="http://www.srf.ch/sendungen/jazz-aktuell/der-eigene-ton">Radio Report about ECHO on "Jazz Aktuell"</a> </p>
		<p>SRF2 Kultur (Swiss national radio) - April 2015</p>	

		<p class="quote"> "Like a daydream. Produced with greatest elaborateness" </p>
		<p > Tagesanzeiger (CH) </p>		

		<p class="quote">„The Releaseconcert was not from this world. Not to be missed!"" </p>
		<p >Westnetz.ch - Feb 2014 </p>

		<p class="quote">„Evocative! Promising debut.“ </p>
		<p > Allaboutjazz.com - Feb 2014 </p>

		<p class="quote">„A fascinating work of art. Thrilling from the very first second to the  last.“ </p>
		<p > Ron Orp  Zürich - Feb 2014 </p>

		<p class="quote">„Highest level of enjoyment. An exciting adventure for eyes and ears.“ </p>
		<p > music-on-net.com - Feb 2014 </p>

		<p class="quote">„independent“, „exciting“, „bold“. Rating: 5/5 </p>
		<p > Jazz‘n‘more - Jan 2014 </p>

		<p class="quote">„Angelic, hypnotizing voices with a big hit out of nowhere.“</p>
		<p > Allaboutjazz.com - Jan 2014 </p>

		<p class="quote">„The music of Ikarus ist multifaceted and transboundary.“ </p>
		<p > Zürichsee-Zeitung - Feb 2013 </p>


</div>

	<!-- Video Stretch -->
		<script type="text/javascript">
  		$(document).ready(function(){
    		// Target your .container, .wrapper, .post, etc.
    		$(".videowrap").fitVids();
  		});
		</script>

<!-- slider -->
<script>
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            slideshow: false,
            slideshowSpeed: 4500,
            animationSpeed: 1000
        });
    });
</script>

</html>