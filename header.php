<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
 <meta name="author" content="Kevin McAdoo">
 <meta name="keywords" content="HTML,CSS,JavaScript">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shoreditch' ); ?></a>

	
	
	
	<header>	 			  		 
			     	 	     
      <h1>Mcadoo's Web Agency</h1>
	<!-- image icon list-->
		<ol id="header-icon-section">
				<li><a href="tel:3365344856"><img src="<?php bloginfo('template_url'); ?>images/phone-logo.svg" alt="phone"/></a></li>
				<li><a href="mailto:mwaburlington19@gmail.com"><img src="<?php bloginfo('template_url'); ?>images/mail-logo.svg" alt="mail"/></a></li>
				<li><a href="https://www.instagram.com/mcadooswebagency"><img src="<?php bloginfo('template_url'); ?>images/IG-logo.svg" alt="instagram"/></a></li>			
	 </ol>
	
	 <img class="menu-icon" src="images/menu.svg" alt=""/>	
	
	
	<a class="header-service-detail" href="https://www.mcadooswebagency.com/services/">WEB DESIGN, SEO, GRAPHIC DESIGN, + MORE</a>
	<!-- mobile div-->
    <nav>
		<ul id="mobile-list">
			<li><a href="https://www.mcadooswebagency.com">Home</a></li>
			<li><a href="https://www.mcadooswebagency.com/services/">Services</a></li>
			<li><a href="https://www.mcadooswebagency.com/about/">About</a></li>
			<li><a href="https://www.mcadooswebagency.com/process">The Process</a></li>
	   </ul>
		      		 
	 </nav>
		      	  
</header>
			
	<script>
		if(!Modernizr.svg)var i=document.getElementsByTagName("img"),j,y;for(j=i.length;j--;)y=i[j].src,y.match(/svg$/)&&(i[j].src=y.slice(0,-3)+"png")
	
	</script>
	<script>
		(function(){
			var menu = document.querySelector('#mobile-list'),
				menulink = document.querySelector('.menu-icon');
			
			menulink.addEventListener('click',function(e){
				menu.classList.toggle('active');
			e.preventDefault();
			});
			
		})();
		
	</script>
	

	<div id="content" class="site-content">
		<?php if ( get_header_image() ) : ?>
			<div class="header-image">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
				</a>
			</div><!-- .header-image -->
		<?php endif; // End header image check. ?>