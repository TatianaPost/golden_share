<?php
/**
 * Template Name: Template recruting
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
<div class="contact">

    <div id="contact_map"></div>


    <div class="box active">
        <p class="title">Consulting Group<span>Golden Share</span></p>
        <p class="bottom">Украина, Киев,<br>пер. Музейный, 10 (2 этаж)<br>+38 (044) 237 72 76,  <span>+38 (093) 188 45 40</span></p>
    </div>
</div>    

<?php get_footer(); ?>