<?php
/**
 * Template Name: Frontpage
 */
get_header();

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main frontpage-main" role="main">
        
        <?php do_action('lebanon_tab_clicker'); ?>
        <?php do_action('lebanon_homepage'); ?>
        <div class="container">
            <div class="row">

                <?php //get_sidebar('left'); ?>

                <div class="homepage-page-content col-sm-12">

                    <?php if (have_posts()) : ?>

                        <?php if (is_home() && !is_front_page()) : ?>
                            <header>
                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                            </header>
                        <?php endif; ?>

                        <?php while (have_posts()) : the_post(); ?>

                            <?php


                            get_template_part('template-parts/content-page-home', get_post_format());

                            ?>

                        <?php endwhile; ?>

                        <div class="lebanon-pagination">
                            <?php echo paginate_links(); ?>
                        </div>

                    <?php else : ?>

                        <?php get_template_part('template-parts/content', 'none'); ?>

                    <?php endif; ?>

                </div>

            </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>        