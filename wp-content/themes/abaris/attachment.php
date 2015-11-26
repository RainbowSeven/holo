<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ABARIS
 */

get_header();?>
<div class="row">

    <?php if (isset($abaris['layout']) && $abaris['layout'] == 2): ?>
        <?php get_sidebar();?>
    <?php endif;?>

    <div id="primary" class="content-area two-thirds column span9">
        <main id="main" class="site-main" role="main">

        <?php if ($abaris['breadcrumb'] && function_exists('abaris_breadcrumbs')): ?>
            <div id="breadcrumb" role="navigation">
                <?php abaris_breadcrumbs();?>
            </div>
        <?php endif;?>

        <?php while (have_posts()): the_post();?>

				<?php get_template_part('content', 'single');?>

	            <?php

    $args = [
        'post_type' => 'attachment',
        'numberposts' => -1,
        'post_parent' => 42,
    ];
    //var_dump(get_posts(['post_type' => 'attachment']));
    $attachments = get_posts($args);
    //var_dump($attachments);
    echo wp_get_attachment_image($post->ID, 'full');
    echo '<p>';
    echo apply_filters('the_title', $attachment->post_title);
    echo '</p>';
    ?>

				<?php abaris_post_nav();?>


			<?php endwhile; // end of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

    <?php if (isset($abaris['layout']) && $abaris['layout'] == 3): ?>
        <?php get_sidebar();?>
    <?php endif;?>

    <?php if (!isset($abaris['layout'])): ?>
        <?php get_sidebar();?>
    <?php endif;?>

<?php get_footer();?>