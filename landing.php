<?php
/**
*Template name: Landing Template
*
*
*
*/
get_header(); ?>

<?php $url = get_the_post_thumbnail_url( $post_id, 'full' ); ?>

<div id="landing-hero">
    
    <img src="<?php echo $url ?>" alt="UTA Hero" >

</div> <!-- Landing Hero -->

<div role="main">

	<div class="inner">
    	    
		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; ?>          
                
    </div>

</div> <!-- Section -->


<?php get_footer(); ?>