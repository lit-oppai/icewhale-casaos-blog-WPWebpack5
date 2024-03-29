<?php
$part_slug = $args['slug'];
$part_name = $args['name'];
$id = $args['id'];


$args = array(
	'category_name' => $part_slug,
	'posts_per_page' => 2
);
$category_posts = get_posts($args);

// Get the ID of a given category
$category_id = get_cat_ID($part_name);

// Get the URL of this category
$category_link = get_category_link($category_id);
?>

<section class="mb-12" id="<?php echo $id ?>">
	<div class="flex justify-between headline mb-4 items-center">
		<div class="title"><?php echo $part_name ?> <span class="badge">Total <?php get_category_count($part_slug); ?> articles</span></div>
		<a href="<?php echo esc_url($category_link); ?>">
			<button class="operation">View All</button>
		</a>
	</div>
	<div class="flex items-center justify-evenly is-grid-poster-wall feature-article">

		<?php

		foreach ($category_posts as $post) :
			setup_postdata($post);
			$permalink = get_permalink($post->ID);
			$image = "";

			if (has_post_thumbnail()) {
				// 获取特色图片
				$image = get_the_post_thumbnail_url();
			} else {
				$excerpt = $post->post_excerpt ? $post->post_excerpt : $post->post_content;

				preg_match('/<img.+?src="(.+?)"/', $excerpt, $matches);
				$image = $matches[1];
			}

			if (!$image) {
				$image = get_template_directory_uri() . '/img/pro_items/1.webp';
			}
		?>

			<div class="bgImg flex flex-col" style="background-image: url(<?php echo $image; ?>)">
				<p class="article_tag mb-4">Ad Blocker</p>
				<a href="<?php echo $permalink; ?>" class="article_title grow">
					<?php echo get_the_title(); ?>
				</a>
				<p class="flex article_info items-center shrink">
					<img class="w-5 h-5 mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/fonts/zima/logo-dark.svg" />
					<?php the_author(); ?> - <?php echo get_the_date(); ?>
				</p>
			</div>

		<?php
		endforeach;
		wp_reset_postdata();
		?>
	</div>
</section>