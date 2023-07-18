<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta name="author" content="Marcin Szczepkowski">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <script src="https://cdn.tailwindcss.com"></script>
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<header class="header">
  <div class="grow flex flex-row" id="header-extra">
    <img class="ml-6" id="header-extra-button" src="<?php echo get_template_directory_uri(); ?>/fonts/icon/menu.svg" />
    <div class="nav-item grow flex justify-center">zimaboard</div>
  </div>
  <div class="content" id="header-nav">
    <div class="nav-item grow-0">Home</div>
    <div class="nav-item grow-0">ZIMABOARD</div>
    <div class="nav-item grow-0">CASAOS</div>
    <div class="nav-item grow-0">DISCORD</div>
    <div class="nav-item grow-0">SHOP</div>
    <div class="nav-item grow">CONTACT US</div>
  </div>
  <div class="shrink-0 search">
    <img class="searchIcon mr-6" src="<?php echo get_template_directory_uri(); ?>/fonts/icon/search.svg">
    <input class="searchInput close" id="searchBox" type="text" />
  </div>
</header>