    <aside class="sidebar">
        <?php 	/* Widgetized sidebar, if you have the plugin installed. */
                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>        
        <?php endif; ?>
        <?php wp_meta(); ?>
    </aside>