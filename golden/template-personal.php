<?php
/**
 * Template Name: Template personal
 */
get_header(); ?>

<div class="recruitment_header" style="background-image: url('<? echo get_the_post_thumbnail_url() ?>');">
    <article class="content">
        <h1> <?php if(ale_get_meta('page_des')) echo ale_get_meta('page_des'); ?>
        
        </h1>
        <button class="btn_consultation">Get consulting</button>
    </article>
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