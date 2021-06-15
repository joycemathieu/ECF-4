<?php if ( ! is_active_sidebar( 'sidebar-widget' ) ) {
    return;
}
?>
    <aside class="column is-4 sidebar">
          <div class="post__event-content">
          <?php dynamic_sidebar( 'sidebar-widget' ); ?>
          </div>    
    </aside>
</div>