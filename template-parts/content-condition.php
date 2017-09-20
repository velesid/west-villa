<?php
/*
Template Name: condition
*/
$thememove_page_layout_private = get_post_meta( get_the_ID(), "thememove_page_layout_private", true );
if ( $thememove_page_layout_private != 'default' ) {
    $layout = get_post_meta( get_the_ID(), "thememove_page_layout_private", true );
} else {
    $layout = get_theme_mod( 'site_layout', site_layout );
}
get_header( 'blank' );
?>

<?php if ( $layout == 'full-width' ) { ?>
    <?php include_once( get_template_directory() . '/template-parts/frame-top-no-head.php') ?>
    <div class="content-wrapper">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
    <?php include_once( get_template_directory() . '/template-parts/frame-bottom-no-head.php') ?>
<?php } else { ?>
    <?php include_once( get_template_directory() . '/template-parts/frame-top.php') ?>
    <style>
        body{
            padding: 24px 40px !important;
        }
    </style>
    <div class="content-wrapper condition-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
<?php include_once( get_template_directory() . '/template-parts/frame-bottom-no-head.php') ?>
<?php } ?>
<?php get_footer( 'blank' ); ?>
