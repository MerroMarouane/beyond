<?php

namespace Monstaddons;

/**
 * The admin class
 */
class Admin
{

    /**
     * Initialize the class
     */
    function __construct()
    {
        new Plugins\Header;
        new Plugins\Sticky_header;
        new Plugins\Footer;
        new Plugins\Megamenu;
        new Plugins\Service;
        new Plugins\Portfolio;
        new Plugins\Team;
        new Shortcodes\Themecss;
        new Core\Functions;
    
    }

   
  
}
