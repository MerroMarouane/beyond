            <?php global $monst_theme_mod; ?>
            </div>
          </div>
        </div>
      </div>
      <?php get_template_part('template-parts/footer/default', 'footer'); ?>
      <?php // mobile nav ?>
      <?php if(monst_isMobile()){  do_action('monst_get_mobile_menu'); } ?>
      <?php // mobile nav ?>
   
    </div>
  
    <!--page_wapper-->
    <?php wp_footer(); ?>
  </body>
</html>