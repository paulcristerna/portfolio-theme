<?php
/**
 * Este tema fue hecho por Paul Criterna.
 * Enviame tus comentarios a: olivierpaulcristerna@gmail.com
 *
 * @package WordPress
 * @subpackage paul_theme
 * @since paul_theme 1.0
 */

get_header(); ?>

<div id="contenido">

	<?php if (have_posts()):?><?php while (have_posts()):the_post(); ?>

		<!--<h1 class="cabecera-izq"><?php the_title(); ?></h1>

		<div class="post">
			<?php the_content(); ?>
		</div>-->

		<h1 class="cabecera"><br/ >No disponible por el momento.</h1>

	<?php endwhile; ?>
	<?php endif; ?>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>