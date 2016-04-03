<?php


add_action('init','recursos');
function recursos() {

   $themeDir = get_stylesheet_directory_uri() . "/";

   wp_enqueue_style("estilos", $themeDir . "css/app.css");
   wp_enqueue_script("jquery", $themeDir . "bower_components/jquery/dist/jquery.js");
   wp_enqueue_script("what-input", $themeDir . "bower_components/what-input/what-input.js");
   wp_enqueue_script("foundation", $themeDir . "bower_components/foundation-sites/dist/foundation.js");
   wp_enqueue_script("offlimits", $themeDir . "js/offlimits.js");

}
