<?php
/**
 * Functions and Definitions
 * @package Monst WordPress Theme
 * @version 1.0.0
 */

/* Theme setup */
require get_template_directory() . '/includes/Mobile_Detect.php';

// Mobile Detect callback
function monst_isMobile() {
    if ( ! class_exists( 'Mobile_Detect' ) ) {
        return false;
    }
    $detect = new Mobile_Detect;
    $mobile = false;
    if( $detect->isMobile() || $detect->isTablet() ){
        $mobile = true;
    }
    return $mobile;
}
require get_template_directory() . '/includes/common/functions/theme-function.php';


 