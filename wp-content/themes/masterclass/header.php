<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package masterclass
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="overflow: visible;">

	<!-- Preloader -->
	<div id="preloader" style="display: none;">
		<div class="pre-container">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div>
	</div>
	<!-- end Preloader -->

<!--<img src="jpg/notorious_2.png" width="80" alt="Logo">-->

	<div class="container-fluid">

		<!-- box header -->
		<header class="box-header">
			<div class="box-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo("template_url"); ?>/assets/jpg/notorious_logo.png"></a>
			</div>
			<!-- box-nav -->
			<a class="box-primary-nav-trigger" href="#">
                <span class="box-menu-text">Меню</span><span class="box-menu-icon"></span>
            </a>
			<!-- box-primary-nav-trigger -->
		</header>
		<!-- end box header -->



		<!-- nav -->
		<nav>
			<ul class="box-primary-nav">
				<li class="box-label">Notorious</li>

				<!--<li><a href="https://medrom4.github.io/notorious/index.html">Главная</a><i class="ion-ios-circle-filled color"></i></li>-->
				<!--<li><a href="https://medrom4.github.io/notorious/data/about.html">Обо мне</a></li>-->
				<!--<li><a href="https://medrom4.github.io/notorious/data/portfolio.html">Картины</a></li>-->
				<!--<li><a href="https://medrom4.github.io/notorious/data/contact.html">Контакты</a></li>-->
				
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>


				<li class="box-label">Follow me</li>

				<li class="box-social"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                <li class="box-social"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
                <li class="box-social"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
			</ul>
		</nav>
		<!-- end nav -->

		
		<?php global $redux_demo; ?>
		
		<!-- box-intro -->
		<section class="box-intro">
			<div class="table-cell">
				<h1 class="box-headline letters rotate-2">
					<span class="box-words-wrapper" style="width: 636px;">
                        <b class="is-visible" style="opacity: 1;"><i class="out"><em>с</em></i><i class="out"><em>о</em></i><i class="out"><em>ф</em></i><i class="out"><em>и</em></i><i class="out"><em>я</em></i><i class="out"><em>.</em></i></b>
                        <b style="opacity: 1;"><i class="out"><em>&nbsp;</em></i><i class="out"><em>р</em></i><i class="out"><em>о</em></i><i class="out"><em>м</em></i><i class="out"><em>a</em></i><i class="out"><em>н</em></i><i class="out"><em>o</em></i><i class="out"><em>в</em></i><i class="out"><em>и</em></i><i class="out"><em>ч</em></i><i class="out"><em>.</em></i></b>
                        <b style="opacity: 1;"><i class="in"><em>х</em></i><i class="in"><em>у</em></i><i class="in"><em>д</em></i><i class="in"><em>о</em></i><i class="in"><em>ж</em></i><i class="in"><em>н</em></i><i class="in"><em>и</em></i><i class="in"><em>к</em></i><i class="in"><em>.</em></i></b>
                    </span>
				</h1>
				
				
				<h5><?php echo $redux_demo['text-header'] ?></h5>
				
				
			</div>




			<div class="mouse">
				<div class="scroll"></div>
			</div>
		</section>
		<!-- end box-intro -->
	</div>