<?php

if ( ! is_active_sidebar( 'sidebar-homepage' ) ) {
	return;
}
?>

<div id="lebanon-homepage-widget" data-parallax="scroll" style="background-image: url(<?php echo esc_url( get_theme_mod( 'homepage_widget_background', get_template_directory_uri() . '/inc/images/widget.jpg' ) ); ?>)">
        
        <div>
            <div class="row">
                <div class="widget-area">
                    <?php dynamic_sidebar( 'sidebar-homepage' ); ?>
                </div>
            </div>            
        </div>
        
    </div>

