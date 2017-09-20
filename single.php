<?php include_once(get_template_directory() . '/template-parts/frame-top.php') ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/news-content.css"
      rel="stylesheet" media="screen,projection"/>


<div class="block-news">
    <img src="<?= get_template_directory_uri(); ?>/library/photo/news.jpg" alt="">

    <div class="article-wrapper">

            <?php while ( have_posts() ) : the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="article-left">
                        <div class="article-date-left">
                            <?php
                            the_date();
                            ?>
                        </div>
                        <div class="content-left-title">
                            <?php
                            the_title();
                            ?>
                        </div>
                        <div class="content-left-text">
                            <?php
                            the_content();
                            ?>
                        </div>
                    </div>
                </a>
            <?php endwhile; ?>




    </div> <!-- article-wrapper-End -->
</div> <!-- block-news-End -->

<script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/owl.carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/OwlCarousel2Thumbs.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/news-page-owl.js"></script>
</body>
</html>

