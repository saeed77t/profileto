<?php
/**
 * Block template file: template-parts/block/testemonials.php
 *
 * Testemonials Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testemonials-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-testemonials';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>


<div class="row">
    <div class="span12 aligncenter">
        <h3 class="title">نظرات <strong>کاربران </strong>ما </h3>
        <div class="blankline30"></div>

        <ul class="bxslider">
            <?php if ( have_rows( 'testemonials' ) ) : ?>
                <?php while ( have_rows( 'testemonials' ) ) : the_row(); ?>
                    <li>
                        <blockquote>
                            <?php the_sub_field( 'text' ); ?>
                        </blockquote>
                        <div class="testimonial-autor">
                            <img src="<?php the_sub_field( 'image' ); ?>" alt=""/>
                            <h4><?php the_sub_field( 'name' ); ?></h4>
                            <a href="#"><?php the_sub_field( 'website' ); ?></a>
                        </div>
                    </li>
                <?php
                endwhile;
            endif;
            ?>

        </ul>

    </div>
</div>
</div>
</section>

