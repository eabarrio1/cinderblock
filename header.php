<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">  

	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory'); ?>/images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!--OG IMAGE -->

	<meta property="og:type" content="article" />
	<meta property="og:title" content="Cinder Block Comedy Festival - Coming to Williamsburg, BK September 15 - 18, 2016" />
	<meta property="og:description" content="Cinder Block Comedy Festival now open to submissions! Coming to Williamsburg, Brooklyn September 15th - September 18th, 2016" />
	<meta property="og:image"  content="<?php bloginfo('template_directory'); ?>/images/fbimg.jpg" />

	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

<title>
<?php if ( is_category() ) {
		 bloginfo( 'name' ); echo '| &quot;  '; echo single_cat_title(); 
	} elseif ( is_tag() ) {
		echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_archive() ) {
		wp_title(''); echo ' Archive | '; bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
	} elseif ( is_home() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
	} elseif ( is_front_page() ) {
	bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
	}  elseif ( is_404() ) {
		echo 'Error 404 Not Found | '; bloginfo( 'name' );
	} elseif ( is_single() ) {
		wp_title('');
	} else {
		echo bloginfo( 'name' );echo ' | ';  wp_title(''); 
	} ?>
</title>

	<!-- Magnific Popup core CSS file -->
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon" />
	
	<?php  wp_enqueue_style( 'less-style', get_stylesheet_directory_uri() . '/style.less' );  ?>

<!-- 	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" /> -->
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- 	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> -->
	

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/popup.css">

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

		<?php

		$defaults = array(
			'theme_location'  => '',
			'menu'            => 'Header Menu',
			'container'       => 'nav',
			'container_class' => 'main',
			'container_id'    => '',
			'menu_class'      => '',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => ''
		);

		wp_nav_menu( $defaults );

		?>

	<div id="page-wrap">

		<!-- <a id="menu-btn">Menu</a> -->
	
		<a class="toggleMenu" href="#">Menu</a>

		<!-- <header> -->	

		<?php if ( is_front_page() ) : ?>


		<?php elseif (is_page('home2')) : ?>

			
			<div id="slider">

			    <div class="content bg-slider active">
			        <div class="wrapper">    
			        <div class="container">

			        <div class="header-content">
					<a class="logo" a href="<?php bloginfo('url'); ?>">"Cinderblock Comedy Festival</a>


					<h1>Jen Kirkman</h1>
							<p>Monday, Sept 18<br>
							7pm at Union Hall</p>
							<br>
							<a class="button" href="#">Buy Tix</a>

					</div>
							
			        </div>
			        </div>
			    </div>
			    <div class="content bg-slider">
			        <div class="wrapper">    
			        <div class="container">
				<div class="header-content">
					<a class="logo" a href="<?php bloginfo('url'); ?>">"Cinderblock Comedy Festival</a>

					<h1>Maria Bamford</h1>
							<p>Monday, Sept 18<br>
							7pm at Union Hall</p>
							<br>
							<a class="button" href="#">Buy Tix</a>

					</div>
	      				
					</div>
			        </div>
			    </div>
			    <div class="content bg-slider">
			        <div class="wrapper">    
				        <div class="container">

				        <div class="header-content">
						<a class="logo" a href="<?php bloginfo('url'); ?>">"Cinderblock Comedy Festival</a>

						<h1>Jeanene Garofolo</h1>
								<p>Monday, Sept 18<br>
								7pm at Union Hall</p>
								<br>
								<a class="button" href="#">Buy Tix</a>

						</div>

				  	</div>		
			        </div>
			    </div>

      		<div class="container">
      				<div style="height: 420px"></div>

				</div>


				<div class="container">

			       <a class="pink third" href="<?php bloginfo('url'); ?>/weekend-pass">Buy a weekend pass</a>
			       <a class="pink third" href="<?php bloginfo('url'); ?>/volunteer">Volunteer</a>
			       <a class="pink third" href="<?php bloginfo('url'); ?>/submit">Submit Application</a>

			    </div><!--end container-->

				<div class="container">
				  
				   <div class="nav-wrapper">
					    <div class="nav-dots">
					        <div class="current"></div>
					        <div class=""></div>
					        <div class=""></div>
					    </div>
					</div>

				</div><!--end container-->

		</div><!-- background div -->


		<?php else : ?>

			<div class="container">

			<a class="logo" a href="<?php bloginfo('url'); ?>">Cinderblock Comedy Festival</a>	

			 <h4 style="margin: 0; text-align: center;">Coming to Williamsburg, Brooklyn September 15 - September 18, 2016 </h4>


			</div>				

		<?php endif; ?>



<!--</header> -->