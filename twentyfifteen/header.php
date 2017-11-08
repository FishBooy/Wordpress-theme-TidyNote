<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site site-column">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div class="site-header clear-fix">
		<?php twentyfifteen_the_custom_logo();?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home-link" rel="home">
            <img src="images/header-logo.png" style="width: 40px;">
            <span><?php bloginfo( 'name' ); ?></span>
        </a>
        <div class="top-menus">
            <a class="top-menus-trigger" id="top-menus-trigger"><i class="iconfont icon-menu"></i></a>
            <ul class="top-menus-list" id="top-menus-list">
                <li><a href=""><i class="iconfont icon-recent"></i> 最新</a></li>
                <li><a href=""><i class="iconfont icon-file"></i> 分类</a></li>
                <li><a href=""><i class="iconfont icon-text"></i> 所有</a></li>
            </ul>
        </div>
	</div><!-- .sidebar -->


	
