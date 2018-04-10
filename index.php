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

	<!--Pagina de inicio-->

			<!-- titulo de l pagina -->
			<h1 class="cabecera"><?php echo bloginfo('name'); ?>.</h1>

			<!-- descripcion del sitio -->
			<p class="texto-cabecera">Nos dedicamos al desarrollo de interfaces web 
					limpias y atractivas para los usuarios utlizando las tecnicas y tecnologias mas actuales.</p>

			<div class="linea-izq"></div> <span class="titulo">Ultimos trabajos</span> <div class="linea-der"></div>

			<p class="limpiar"></p>

			<!-- lista de los ultimos trabajos realizados -->
			<?php $num_post = 1; ?>

			<?php if (have_posts()):?><?php while (have_posts()):the_post(); ?>

				<?php if ( in_category('Sitio') ): ?>

				<!-- contenedor de la pagina -->
				<div class="entrada">					
					<?php the_content()?>
					<strong class="titulo_post"><?php the_title(); ?></strong>
				</div>

				<!-- separacion entre contenedores de las paginas -->
				<?php if ($num_post % 4 != 0): ?>

					<div class="espacio-entrada"></div>

				<?php endif; ?>

				<?php $num_post++; ?>
			  <?php endif; ?>
			<?php endwhile;?>

			<p class="limpiar"></p>		

			<!-- paginado de los trabajos realizados -->
			<div class="paginado">
				<?php posts_nav_link(' ','← Página Anterior','Siguiente Página →'); ?>
			</div>
			<!-- si no es encontraron trabajos realizados -->
			<?php else : ?>		
						<header>
							<br />
							<h1 class="cabecera">No hay entradas hasta ahora.</h1>
						</header>
			<?php endif; ?>

			<p class="limpiar"></p>
			
		<!-- termina el index -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>