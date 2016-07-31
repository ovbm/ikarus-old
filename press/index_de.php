<?php include("header.php"); ?>

<div id="sidenav">
	<ul>
		<li><a href="#musik">/ Musik</a></li>
		<li><a href="#videos">/ Videos</a></li>
		<li><a href="#über">/ Über</a></li>
		<li><a href="#presse">/ Presse</a></li>
		<li><a href="#downloads">/ Download</a></li>
		<li><a href="index_en.php" style="font-size:0.5em;">/ english</a></li>
	</ul>
</div>

<div class="contentwrap">

	<img id="ikaruspic" img src="../img/ikarus-echo-large.jpg"></img>

	<h2 id="ikarustitle"> 
		<span style="letter-spacing:-0.05em;">IKARUS</span> <br/> 
		<span style="position:relative;top:-0.7em;left:-0.02em;letter-spacing:0.16em;">ECHO</span> 
	</h2> 

	<h2 id="musik">MUSIK</h2>
		<?php include("../content/bookpress/audio.php"); ?>

	<h2 id="videos">Video</h2>
		<?php include("../content/bookpress/video.php"); ?>

	<h2 id="über">Über</h2>
		<?php include("../content/bookpress/about_de.php"); ?>
		
	<h2 id="konzerte">Konzerte </h2>
		<?php include("../content/bookpress/concerts.php"); ?>	

	<h2 id="presse">Presse</h2>
		<?php include("../content/bookpress/press_de.php"); ?>
		
	<h2 id="band">Band</h2>
		<?php include("../content/bookpress/band_de.php"); ?>

	<h2 id="downloads">Downloads</h2>	
		<?php include("../content/bookpress/downloads_de.php"); ?>

	</div>
</div>

</body>

	<!-- Video Stretch -->
		<script type="text/javascript">
  		$(document).ready(function(){
    		// Target your .container, .wrapper, .post, etc.
    		$(".videowrap").fitVids();
  		});
		</script>
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
