<?php
//*front-page.php

remove_action( 'genesis_loop', 'genesis_do_loop' );

function enqueue_script_gsap_scrollmagic(){
	//GSAP
	wp_enqueue_script( 'gsap-css' );
	wp_enqueue_script( 'gsap-ease' );
	wp_enqueue_script( 'gsap-tweenlite' );
	wp_enqueue_script( 'gsap-timelinelite' );

	//ScrollMagic
	wp_enqueue_script( 'scrollmagic-main' );
	wp_enqueue_script( 'scrollmagic-gsap' );
	wp_enqueue_script( 'scrollmagic-debug' ); // for debug purpose, should be deleted after development
}
add_action( 'wp_enqueue_scripts', 'enqueue_script_gsap_scrollmagic');

add_action('genesis_after_header','front_page_html');
function front_page_html(){ 
	?>

	<style type="text/css">
		html{
			overflow-x: hidden;
		}
		/*Remove everything on Front Page*/
		.site-header, .site-inner, .site-footer{
			display: none;
		}

		.nav-primary{
			background-color: transparent;
		}
		ul#menu-main{
			text-align: right;
		}
		ul#menu-main li a{
			font-family: 'Roboto', sans-serif;
			color: white;
			font-size: 130%;
		}
		@media only screen and (max-width: 960px){
			ul#menu-main{
				text-align: center;
			}
		}

		/*set header hero image and darken it*/
		.hero-image {
			width: 100%;
			height: 100vh;
			position: relative;
		}

		.hero-image::after {
			content: "";
			background-image: url('https://lh3.googleusercontent.com/2THEgoCxWUmzN4Waw8VrEkBPjDpvzz2Mg6ByLL7Cl8qpbOEjyNY=w1920-h828-no');
			background-size: cover;
			background-position: center;
			opacity: 0.3;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			position: absolute;
			z-index: -1;   
		}

		.hero-image::before {
			content: "";
			background-color: black;
			background-size: cover;
			background-position: center;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			position: absolute;
			z-index: -2;   
		}
		/*END set header hero image and darken it*/

		/*Hero image text*/
		.hero-image-text h1,.hero-image-text h2,.hero-image-text h3,.hero-image-text h4,.hero-image-text h5,.hero-image-text h6{
			color: white;
			text-align: center;
			font-family: 'Roboto', sans-serif;
		}

		.hero-image-text{
			width: 100%;
			color: white;
			text-align: center;
			font-family: 'Roboto', sans-serif;
			position: absolute;
			top:50%;
			left:50%;
			transform: translate(-50%, -50%);
		}
		@media only screen and (min-width: 760px) {
			.hero-image-text h1{
				font-size: 5vw;
			}
			.hero-image-text p{
				font-size: 2vw;
			}
		}
		/*END Hero image text*/

		/* Feature Area*/
		.feature-box{
			width:100%;
		}
		.feature-box-image, .feature-box-text{
			display: block;
			float: left;
			padding: 15px;
		}
		.feature-box-image{
			width: 30%;
		}
		.feature-box-text{
			width: 60%;
			text-align: justify;
			text-justify: inter-word;
		}
		.feature-box-text{
			color: black;
		}

		.feature-box-img{
			width: 100%;
		}
		.feature-box-headline{
			width: 100%;
			text-align: center;
			margin-top: 50px;
		}

		.feature-box-image{
			background-color: #0099CC;
			border-radius: 50%;
			margin: 10px 0;
		}
		/*END Feature Area*/

		/*Contact Area*/
		.for-home-contact-form{
			width: 100%;
			background-color: #E6E6E6;
			padding: 50px;
		}
		.for-home-contact-form .wrap div{
			text-align: right;
		}
		#for-home-contact-form-1{
			font-size: 7vw;
		}
		#for-home-contact-form-2{
			font-size: 12vw;
		}
		.wpcf7 p{
			text-align: left;
		}
		@media only screen and (max-width: 800px){
			.for-home-contact-form .wrap div{
				text-align: left;
			}
		}
		/*END Contact Area*/
	</style>

	<div class="hero-image">
		<div id="hero-image-nav"><?php genesis_do_nav() ?></div>
		<div class="hero-image-text">
			<h1 id="hero-image-text-1">Jacob Goh</h1>
			<h1 id="hero-image-text-2">WordPress Developer</h1>
			<p id="hero-image-text-3">I create websites that are fast, mobile responsive, and easy to manage.</p>
		</div>
	</div>

	<div class="wrap">
		<div class="feature-box-headline">
			<h1>The websites I build are:</h1><br/>
		</div>
		<div class="one-third first">
			<div class="feature-box" id="feature-box-1">
				<div class="feature-box-image">
					<img class="feature-box-img" src="https://lh3.googleusercontent.com/yUTp6tiFAZjlxqKd7HIM3PDoJpBYTtlWk1_5VmJ_LB0T1BtV0IA=s128-no">
				</div>
				<div class="feature-box-text">
					<h3>Professionally Designed</h3>
					<p>My designer colleague and I will create something gorgeous just for you.</p>
				</div>
			</div>
		</div>
		<div class="one-third" id="feature-box-2">
			<div class="feature-box">
				<div class="feature-box-image">
					<img class="feature-box-img" src="https://lh3.googleusercontent.com/AXA1g2ROYtEyDoz0FzMich_xe0Ru-hUJBNK0JDDgRV94CapQRI4=s128-no">
				</div>
				<div class="feature-box-text">
					<h3>Fully Responsive</h3>
					<p>I know how important mobile and tablets are. That is why I will ensure that your website works great on all devices.</p>
				</div>
			</div>
		</div>
		<div class="one-third">
			<div class="feature-box" id="feature-box-3">
				<div class="feature-box-image">
					<img class="feature-box-img" src="https://lh3.googleusercontent.com/PYAWYSSvKoslyD_K-XJGbExYcQ13kX9VrukRv3Oko28wowf-ZK4=s128-no">
				</div>
				<div class="feature-box-text">
					<h3>Fast & Smooth</h3>
					<p>Slow sites means bad user experience. I will make your website load fast for your user.</p>
				</div>
			</div>
		</div>

		<div class="one-third first">
			<div class="feature-box" id="feature-box-4">
				<div class="feature-box-image">
					<img class="feature-box-img" src="https://lh3.googleusercontent.com/yDJqgv5tmEiou8Dy0ng25vY6fbw2RMsZjgB-h0sATzaT9_qDbiw=s128-no">
				</div>
				<div class="feature-box-text">
					<h3>Secure</h3>
					<p>The websites are built on Genesis Framework, which means the websites I build will always be following WordPress security best practice.</p>
				</div>
			</div>
		</div>
		<div class="one-third">
			<div class="feature-box" id="feature-box-5">
				<div class="feature-box-image">
					<img class="feature-box-img" src="https://lh3.googleusercontent.com/4R010vQq8EX5bptP-AyeURai4o64l1TSh3VHisZpeOJ68zPsVnQ=s128-no">
				</div>
				<div class="feature-box-text">
					<h3>Training</h3>
					<p>I create video tutorials so that you won&#39;t have any problems managing your website&#39;s back-end.</p>
				</div>
			</div>
		</div>
		<div class="one-third">
			<div class="feature-box" id="feature-box-6">
				<div class="feature-box-image">
					<img class="feature-box-img" src="https://lh3.googleusercontent.com/5kEwVKuN2nVqmGhnQ9p2WqGcAdQw6I7gx7JMWwCAFtqadnIKDgo=s128-no">
				</div>
				<div class="feature-box-text">
					<h3>Built to Last</h3>
					<p>I write clean code and use high quality plugins, so there will be no issue when it comes to upgrading.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="for-home-contact-form">
		<div class="wrap">
			<div class="one-half first">
				<h1 id="for-home-contact-form-1">Let's</h1>
				<h1 id="for-home-contact-form-2">Talk</h1>
				<p>
					I’d love to hear about how I can help your business.<br/><br/>
					Please send me some information on your project so I can figure out how best to help you.<br/><br/>
					After confirming that I'm a good fit for your project, we shall schedule a Skype chat to discuss things in further details.
				</p>
			</div>
			<div class="one-half">
				<?php dynamic_sidebar( 'for-home-contact-form' ); ?>
			</div>
		</div>
	</div>

	<?php
} // End quote of front_page_html()

function enqueue_front_page_script()
{
	wp_register_script( 'front-page-script', get_stylesheet_directory_uri() . '/js/front-page.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
    wp_enqueue_script( 'front-page-script' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_front_page_script' );

genesis();
