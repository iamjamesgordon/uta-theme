<?php
/**
*Template for displaying all pages
*
*
*
*/
get_header(); ?>

<div role="main">

	<div class="inner">
    	    
		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; ?>          
                
    </div>

</div> <!-- Section -->

<?php get_footer(); ?>