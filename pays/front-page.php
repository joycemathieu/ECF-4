

 <?php get_header(); ?>

<section class="container">
	<div class="tile is-ancestor">
		<div class="tile is-8 is-parent">
			<article class="tile is-child featured post">
				<span class="post__category"> <?php the_category(' &amp;bull; '); ?></span>
				<h2 class="post__title"><?php the_title(); ?></h2>
				<?php the_post_thumbnail('post-thumbnail', ['class' => 'post__featured']); ?>
				<div class="post__content"><?php the_excerpt() ?></div>
				<a class="post__permalink" href="<?php the_permalink(); ?>">Lire la suite</a>
			</article>
		</div>
	<!-- SIDEBAR -->
	<?php get_sidebar(); ?>

	<?php query_posts('posts_per_page=6&offset=1'); ?>
	
	<div class="columns is-multiline">
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<article class="column is-6 post">
				<span class="post__category"> <?php the_category(' &amp;bull; '); ?></span>
				<h2 class="post__title"><?php the_title(); ?></h2>
				<?php the_post_thumbnail('post-thumbnail', ['class' => 'post__img']); ?>
				<div class="post__content"><?php echo substr(get_the_excerpt(), 0, 200) . "..."; ?></div>
				<a class="post__permalink" href="<?php the_permalink(); ?>">Lire la suite</a>
			</article>
		<?php endwhile; endif; ?>
	</div>
</section>

<?php get_footer(); ?>
