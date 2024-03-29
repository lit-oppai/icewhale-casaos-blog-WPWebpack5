<?php

/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<div class="layout-container">
	<!-- <div class=left>
	</div> -->
	<div class="body flex justify-center items-center flex-col">
		<div class="background" style="background-image:url(
			<?php
			$image = '';

			if (has_post_thumbnail($post)) {
				// 获取特色图片
				$image = get_the_post_thumbnail_url($post);
			} else {
				$excerpt = $post->post_excerpt ? $post->post_excerpt : $post->post_content;

				preg_match('/<img.+?src="(.+?)"/', $excerpt, $matches);
				$image = $matches[1];
			}

			echo $image
			?>)">
		</div>

		<?php

		if (have_posts()) {

			while (have_posts()) {
				the_post();
				get_template_part('template-parts/index/article', get_post_type(), ['slug' => 'ad-blocker', 'name' => 'Ad Blocker', 'id' => 'content4']);
			}
		}

		?>



	</div>
	<aside class="right">
		<div class="sticky">
			<div class="mb-8">
				<p class="title">Share This Article</p>
				<div class="flex">
					<a href="https://www.facebook.com/sharer.php?title=<?php the_title() ?>&u=<?php echo get_permalink() ?>" target="_blank">
						<svg class="icon" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="30" height="30" />
							<path d="M19.05 11.7684L18.7092 15H16.1261V24.375H12.246V15H10.3125V11.7684H12.246V9.82279C12.246 7.19449 13.339 5.625 16.446 5.625H19.0279V8.85662H17.4121C16.2066 8.85662 16.1261 9.31213 16.1261 10.1537V11.7684H19.05Z" fill="white" />
						</svg>
					</a>

					<a href="https://twitter.com/share?title=<?php the_title() ?>&url=<?php echo get_permalink() ?>" target="_blank">
						<svg class="icon" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="30" height="30" />
							<path d="M24.375 9.30325C23.6838 9.61012 22.9429 9.81617 22.164 9.90969C22.959 9.43331 23.5698 8.67927 23.8562 7.78203C23.1139 8.22188 22.2883 8.54191 21.4129 8.71434C20.7115 7.96616 19.712 7.5 18.6058 7.5C16.481 7.5 14.7582 9.22142 14.7582 11.3462C14.7582 11.6472 14.7932 11.9409 14.859 12.2229C11.6616 12.0622 8.82818 10.5307 6.92995 8.20289C6.59823 8.7728 6.40972 9.43331 6.40972 10.1377C6.40972 11.4718 7.08777 12.6496 8.12091 13.3408C7.48962 13.3204 6.89634 13.1465 6.37757 12.8586C6.37757 12.8747 6.37757 12.8908 6.37757 12.9068C6.37757 14.7715 7.70444 16.3248 9.46239 16.6799C9.1409 16.7676 8.80042 16.8144 8.4497 16.8144C8.20128 16.8144 7.96016 16.791 7.7249 16.7442C8.21589 18.2713 9.63628 19.3863 11.3182 19.4169C10.0031 20.4486 8.34449 21.0624 6.54124 21.0624C6.22998 21.0624 5.92457 21.0448 5.625 21.0083C7.32596 22.1014 9.3484 22.737 11.5214 22.737C18.597 22.737 22.4665 16.8757 22.4665 11.7933C22.4665 11.6267 22.4622 11.4587 22.4563 11.295C23.2074 10.7529 23.8592 10.0748 24.375 9.30325Z" fill="white" />
						</svg>
					</a>

					<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo get_permalink() ?>" target="_blank">
						<svg class="icon" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="30" height="30" />
							<path d="M10.3977 22.5H6.5625V10.9943H10.3977V22.5ZM8.48088 9.46023C7.42006 9.46023 6.5625 8.60037 6.5625 7.54185C6.5625 6.48332 7.42159 5.625 8.48088 5.625C9.53787 5.625 10.3977 6.48486 10.3977 7.54185C10.3977 8.60037 9.53787 9.46023 8.48088 9.46023ZM24.2045 22.5H20.5174V16.9006C20.5174 15.5651 20.492 13.8477 18.6005 13.8477C16.6806 13.8477 16.3853 15.302 16.3853 16.8039V22.5H12.6989V10.9859H16.238V12.5591H16.2879C16.7803 11.654 17.9838 10.6998 19.7787 10.6998C23.5142 10.6998 24.2045 13.0845 24.2045 16.1849V22.5Z" fill="white" />
						</svg>
					</a>

					<a href="mailto:?subject=<?php the_title() ?>&body=<?php echo get_permalink() ?>" target="_blank">
						<svg class="icon" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="30" height="30" />
							<path fill-rule="evenodd" clip-rule="evenodd" d="M15 15L23.4375 10.625V8.4375H6.5625V10.625L15 15ZM6.5625 21.5625V11.7188L15 16.0938L23.4375 11.7188V21.5625H6.5625Z" fill="white" />
						</svg>
					</a>

					<a href="https://www.tumblr.com/share?title=<?php the_title() ?>&u=<?php echo get_permalink() ?>" target="_blank">
						<svg class="icon" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="30" height="30" />
							<path d="M16.6447 23.8382C13.906 23.8382 11.8645 22.4288 11.8645 19.058V13.6583H9.375V10.7344C12.1137 10.0234 13.2602 7.66647 13.3916 5.625H16.2355V10.2612H19.5538V13.6594H16.2367V18.3607C16.2367 19.7701 16.9476 20.257 18.0804 20.257H19.6875V23.8393H16.6447V23.8382Z" fill="white" />
						</svg>
					</a>

					<a href="https://t.me/share/url?url=<?php echo get_permalink() ?>" target="_blank">
						<svg class="icon" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="30" height="30" />
							<path d="M6.86927 13.9575C11.7279 11.8406 14.9678 10.4451 16.5888 9.77083C21.2173 7.84569 22.1791 7.51127 22.8059 7.50011C22.9438 7.4978 23.2521 7.53196 23.4518 7.694C23.6204 7.83081 23.6668 8.01563 23.689 8.14535C23.7112 8.27506 23.7388 8.57056 23.7168 8.80145C23.466 11.4368 22.3807 17.8322 21.8286 20.7839C21.595 22.0328 21.1349 22.4516 20.6896 22.4926C19.7217 22.5816 18.9868 21.8529 18.0494 21.2385C16.5825 20.2769 15.7538 19.6783 14.3299 18.74C12.6844 17.6557 13.7511 17.0597 14.6889 16.0857C14.9343 15.8308 19.1987 11.952 19.2813 11.6001C19.2916 11.5561 19.3012 11.392 19.2037 11.3054C19.1063 11.2188 18.9624 11.2484 18.8587 11.272C18.7115 11.3054 16.3682 12.8542 11.8286 15.9186C11.1635 16.3753 10.561 16.5979 10.0212 16.5862C9.42611 16.5734 8.28141 16.2497 7.43044 15.9731C6.3867 15.6338 5.55715 15.4545 5.62938 14.8783C5.66701 14.5781 6.08031 14.2712 6.86927 13.9575Z" fill="white" />
						</svg>
					</a>
				</div>
			</div>

			<div>
				<p class="title">Content</p>
				<?php
				$args = array(
					'post_type'      => 'post',
					'posts_per_page' => 5,
					'order'          => 'DESC'
				);
				$query = new WP_Query($args);
				?>
				<?php
				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post();
				?>
						<p class="topic">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
							<span class="date"><?php echo get_the_date(); ?></span>
						</p>
				<?php
					endwhile;
				endif;
				?>
			</div>
		</div>
	</aside>
</div>



<!-- #site-content -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/article.min.js">

</script>
<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php
get_footer();
