<?php


$sets = array('icon-bgprimary','icon-bgdanger','icon-bgsuccess','icon-bglight ');
?>
<section id="content">
    <div class="container">


        <div class="row">
            <div class="span12">
                <div class="row">
                    <?php if (have_rows('_icon_content')) : ?>
                    <?php while (have_rows('_icon_content')) :
                    the_row();
                            $num = rand(0,3);
                    $cls = $sets[$num];
                    ?>

                    <div class="span4">
                        <div class="box flyLeft">
                            <div class="icon">
                                <i class="ico icon-circled  <?php echo ' '.$cls.' ' ; the_sub_field('icon-classes'); ?> icon-3x"></i>
                            </div>
                            <div class="text">
                                <h4><?php the_sub_field('title'); ?></h4>
                                <p>
                                    <?php the_sub_field('content'); ?>
                                </p>
                                <a href="<?php the_sub_field('link-url'); ?>"><?php the_sub_field('link-text'); ?></a>
                            </div>
                        </div>
                    </div>

                        <?php
                        endwhile;
                    endif;
                    ?>

                </div>

            </div>
        </div>



