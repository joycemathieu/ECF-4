<?php get_header(); ?>

<div class="background-container"></div>
<div class="post__archive__title-container">
    <h1 class="post__archive__title"><?php the_category(''); ?></h1>
</div>

<div class="container">
    <div class="columns is-multiline">
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                <article class="column is-6 post">
                    <h2 class="post__title"><?php the_title(); ?></h2>
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'post__img']); ?>
                    <div class="post__content"><?php echo substr(get_the_excerpt(), 0, 100) . "..."; ?></div>
                    <p class="post__meta">
                        Publié le <?php the_time( get_option( 'date_format' ) ); ?> • par <?php the_author(); ?>
            	    </p>
                    <a class="post__permalink__archive" href="<?php the_permalink(); ?>">Lire la suite</a>
                </article>
            <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>