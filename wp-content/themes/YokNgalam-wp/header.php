<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<header class="top_header">
    <div class="wrapper cf">
        <div class="logo_section">
			<?php if (ale_get_option('sitelogo')){ ?>
                <a href="<?php echo home_url("/"); ?>" class="logo_link"><img src="<?php echo ale_get_option('sitelogo'); ?>"/></a>
			<?php } ?>
        </div>
        <nav class="top_navigation">
            <?php
			    if ( has_nav_menu( 'header_menu' ) ) {
				    wp_nav_menu(array(
					    'theme_location'=> 'header_menu',
					    'menu'			=> 'Header Menu',
					    'menu_class'	=> 'ale_headermenu cf',
					    'walker'		=> new Aletheme_Nav_Walker(),
					    'container'		=> '',
				    ));
			    }
            ?>
        </nav>
       <div class="wrapper_avatar">
           <div class="avatar"></div>
       </div>
    </div>
</header>
<?php if(!is_page_template('page-home.php')){ ?>
<section class="inner_header">
    <div class="wrapper">
		<?php echo get_breadcrumbs(); ?>
    </div>
</section>
<?php } ?>