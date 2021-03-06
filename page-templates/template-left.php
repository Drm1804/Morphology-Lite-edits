<?php
/**
 * Template Name: Left Column
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Morphology Lite
 */

get_header(); ?>

<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if( esc_attr(get_theme_mod( 'show_page_top', 1 ) ) ) { ?>
	        <?php get_sidebar( 'banner' ); ?>
	        <?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title(), 'itemprop' => "image")); ?>
			<?php get_sidebar( 'top' ); ?>
		<?php } ?>

<div class="content-width">
  <div class="container-fluid">
          <div class="row">
		  
		  <?php get_sidebar( 'content-top' ); ?>
		  
          <div class="col-sm-8 col-sm-push-4" itemprop="mainContentOfPage">
  
  			<?php while ( have_posts() ) : the_post(); ?>
            
            <?php get_template_part( 'template-parts/content', 'page' ); ?>
            
            <?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
            
            <?php endwhile; // End of the loop. ?>
                   </div>
            
            	<div class="col-sm-4 col-sm-pull-8">        
              		<?php get_sidebar( 'left' ); ?>       
              	</div>
			           
            </div>
          </div>	
		  <?php get_sidebar( 'content-bottom' ); ?>
</div>

		</main><!-- #main -->
		<?php get_sidebar( 'bottom' ); ?>
		
		<?php get_template_part( 'template-parts/footer-group' ); ?>
		
	</div><!-- #primary -->
</div><!-- .site-content -->

<?php get_footer(); ?>