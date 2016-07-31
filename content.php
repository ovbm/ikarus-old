<script type="text/javascript">
    var init = function() {
      var box = document.querySelector('.container').children[0],
          showPanelButtons = document.querySelectorAll('#show-buttons button'),
          panelClassName = 'show-front',

          onButtonClick = function( event ){
          box.removeClassName( panelClassName );
            panelClassName = event.target.className;
            box.addClassName( panelClassName );
          };

      for (var i=0, len = showPanelButtons.length; i < len; i++) {
        showPanelButtons[i].addEventListener( 'click', onButtonClick, false);
      }
    };
    window.addEventListener( 'DOMContentLoaded', init, false);
  </script>

  <script type="text/javascript" src="js/utils.jreject.mini.js"></script>


<div id="show-buttons">
      <button class="show-front track" data-category='Navigation' data-action='Home'>HOME</button>
      <button class="show-right track" data-category='Navigation' data-action='Echo'>ECHO</button>
      <button class="show-left track" data-category='Navigation' data-action='Video'>VIDEO</button>
      <button class="show-top track" data-category='Navigation' data-action='Gallery'>BAND</button>
      <button class="show-bottom track" data-category='Navigation' data-action='Live'>LIVE</button>
      <button class="show-back track" data-category='Navigation' data-action='Info'>INFO</button>

   </div>

<div id="wrapper">
<section class="container">

  <div id="cube" class="show-front">
    <figure class="front">
      <div class="contentbox">
        <p class="ikarustitle">IKARUS</p>
        <p class="echotitle">ECHO</p>       
      </div>
    </figure>

    <figure class="back">
      <div class="contentbox">
        <?php include("content/info.php"); ?>
      </div>
    </figure>

    <figure class="right">
      <div class="contentbox">
        <?php include("content/echo.php"); ?>
      </div>
    </figure>
    	   	
    <figure class="left">
      <div class="contentbox">
        <?php include("content/video.php"); ?>
      </div>
    </figure>
    
    <figure class="top">
      <div class="contentbox">
        <?php include("content/gallery.php"); ?>
      </div>
    </figure>

    <figure class="bottom">
      <div class="contentbox">
        <?php include("content/live.php"); ?>
      </div>
    </figure>

  </div>
</section>	
</div>

<script type="text/javascript">
$(document).ready(function() {
          setTimeout( function(){
            $("#wrapper").animate({
              opacity: 1
            }, 2400 );
          },1200);
          setTimeout( function(){
            $("#show-buttons").animate({
              opacity: 1
            }, 2400 );
          },2400);
          setTimeout( function(){
            $("#footer").animate({
              opacity: 1
            }, 2400 );
          },3600);
        });
</script>

 
            

