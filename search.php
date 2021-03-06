<?php

ignite_get_part( 'header', 'search' );

require_once CAHNRSIGNITEPATH . 'theme-parts/page-banners/class-page-banner-cahnrs-ignite.php';
$page_banner = new Page_Banner_CAHNRS_Ignite();
$page_banner->the_banner( 'archive' );

require_once CAHNRSIGNITEPATH . 'theme-parts/secondary-menu/class-secondary-menu-ignite.php';
$secondary_menu = new Secondary_Menu_Ignite();
$secondary_menu->the_menu( 'archive' );

do_action( 'theme_template_after_banner' );

require_once CAHNRSIGNITEPATH . 'theme-parts/content/class-content-ignite.php';
$content = new Content_Ignite();
$content->the_content( 'search' );

ignite_get_part( 'footer', 'search' );
