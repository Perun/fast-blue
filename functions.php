<?php
// WIDGETS
if ( function_exists('register_sidebar') )
    register_sidebar(array('name'=>'Sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

// MENÜ
function die_hauptnavi() {
	register_nav_menus(
		array(
			'haupt_navi' => 'Die Hauptnavigation',
		)
	);
}

add_action( 'init', 'die_hauptnavi' );

function meine_hauptnavi() {
    if ( function_exists( 'wp_nav_menu' ) )
        wp_nav_menu('menu=haupt_navi&container=nav&menu_class=navi&fallback_cb=die_ersatznavi');
    else
        die_ersatznavi();
}

function die_ersatznavi() {
echo "<nav>
    <ul class=\"navi\">
        <li><a href=\"/\" class=\"startseiten-link\">Start</a></li>
    </ul>
</nav>";}

// Jetpack-CSS entfernen
add_filter( 'jetpack_implode_frontend_css', '__return_false' );

//oEmbed-Breite
if (!isset($content_width)) $content_width = 580;

// Kurzlink in WP 4.4 zurückholen
if ( function_exists( 'add_filter' ) ) {
    add_filter( 'get_shortlink', function ( $shortlink ) {
        return $shortlink;
    } );
}

// Jetpack-JS für Gravatar entfernen
function dequeue_devicepx() {
    wp_dequeue_script( 'devicepx' );
}
add_action( 'wp_enqueue_scripts', 'dequeue_devicepx', 20 );
?>