<?php get_header(); ?>
<?php

// if ( have_posts() ) {
// 	// 获取所有类别
// 	$categories = get_categories();

// 	// 循环遍历所有类别
// 	foreach ($categories as $category) {
	
// 		// 获取当前类别的 ID
// 		$cat_name = $category->name;
// 		$cat_path = './template-parts/index/' . str_replace( ' ', '-', $cat_name );

// 		if (file_exists($cat_path.'php')) {
// 			get_template_part( $cat_path, get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
// 		} else {
// 			echo '路径不存在。';
// 		}


// 	}

// } else {

// 	// If no content, include the "No posts found" template.
// 	get_template_part( 'template-parts/index/content-none' );

// }

get_template_part( 'template-parts/index/blog' );

?>
<?php get_footer(); ?>