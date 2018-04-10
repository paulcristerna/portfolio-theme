<?php
/**
 * Este tema fue hecho por Paul Criterna.
 * Enviame tus comentarios a: olivierpaulcristerna@gmail.com
 *
 * @package WordPress
 * @subpackage paul_theme
 * @since paul_theme 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta name="description" content="Paul Cristerna es un desarrollador web graduado, quien disfruta de todo lo referente a la web, su especialidad es la realizacion de sitios web limpios y atractivos para los usuarios." />
<meta name="author" content="Paul Cristerna">

<title>
<?php

	global $page, $paged;

	// Add the blog name.
	bloginfo( 'name' );

	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description ){
		echo " | $site_description";
	}

?>

</title>
<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php bloginfo('template_directory');?>/images/logo_icon.png" rel="shortcut icon" type="image/png">
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/funciones.js"></script>
<?php wp_head(); ?>
</head>

<body>
	<div id="principalnav">
		<div id="menunav">

			<!--logo de la pagina-->
			<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
				</a>
			</div>

			<!--menu de navegacion-->
			<div class="nav">
				<nav>
					<ul>
						<?php if(is_home()): ?>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory');?>/images/index-sub.png" alt="Inicio"></a></li>
						<?php else : ?>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory');?>/images/index.png" alt="Inicio"></a></li>
						<?php endif; ?> 

						<?php 

						$num_icono = 0;

						$direccion_actual = "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];

						$pages = get_pages(); 						  
						  
						foreach ( $pages as $page ) {

						  $direccion_sitio = get_page_link( $page->ID );

						  $direccion_icono = array(
						  					"http://localhost/wordpress/wp-content/themes/paul_theme/images/blog.png", 
						  					"http://localhost/wordpress/wp-content/themes/paul_theme/images/contacto.png"
						  					);

						  $direccion_icono_sub = array(
						  					"http://localhost/wordpress/wp-content/themes/paul_theme/images/blog-sub.png", 
						  					"http://localhost/wordpress/wp-content/themes/paul_theme/images/contacto-sub.png"
						  					); ?>

						   	<li>
						   		<a href="<?php echo $direccion_sitio; ?>">

						   		<?php if($direccion_actual === $direccion_sitio): ?>

						  			<img src="<?php echo $direccion_icono_sub[$num_icono]; ?>" alt="<?php echo $page->post_title ?>">

						  		<?php else: ?>

						  			<img src="<?php echo $direccion_icono[$num_icono]; ?>" alt="<?php echo $page->post_title ?>">

						  		<?php endif; ?>

						  		</a>

						  	</li>

						  <?php $num_icono++; } ?>
						</ul>
				</nav>
			</div><!--fin de nav-->

		</div><!--fin de menunav-->

	</div><!--fin de principalnav-->

	<p class="limpiar"></p>

	<!--fin del la cabecera-->