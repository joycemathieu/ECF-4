<?php get_header(); ?>

<div class="background-container__single"></div>
<div class="post__archive__title-container__single">
    <h1 class="post__archive__title__single"><?php the_title(); ?></h1>
</div>

<div class="container">
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  <article class="column post">
      <?php the_post_thumbnail('post-thumbnail', ['class' => 'post__img__single']); ?>
      <div class="post__content__single"><?php the_content(); ?></div>
      <div class="post__meta">
          <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
          Publié le <?php the_date(); ?> par <?php the_author(); ?>
      </div>
  </article>
<?php endwhile; endif; ?>

</div>
<?php get_footer(); ?>