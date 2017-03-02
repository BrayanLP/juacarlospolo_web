<?php

/**

 *

 * Template Name: fotos

 *

 */

?>
<?php get_header(); ?>

<section id="photos" class="row">
	<div class="container">
		<div class="titulo">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="photos">
			<?php
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$args = array(
					'post_type' => 'fotos_juanca',
					'posts_per_page' => '6',
					'paged' => $paged,
					'order' => 'des'
				);
				query_posts($args);
			?>
				<?php $the_query = new WP_Query($args); ?>
				<?php if ($the_query->have_posts()) : ?>
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
			
		    <?php $img= get_field('img'); ?>

			<div class="col s12 l4 m6">
				<a class="fancybox" rel="group" href="<?php echo $img['url']; ?>">
					<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>" title="<?php echo $img['title']; ?>">
				</a>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<div class=" nav-previous center paginado" style="color: #fff;margin: 2rem 0;float:right;">
				<a class="">
				<?php 
					next_posts_link( 'Siguiente >>' );
				?>
				</a> 
				<span class="ga-play_arrow"></span>
			</div>
			<div class=" nav-next alignright center paginado" style="color: #fff;margin: 2rem 0;float:right;">
				<?php previous_posts_link( '<< Anterior' ); ?>	
			</div>
			<?php endif; ?>		
			<!-- <div class="col s12">
				<p class="center" style="text-align: right;">
					<a href="" class="vista">NEXT<span class="ga-play_arrow"></span></a>
				</p>
			</div> -->
		</div>
	</div>
</section>


<?php 
	include 'footer.php';
?>
 