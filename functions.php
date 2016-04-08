<?php
//
//
add_theme_support( 'post-thumbnails' );
add_action('wp_enqueue_scripts','recursos');
function recursos() {

   $themeDir = get_stylesheet_directory_uri() . "/";

   wp_enqueue_style("estilos", $themeDir . "css/app.css");
   wp_enqueue_style("font-awesome", $themeDir . "bower_components/font-awesome/css/font-awesome.min.css");
   wp_enqueue_style("google-fonts", "https://fonts.googleapis.com/css?family=Permanent+Marker|Special+Elite|Averia+Sans+Libre|Sanchez");

   wp_enqueue_script("jquery");

   // wp_enqueue_script("what-input", $themeDir . "bower_components/what-input/what-input.js", array('jquery'));
   wp_enqueue_script("foundation", $themeDir . "bower_components/foundation-sites/dist/foundation.js", array('jquery'));
   wp_enqueue_script("frontendutils", $themeDir . "js/frontendutils.js");
   wp_enqueue_script("offlimits", $themeDir . "js/offlimits.js", array('jquery'));
   wp_enqueue_script("imgLiquid", $themeDir . "bower_components/imgLiquid/js/imgLiquid-min.js");

}




// arreglo para admin en chrome :
add_action('admin_enqueue_scripts', 'chrome_adminmenu_fix');

function chrome_adminmenu_fix() {
    if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Chrome' ) !== false )
        wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ(0); }' );
}
