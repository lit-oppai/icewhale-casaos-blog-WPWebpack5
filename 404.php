<?php http_response_code(404); ?>
<?php get_header(); ?>
<div class="fullpage_message">
  <div class="content">
    <h1>#404</h1>
    <h2><?php echo __('There is no such page!', 'webpack5-theme'); ?></h2>
  </div>
</div>
<?php get_footer(); ?>