<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "monst_theme_mod";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */
    $theme = wp_get_theme(); // For use with some settings. Not necessary.
    $args = array(
        // REQUIRED!!  Change these values as you need/desire.
        'opt_name'                  => $opt_name,
    
        // Name that appears at the top of your panel.
        'display_name'              => $theme->get( 'Name' ),
    
        // Version that appears at the top of your panel.
        'display_version'           => $theme->get( 'Version' ),
    
        // Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
        'menu_type'                 => 'menu',
    
        // Show the sections below the admin menu item or not.
        'allow_sub_menu'            => true,
    
        'menu_title'                => esc_html__( 'Monst Options', 'monst' ),
        'page_title'                => esc_html__( 'Monst Options', 'monst' ),
    
        // Disable this in case you want to create your own google fonts loader.
        'disable_google_fonts_link' => false,
    
        // Show the panel pages on the admin bar.
        'admin_bar'                 => true,
    
        // Choose an icon for the admin bar menu.
        'admin_bar_icon'            => 'dashicons-portfolio',
    
        // Choose an priority for the admin bar menu.
        'admin_bar_priority'        => 50,
    
        // Set a different name for your global variable other than the opt_name.
        'global_variable'           => '',
    
        // Show the time the page took to load, etc.
        'dev_mode'                  => false,
    
        // Enable basic customizer support.
        'customizer'                => true,
    
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_priority'             => 3,
    
        // For a full list of options, visit: @link http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
        'page_parent'               => 'themes.php',
    
        // Permissions needed to access the options panel.
        'page_permissions'          => 'manage_options',
    
        // Specify a custom URL to an icon.
        'menu_icon'                 => '',
    
        // Force your panel to always open to a specific tab (by id).
        'last_tab'                  => '',
    
        // Icon displayed in the admin panel next to your menu_title.
        'page_icon'                 => 'icon-themes',
    
        // Page slug used to denote the panel.
        'page_slug'                 => '_options',
    
        // On load save the defaults to DB before user clicks save or not.
        'save_defaults'             => true,
    
        // If true, shows the default value next to each field that is not the default value.
        'default_show'              => true,
    
        // What to print by the field's title if the value shown is default. Suggested: *.
        'default_mark'              => '',
    
        // Shows the Import/Export panel when not used as a field.
        'show_import_export'        => true,
    
        // CAREFUL -> These options are for advanced use only.
        'transient_time'            => 60 * MINUTE_IN_SECONDS,
    
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
        'output'                    => true,
    
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head.
        'output_tag'                => true,
    
        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'database'                  => '',
    
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
        'use_cdn'                   => true,
        'compiler'                  => true,
    
        // Enable or disable flyout menus when hovering over a menu with submenus.
        'flyout_submenus'           => true,
    
        // Mode to display fonts (auto|block|swap|fallback|optional)
        // See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display
        'font_display'              => 'swap',
    
        // HINTS.
        'hints'                     => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        ),
    );
 


// Panel Intro text -> before the form.
if ( ! isset( $args['global_variable'] ) || false !== $args['global_variable'] ) {
	if ( ! empty( $args['global_variable'] ) ) {
		$v = $args['global_variable'];
	} else {
		$v = str_replace( '-', '_', $args['opt_name'] );
	}
	$args['intro_text'] = '<p>' . sprintf( __( 'Welcome to Monst Option Panel', 'monst' ) . '</p>', '<strong>' . $v . '</strong>' );
} else {
	$args['intro_text'] = '<p>' . esc_html__( 'This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.', 'monst' ) . '</p>';
}

// Add content after the form.
$args['footer_text'] = '<p>' . esc_html__( 'This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.', 'monst' ) . '</p>';

Redux::set_args( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> BEGIN HELP TABS
 */

$help_tabs = array(
	array(
		'id'      => 'redux-help-tab-1',
		'title'   => esc_html__( 'Theme Information 1', 'monst' ),
		'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'monst' ) . '</p>',
	),

	array(
		'id'      => 'redux-help-tab-2',
		'title'   => esc_html__( 'Theme Information 2', 'monst' ),
		'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'monst' ) . '</p>',
	),
);

Redux::set_help_tab( $opt_name, $help_tabs );

// Set the help sidebar.
$content = '<p>' . esc_html__( 'This is the sidebar content, HTML is allowed.', 'monst' ) . '</p>';
Redux::set_help_sidebar( $opt_name, $content );



    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*
        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for
     */

    // -> START Basic Fields
    
    require get_template_directory() . '/includes/options/theme-options/general-settings.php';
    require get_template_directory() . '/includes/options/theme-options/header-settings.php';
    require get_template_directory() . '/includes/options/theme-options/page_header_settings.php';
    require get_template_directory() . '/includes/options/theme-options/breadcrumb.php';
    require get_template_directory() . '/includes/options/theme-options/mobile-menu.php';
    require get_template_directory() . '/includes/options/theme-options/side-menu-settings.php';
    require get_template_directory() . '/includes/options/theme-options/footer-settings.php';
    require get_template_directory() . '/includes/options/theme-options/layout-settings.php';
    require get_template_directory() . '/includes/options/theme-options/blog-settings.php';
    require get_template_directory() . '/includes/options/theme-options/post-general-settings.php';

    require get_template_directory() . '/includes/options/theme-options/color-settings.php';
    require get_template_directory() . '/includes/options/theme-options/typography-settings.php';
    require get_template_directory() . '/includes/options/theme-options/404-settings.php';
