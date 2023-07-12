<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta name="author" content="Marcin Szczepkowski">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body class="flex flex-col">
  <header class="header">
    <div class="content">
      <div class="nav-item grow-0">Home</div>
      <div class="nav-item grow-0">ZIMABOARD</div>
      <div class="nav-item grow-0">CASAOS</div>
      <div class="nav-item grow-0">DISCORD</div>
      <div class="nav-item grow-0">SHOP</div>
      <div class="nav-item grow-0">CONTACT US</div>
      <div class="nav-item grow"></div>
      <div class="grow">
        <i class="fas fa-search" onclick="openSearch()"></i>
        <input id="searchBox" onkeydown="search(event)" style="display: none;" type="text" />
      </div>
    </div>
  </header>