<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

<div class="container">
	<div class="columns is-multiline">
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<article class="column is-6 post">
				<span class="post__category"> <?php the_category(' &amp;bull; '); ?></span>
				<h2 class="post__title"><?php the_title(); ?></h2>
				<?php the_post_thumbnail('post-thumbnail', ['class' => 'post__img']); ?>
				<div class="post__content"><?php echo substr(get_the_excerpt(), 0, 200) . "..."; ?></div>
				<a class="post__permalink" href="<?php the_permalink(); ?>">Lire la suite</a>
				<p class="post__meta">
                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                par <?php the_author(); ?> • <?php comments_number(); ?>
            	</p>
			</article>
		<?php endwhile; endif; ?>
	</div>
</div>
<?php get_footer(); ?>