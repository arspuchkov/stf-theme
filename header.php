<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Screenr
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
     <title><?php bloginfo('name'); ?><?php wp_title('|');?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <div class="desktop-header container">
        <div class="col-lg-12 col-xs-12  logo-row">
            <div class="col-sm-4 col-xs-4 logo">
                <?= get_custom_logo();?>
            </div>
            <nav class="col-sm-8 navbar hidden-md hidden-sm hidden-xs">
                <?php
                $args = array(
                    'theme_location' => 'header_menu'
                );
                wp_nav_menu($args); ?>
            </nav>
        </div>
        <div class="col-sm-8 col-md-8 hidden-lg  burg-row">
            <img class="visible-sm visible-md visible-xs burg" src="<?= DIR_URI?>/images/burg.svg" alt="burg">
        </div>
    </div>

    <section class="mobile-menu">
         <div class="mobile-row">
              <div class="logo">
                   <?= get_custom_logo();?>
              </div>
              <div class="control">
                   <img src="<?= DIR_URI?>/images/close.svg" alt="close">
              </div>
         </div>
        <div class="menu-bg wow fadeInLeft" data-wow-delay="1.7s" style="background-color: #f2d8ce"></div>
        <ul class="mobile-menu-items wow fadeInDown" data-wow-delay="0.7s">
            <li><a href="<?php echo get_home_url();?>">HOME</a></li>
            <li><a href="/lookbook">LOOKBOOK</a></li>
            <li><a href="/stockist">STOCKISTS</a></li>
            <li><a href="/contact">CONTACT</a></li>
        </ul>
    </section>
</header>


