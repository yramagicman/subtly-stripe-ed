<?php
if ( !isset( $content_width ) ) {
    $content_width = 640;
    /* pixels */
} //!isset( $content_width )

require_once( get_template_directory(). '/inc/init.php' ); // if you remove this line your blog will die
// enqueue CSS and JS
require_once( 'inc/scripts-styles.php' ); // if you remove this line your blog will die
// to enable custom headers uncomment the next line.
// require_once( 'inc/custom-header.php' );
// to enable custom background uncomment the next line.
// require_once( 'inc/custom-bg.php' );
// to use Jetpack infinite scroll, uncomment the next line.
// require_once( 'inc/jetpack.php' );
// for WordPress.com compatibility uncomment the next line.
// require_once( 'inc/wpcom.php' );
// Do you have an additional CSS directory? (Not web fonts, those are defined below.)

function wpHTML5_user_scripts( ) {
    // enque your own stuff here. CSS should be added to the array above.
    // enqueue a script.
    // wp_enqueue_script( 'id', get_template_directory_uri() . 'path',array('dependencies'), filemtime(get_stylesheet_directory() . 'path'), header_or_footer );
}
// customize the end of the excerpt.
function wpHTML5_excerpt_more( $more ) {
    global $post;
    return ' <p class="readmore"><a href="' . get_permalink( $post->ID ) . '">Continue reading ' . $post->post_title . '</a></p>';
}

// Widgitize sidebars.
function wpHTML5_sidebars( ) {
    if ( function_exists( 'register_sidebar' ) ) {
        // duplicate this array and edit it if you have more than one widgitable area in your theme
        register_sidebar( array(
             'name' => 'Top Sidebar',
            'before_widget' => '<ul id="%1$s" class="widget %2$s">',
            'after_widget' => '</ul>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>' 
        ) );
    } //function_exists( 'register_sidebar' )
} //end sidebars

// tell WordPress about custom Nav Menus.
register_nav_menus( array(
     'header' => __( 'Header Navigation', 'wordpressHTML5' ),
    'footer' => __( 'Footer Navigation', 'wordpressHTML5' ) 
) );

function wpHTML5_header_menu( ) {
    $header = array(
         'theme_location' => 'header',
        // 'container' => 'nav',
        // 'container_id' => 'nav',
        'container_class' => 'menu header-menu row',
        'menu_class' => 'menu header-menu-list' 
    );
    wp_nav_menu( $header );
}

function wpHTML5_footer_menu( ) {
    $footer = array(
         'theme_location' => 'footer',
        // 'container' => 'nav',
        'container_id' => 'footer-nav',
        'container_class' => 'menu footer-menu row span12-no-margin',
        'menu_class' => 'menu footer-menu-list',
        'depth' => 1 
    );
    wp_nav_menu( $footer );
}

function wpHTML5_single_post_nav( ) {
    $prev_post = get_previous_post();
    if ( !empty( $prev_post ) ) {
?>
    <a href="<?php
        echo get_permalink( $prev_post->ID );
?>" class="alignleft"><?php
        echo $prev_post->post_title;
?></a>
  <?php
    } //!empty( $prev_post )
    $next_post = get_next_post();
    if ( !empty( $next_post ) ) {
?>
    <a href="<?php
        echo get_permalink( $next_post->ID );
?>" class="alignright"><?php
        echo $next_post->post_title;
?></a>
  <?php
    } //!empty( $next_post )
}
// make TinyMCE look good.
add_editor_style();

?>
