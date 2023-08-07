<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="author" content="Marcin Szczepkowski">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<script src="https://cdn.tailwindcss.com"></script>
	<title><?php wp_title('|', true, 'right');
			bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css">
	</link>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fontawesome/css/fontawesome.css">
	</link>
</head>

<body>
	<header class="header">
		<div class="header-container d-flex justify-content-between align-items-center">
			<!-- <div class="grow flex flex-row" id="header-extra">
				<img class="ml-6" id="header-extra-button" src="<?php echo get_template_directory_uri(); ?>/fonts/icon/menu.svg" />
				<div class="nav-item grow flex justify-center">zimaboard</div>
			</div> -->

			<div class="logo-header-inner logo-header-one">
				<a href="https://www.zimaboard.com/blog/">
					<img src="<?php echo get_template_directory_uri(); ?>/fonts/zima/zima-logo.svg" alt="ZimaBoard">
				</a>
			</div>

			<!-- content maxmenu white-style brackets-style nav-animation fade-down-animation -->
			<nav class="content maxmenu white-style brackets-style nav-animation fade-down-animation">
				<div class="overlapblackbg"></div>
				<?php
				if (has_nav_menu('main-menu')) {
					wp_nav_menu(
						array(
							// 'theme_location'  => 'main-menu',
							// 'menu_class'      => 'maxmenu-list',
							// "container"       => false,
							// 'fallback_cb'     => false,

							'menu' => '',
							'menu_class' => 'maxmenu-list',
							'menu_id' => '',
							'container' => 'ul',
							'container_class' => '',
							'container_id' => '',
							'fallback_cb' => '',
							'before' => '',
							'after' => '',
							'link_before' => '',
							'link_after' => '',
							'echo' => 'true',
							'depth' => '0',
							'theme_location' => 'main-menu',
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'item_spacing' => 'preserve'
						)
					);
				} ?>
			</nav>
			<!-- <div class="shrink-0 search">
				<img class="searchIcon mr-6" src="<?php echo get_template_directory_uri(); ?>/fonts/icon/search.svg">
				<input class="searchInput close" id="searchBox" type="text" />
			</div> -->



			<div class="extra-nav header-4-nav">
				<div class="extra-cell">
					<div class="header-search">
						<a href="javascript:void(0);" class="header-search-icon"><i class="fa fa-search"></i></a>
					</div>
				</div>
				<!-- Mobile Header -->
				<div class="maxmobileheader clearfix ">
					<a id="maxnavtoggle" class="maxanimated-arrow"><span></span></a>
				</div>
				<!-- Mobile Header -->
			</div>

		</div>
		<div id="search-toggle-block" style="display: none;">
			<div id="search">
				<form role="search" id="searchform" action="https://cse.google.com.hk/cse" method="get" target="_blank" class="radius-xl">
					<div class="input-group">
						<input class="form-control" value="" name="q" type="search" placeholder="Type to search">
						<input type="hidden" name="cx" value="3b45819b190ccca35">
						<span class="input-group-append"><button type="submit" class="search-btn"><i class="fa fa-search"></i></button></span>
					</div>
				</form>

			</div>
		</div>
	</header>