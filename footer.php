<footer class="site-footer footer-large footer-dark text-white default-footer footer-style1" style="display: block; height: 576.75px;">
    <!-- FOOTER BLOCKES START -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div id="custom_html-4" class="widget_text col-lg-3 col-md-6 col-sm-12 widget_custom_html dronza-widget">
                    <div class="widget_text widget footer-widget">
                        <div class="textwidget custom-html-widget">
                            <div class="widget recent-posts-entry">
                                <h4 class="widget-title"><a href="https://www.zimaboard.com/contact">Contact Us</a></h4>
                                <ul class="widget_address">
                                    <li><i class="fa fa-map-marker"></i><a href="https://www.zimaboard.com/contact">X-NODE Space, 4F, 800 NaXian Road, Shanghai, P.R.C</a></li>
                                    <li><i class="fa fa-envelope"></i><a href="mailto:info@icewhale.org">info@icewhale.org</a></li>
                                    <li> <i class="fa fa-phone"></i><a href="tel:+86-13774231816">+86 137 7423 1816</a></li>
                                </ul>
                            </div>

                            <style>
                                .widget .widget-title a:link,
                                .widget .widget-title a:hover,
                                .widget .widget-title a:visited,
                                .widget .widget-title a:active {
                                    color: #ffffff;
                                }

                                .widget .widget_address a:link,
                                .widget .widget_address a:visited,
                                .widget .widget_address a:active {
                                    color: #999;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <div id="nav_menu-2" class="col-lg-3 col-md-6 col-sm-12 widget_nav_menu dronza-widget">
                    <div class="widget footer-widget">
                        <h4 class="widget-title">Useful Links</h4>
                        <div class="menu-useful-links-container">
                            <ul id="menu-useful-links" class="menu">
                                <li id="menu-item-1163" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1163"><a href="https://www.zimaboard.com/about/product">ZimaBoard</a></li>
                                <li id="menu-item-1241" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1241"><a href="https://discord.gg/Gx4BCEtHjx">Discord</a></li>
                                <li id="menu-item-1239" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1239"><a href="https://www.casaos.io/">CasaOS</a></li>
                                <li id="menu-item-1279" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1279"><a href="https://www.zimaboard.com/distributors">Distributors</a></li>
                                <li id="menu-item-1296" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1296"><a href="https://www.zimaboard.com/contact">Contact Us</a></li>
                                <li id="menu-item-2069" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2069"><a href="https://www.zimaboard.com/affiliate">Affiliate</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="recent_posts_entry-2" class="col-lg-3 col-md-6 col-sm-12 widget_recent_posts_entry dronza-widget">
                    <div class="widget footer-widget">
                        <div class="recent-posts-entry">
                            <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 2,
                                'order' => 'DESC'
                            );
                            $the_query = new WP_Query($args);
                            ?>
                            <h4 class="widget-title">Recent Post</h4>
                            <div class="section-content">
                                <div class="widget-post-bx">
                                    <?php while ($the_query->have_posts()) : $the_query->the_post();  ?>

                                        <div class="widget-post clearfix">
                                            <div class="wt-post-media">
                                                <?php if(has_post_thumbnail()) : ?>
                                                <div class="wt-post-media wt-img-effect clear zoom-slow">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" 
                                                        class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy" width="80" height="80"> 
                                                    </a>
                                                </div>
                                                <?php endif ?>
                                            </div>
                                            <div class="wt-post-info" style="<?php if(has_post_thumbnail()){echo 'min-height:80px';} ?>">
                                                <div class="wt-post-meta">
                                                    <ul>
                                                        <li class="post-author"><?php the_time('j F'); ?></li>
                                                    </ul>
                                                </div>
                                                <div class="wt-post-header">
                                                    <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endwhile; ?>

                                    <!-- <div class="widget-post clearfix">
                                        <div class="wt-post-media">
                                        </div>
                                        <div class="wt-post-info">
                                            <div class="wt-post-meta">
                                                <ul>
                                                    <li class="post-author">06 June</li>
                                                </ul>
                                            </div>
                                            <div class="wt-post-header">
                                                <a href="https://www.zimaboard.com/blog/casaos-successful-case-story-simplifies-docker-for-a-seamless-experience.html" class="post-title">CasaOS Successful Case Story-Simplifies Docker for a Seamless Experience</a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php wp_reset_postdata(); ?>
                </div>
                <div id="custom_html-2" class="widget_text col-lg-3 col-md-6 col-sm-12 widget_custom_html dronza-widget">
                    <div class="widget_text widget footer-widget">
                        <h4 class="widget-title">Keep In Touch</h4>
                        <div class="textwidget custom-html-widget">
                            <div class="widget widget_newsletter">
                                <p>Join our subscribers list to get the latest news, updates and special offers.</p>
                                <div class="newsletter-input">
                                    <form class=" validate" action="https://gmail.us2.list-manage.com/subscribe/post?u=f78b71ceb3f6e97b84a70d168&amp;id=acfeda8784" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                                        <div class="input-group">
                                            <input id="mce-EMAIL" type="email" class="form-control" name="EMAIL" placeholder="Enter your email">
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                                <input type="text" name="b_f78b71ceb3f6e97b84a70d168" tabindex="-1" value="">
                                            </div>
                                            <div class="input-group-append">
                                                <button type="submit" class="mc-button input-group-text nl-search-btn text-black mc-button site-bg-primary title-style-2">Subscribe</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script src="https://www.zimaboard.com/js/jquery.formchimp.js"></script>

                            <script>
                                isSubmiting = false;

                                function resetButton() {
                                    jQuery(".mc-button").removeClass("disabled");
                                    jQuery(".mc-button").val("Subscribe");
                                    isSubmiting = false;
                                }
                                var option = {
                                    debug: true,
                                    buttonSelector: ".mc-button",
                                    onMailChimpError: function() {
                                        resetButton();
                                        Swal.fire({
                                            icon: 'error',
                                            html: this.msg,
                                            confirmButtonColor: "#f1b335"
                                        })
                                    },
                                    onMailChimpSuccess: function() {
                                        jQuery(".email").val("");
                                        resetButton();
                                        Swal.fire({
                                            icon: 'success',
                                            html: this.msg,
                                            confirmButtonColor: "#f1b335"
                                        })
                                    },
                                }


                                jQuery(".mc-button").on("click", function() {
                                    if (isSubmiting) {
                                        return false;
                                    }
                                    isSubmiting = true;
                                    jQuery(this).addClass("disabled")
                                    jQuery(this).val("Submitting")
                                })

                                jQuery("#mc-embedded-subscribe-form").formchimp(option);
                            </script>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- FOOTER COPYRIGHT -->

    <div class="footer-middle">
        <div class="container">
            <div class="footer-middle-content">
                <div class="logo-footer">
                    <a href="https://www.zimaboard.com/blog"><img src="https://www.zimaboard.com/blog/wp-content/uploads/2021/05/logo_r.svg" alt="home image"></a>
                </div>
                <ul id="menu-footer-menu" class="copyrights-nav">
                    <li id="menu-item-137" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-137"><a href="https://www.zimaboard.com/blog/post/privacy-policy.html">Privacy Policy</a></li>
                </ul>
                <ul class="social-icons  wt-social-links footer-social-icon">
                    <li><a href="https://twitter.com/zimaboard" class="fa fa-twitter"></a></li>
                    <li><a href="https://www.facebook.com/zimaboard/" class="fa fa-facebook"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="wt-footer-bot-left d-flex justify-content-center">
                <span class="copyrights-text">Copyright © 2023 ZimaBoard Technology Co.,Ltd. All Rights Reserved</span>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>