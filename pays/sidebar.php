<?php if ( is_active_sidebar( 'new-widget-area' ) ) : ?>
    <aside class="column is-4 sidebar">
    <div id="new-widget-area" class="post__event-content" role="complementary">
        <?php dynamic_sidebar( 'new-widget-area' ); ?>
    </div>
    </aside>
</div>
<?php endif ?>