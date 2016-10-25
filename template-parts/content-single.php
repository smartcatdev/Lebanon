<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Lebanon
 */
?>

<?php if (get_post_thumbnail_id($post->ID)) : ?>
    <div id="lebanon-page-jumbotron" class="parallax-window" data-parallax="scroll" style="background-image: url(<?php echo esc_url( wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ); ?>)" >

        <header class="entry-header">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header><!-- .entry-header -->

    </div>
<?php endif; ?>

<div class="row">
    
    <?php get_sidebar('left'); ?>
    
    <div class="col-sm-<?php echo esc_attr( lebanon_main_width() ); ?>">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

                <div class="entry-meta">
                    <div class="meta-detail">

                        <div><span class="fa fa-calendar"></span> <?php echo lebanon_posted_on(); ?></div>

                        <div class="author"><?php echo get_the_author() ? '<span class="fa fa-user"></span> ' . esc_attr( get_the_author() ) : ' '; ?></div>

                        <div><?php echo get_comments_number() == 0 ? '<span class="fa fa-comment"></span> ' . __('No comments yet', 'lebanon') : esc_attr( get_comments_number() ) . ' Comments'; ?></div>


                    </div>

                </div><!-- .entry-meta -->

            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php the_content(); ?>
                <?php
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'lebanon'),
                    'after' => '</div>',
                ));
                ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer">
                <?php lebanon_entry_footer(); ?>
            </footer><!-- .entry-footer -->

            <?php the_post_navigation(); ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        </article><!-- #post-## -->

    </div>
    
    <?php get_sidebar(); ?>

</div>