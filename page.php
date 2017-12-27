<?php get_header(); ?>

    <div class="linker-bereich">
        <section class="inhalt">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2 class="storytitle"><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <!-- Ende des Bereiches um den jeweiligen Beiträge -->

            <?php endwhile; else: ?>
                <p>Tut mir leid, es wurde kein passender Beitrag gefunden.</p>
            <?php endif; ?>
        </section><!-- Ende #inhalt -->
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>