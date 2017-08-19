<?php
/**
 * Template Name: Template personal
 */
get_header(); ?>

<?php if(get_the_post_thumbnail_url()) { ?>
<div class="recruitment_header services_top" style="background-image: url('<? echo get_the_post_thumbnail_url() ?>');">
<? } else {?> 
  <div class="recruitment_header services_top" style="background-image: url('<? echo get_template_directory_uri(); ?>/img/services_top.png'">
    <? } ?> 
    
  </div>
  <div class="content_wrapper">
    <div class="content">

      <div class="user_content">
        <div class="breadcrumbs_wrapper">
         <?php  get_breadcrumbs(); ?> 
       </div>
       <?
       while ( have_posts() ) : the_post();

       the_content();

       endwhile;
       ?>
       <div class="after_user_content_btn_wrap">
        <button class="btn_consultation">Get consulting</button>
      </div>
    </div>
  </div>  
</div> 


<?php get_footer(); ?>