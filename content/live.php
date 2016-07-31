<div class="gallerynav">
	<button href="content/upcoming.php" class="gbutton upcomingbutton">upcoming</button>
	<button href="content/past.php" class="gbutton pastbutton">past</button>
</div>

<div class="fadeouttp">
</div>

<div id="gigs">
</div>

<div class="fadeoutbt">
</div>

<script type="text/javascript">

$('.gbutton').click(function (event){ 
   event.preventDefault(); 

   var url = $(this).attr('href');
   $.get(url, function(data) {
   		$data = $(data);	
      	$('#gigs').html($data);
    });

 });

$.ajax({
    url: 'content/upcoming.php',
    success: function(data){
        $('#gigs').html(data); // Load data into a <div> as HTML
    }
});
</script>

<p class="tourinfo">Tour information powered by <a href="http://www.bandsintown.com">Bandsintown</a></p>
