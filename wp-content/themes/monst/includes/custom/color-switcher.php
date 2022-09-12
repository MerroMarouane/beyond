<?php
/*
**
monst Color Switcher 
**
*/

function monst_color_switcher(){
?>
<div class="style-switcher">
        <a href="#" id="switcher-toggler"><i class="fa fa-cog"></i></a>
        <h3><?php echo esc_html__('Color Skins' , 'monst'); ?></h3>
        <ul id="colorschemeOptions" title="Switch Color" data-css-path="<?php echo get_template_directory_uri() . '/assets/css/scss/color-switcher/' ?>">
            <li>
                <a href="" data-theme="color" style="background-color: #078586;">  </a>
            </li>
            <li>
                <a href="" data-theme="color1" style="background-color: red;">  </a>
            </li>
            <li>
                <a href="" data-theme="color2" style="background-color: #3744c6;">  </a>
            </li>
            <li>
                <a href="" data-theme="color3" style="background-color: green;">  </a>
            </li>
            <li>
                <a href="" data-theme="color4" style="background-color: #40c4d8;">  </a>
            </li>
            <li>
                <a href="" data-theme="color5" style="background-color: orange;">  </a>
            </li>
            
        </ul>
        
    </div>

    <?php 
 }
 
    ?>