</div><!-- #content -->

<div id="footer">

	 <div class="sociallinks">
		<div class="slcontainer">
			<a target="_blank" class="slink slfacebook hvr-float-shadow track" data-category='link' data-action='facebook' href="https://www.facebook.com/ikarusonline"></a>
		</div>
		<div class="slcontainer">
			<a target="_blank" class="slink slspotify hvr-float-shadow track" data-category='link' data-action='spotify' href="https://open.spotify.com/artist/7Dxli6ux8ptFXGt0MkDwIq"></a>
		</div>
		<div class="slcontainer">
			<a target="_blank" class="slink slyoutube hvr-float-shadow track" data-category='link' data-action='youtube' href="https://www.youtube.com/channel/UCF5VD2G4hRGEJuScWgYWN6A?spfreload=10"></a>
		</div>
		<div class="slcontainer">
			<a target="_blank" class="slink slmail hvr-float-shadow track" data-category='link' data-action='mail' href="mailto:contact@ikarus.band"></a>
		</div>
	</div>
	<div class="mailchimpcontainer">
		<!-- Begin MailChimp Signup Form -->
			<div id="mc_embed_signup">
				<form action="//ikarus-band.us3.list-manage.com/subscribe/post?u=2ee7ebb4afc1f2a007de0b488&amp;id=b9daf8a087" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    				<div id="mc_embed_signup_scroll">
						<div class="mc-field-group">
							<label for="mce-EMAIL">Newsletter </label>
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
						</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    					<div style="position: absolute; left: -5000px;"><input type="text" name="b_2ee7ebb4afc1f2a007de0b488_b9daf8a087" tabindex="-1" value=""></div>
    					<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    				</div>
				</form>
			</div>
		<!--End mc_embed_signup-->
	</div>

	<div id="downloadcontainer">
		<iframe id="iframe" style="overflow:hidden"width="100%" height="5%" frameborder="0" name="iframe" scrolling="no" allowTransparency="true" src="https://www.protectdisc.com/App/CodeLoad/Download.aspx">This option will not work correctly. Unfortunately, your browser does not support Inline Frames</iframe>
	</div>
</div>

<script type="text/javascript">

  $("#downloadcontainer").hide();

  $("#vinylcode").click(function(){
    $("#downloadcontainer").show();
  });

	$(document).mouseup(function (e)
	{
    var container = $("#downloadcontainer");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.hide();
    }
});
</script>

<!--Defer Video-->
<script type="text/javascript">
function init() {
var vidDefer = document.getElementsByTagName('iframe');
for (var i=0; i<vidDefer.length; i++) {
if(vidDefer[i].getAttribute('data-src')) {
vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
} } }
window.onload = init;
</script>

<!--Defer Javascript-->
<script type="text/javascript">
function downloadJSAtOnload() {
var element = document.createElement("script");
element.src = "js/scripts.js";
document.body.appendChild(element);
}
if (window.addEventListener)
window.addEventListener("load", downloadJSAtOnload, false);
else if (window.attachEvent)
window.attachEvent("onload", downloadJSAtOnload);
else window.onload = downloadJSAtOnload;
</script>

</body>
</html>
