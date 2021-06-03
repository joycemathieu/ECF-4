<?php
 
get_header(); ?>
 
    <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
         
            <header>
                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
            </header>
             <?php $args = array( 'posts_per_page' => '1',);$query = new WP_query ( $args );
				if ( $query->have_posts() ) { ?>
				
				<?php while ( $query->have_posts() ) : $query->the_post(); /* start the loop */ ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'first-post' ); ?>>
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				
					<?php if ( has_post_thumbnail() ) { ?>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'medium', array(
								'class' => 'left',
								'alt'   => trim(strip_tags( $wp_postmeta->_wp_attachment_image_alt ))
							) ); ?>
						</a>
					<?php } ?>

                   
     
    <section class="entry-content">
        <?php the_content(); ?>
    </section><!-- .entry-content -->   
                 
    <footer class="entry-footer">
        <?php twentyfifteen_entry_meta(); ?>
        <?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-footer -->
     
</article><!-- #post-## -->
 
<?php // End the loop.
endwhile;
 
rewind_posts();
 
} ?>
             
            <?php // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'lePays' ),
                'next_text'          => __( 'Next page', 'lePays' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'lePays' ) . ' </span>',
            ) ); ?>
             
        </main><!-- .site-main -->
    </div><!-- .content-area -->
 
<?php get_footer(); ?>