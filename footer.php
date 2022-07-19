<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package profileto
 */

?>
</div>
<footer>
    <div class="container">
        <div class="row footerset">
            <div class="span4">
                <?php if (is_active_sidebar('footer_1')) : ?>
                    <?php dynamic_sidebar('footer_1'); ?>
                <?php endif; ?>
            </div>
            <div class="span4">
                <?php if (is_active_sidebar('footer_2')) : ?>
                    <?php dynamic_sidebar('footer_2'); ?>
                <?php endif; ?>
            </div>
            <div class="span4">
                <?php if (is_active_sidebar('footer_3')) : ?>
                    <?php dynamic_sidebar('footer_3'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <?php if (is_active_sidebar('sub_footer_copyright')) : ?>
                        <?php dynamic_sidebar('sub_footer_copyright'); ?>
                    <?php endif; ?>

                </div>


            </div>
        </div>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer();

?>


</body>
</html>
