

<!--<div class="gallerynav">
	<button href="content/slidesband.php" class="gbutton bandbutton">BAND</button>
	<button href="content/slidesecho.php" class="gbutton echobutton">ECHO</button>
	<button href="content/slideslive.php" class="gbutton livebutton">LIVE</button>
</div>-->


<div id="slideshow">
</div>

<script type="text/javascript">

$('.gbutton').click(function (event){ 
   event.preventDefault(); 

   var url = $(this).attr('href');
   $.get(url, function(data) {
   		$data = $(data);	
      	$('#slideshow').html($data);
    });

 });

$.ajax({
    url: 'content/slidesband.php',
    success: function(data){
        $('#slideshow').html(data); // Load data into a <div> as HTML
    }
});
</script>
