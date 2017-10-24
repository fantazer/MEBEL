<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elite_mebel
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="yandex-verification" content="9b4806d3182dcdf6" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Cormorant+Infant:400,700|PT+Serif:400,700&amp;subset=cyrillic" rel="stylesheet"> 
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
						<div class="contacts">
							<div class="address"><i class="icon icon-map"></i>Москва, Советская д.36, стр.67 </div>
							<div class="phone"><i class="icon icon-tel"></i><a href="tel:+74955320370">+7 (495) 5320370</a></div>
							<div class="email"><i class="icon icon-mail"></i><a href="mailto:3dgroup.zakaz@mail.ru">3dgroup.zakaz@mail.ru</a></div>
							<div class="time-work">
								Время работы:<br>
								Пн-Пт. 9:00-21:00,<br>
								Сб-Вс. 11:00-18:00
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
						<div class="site-branding">
							<div class="logo"><a href="/"><img src="<?php echo get_template_directory_uri().'/img/logo.png'; ?>" alt="Логотип компании EliteMebel"></a></div>
						</div><!-- .site-branding -->
					</div>

					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 hidden-xs">
						<div class="other-block right">
							<div class="social-top">
								<a href="https://vk.com/myrabotaemrukami" class="icon icon-vk"></a>
								<a href="#" class="icon icon-fb"></a>
								<a href="#" class="icon icon-ok"></a>
								<a href="#" class="icon icon-yb"></a>
							</div>

							<?php // get_search_form(); ?>

							<a href="#" class="request-call" data-toggle="modal" data-target="#requestcall">Заказать звонок</a>
						</div>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->
				
			<div class="container-fluid">
				<div class="row">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="glyphicon glyphicon-align-justify"></i> <?php esc_html_e( 'Меню', 'elite_mebel' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				</div><!-- .row -->
			</div><!-- .container-fluid -->
		</header><!-- #masthead -->

		<?php if( is_home() || is_front_page() ) : ?>
		<div id="slider">
			<?php 
			    echo do_shortcode("[metaslider id=25]"); 
			?>
		</div>
		<?php endif; ?>

		<div id="content" class="site-content">
