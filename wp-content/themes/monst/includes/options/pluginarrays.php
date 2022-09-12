<?php
/**
 * Register required, recommended plugins for theme
 *
 * @package monst WordPress theme
 */

/**
 * Register required plugins
 *
 * @since  1.0
 */
function monst_register_required_plugins()
{
    $plugins = array(
        array(
            'name' => esc_html__('Elementor', 'monst') ,
            'slug' => 'elementor',
            'required' => true,
            'force_activation' => false,
            'force_deactivation' => false,
        ) , 
        array(
            'name' => esc_html__('Monst Addons', 'monst') ,
            'slug' => 'monst-addons',
            'source'  =>   get_template_directory() . '/includes/plugins/monst-addons.zip',
            'required' => true,
            'force_activation' => false,
            'force_deactivation' => false,
        ),

    
        array(
            'name' => esc_html__('Contact Form 7', 'monst') ,
            'slug' => 'contact-form-7',
            'required' => true,
            'force_activation' => false,
            'force_deactivation' => false,
        ) ,
       
        array(
            'name' => esc_html__('MailChimp for WordPress', 'monst') ,
            'slug' => 'mailchimp-for-wp',
            'required' => true,
            'force_activation' => false,
            'force_deactivation' => false,
        ) ,

        array(
            'name' => esc_html__('Ultimate Member', 'monst') ,
            'slug' => 'ultimate-member',
            'required' => true,
            'force_activation' => false,
            'force_deactivation' => false,
        ) ,
 
        array(
			'name' => esc_html__('One Click Demo Import', 'monst'),
            'slug'   => 'one-click-demo-import',
            'required' => true,
            'force_activation' => false,
            'force_deactivation' => false,
		),
        array(
            'name' => esc_html__('Envato Market', 'monst') ,
            'slug' => 'envato-market',
            'source'  =>   'https://themepanthers.com/updatedplugin/envato-market.zip',
            'required' => true,
            'force_activation' => false,
            'force_deactivation' => false,
        ),
      
    );
    $config = array(
        'domain' => 'monst',
        'default_path' => '',
        'menu' => 'install-required-plugins',
        'has_notices' => true,
        'is_automatic' => false,
        'message' => '',
        'strings' => array(
            'page_title' => esc_html__('Install Required Plugins', 'monst') ,
            'menu_title' => esc_html__('Install Plugins', 'monst') ,
            'installing' => esc_html__('Installing Plugin: %s', 'monst') ,
            'oops' => esc_html__('Something went wrong with the plugin API.', 'monst') ,
            'notice_can_install_required' => _n_noop('This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'monst') ,
            'notice_can_install_recommended' => _n_noop('This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'monst') ,
            'notice_cannot_install' => _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'monst') ,
            'notice_can_activate_required' => _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'monst') ,
            'notice_can_activate_recommended' => _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'monst') ,
            'notice_cannot_activate' => _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'monst') ,
            'notice_ask_to_update' => _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'monst') ,
            'notice_cannot_update' => _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'monst') ,
            'install_link' => _n_noop('Begin installing plugin', 'Begin installing plugins', 'monst') ,
            'activate_link' => _n_noop('Activate installed plugin', 'Activate installed plugins', 'monst') ,
            'return' => esc_html__('Return to Required Plugins Installer', 'monst') ,
            'plugin_activated' => esc_html__('Plugin activated successfully.', 'monst') ,
            'complete' => esc_html__('All plugins installed and activated successfully. %s', 'monst') ,
            'nag_type' => 'updated'
        )
    );

    tgmpa($plugins, $config);
}

add_action('tgmpa_register', 'monst_register_required_plugins');