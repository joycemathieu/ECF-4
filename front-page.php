<?php get_header(); ?>
    
    <!-- FEATURED -->

	<div class="tile is-ancestor">
		<div class="tile is-8 is-parent">
			<article class="tile is-child featured post">
				<a class="post__category" href="<?php single_cat_title( '', false ); ?>"></a>
				<h2 class="post__title"><?php the_title(); ?></h2>
				<img class="post__img" src=""><?php the_post_thumbnail(); ?></img>
				<div class="post__content"><?php the_excerpt() ?></div>
				<a class="post__permalink" href="<?php the_permalink(); ?>">Lire la suite</a>
			</article>
		</div>
	<!-- SIDEBAR -->
	<?php get_sidebar(); ?>


<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	<div class="tile is-ancestor">		
		<div class="tile is-6 is-parent">
			<article class="tile is-child featured post">
				<a class="post__category" href="<?php single_cat_title( '', false ); ?>"></a>
				<h2 class="post__title"><?php the_title(); ?></h2>
				<img class="post__img" src=""><?php the_post_thumbnail(); ?></img>
				<div class="post__content"><?php the_excerpt() ?></div>
				<a class="post__permalink" href="<?php the_permalink(); ?>">Lire la suite</a>
			</article>
		</div>
	</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>