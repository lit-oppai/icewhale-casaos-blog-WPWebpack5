<?php
$part_slug = $args['slug'];
$part_name = $args['name'];
$id = $args['id'];


$args = array(
	'category_name' => $part_slug,
	'posts_per_page' => 3,
	'orderby' => 'post_date',
	'order' => 'DESC'
);
$category_posts = get_posts($args);
?>

<section class="mb-12 slideshow-article" id="<?php echo $id ?>">
	<div class="flex justify-between headline mb-4 items-center">
		<div class="title grow"><?php echo $part_name ?></div>
		<button class="swiper-button-prev shrink w-10 h-10">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/fonts/icon/swiper-button-prev.svg" />
		</button>
		<button class="swiper-button-next shrink w-10 h-10 ml-4">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/fonts/icon/swiper-button-next.svg" />
		</button>
	</div>
	<div class="swiper">
		<div class="swiper-wrapper">
			<?php

			foreach ($category_posts as $post) :
				setup_postdata($post);
				$permalink = get_permalink($post->ID);
				$image = '';

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

				<div class="swiper-slide bgImg" style="background-image: url(<?php echo $image; ?>)">
					<div class="flex flex-col justify-end bgMask">
						<p class="article_tag">Ad Blocker</p>
						<a href="<?php echo $permalink; ?>" class="article_title my-2">
							<?php the_title(); ?>
						</a>
						<p class="flex article_info items-center">
							<img class="w-5 h-5 mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/fonts/zima/logo-dark.svg" />
							<?php the_author(); ?> - <?php echo get_the_date(); ?>
						</p>
					</div>
				</div>

			<?php endforeach; ?>
		</div>
		<div class="swiper-pagination"></div>
	</div>
</section>