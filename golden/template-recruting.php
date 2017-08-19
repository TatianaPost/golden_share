<?php
/**
 * Template Name: Template recruting
 */
get_header(); ?>

<?php if(get_the_post_thumbnail_url()) { ?>

<div class="recruitment_header" style="background-image: url('<? echo get_the_post_thumbnail_url(); ?>'">

  <? } else {?>
  <div class="recruitment_header" style="background-image: url('<? echo get_template_directory_uri(); ?>/img/RECRUITMENT_top_bg.png'">
    <? } ?>
    <article class="content">
      <h1> <?php if(ale_get_meta('page_des')) echo ale_get_meta('page_des'); else echo "100% ДОВОЛЬНЫХ КЛИЕНТОВ, <br>
        БЛАГОДАРЯ ВЫСОКОЭФФЕКТИВНОЙ АВТОРСКОЙ <br>
        МОДЕЛИ ПОДБОРА ПЕРСОНАЛА GOLDEN SHARE" ?>
        
      </h1>
      <button class="btn_consultation">Get consulting</button>
    </article>
  </div>
  <div class="content_wrapper">
    <div class="content">
      <div class="sidebar">
        <?php
        wp_nav_menu( array(
          'theme_location' => 'header_menu', 
          'container'       => 'nav',  
          'container_id'    => 'recruting_menu',
          'menu_class'      => '', 
          'menu_id'         => '',
          'walker'        => new Aletheme_Nav_Walker(),
          'menu'            => '', 
          ) );
          ?>

          <button id="consultation" class="btn_consultation">Get consulting</button>
        </div>
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