<?php
if ( ! function_exists( 'evit_fse_theme_support' ) ) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since My theme name 1.0
     *
     * @return void
     */
    function evit_fse_theme_support() {

        // Add support for block styles.
        add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
        add_theme_support( 'editor-styles' );

        add_theme_support( 'block-nav-menus' );

        // Enqueue editor styles.
        add_editor_style( 'style.css' );

        register_nav_menus( array( 'primary' => esc_html__( 'Primary Menu', 'evit-fse' ) ) );

    }

endif;
add_action( 'after_setup_theme', 'evit_fse_theme_support' );

/**
 * Enqueue scripts and styles.
 */
function fsetheme_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	// Register theme stylesheet.
  	$theme_version = wp_get_theme()->get( 'Version' );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'fsetheme-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	wp_enqueue_script( 'evit-fse-main-js', get_template_directory_uri() . '/assets/js/main.js', array( ), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'fsetheme_scripts' );

if ( ! function_exists( 'evit_fse_fonts_url' ) ) :
	/**
	 * Register Google fonts for Paloma FSE
	 *
	 * Create your own evit_fse_fonts_url() function to override in a child theme.
	 *
	 * @since 1.0
	 *
	 * @return string Google fonts URL for the theme.
	 */
	function evit_fse_fonts_url() {
		$fonts_url = '';

		/* Translators: If there are characters in your language that are not
		* supported by Poppins, translate this to 'off'. Do not translate
		* into your own language.
		*/
		$font_families = array( 'Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap', 'Heebo:wght@300;400;500;600;700;800;900&display=swap' );

		if ( ! empty( $font_families  ) ) {

			$query_args = array(
				'family' => implode( '&family=', $font_families ), //urlencode( implode( '|', $font_families ) ),
				// 'subset' => urlencode( 'latin,latin-ext' ),
				'display' => 'swap',
			);

			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );
		}

		if ( ! class_exists( 'WPTT_WebFont_Loader' ) ) {
			// Load Google fonts from Local.
			require_once get_theme_file_path( 'inc/lib/wptt-webfont-loader.php' );
		}

		return esc_url( wptt_get_webfont_url( $fonts_url ) );
	}
endif;

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/pattern-category.php';
require_once get_template_directory() . '/inc/tgm-plugin/tgmpa-hook.php';
