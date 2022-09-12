<?php 
/*
** ============================== 
**   Monst  Theme Panel
** ==============================
*/ 
 
function monst_add_theme_admin_menu(){
    add_menu_page( 
        __( 'Monst Theme', 'monst-addons' ),
        'Monst',
        'manage_options',
        'monst-panel',
        null ,
        'dashicons-admin-generic',
        3.1
    ); 
    add_submenu_page(
        'monst-panel',
        esc_html__( 'About Monst Theme', 'monst-addons' ),
        esc_html__( 'About Monst ', 'monst-addons' ),
        'manage_options',
        'monst-panel',
        'monst_panel_output',
        4
    );
}
add_action( 'admin_menu', 'monst_add_theme_admin_menu' );
 
/**
 * Display a custom menu page
 */
function monst_panel_output(){
    ?>
    <div class="monst_admin_boxed clearfix" id="monst_admin_boxed_id">
    <div class="monst_panel_top welcome-panel">
        <div class="bg_n_image">
            <img src="<?php echo esc_url(MONST_ADDONS_URL . '/assets/image/steelthemes.jpg'); ?>" alt="monst-bg" />
        </div>
        <div class="about_monst_panel">
            <h1><?php echo esc_html_e('Monst' , 'monts-addons'); ?> <span><?php echo esc_html_e('V 1.0' , 'monst-addons'); ?> </span></h1>
            <p><?php echo esc_html_e('Monst is a great collection of flexible & creative landing page templates to promote your Software, App, SaaS, Startup or business projects.s and all modern technology company and software development websites.' , 'monst-addons'); ?></p>
     </div>
</div>
<div class="theme_monst_register">
    <h2><?php echo esc_html_e('Monst theme registered'); ?></h2>
    <p><?php echo esc_html_e('Envato allows 1 license for 1 project located on 1 domain. It means that 1 purchase key can be used only for 1 site. Each additional site will require an additional purchase key.', 'monts-addons'); ?></p>
</div>
 
    <div class="theme_authour_panel  welcome-panel">
    <div class="bg_n_image">
            <img src="<?php echo esc_url(MONST_ADDONS_URL . '/assets/image/steelthemes.jpg'); ?>" alt="monst-bg" />
        </div>
        <div class="about_steelthemes">
            <h6><?php echo esc_html('Theme Authour' , 'monst-addons'); ?> </h6>
            <h1><?php echo esc_html('Steelthemes' , 'monst-addons'); ?> </h1>
            <p><?php echo esc_html('We build all our templates with care and love. all our templates are 100% responsive' , 'monst-addons'); ?></p>
    </div>   </div>
</div>
    <?php
}
