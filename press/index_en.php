<?php include("header.php"); ?>

<div id="sidenav">
	<ul>
		<li><a href="#music">/ Music</a></li>
		<li><a href="#videos">/ Video</a></li>
		<li><a href="#über">/ About</a></li>
		<li><a href="#presse">/ Press</a></li>
		<li><a href="#downloads">/ Downloads</a></li>
		<li><a href="index_de.php" style="font-size:0.5em;">/ deutsch</a></li>

	</ul>
</div>

<div class="contentwrap">

	<img id="ikaruspic" img src="../img/Ikarus-Chronosome-Cover-Digital_web_small.jpg"></img>

	<h2 id="ikarustitle">
		<span style="letter-spacing:1.0em;left:0.4em;position:relative;">IKARUS</span> <br/>
		<span style="position:relative;top:-0.7em;left:-0.02em;letter-spacing:0.16em;">CHRONOSOME</span>
	</h2>


	<h2 id="music">MUSIC</h2>
		<?php include("../content/bookpress/audio.php"); ?>

	<h2 id="videos">Video</h2>
		<?php include("../content/bookpress/video.php"); ?>

	<h2 id="über">About</h2>
		<?php include("../content/bookpress/about_en.php"); ?>

	<h2 id="konzerte">Concerts </h2>
      	<?php include("../content/bookpress/concerts.php"); ?>

	<h2 id="presse">Press</h2>
      	<?php include("../content/bookpress/press_en.php"); ?>

	<h2 id="downloads">Downloads</h2>
      	<?php include("../content/bookpress/downloads_en.php"); ?>

</div>

</body>

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
