<?php
/**
 * Template Name: Template client
 */
  get_header(); ?>
    <!-- Content -->
    <?
        while ( have_posts() ) : the_post();

                    the_content();
                    
                endwhile;
?>

<?php get_footer(); ?>