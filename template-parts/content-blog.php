<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Lebanon
 */
?>
<?php if (get_post_thumbnail_id($post->ID)) : 
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array(500,500) );
    $image_url = esc_url( $image[0] );
endif; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('lebanon-blog-post reveal fadeIn'); ?> style='<?php echo get_post_thumbnail_id( $post->ID ) ? "background-image: url( $image_url );backbround-repeat: no-repeat;background-size: cover;" : ""; ?>'>
    
    <div class="post-panel-content">
        
        <header class="entry-header">
            
            <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
                
            <?php if( get_theme_mod( 'blog_style', 'grid' ) == 'stacked' ) : ?>
                <a href="<?php echo esc_url( get_permalink() ); ?>">
                    <?php echo wp_trim_words( strip_shortcodes( wp_strip_all_tags( get_post_field( 'post_content', $post->ID ) ) ), 25 ); ?>
                </a>
            <?php elseif( get_theme_mod( 'blog_style', 'grid' ) == '2col' ) : ?>
                <a href="<?php echo esc_url( get_permalink() ); ?>">
                    <?php echo wp_trim_words( strip_shortcodes( wp_strip_all_tags( get_post_field( 'post_content', $post->ID ) ) ), 25 ); ?>
                </a>
            <?php endif; ?>
            
            
            <?php if ('post' === get_post_type()) : ?>
                <div class="entry-meta">
                    <div class="meta-detail">
                        
                        <?php if( get_theme_mod( 'lebanon_blog_date', 'on' ) == 'on' ) : ?>
                        <div><span class="fa fa-calendar"></span> <?php echo lebanon_posted_on(); ?></div>
                        <?php endif; ?>
                        
                        <?php if( get_theme_mod( 'lebanon_blog_author', 'on' ) == 'on' ) : ?>
                        <div class="author">
                            <span class="fa fa-user"></span>
                            <?php the_author_posts_link(); ?>
                        </div>
                        <?php endif; ?>
                        
                    </div>

                </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php // echo wp_trim_words(get_the_content(), 50); ?>

            <?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'lebanon'),
                'after' => '</div>',
            ));
            ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            
        </footer><!-- .entry-footer -->
    </div>
    
    
</article><!-- #post-## -->
