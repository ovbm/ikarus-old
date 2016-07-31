// Google Analytics

  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-43480308-4', 'ikarus.band');
  		ga('send', 'pageview');

// Analytics Event Tracking
		!function(n){n.fn.analyticsEventTracking=function(t){function e(n){"object"==typeof console&&console.log(n)}var o=n.extend({selector:".track",default_category:"General"},t);return"function"!=typeof ga?(e("Google Analytics (analytics.js) is not initialized."),!1):n(this).each(function(){function t(){c.find(o.selector).on("click",function(){e("click",n(this))}),c.find(o.selector+"-blur").on("blur",function(){e("blur",n(this))}),c.find(o.selector+"-complete").on("blur",function(){""!=n.trim(n(this).val())&&e("complete",n(this))}),c.find(o.selector+"-focus").on("focus",function(){e("focus",n(this))}),c.find(o.selector+"-mouseover").on("mouseover",function(){e("mouseover",n(this))}),c.find(o.selector+"-change").on("change",function(){e("change",n(this))})}function e(n,t){var e=t.data("category")||o.default_category,c=t.data("action")||interaction,i=t.data("label")||"",a=t.data("value")||1;ga("send","event",e,c,i,a)}var c=n(this);t()})}}(jQuery);

    	$(document).ready(function() {
       		$("body").analyticsEventTracking();
		});