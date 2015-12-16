<?php

//remove post meta
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_footer', 'genesis_do_footer' );

add_action( 'genesis_footer', 'add_menu_to_footer' );
function add_menu_to_footer(){
	?>
	<a href="http://localhost/jacobgoh.com-v2/">Home</a>
	<a href="#">Portfolio</a>
	<a href="http://localhost/jacobgoh.com-v2/#contact">Contact</a>
	<?php
}

add_action('wp_enqueue_scripts', 'single_portfolio_css',999);
function single_portfolio_css(){
	wp_enqueue_style('single_portfolio_css', get_stylesheet_directory_uri() . '/css/single-portfolio.css');
}

add_action('genesis_entry_content', 'single_portfolio');
function single_portfolio(){
	?>
	<div class="single-portfolio-left">
		<h1><?php the_title() ?></h1>
		<br/>
		<?php if(get_field('date')){
			?>
			<h3>Project Date</h3>
			<p><?php the_field('date') ?></p>
			<?php
		}
		if(get_field('client')){
			?>
			<h3>Client</h3>
			<p><?php the_field('client') ?></p>
			<?php
		}
		if(get_field('link')){
			?>
			<h3>Link</h3>
			<a href="<?php the_field('link') ?>"><?php the_field('link') ?></a>
			<?php
		}
		?>
		<br/>
		<a href="http://localhost/jacobgoh.com-v2/#contact" class="btn">Contact Me</a>
	</div>
	<div class="single-portfolio-right">
		<?php if(get_field('screenshot')){
			?>
			<img id="screenshot" src="<?php the_field('screenshot') ?>" alt="<?php the_field('screenshot') ?>">
			<?php
		}
		if(get_field('project_details')){
			?>
			<h3>Project Details</h3>
			<p><?php the_field('project_details') ?></p>
			<?php
		}
		if(get_field('features')){
			?>
			<h3>Features</h3>
			<p><?php the_field('features') ?></p>
			<?php
		}
		if(get_field('skills')){
			?>
			<h3>Skills</h3>
			<p><?php the_field('skills') ?></p>
			<?php
		}
		?>
	</div>

	<?php
}

genesis();