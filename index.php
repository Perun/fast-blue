<?php get_header(); ?>

    <div class="linker-bereich">
        <section class="inhalt">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Der Verweis (Permalink) zu: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
            <div class="beitragsinfo"><span class="artikelzeit icon"></span><?php the_time('d. m. Y'); ?>, <?php the_time('H:i'); ?> <span class="transparent">–</span> <span class="kommentare icon"></span><?php comments_popup_link('Kommentare (0)', 'Kommentare (1)', 'Kommentare (%)'); ?>  <?php edit_post_link('****', '<span>&nbsp;', '&nbsp;</span>'); ?></div>
            <?php the_content('weiterlesen&hellip;'); ?>
            <?php wp_link_pages(); ?>
            <!-- Ende des Bereiches um den jeweiligen Beiträge -->

            <?php endwhile; else: ?>
                <p>Tut mir leid, es wurde kein passender Beitrag gefunden.</p>
            <?php endif; ?>
            <div class="zentriert"><?php posts_nav_link('&nbsp;&ndash;&nbsp;', '&laquo; neuere Nachrichten', 'ältere Nachrichten &raquo;'); ?></div>
        </section><!-- Ende #inhalt -->
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>