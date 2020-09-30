<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
  
  <?php do_action('construct_before_site'); ?>
  	<?php 
	if ( function_exists( 'construct_contact_info' ) ) {
		construct_contact_info(); 
	}?>
	
    <!--Header builder BEGIN-->
<?php do_action('stm_hb', array('header' => 'cookiery-header')); ?>
<!--Header builder END-->
	
	<?php 
	if ( function_exists( 'construct_mobile_header' ) ) {
		//construct_mobile_header(); 
	}?>
	
	<div class="construct-banner-area">
		<?php if( is_front_page() ) : ?>
			<?php
				$banner_type = get_theme_mod('banner_type', 'image');
				if ( $banner_type == 'video' && is_front_page() ) :
					construct_banner_video();
				elseif ( $banner_type == 'carousel' && is_front_page() ) :
					construct_banner_slider();
				else :
					construct_banner_background();
				endif;
			?>
		<?php else : ?>
			<div class="other-header">
				<div class="header-content other">
					<?php if(function_exists('is_shop')) : ?>
						<h3 class="title-post entry-title"><?php wp_title(''); ?></h3>
					<?php else : ?>
						<h3 class="title-post entry-title"><?php wp_title(''); ?></h3>
					<?php endif; ?>
					<hr class="divider-separator"/>
					<?php if( get_theme_mod('show_breadcrumb', 1) != 0 ): ?>
					<div class = "breadcrumb" ><?php if (class_exists('WooCommerce')){
							( (is_woocommerce())? woocommerce_breadcrumb() :construct_get_breadcrumb() );
						}else{
							construct_get_breadcrumb();
						}?></div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
	
	<div id="content" class="page-wrap">
		<div class="content-wrapper">
			<div class="container">
