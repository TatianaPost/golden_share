<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>

	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

</head>
<?
$body_class='';
if(is_page_template('template-step.php')){ 
    $body_class= $body_class.'about'; 
}
?>

<body  <?php body_class($body_class); ?> >
	
<!-- 	<div class="debug">
	<button>Hide</button>
</div> 
<div class="body_debug_bg"></div>      -->

	<?php if(is_front_page()) {?>
	<header>
		<? } ?>

		<div class="top_wrapper"> 
			<article class="top_line">

			</article>

			<article class="loog content">
				<a href="<?php echo get_site_url(); ?>" class="top_logo"><img src="<?php ale_option('sitelogo'); ?>" alt=""></a>
				<button id="consultation" class="btn_consultation">Get consulting</button>
			</article>

			<article class="content" id='mob_menu'>

				<?php
				wp_nav_menu( array(
					'theme_location' => 'header_menu', 
					'container'       => 'nav',  
					'container_id'    => 'navigation_menu',
					'menu_class'      => '', 
					'menu_id'         => '',
					'walker'		=> new Aletheme_Nav_Walker(),
					'menu'            => '', 
					) );
					?>

					<div class="collback">
						<h2>+38 044 237 7276</h2>  
						<a href="#">обратная связь</a>
					</div> 
				</article>
			</div>


