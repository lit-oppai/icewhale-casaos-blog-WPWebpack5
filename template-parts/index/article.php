<?php
$cat_info = get_the_category(get_the_ID())[0];
?>




<main class="main article">
    <p class="reviews">
        <?php
        print_r($cat_info->name);
        ?>
    </p>
    <div class="title h1">
        <?php the_title(); ?>
    </div>
    <p class="flex article_info items-center mb-6">
        <img class="w-5 h-5 mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/fonts/zima/logo.svg" />
        <?php the_author(); ?> - <?php echo get_the_date(); ?>
    </p>
    <div class="article_content">
        <?php
        the_content();
        ?>
    </div>

    <!-- <section id="content6" class="mb-12">
        <div class="flex justify-between headline mb-4 items-center">
            <div class="title">Related Post</div>
            <button class="operation">View All</button>
        </div>
        <div class="flex justify-between">
            <div class="card">
                <img alt="" class="topic" src="/src/images/media_servers/1.png" />
                <div class="copywriters p-4">
                    <p class="pre_title">Reviews</p>
                    <p class="title my-2 line-clamp-2 text-ellipsis">
                        Top 10 Media Servers for Home Use In 2023
                    </p>
                    <p class="flex author items-center">
                        <img class="w-5 h-5 mr-2" src="/fonts/logo.svg" /> ZimaBoard - 01/06/2023
                    </p>
                </div>
            </div>
            <div class="card">
                <img alt="" class="w-72 h-41" src="/src/images/media_servers/2.png" />
                <div class="copywriters p-4">
                    <p class="pre_title">Reviews</p>
                    <p class="title my-2 line-clamp-2 text-ellipsis">
                        How to Choose and Setup a Media Server for Home
                    </p>
                    <p class="flex author items-center">
                        <img class="w-5 h-5 mr-2" src="/fonts/logo.svg" /> ZimaBoard - 01/06/2023
                    </p>
                </div>
            </div>
            <div class="card">
                <img alt="" class="w-72 h-41" src="/src/images/media_servers/3.png" />
                <div class="copywriters p-4">
                    <p class="pre_title">Reviews</p>
                    <p class="title my-2 line-clamp-2 text-ellipsis">
                        How to Set Up a Media Server with Plex
                    </p>
                    <p class="flex author items-center">
                        <img class="w-5 h-5 mr-2" src="/fonts/logo.svg" /> ZimaBoard - 01/06/2023
                    </p>
                </div>
            </div>
        </div>
    </section> -->

</main>
<div class="mt-16">
    <?php
    // print_r(get_queried_object());
    get_template_part('template-parts/index/list-card', '', ['slug' => $cat_info->slug, 'name' => $cat_info->name, 'id' => 'contentRelate']);
    ?>
</div>