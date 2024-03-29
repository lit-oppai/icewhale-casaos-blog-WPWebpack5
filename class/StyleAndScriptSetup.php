<?php

class StyleAndScriptSetup
{
  function __construct()
  {
    add_action('wp_enqueue_scripts', [$this, 'removeGlobalStyles']);
    add_action('wp_enqueue_scripts', [$this, 'removeWPBlockStyles']);
    add_filter('use_default_gallery_style', '__return_false');
    add_action('wp_footer', [$this, 'addThemeCSS'], 0);
    add_action('wp_footer', [$this, 'removeBuildInJS']);
    add_action('wp_footer', [$this, 'addFooterJS'], 0);
    add_action('wp_enqueue_scripts', [$this, 'addThemeJS'], 0);
  }

  public function removeGlobalStyles()
  {
    wp_dequeue_style('global-styles');
    wp_dequeue_style('classic-theme-styles');
  }

  public function removeWPBlockStyles()
  {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style'); // WooCommerce
  }

  public function addThemeCSS()
  {
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.min.css', false, '1.0.0', 'all');
    // wp_enqueue_style('foot', get_stylesheet_directory_uri() . '/css/footer.min.css', false, '1.0.0', 'all');
    // wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
  }

  public function removeBuildInJS()
  {
    wp_deregister_script('jquery');
    wp_deregister_script('wp-embed');
  }

  public function addThemeJS()
  {
    wp_enqueue_script('jQuery', get_stylesheet_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.min.js', false, '1.0.0', true);
    // wp_enqueue_script('header', get_stylesheet_directory_uri() . '/js/header.min.js', false, '1.0.0', true);
    // wp_enqueue_script('article', get_stylesheet_directory_uri() . '/js/article.min.js', false, '1.0.0', true);
  }

  public function addFooterJS() {
    // wp_enqueue_script('footer', '//cdn.jsdelivr.net/npm/sweetalert2@11');
    // wp_enqueue_script('footer', 'https://www.zimaboard.com/js/jquery.formchimp.js');
    // wp_enqueue_script('footer', get_stylesheet_directory_uri() . '/js/jquery.formchimp.js', false, '1.0.0', true);
    // wp_enqueue_script('footer', get_stylesheet_directory_uri() . '/js/footer.min.js', false, '1.0.0', true);
  }
}
