<?php

/**
*Template for displaying the footer
*
*/

?>

<footer id="main-footer">

	<!--------Newsletter----------------------->

	<div id="m-f-newsletter">

		<div class="col-2">
        	<h1>Newsletter Sign Up</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget est erat.</p>
        </div>
        
        <div class="col-2">
        	<?php echo do_shortcode('[mc4wp_form id="584"]'); ?>
        </div>
        
        <div style="clear: both;"></div>

	</div>
    
    <!--------Links and Bio----------------------->
    
    <div id="mf-link-bio">
    
      <div id="m-f-links" class="col-2">
          
          <div id="m-f-products" class="col-3">
              <?php wp_nav_menu( array( 'theme_location' => 'footer-products' ) ); ?>
          </div>
          
          <div id="m-f-quick-links" class="col-3">
              <?php wp_nav_menu( array( 'theme_location' => 'footer-quick-links' ) ); ?>
          </div>
          
          <div id="m-f-contacts" class="col-3">
              <?php wp_nav_menu( array( 'theme_location' => 'footer-quick-links' ) ); ?>
          </div>
          
          <div style="clear: both;"></div>
          
      </div>
      
      <div id="m-f-details" class="col-2">
      
          <article id="m-f-bio">
              <p>A philosophy, a way of living combined with dedication makes U.T.A the brand that it is. Striving to bring comfort with defined trimmings and fittings at a resonable price. We are UTAlizing out surroundings and we strive our customers and supporters to follow...</p>
          </article>
          
          <nav id="m-f-socials">     	
              <?php wp_nav_menu( array( 'theme_location' => 'social-menu' ) ); ?>   
          </nav>
          
          <img src="<?php echo get_template_directory_uri(); ?>/images/uta_logo_black.png" alt="UTA-logo" id="m-f-logo" >
          
      </div>
      
      <div style="clear: both;"></div>
    
    </div>
    
    <div id="credits-wrapper">

      <div id="credits-wrapper-inner">
      
        <p id="credits-author">Designed by Alexander James</p>
            
        <p id="credits-copyright">© 2016 U.T.A</p>
        
        <div style="clear: both;"></div>
      
      </div>
    
	</div>
    
</footer>

</div> <!-- Site Wrapper -->

<!--------Credits----------------------->



<?php wp_footer(); ?>

</body>

</html>