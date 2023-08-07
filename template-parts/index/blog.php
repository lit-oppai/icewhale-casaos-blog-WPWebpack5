<div class="body">
  <aside class="left" style="width: 200px">
    <ul>
      <li class="content-ref flex ml-10 cursor-pointer" data-content-id="content1">
        <img class="mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/fonts/icon/line.svg" /> Latest News
      </li>
      <li class="content-ref flex ml-10 cursor-pointer" data-content-id="content2">
        <img class="mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/fonts/icon/line.svg" /> Reviews
      </li>
      <li class="content-ref flex ml-10 cursor-pointer" data-content-id="content3">
        <img class="mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/fonts/icon/line.svg" /> Media Servers
      </li>
      <li class="content-ref flex ml-10 cursor-pointer" data-content-id="content4">
        <img class="mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/fonts/icon/line.svg" /> AD Blocker
      </li>
      <li class="content-ref flex ml-10 cursor-pointer" data-content-id="content5">
        <img class="mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/fonts/icon/line.svg" /> Personal NAS
      </li>
      <li class="content-ref flex ml-10 cursor-pointer" data-content-id="content6">
        <img class="mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/fonts/icon/line.svg" /> Featured Posts
      </li>
    </ul>
  </aside>
  <main class="main">
    <?php get_template_part('template-parts/index/latest-news', '', ['slug' => 'latest-news', 'name' => 'Latest News', 'id' => 'content1']); ?>

   <?php get_template_part('template-parts/index/list-card', '', ['slug' => 'reviews', 'name' => 'Reviews', 'id' => 'content2']); ?>

   <?php get_template_part('template-parts/index/list-card', '', ['slug' => 'media-servers', 'name' => 'Media Servers', 'id' => 'content3']); ?>

   <?php get_template_part('template-parts/index/ad-blocker', '', ['slug' => 'ad-blocker', 'name' => 'Ad Blocker', 'id' => 'content4']); ?>

    <?php get_template_part('template-parts/index/list-card', '', ['slug' => 'personal-nas', 'name' => 'Personal NAS', 'id' => 'content5']); ?>

    <?php get_template_part('template-parts/index/list-card', '', ['slug' => 'featured-posts', 'name' => 'Featured Posts', 'id' => 'content6']); ?>

  </main>
</div>