<!doctype html>
<html lang="de">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
    <meta name="description" content="Kühle-Webdesign in Berlin erstellt füt Ihr Unternehmen eine Professionelle Webseite!" >
	<?php wp_head(); ?>
</head>
<?php $args = array(
	'theme_location'  => 'mobilemenu',
	'container'       => 'nav',
	'container_class' => 'mobile-nav',
	'container_id'    => 'mobile-nav'
); wp_nav_menu( $args ); ?>
<div class="canvasWrap">
    <body <?php body_class(); ?>>
<header class="header">
    <div class="topBar">
        <button class="toggle nav-button icon-ellipsis-h"></button>
        <div class="infos">
            <span class="header-logo-box">
                        <object class="logo" width="75" data="<?php echo bloginfo( 'url' ) ?>/wp-content/uploads/2017/07/logo.svg" type="image/svg+xml">Kühle-Webdesign</object>
                </span>
            <span class="designloper">Webdesigner & Webentwickler</span>
            <span class="phone"><span class="icon-phone"></span><?php echo get_option( 'kwd_setting_phone' ) ?></span>
        </div>
        <div class="mobileLogo">
            <object class="logo" width="60" data="<?php echo get_template_directory_uri() . '/assets/images/whiteLogo.svg'?>" type="image/svg+xml">Kühle-Webdesign</object>
        </div>
		<?php $args = array(
			'theme_location'  => 'mainmenu',
			'container'       => 'nav',
			'container_class' => 'main-nav',
			'container_id'    => 'main-nav'
		);
		wp_nav_menu( $args ); ?>
    </div>
</header>