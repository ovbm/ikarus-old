(function(e){e.reject=function(r){var i=e.extend(true,{reject:{all:false,msie:6,msie:true},display:[],browserShow:true,browserInfo:{chrome:{text:"Google Chrome",url:"http://www.google.com/chrome/"},firefox:{text:"Mozilla Firefox",url:"http://www.mozilla.com/firefox/"},safari:{text:"Safari",url:"http://www.apple.com/safari/download/"},opera:{text:"Opera",url:"http://www.opera.com/download/"}},header:"Thank you for visiting ikarus.band!",paragraph1:"Unfortunately this site will not be displayed properly with Internet Explorer. "+"All other browsers (found below) are supported. "+"See you soon, IKARUS.",paragraph2:"",close:true,closeMessage:"",closeLink:"Close This Window",closeURL:"#",closeESC:true,closeCookie:false,cookieSettings:{path:"/",expires:0},imagePath:"./img/",overlayBgColor:"#000",overlayOpacity:.8,fadeInTime:"fast",fadeOutTime:"fast",analytics:true},r);if(i.display.length<1){i.display=["chrome","firefox","safari","opera"]}if(e.isFunction(i.beforeReject)){i.beforeReject()}if(!i.close){i.closeESC=false}var s=function(t){var n=t[e.layout.name],r=t[e.browser.name];return!!(t["all"]||r&&(r===true||e.browser.versionNumber<=r)||t[e.browser.className]||n&&(n===true||e.layout.versionNumber<=n)||t[e.os.name])};if(!s(i.reject)){if(e.isFunction(i.onFail)){i.onFail()}return false}if(i.close&&i.closeCookie){var o="jreject-close";var u=function(t,n){if(typeof n!="undefined"){var r="";if(i.cookieSettings.expires!==0){var s=new Date;s.setTime(s.getTime()+i.cookieSettings.expires*1e3);r="; expires="+s.toGMTString()}var o=i.cookieSettings.path||"/";document.cookie=t+"="+encodeURIComponent(!n?"":n)+r+"; path="+o;return true}else{var u,a=null;if(document.cookie&&document.cookie!==""){var f=document.cookie.split(";");var l=f.length;for(var c=0;c<l;++c){u=e.trim(f[c]);if(u.substring(0,t.length+1)==t+"="){var h=t.length;a=decodeURIComponent(u.substring(h+1));break}}}return a}};if(u(o)){return false}}var a='<div id="jr_overlay"></div><div id="jr_wrap"><div id="jr_inner">'+'<h1 id="jr_header">'+i.header+"</h1>"+(i.paragraph1===""?"":"<p>"+i.paragraph1+"</p>")+(i.paragraph2===""?"":"<p>"+i.paragraph2+"</p>");var f=0;if(i.browserShow){a+="<ul>";for(var l in i.display){var c=i.display[l];var h=i.browserInfo[c]||false;if(!h||h["allow"]!=undefined&&!s(h["allow"])){continue}var p=h.url||"#";a+='<li id="jr_'+c+'"><div class="jr_icon"></div>'+'<div><a href="'+p+'">'+(h.text||"Unknown")+"</a>"+"</div></li>";++f}a+="</ul>"}a+='<div id="jr_close">'+(i.close?'<a href="'+i.closeURL+'">'+i.closeLink+"</a>"+"<p>"+i.closeMessage+"</p>":"")+"</div>"+"</div></div>";var d=e("<div>"+a+"</div>");var v=t();var m=n();d.bind("closejr",function(){if(!i.close){return false}if(e.isFunction(i.beforeClose)){i.beforeClose()}e(this).unbind("closejr");e("#jr_overlay,#jr_wrap").fadeOut(i.fadeOutTime,function(){e(this).remove();if(e.isFunction(i.afterClose)){i.afterClose()}});var t="embed.jr_hidden, object.jr_hidden, select.jr_hidden, applet.jr_hidden";e(t).show().removeClass("jr_hidden");if(i.closeCookie){u(o,"true")}return true});var g=function(e){if(!i.analytics){return false}var t=e.split(/\/+/g)[1];try{ga("send","event","External","Click",t,e)}catch(n){try{_gaq.push(["_trackEvent","External Links",t,e])}catch(n){}}};var y=function(e){g(e);window.open(e,"jr_"+Math.round(Math.random()*11));return false};d.find("#jr_overlay").css({width:v[0],height:v[1],background:i.overlayBgColor,opacity:i.overlayOpacity});d.find("#jr_wrap").css({top:m[1]+v[3]/4,left:m[0]});d.find("#jr_inner").css({minWidth:f*100,maxWidth:f*140,width:e.layout.name=="trident"?f*155:"auto"});d.find("#jr_inner li").css({background:'transparent url("'+i.imagePath+'background_browser.gif") '+"no-repeat scroll left top"});d.find("#jr_inner li .jr_icon").each(function(){var t=e(this);t.css("background","transparent url("+i.imagePath+"browser_"+t.parent("li").attr("id").replace(/jr_/,"")+".gif)"+" no-repeat scroll left top");t.click(function(){var t=e(this).next("div").children("a").attr("href");y(t)})});d.find("#jr_inner li a").click(function(){y(e(this).attr("href"));return false});d.find("#jr_close a").click(function(){e(this).trigger("closejr");if(i.closeURL==="#"){return false}});e("#jr_overlay").focus();e("embed, object, select, applet").each(function(){if(e(this).is(":visible")){e(this).hide().addClass("jr_hidden")}});e("body").append(d.hide().fadeIn(i.fadeInTime));e(window).bind("resize scroll",function(){var r=t();e("#jr_overlay").css({width:r[0],height:r[1]});var i=n();e("#jr_wrap").css({top:i[1]+r[3]/4,left:i[0]})});if(i.closeESC){e(document).bind("keydown",function(e){if(e.keyCode==27){d.trigger("closejr")}})}if(e.isFunction(i.afterReject)){i.afterReject()}return true};var t=function(){var e=window.innerWidth&&window.scrollMaxX?window.innerWidth+window.scrollMaxX:document.body.scrollWidth>document.body.offsetWidth?document.body.scrollWidth:document.body.offsetWidth;var t=window.innerHeight&&window.scrollMaxY?window.innerHeight+window.scrollMaxY:document.body.scrollHeight>document.body.offsetHeight?document.body.scrollHeight:document.body.offsetHeight;var n=window.innerWidth?window.innerWidth:document.documentElement&&document.documentElement.clientWidth?document.documentElement.clientWidth:document.body.clientWidth;var r=window.innerHeight?window.innerHeight:document.documentElement&&document.documentElement.clientHeight?document.documentElement.clientHeight:document.body.clientHeight;return[e<n?e:n,t<r?r:t,n,r]};var n=function(){return[window.pageXOffset?window.pageXOffset:document.documentElement&&document.documentElement.scrollTop?document.documentElement.scrollLeft:document.body.scrollLeft,window.pageYOffset?window.pageYOffset:document.documentElement&&document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop]}})(jQuery);(function(e){e.browserTest=function(t,n){var r="unknown",i="X",s=function(e,t){for(var n=0;n<t.length;n=n+1){e=e.replace(t[n][0],t[n][1])}return e},o=function(t,n,o,a){var f={name:s((n.exec(t)||[r,r])[1],o)};f[f.name]=true;if(!f.opera){f.version=(a.exec(t)||[i,i,i,i])[3]}else{f.version=window.opera.version()}if(/safari/.test(f.name)){var l=/(safari)(\/|\s)([a-z0-9\.\+]*?)(\;|dev|rel|\s|$)/;var c=l.exec(t);if(c&&c[3]&&c[3]<400){f.version="2.0"}}else if(f.name==="presto"){f.version=e.browser.version>9.27?"futhark":"linear_b"}if(/msie/.test(f.name)&&f.version===i){var h=/rv:(\d+\.\d+)/.exec(t);f.version=h[1]}f.versionNumber=parseFloat(f.version,10)||0;var p=1;if(f.versionNumber<100&&f.versionNumber>9){p=2}f.versionX=f.version!==i?f.version.substr(0,p):i;f.className=f.name+f.versionX;return f};t=(/Opera|Navigator|Minefield|KHTML|Chrome|CriOS/.test(t)?s(t,[[/(Firefox|MSIE|KHTML,\slike\sGecko|Konqueror)/,""],["Chrome Safari","Chrome"],["CriOS","Chrome"],["KHTML","Konqueror"],["Minefield","Firefox"],["Navigator","Netscape"]]):t).toLowerCase();e.browser=e.extend(!n?e.browser:{},o(t,/(camino|chrome|crios|firefox|netscape|konqueror|lynx|msie|trident|opera|safari)/,[["trident","msie"]],/(camino|chrome|crios|firefox|netscape|netscape6|opera|version|konqueror|lynx|msie|rv|safari)(:|\/|\s)([a-z0-9\.\+]*?)(\;|dev|rel|\s|$)/));e.layout=o(t,/(gecko|konqueror|msie|trident|opera|webkit)/,[["konqueror","khtml"],["msie","trident"],["opera","presto"]],/(applewebkit|rv|konqueror|msie)(\:|\/|\s)([a-z0-9\.]*?)(\;|\)|\s)/);e.os={name:(/(win|mac|linux|sunos|solaris|iphone|ipad)/.exec(navigator.platform.toLowerCase())||[r])[0].replace("sunos","solaris")};if(!n){e("html").addClass([e.os.name,e.browser.name,e.browser.className,e.layout.name,e.layout.className].join(" "))}};e.browserTest(navigator.userAgent)})(jQuery)