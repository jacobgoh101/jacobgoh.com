(function($) {

	var scrollMagicController = new ScrollMagic.Controller();

	//hero image
	var tween1 = new TimelineLite();

	tween1.from('#hero-image-text-1',0.5,{position:"relative",left:"-100px", autoAlpha:0})
	.from('#hero-image-text-2',0.5,{position:"relative",right:"-100px", autoAlpha:0})
	.from('#hero-image-text-3',0.3,{position:"relative",top:"50px", autoAlpha:0})
	.from('#hero-image-nav',1,{autoAlpha:0,delay:0.5});

	var scene1 = new ScrollMagic.Scene({triggerElement:'.hero-image-text'})
	.setTween(tween1)
	.addIndicators()
	.addTo(scrollMagicController);
	//END hero image

	// feature-box 1st row
	var tween2 = new TimelineLite();

	tween2.from('#feature-box-1',0.5,{position:"relative",left:"-100px", autoAlpha:0}, "label1")
	.from('#feature-box-3',0.5,{position:"relative",right:"-100px", autoAlpha:0}, "label1")
	.from('#feature-box-2',0.5,{autoAlpha:0}, "label1");

	var scene2 = new ScrollMagic.Scene({triggerElement:'.feature-box-headline'})
	.setTween(tween2)
	.addIndicators()
	.addTo(scrollMagicController);
	//END feature-box 1st row

	// feature-box 2nd row
	var tween3 = new TimelineLite();

	tween3.from('#feature-box-4',0.5,{position:"relative",left:"-100px", autoAlpha:0}, "label1")
	.from('#feature-box-6',0.5,{position:"relative",right:"-100px", autoAlpha:0}, "label1")
	.from('#feature-box-5',0.5,{autoAlpha:0}, "label1");

	var scene3 = new ScrollMagic.Scene({triggerElement:'#feature-box-3',offset:100})
	.setTween(tween3)
	.addIndicators()
	.addTo(scrollMagicController);
	//END feature-box 2nd row

	// contact form 'talk' enlarge
	var tween4 = new TimelineLite();

	tween4.from('.for-home-contact-form .one-half.first',0.5,{position:"relative", left:"-200", autoAlpha:0},"label2")
	.from('.for-home-contact-form div+div',0.5,{position:"relative", right:"-200", autoAlpha:0},"label2");

	var scene34 = new ScrollMagic.Scene({triggerElement:'.for-home-contact-form'})
	.setTween(tween4)
	.addIndicators()
	.addTo(scrollMagicController);
	//END contact form 'talk' enlarge

	// feature box hover effect
	$(function(){
		$('#feature-box-1').hover(
			function(){ //mouse in
				TweenLite.to('#feature-box-1 .feature-box-image', 0.5, {backgroundColor:"#003399"});
				TweenLite.to(['#feature-box-1 .feature-box-text h3','#feature-box-1 .feature-box-text p'], 0.5, {color:"#003399"});
			},
			function(){ //mouse out
				TweenLite.to('#feature-box-1 .feature-box-image', 0.5, {backgroundColor:"#0099CC"});
				TweenLite.to(['#feature-box-1 .feature-box-text h3','#feature-box-1 .feature-box-text p'], 0.5, {color:"black"});
			}
			);
		$('#feature-box-2').hover(
			function(){ //mouse in
				TweenLite.to('#feature-box-2 .feature-box-image', 0.5, {backgroundColor:"#003399"});
				TweenLite.to(['#feature-box-2 .feature-box-text h3','#feature-box-2 .feature-box-text p'], 0.5, {color:"#003399"});
			},
			function(){ //mouse out
				TweenLite.to('#feature-box-2 .feature-box-image', 0.5, {backgroundColor:"#0099CC"});
				TweenLite.to(['#feature-box-2 .feature-box-text h3','#feature-box-2 .feature-box-text p'], 0.5, {color:"black"});
			}
			);
		$('#feature-box-3').hover(
			function(){ //mouse in
				TweenLite.to('#feature-box-3 .feature-box-image', 0.5, {backgroundColor:"#003399"});
				TweenLite.to(['#feature-box-3 .feature-box-text h3','#feature-box-3 .feature-box-text p'], 0.5, {color:"#003399"});
			},
			function(){ //mouse out
				TweenLite.to('#feature-box-3 .feature-box-image', 0.5, {backgroundColor:"#0099CC"});
				TweenLite.to(['#feature-box-3 .feature-box-text h3','#feature-box-3 .feature-box-text p'], 0.5, {color:"black"});
			}
			);
		$('#feature-box-4').hover(
			function(){ //mouse in
				TweenLite.to('#feature-box-4 .feature-box-image', 0.5, {backgroundColor:"#003399"});
				TweenLite.to(['#feature-box-4 .feature-box-text h3','#feature-box-4 .feature-box-text p'], 0.5, {color:"#003399"});
			},
			function(){ //mouse out
				TweenLite.to('#feature-box-4 .feature-box-image', 0.5, {backgroundColor:"#0099CC"});
				TweenLite.to(['#feature-box-4 .feature-box-text h3','#feature-box-4 .feature-box-text p'], 0.5, {color:"black"});
			}
			);
		$('#feature-box-5').hover(
			function(){ //mouse in
				TweenLite.to('#feature-box-5 .feature-box-image', 0.5, {backgroundColor:"#003399"});
				TweenLite.to(['#feature-box-5 .feature-box-text h3','#feature-box-5 .feature-box-text p'], 0.5, {color:"#003399"});
			},
			function(){ //mouse out
				TweenLite.to('#feature-box-5 .feature-box-image', 0.5, {backgroundColor:"#0099CC"});
				TweenLite.to(['#feature-box-5 .feature-box-text h3','#feature-box-5 .feature-box-text p'], 0.5, {color:"black"});
			}
			);
		$('#feature-box-6').hover(
			function(){ //mouse in
				TweenLite.to('#feature-box-6 .feature-box-image', 0.5, {backgroundColor:"#003399"});
				TweenLite.to(['#feature-box-6 .feature-box-text h3','#feature-box-6 .feature-box-text p'], 0.5, {color:"#003399"});
			},
			function(){ //mouse out
				TweenLite.to('#feature-box-6 .feature-box-image', 0.5, {backgroundColor:"#0099CC"});
				TweenLite.to(['#feature-box-6 .feature-box-text h3','#feature-box-6 .feature-box-text p'], 0.5, {color:"black"});
			}
			);
	})
})( jQuery );