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
    <div id="lebanon-page-jumbotron" class="parallax-window table-display" data-parallax="scroll" style="background-image: url(<?php echo esc_url( wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ); ?>)" >
        <div class="overlay"></div>
        
        <div class="cell-display">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <header class="entry-header">
                            <?php 
                            if( get_theme_mod( 'lebanon_post_category', 'on' ) == 'on' ) :
                                lebanon_entry_footer(); 
                            endif;
                            ?>
                            <?php the_title('<h1 class="text-left entry-title">', '</h1>'); ?>
                        </header><!-- .entry-header -->                
                    </div>
                </div>
            </div>
        </div>


    </div>
<?php endif; ?>

<div class="container">
    <div class="row">

        <?php get_sidebar('left'); ?>

        <div class="col-sm-<?php echo esc_attr( lebanon_main_width() ); ?>">

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <div class="entry-meta">
                        <div class="meta-detail">

                            <?php if( get_theme_mod( 'lebanon_post_date', 'on' ) == 'on' ) : ?>
                            <div><span class="fa fa-calendar"></span> <?php echo lebanon_posted_on(); ?></div>
                            <?php endif; ?>

                            <?php if( get_theme_mod( 'lebanon_post_author', 'on' ) == 'on' ) : ?>
                            <div class="author">
                                <span class="fa fa-user"></span>
                                <?php the_author_posts_link(); ?>
                            </div>
                            <?php endif; ?>

                            <?php if( get_theme_mod( 'lebanon_post_comments', 'on' ) == 'on' ) : ?>
                            <div><?php echo get_comments_number() == 0 ? '<span class="fa fa-comment"></span> ' . __('No comments yet', 'lebanon') : '<span class="fa fa-comment"></span> ' . esc_attr( get_comments_number() ) . ' Comments'; ?></div>
                            <?php endif; ?>

                        </div>

                    </div><!-- .entry-meta -->

                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php the_content(); ?>

                    <div id="author-bio">
                        <div class="">
                            <div class="">
                                <div class="col-sm-2 author-image">
                                    <?php echo get_avatar( get_the_author_meta( 'login' ), 150 ); ?>
                                </div>
                                <div class="col-sm-10 author-bio">
                                    <div><?php the_author_posts_link(); ?></div>
                                    <?php echo get_the_author_meta( 'description' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'lebanon'),
                        'after' => '</div>',
                    ));
                    ?>
                </div><!-- .entry-content -->

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
</div>