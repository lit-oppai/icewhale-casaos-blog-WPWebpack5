<?php

get_template_part('template-parts/index/header');
$cat = get_query_var('cat');
$cat_name = get_query_var('category_name');
$yourcat  = get_category( $cat );

?>
<div class="body">
	<main class="main">
		<section class="mb-12">
			<div class="flex justify-between headline mb-4 items-center">
				<div class="title"><?php echo $yourcat->name; ?> </div>
				<span class="badge">Total <?php get_category_count($cat_name); ?> articles</span>
			</div>
			<div class="is-grid-card">

				<?php
				$args = array(
					'category_name' => $cat_name,
					'posts_per_page' => -1,
					'order' => 'DESC'
				);
				$category_posts = get_posts($args);
				foreach ($category_posts as $post) :
					setup_postdata($post);
					$permalink = get_permalink($post->ID);
				?>

					<div class="card cate-list">
						<?php
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
						<a href="<?php echo $permalink; ?>">
							<img alt='' class='tipoc' src='<?php echo $image; ?> ' />
						</a>
						<div class="copywriters p-4 flex flex-col">
							<p class="pre_title"><?php echo $cat_name; ?></p>
							<a class="title my-2 line-clamp-2 text-ellipsis grow cursor-pointer" href="<?php echo $permalink; ?>">
								<?php echo get_the_title(); ?>
							</a>
							<p class="flex author items-center">
								<img class="w-5 h-5 mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/fonts/zima/logo.svg" />
								<?php the_author(); ?> - <?php echo get_the_date(); ?>
							</p>
						</div>
					</div>

				<?php
				endforeach;
				wp_reset_postdata();
				?>

			</div>
		</section>
	</main>
</div>
<?php get_template_part('template-parts/index/footer'); ?>