<?php
/**
 * Block template file: template-parts/blocks/homeSlider.php
 *
 * Home Slider Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'home-slider-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-home-slider';
if (!empty($block['className'])) {
    $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $classes .= ' align' . $block['align'];
}
?>
<section id="featured">

    <!-- slideshow start here -->

    <div class="camera_wrap" id="camera-slide">
        <?php if (have_rows('home-slider')) : ?>
        <?php while (have_rows('home-slider')) : the_row(); ?>
        <!-- slide 1 here -->
        <?php if (have_rows('slider')) : ?>
            <?php while (have_rows('slider')) : the_row(); ?>
        <div data-src="<?php the_sub_field('background-image'); ?>">
            <div class="camera_caption fadeFromLeft">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <h2 class="animated fadeInDown"><?php the_sub_field('title'); ?></h2>
                            <p class="animated fadeInUp"> <?php the_sub_field('text'); ?></p>
                            <a href="<?php the_sub_field('left-button-link'); ?>" class="btn btn-success btn-large animated fadeInUp">
                                <i class="icon-link"></i> <?php the_sub_field('left-button-text'); ?>
                            </a>
                            <a href="<?php the_sub_field('right-button-link'); ?>" class="btn btn-theme btn-large animated fadeInUp">
                                <i class="icon-download"></i> <?php the_sub_field('right-button-text'); ?>
                            </a>
                        </div>
                        <div class="span6">
                            <img src="<?php the_sub_field('front-image'); ?>" alt="" class="animated bounceInDown delay1 slideimage" />
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php
       endwhile;
       endif;

endwhile;
endif;
?>
    </div>

    <!-- slideshow end here -->

</section>