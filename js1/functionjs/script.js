if($.browser.mozilla||$.browser.opera){document.removeEventListener("DOMContentLoaded",$.ready,false);document.addEventListener("DOMContentLoaded",function(){$.ready()},false)}$.event.remove(window,"load",$.ready);$.event.add( window,"load",function(){$.ready()});$.extend({includeStates:{},include:function(url,callback,dependency){if(typeof callback!='function'&&!dependency){dependency=callback;callback=null}url=url.replace('\n','');$.includeStates[url]=false;var script=document.createElement('script');script.type='text/javascript';script.onload=function(){$.includeStates[url]=true;if(callback)callback.call(script)};script.onreadystatechange=function(){if(this.readyState!="complete"&&this.readyState!="loaded")return;$.includeStates[url]=true;if(callback)callback.call(script)};script.src=url;if(dependency){if(dependency.constructor!=Array)dependency=[dependency];setTimeout(function(){var valid=true;$.each(dependency,function(k,v){if(!v()){valid=false;return false}});if(valid)document.getElementsByTagName('head')[0].appendChild(script);else setTimeout(arguments.callee,10)},10)}else document.getElementsByTagName('head')[0].appendChild(script);return function(){return $.includeStates[url]}},readyOld:$.ready,ready:function(){if($.isReady) return;imReady=true;$.each($.includeStates,function(url,state){if(!state)return imReady=false});if(imReady){$.readyOld.apply($,arguments)}else{setTimeout(arguments.callee,10)}}});
$.include('js/superfish.js')
$.include('js/tabs.js')
$.include('js/FF-cash.js')
$.include('js/jquery.easing.1.3.js')
$.include('js/jquery.cycle.all.min.js')
$.include('js/jquery.color.js')
$.include('js/jquery.backgroundPosition.js')
$.include('js/coin-slider.js')
$(function(){
	if($('.fixedtip').length||$('.clicktip').length||$('.normaltip').length)$.include('js/jquery.atooltip.pack.js')
	if($('#contact-form').length)$.include('js/forms.js')
	if($('.jqTransform').length)$.include('js/jquery.jqtransform.js')
	if($('.maxheight').length)$.include('js/jquery.equalheights.js')
	if($('.top1').length||$('.layouts-nav li a').length)$.include('js/scrollTop.js')
	if($('.kwicks').length)$.include('js/kwicks-1.5.1.pack.js')
	if($("#thumbs").length)$.include('js/jquery.galleriffic.js')
	if($(".lightbox-image").length)$.include('js/jquery.prettyPhoto.js')
	if($("#twitter").length)$.include('js/jquery.twitter.js')
	if($('#countdown_dashboard').length)$.include('js/jquery.lwtCountdown-1.0.js')
	$("body").append('<div id="advanced"><span class="trigger"></span><ul><li class="trigger_adv"><span>Pages</span><ul><li><a href="under_construction.html">Under construction</a></li><li><a href="intro.html">intro page</a></li><li><a href="404.html">404 page</a></li></ul></li><li><a href="layouts.html">Layouts</a><li><a href="typography.html">Typography</a></li><li class="trigger_adv"><span>Interactive</span><ul><li><a href="coin-slider.html">slider</a><ul><li><a href="coin-slider.html">coin slider</a></li><li><a href="kwicks.html">kwicks slider</a></li></ul></li><li><a href="functional-slider.html">functional slider</a></li><li><a href="gallery-page1.html">simple gallery</a></li><li><a href="gallery-page2.html">advanced gallery</a></li><li><a href="misc.html" class="current">misc</a></li></ul></li></ul></div>')
	$("#advanced .trigger").toggle(function(){$(this).parent().animate({right:0},"medium")},function(){$(this).parent().animate({right:-172},"medium")})
	$('.top1').click(function(e){$('html,body').animate({scrollTop:'0px'},800);return false})
	$('.layouts-nav li a').click(function(){var offset=$($(this).attr('href')).offset();$('html,body').animate({scrollTop:offset.top},800);return false})
	$("#accordion dt").click(function(){$(this).next("#accordion dd").slideToggle("slow").siblings("#accordion dd:visible").slideUp("slow");$(this).toggleClass("active");$(this).siblings("#accordion dt").removeClass("active");return false})
	$(".slideDown dt").click(function(){$(this).toggleClass("active").parent(".slideDown").find("dd").slideToggle()})
	$(".code a.code-icon").toggle(function(){$(this).find("i").text("-");$(this).next("div.grabber").slideDown()},function(){$(this).find("i").text("+");$(this).next("div.grabber").slideUp()})	
	$('.layouts-nav li a, dl#accordion dt a, .slideDown dt').hover(function(){$(this).stop().animate({backgroundColor:'#434950'})},function(){$(this).stop().animate({backgroundColor:'#00aeef'})})
	$('.tabs li a').hover(function(){$(this).stop().animate({backgroundColor:'#00aeef'})},function(){$(this).stop().animate({backgroundColor:'#434950'})})
	$('.text a, .link-1, .link-3, ol li a').hover(function(){$(this).stop().animate({color:'#979797'})},function(){$(this).stop().animate({color:'#00aeef'})})
	$('.link, .link-4').hover(function(){$(this).stop().animate({color:'#979797'})},function(){$(this).stop().animate({color:'#36bef2'})})
	$('.link-2, .list-2 li a').hover(function(){$(this).stop().animate({color:'#656565'})},function(){$(this).stop().animate({color:'#36bef2'})})
	$('.top1').hover(function(){$(this).stop().animate({color:'#00aeef'})},function(){$(this).stop().animate({color:'#847d78'})})
	$('.text-bot a, .link-5, .link-6').hover(function(){$(this).stop().animate({color:'#2b2b2b'})},function(){$(this).stop().animate({color:'#32bdf1'})})
	$('.list-2 li a').hover(function(){$(this).stop().animate({color:'#36bef2'})},function(){$(this).stop().animate({color:'#999898'})})
	$('.button-1')
		.hover(function(){
			$(this).stop().animate({
				paddingRight:'18px'},500,'easeOutBounce')
			},
			function(){
				$(this).stop().animate({
				paddingRight:'11px'},500,'easeOutBounce')
		}
			
	);
	$('.banner .button-1')
		.hover(function(){
			$(this).stop().animate({
				paddingRight:'18px'},500,'easeOutBounce')
			},
			function(){
				$(this).stop().animate({
				paddingRight:'4px'},500,'easeOutBounce')
		}
			
	);	
	$('.list-1 li a, .list-3 li a').prepend('<span class="mask-3"></span><span class="mask-4"></span>');
	$('.hover').append('<span class="mask"></span>');
	$('.hover-small').append('<span class="mask-small"></span>');
	$('.button').append('<span class="bg-button1"></span><span class="bg-button2"></span>');
	if ($.browser.msie && $.browser.version < 10) {
		$('.hover').append('<span class="mask-ie"></span>');
		$('.hover').hover(function(){
				$(this).find('.mask-ie').stop().animate({opacity:0.5, right:0, top:0, bottom:0, left:0})
			}, function(){
				$(this).find('.mask-ie').stop().animate({opacity:0, right:'50%', top:'50%', bottom:'50%', left:'50%'})
		});
		$('.hover-small').append('<span class="mask-small-ie"></span>');
		$('.hover-small').hover(function(){
				$(this).find('.mask-small-ie').stop().animate({opacity:0.5, right:0, top:0, bottom:0, left:0})
			}, function(){
				$(this).find('.mask-small-ie').stop().animate({opacity:0, right:'50%', top:'50%', bottom:'50%', left:'50%'})
		});
		$('.works-list li a .img-container-ie').each(function(){
			$(this).find('>img').css({position:'relative',zIndex:2})
			$(this).css({position:'relative',display:'inline-block'}).append('<span style="position:absolute;top:0;left:0;width:100%;height:100%;"></span>').hover(function(){$(this).find('img').eq(0).stop().animate({opacity:0});$(this).find('img').eq(1).stop().animate({opacity:1})},function(){$(this).find('img').eq(0).stop().animate({opacity:1});$(this).find('img').eq(1).stop().animate({opacity:0})})
			var src=new Array()
			src=$(this).find('>img').attr('src').split('.')
			src=src[0]+'-hover.'+src[1]
			$(this).find('>span').css({background:'url('+src+')'})
		})
		
	}

})			
function onAfter(curr, next, opts, fwd){var $ht=$(this).height();$(this).parent().animate({height:$ht})}