<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package profileto
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="stylesheet" href="<?php echo PROFILETO_THEME_URI ;?>/assets/font-awesome/css/font-awesome.min.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div id="page" class="site">


    <header id="masthead" class="site-header">
        <div class="top">
            <div class="container">
                <div class="row preeheader">
                    <?php $headerPhone = get_field('phone','option');
                    $headerfacebook = get_field('facebook','option');
                    $headertwitter = get_field('twitter','option');
                    $headerlinkedin= get_field('linkedin','option');
                    $headerpinterest= get_field('pinterest','option');
                    $headergooglepluse= get_field('googlepluse','option');
                    $headerdribble= get_field('dribble','option');

                    ?>
                    <div class="span6">
                        <?php   if ($headerPhone): ?>
                            <p class="topcontact"><i class="icon-phone"></i> <?php echo $headerPhone?></p>
                        <?php endif; ?>

                    </div>
                    <div class="span6">

                        <ul class="social-network">

                            <?php   if ($headerfacebook): ?>
                                <li><a href="<?php echo $headerfacebook?>" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-white"></i></a></li>
                            <?php endif; ?>

                            <?php   if ($headertwitter): ?>
                                <li><a href="<?php echo $headertwitter?>" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-white"></i></a></li>
                            <?php endif; ?>

                            <?php   if ($headerlinkedin): ?>
                                <li><a href="<?php echo $headerlinkedin?>" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-white"></i></a></li>
                            <?php endif; ?>

                            <?php   if ($headerpinterest): ?>
                                <li><a href="<?php echo $headerpinterest?>" data-placement="bottom" title="Pinterest"><i class="icon-pinterest  icon-white"></i></a></li>
                            <?php endif; ?>
                            <?php   if ($headergooglepluse): ?>
                                <li><a href="<?php echo $headergooglepluse?>" data-placement="bottom" title="Google +"><i class="icon-google-plus icon-white"></i></a></li>
                            <?php endif; ?>

                            <?php   if ($headerdribble): ?>
                                <li><a href="<?php echo $headerdribble?>" data-placement="bottom" title="Dribbble"><i class="icon-dribbble icon-white"></i></a></li>
                            <?php endif; ?>


                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">


            <div class="row nomargin">
                <div class="span4">
                    <div class="logo">
                        <?php $HeaderLogo = get_field('logo_header','option');
                        $BachgroundHeaderLogo = get_field('logo-background','option');
                        if ($HeaderLogo) :
                            ?>
                            <a href="index.html"><img src="<?php echo $HeaderLogo ;?>" alt="" style="background-color: <?php echo $BachgroundHeaderLogo; ?> " /></a>
                        <?php else:?>
                            <a href=""><img src="" alt="" /></a>
                        <?php endif;?>
                    </div>
                </div>
                <div class="span8">
                    <div class="navbar navbar-static-top">
                        <div class="navigation">
                            <nav>


                            <?php

                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                    'container'            => '',
                                    'container_class'      => 'nav topnav',
                                    'container_id'         => '',
                                    'container_aria_label' => '',
                                    'menu_class'           => 'nav topnav',
                                    'echo'                 => true,
                                    'fallback_cb'          => 'wp_page_menu',
                                    'before'               => '',
                                    'after'                => '',
                                    'link_before'          => '',
                                    'link_after'           => '',
                                    'item_spacing'         => 'preserve',
                                    'depth'                => 0,
                                    'walker'               => '',
                                )
                            )
                            ?>
                            </nav>
                        </div>
                        <!-- end navigation -->
                    </div>
                </div>
            </div>
        </div>




    <?php

           ?>

    </header>
