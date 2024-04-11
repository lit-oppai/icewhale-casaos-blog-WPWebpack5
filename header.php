<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="author" content="Marcin Szczepkowski">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<!-- <script src="https://cdn.tailwindcss.com"></script> -->
	<title><?php wp_title('|', true, 'right');
			bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fontawesome/css/fontawesome.css">
	</link>
</head>

<body>
<header class="text-sans fixed z-30 w-screen text-white transition-[top] duration-300 top-0 text-base">
    <div class="fixed z-40 w-full bg-[#111111]/75 text-white/50 backdrop-blur">
      <div class="gpx mx-auto flex w-full max-w-screen-xl flex-row items-start justify-between">
        <div class="flex flex-row" id="zima_trigger">
          <div class="flex h-[4rem] items-center text-white"><a href="https://www.zimaspace.com/">Zima</a></div>
          <ul class="flex flex-row" id="zima_nav">
            <li
              class="flex flex-col transition-all duration-700 md:visible md:h-[4rem] md:flex-row md:items-center md:opacity-100 md:transition-none h-0 opacity-0">
              <!--[-->
              <span
                class="foo-1-state  cursor-pointer pt-8 transition-all duration-300 md:pl-8 md:pt-0 hover:text-white hidden opacity-0 md:block md:opacity-100">Products</span>
              <span
                class="foo-2-state  cursor-pointer pt-8 transition-all duration-300 md:pl-8 md:pt-0 hover:text-white hidden opacity-0 md:block md:opacity-100">Resource</span>
              <span
                class="foo-3-state  cursor-pointer pt-8 transition-all duration-300 md:pl-8 md:pt-0 hover:text-white hidden opacity-0 md:block md:opacity-100">Support</span>
              <span
                class="foo-4-state  cursor-pointer pt-8 transition-all duration-300 md:pl-8 md:pt-0 hover:text-white hidden opacity-0 md:block md:opacity-100">Explore</span>
            </li>
          </ul>
        </div>
        <ul class="flex h-[4rem] items-center gap-4 text-xl text-white/50">
          <!--[--><!--]-->
          <li>
            <a href="https://shop.zimaboard.com" rel="noopener noreferrer" target="_blank"
              class="flex h-8 items-center bg-zima-yellow px-3 text-base text-black hover:brightness-110 active:brightness-90">
              Store
            </a>
          </li>
          <li class="md:hidden">
            <button class="flex items-center" id="nav_panel_switch">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                role="img" class="icon" style="" width="1em" height="1em" viewBox="0 0 24 24" data-v-8f29132a="">
                <path id="nav_panel_switch_off" fill="currentColor" d="M3 18v-2h18v2zm0-5v-2h18v2zm0-5V6h18v2z"></path>
                <path id="nav_panel_switch_on" class="hidden" fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z"></path>
              </svg>
            </button>
          </li>
        </ul>
      </div>
    </div>
    <div
      class="fixed top-0 z-50 w-full transition-[opacity] duration-300 md:z-30 bg-[#111111] text-white backdrop-blur-lg md:bg-[#111111]/25 p-0">
      <div class="cancel-nav-trigger bg-[#111111]/10 md:bg-[#111111]/70 md:transition-all md:duration-500 md:pt-0">

        <div
          class="foo-1 gpx mx-auto max-w-screen-xl animate-fade-right pb-10 pt-6 animate-duration-300 md:animate-fade hidden mt-16 md:mt-0">
          <button class="pb-8 text-2xl text-white">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
              role="img" class="icon -ml-1" style="" width="1em" height="1em" viewBox="0 0 24 24" data-v-8f29132a="">
              <path fill="currentColor" d="m10 18l-6-6l6-6l1.4 1.45L7.85 11H20v2H7.85l3.55 3.55z"></path>
            </svg>
          </button>
          <h3 class="pb-4 opacity-50">Products</h3>
          <ul class="flex flex-col gap-4">
            <!--[-->
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://www.zimaspace.com/products/cube-personal-cloud?utm_source=head&amp;utm_medium=menu" class="">ZimaCube</a>
            </li>
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://www.zimaspace.com/products/single-board-server?utm_source=head&amp;utm_medium=menu" class="">ZimaBoard</a>
            </li>
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://www.zimaspace.com/products/blade-personal-nas?utm_source=head&amp;utm_medium=menu" class="">ZimaBlade</a>
            </li>
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://shop.zimaboard.com/collections/zima-accessories?utm_source=head&amp;utm_medium=menu"
                rel="noopener noreferrer">Accessories</a>
            </li>
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://www.casaos.io?utm_source=head&amp;utm_medium=menu" rel="noopener noreferrer">CasaOS</a>
            </li>
            <!--]-->
          </ul>
        </div>

        <div
          class="foo-2 gpx mx-auto max-w-screen-xl animate-fade-right pb-10 pt-6 animate-duration-300 md:animate-fade hidden mt-16 md:mt-0">
          <button class="pb-8 text-2xl text-white">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
              role="img" class="icon -ml-1" style="" width="1em" height="1em" viewBox="0 0 24 24" data-v-8f29132a="">
              <path fill="currentColor" d="m10 18l-6-6l6-6l1.4 1.45L7.85 11H20v2H7.85l3.55 3.55z"></path>
            </svg>
          </button>
          <h3 class="pb-4 opacity-50">Resource</h3>
          <ul class="flex flex-col gap-4">
            <!--[-->
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://docs.zimaboard.com/?utm_source=head&amp;utm_medium=menu"
                rel="noopener noreferrer">Docs</a>
            </li>
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://www.zimaboard.com/blog/?utm_source=head&amp;utm_medium=menu"
                rel="noopener noreferrer">Blog</a>
            </li>
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://www.zimaboard.com/blog/category/media-servers?utm_source=head&amp;utm_medium=menu"
                rel="noopener noreferrer">Media Servers</a>
            </li>
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://www.zimaboard.com/blog/category/personal-nas?utm_source=head&amp;utm_medium=menu"
                rel="noopener noreferrer">Personal NAS</a>
            </li>
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://www.zimaboard.com/blog/category/ad-blocker?utm_source=head&amp;utm_medium=menu"
                rel="noopener noreferrer">Ad Blocker</a>
            </li>
            <!--]-->
          </ul>
        </div>

        <div
          class="foo-3 gpx mx-auto max-w-screen-xl animate-fade-right pb-10 pt-6 animate-duration-300 md:animate-fade hidden mt-16 md:mt-0">
          <button class="pb-8 text-2xl text-white">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
              role="img" class="icon -ml-1" style="" width="1em" height="1em" viewBox="0 0 24 24" data-v-8f29132a="">
              <path fill="currentColor" d="m10 18l-6-6l6-6l1.4 1.45L7.85 11H20v2H7.85l3.55 3.55z"></path>
            </svg>
          </button>
          <h3 class="pb-4 opacity-50">Support</h3>
          <ul class="flex flex-col gap-4">
            <!--[-->
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://discord.gg/f9nzbmpMtU?utm_source=head&amp;utm_medium=menu"
                rel="noopener noreferrer">Discord</a>
            </li>
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://icewhale.community?utm_source=head&amp;utm_medium=menu"
                rel="noopener noreferrer">Community</a>
            </li>
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://www.zimaspace.com/support/contact?utm_source=head&amp;utm_medium=menu" class="">Contact</a>
            </li>
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://www.zimaspace.com/support/refund-policy?utm_source=head&amp;utm_medium=menu" class="">Refund Policy</a>
            </li>
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://www.zimaspace.com/support/privacy-policy?utm_source=head&amp;utm_medium=menu" class="">Privacy Policy</a>
            </li>
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://www.zimaspace.com/support/terms-of-service?utm_source=head&amp;utm_medium=menu" class="">Terms of Service</a>
            </li>
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://www.zimaspace.com/support/shipping-policy?utm_source=head&amp;utm_medium=menu" class="">Shipping Policy</a>
            </li>
            <!--]-->
          </ul>
        </div>

        <div
          class="foo-4 gpx mx-auto max-w-screen-xl animate-fade-right pb-10 pt-6 animate-duration-300 md:animate-fade hidden mt-16 md:mt-0">
          <button class="pb-8 text-2xl text-white">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
              role="img" class="icon -ml-1" style="" width="1em" height="1em" viewBox="0 0 24 24" data-v-8f29132a="">
              <path fill="currentColor" d="m10 18l-6-6l6-6l1.4 1.45L7.85 11H20v2H7.85l3.55 3.55z"></path>
            </svg>
          </button>
          <h3 class="pb-4 opacity-50">Explore</h3>
          <ul class="flex flex-col gap-4">
            <!--[-->
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://discord.gg/f9nzbmpMtU?utm_source=head&amp;utm_medium=menu" rel="noopener noreferrer">Made
                with IceWhale</a>
            </li>
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://icewhale.community?utm_source=head&amp;utm_medium=menu"
                rel="noopener noreferrer">Community</a>
            </li>
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://www.zimaspace.com/about?utm_source=head&amp;utm_medium=menu" class="">About Us</a>
            </li>
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://www.zimaboard.com/blog/?utm_source=head&amp;utm_medium=menu"
                rel="noopener noreferrer">Blog</a>
            </li>
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://www.zimaspace.com/distributors?utm_source=head&amp;utm_medium=menu" class="">Distributors</a>
            </li>
            <li class="transition-transform duration-300 hover:translate-x-1">
              <a href="https://www.zimaspace.com/affiliate?utm_source=head&amp;utm_medium=menu" class="">Affiliate</a>
            </li>
            <!--]-->
          </ul>
        </div>

      </div>
    </div>
  </header>