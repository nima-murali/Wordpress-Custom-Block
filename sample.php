<<?php 
/**
 * Plugin Name: My sample plugin
 * Description: This is a very basic plugin
 * Version:1.0
 * Author: Nima
 * */


function gutenberg_block_admin() {
   wp_enqueue_script(
      'gutenberg-notice-block-editor',
      plugins_url( 'block.js', __FILE__ ),
      array( 'wp-blocks', 'wp-element' )
   );

   wp_enqueue_style(
      'gutenberg-notice-block-editor',
      plugins_url( 'block.css', __FILE__ ),
      array()
   );
}

add_action( 'enqueue_block_editor_assets', 'gutenberg_block_admin' );

// Load assets for frontend
function gutenberg_block_frondend() {

   wp_enqueue_style(
      'gutenberg-notice-block-editor',
      plugins_url( 'block.css', __FILE__ ),
      array()
   );
}
add_action( 'wp_enqueue_scripts', 'gutenberg_block_frondend' );


 ?>