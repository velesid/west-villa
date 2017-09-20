<?php
/**
 * Template Name: News
 */
?>

<?php include_once(get_template_directory() . '/template-parts/frame-top.php') ?>
<style>
    .start-page > img {
        margin: 13px;
    }
</style>



<div class="block-news">
    <img src="<?= get_template_directory_uri(); ?>/library/photo/news.jpg" alt="">
    <div class="title-new">
        <h1>НОВОСТИ</h1>
    </div>

    <div class="article-wrapper">

        <div class="owl-carousel">
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
                            the_excerpt();
                        ?>
                    </div>
                </div>
                </a>
            <?php endwhile; ?>

        </div> <!-- Owl-End -->
    </div> <!-- article-wrapper-End -->
</div> <!-- block-news-End -->

<script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/owl.carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/OwlCarousel2Thumbs.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/owl-carousel/js/news-page-owl.js"></script>
</body>
</html>
