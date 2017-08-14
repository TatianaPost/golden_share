<?php
extract( shortcode_atts( array(
	'main_text' => 'OUR INNOVATIVE <br>
	SPHERAS OF RECRUITING',
	'text_left'=>'КЛАССИЧЕСКИЙ <br> РЕКРУТИНГ',
	'text_center'=>'КЛАССИЧЕСКИЙ <br> РЕКРУТИНГ',
	'text_right'=>'КЛАССИЧЕСКИЙ <br> РЕКРУТИНГ',
	'list_1'=>'IT- персонал',
	'list_2'=>'IT- персонал',
	'list_3'=>'IT- персонал',
	'list_4'=>'IT- персонал',
	'list_5'=>'IT- персонал',
	'list_6'=>'IT- персонал',
	'img_left' => 'image_url',
	'img_centr' => 'image_url',
	'img_right' => 'image_url',
	'scale_left' => '100%',
	'scale_center' => '100%',
	'scale_right' => '100%',
	), $atts ) );
	?>

 
 
	<div class="innovatiwe_wrapper">
		<section class="content" id="innovaitiv">
			<ul>	
				<li class="ono-blog-info">
					<div class="ono-blog-info-circle"  style="background-size: <?php echo $scale_left ?>; background-image: url('<?php echo  wp_get_attachment_image_src($img_left, "full")[0]; ?>');"></div>
					<h3><?php echo $text_left ?></h3>
					<a href="#">read more</a>
				</li>

				<li class="ono-blog-info">
					<div class="ono-blog-info-circle"  style="background-size: <?php echo $scale_center ?>; background-image: url('<?php echo  wp_get_attachment_image_src($img_centr, "full")[0]; ?>');"></div>
					<h3><?php echo $text_center ?></h3>
					<a href="#">read more</a>
				</li>

				<li class="ono-blog-info">
					<div class="ono-blog-info-circle"  style="background-size: <?php echo $scale_right ?>;background-image: url('<?php echo  wp_get_attachment_image_src($img_right, "full")[0]; ?>');"></div>
					<h3><?php echo $text_right ?></h3>
					<a href="#">read more</a>
				</li>
				<div class="helper"></div>
			</ul>

			<h2 class="innovaitiv_pero"><?php echo $main_text ?></h2>

			<p>Golden Share delivers workforce expertise and talent-related capabilities that companies <br>need to unleash the power of their people.</p>

			<ul class="innovaitiv-line">
				<li class="ono-blog-info"> 
					<h3><?php echo $list_1 ?></h3>
					<a href="#">read more</a>
				</li>
				<li class="ono-blog-info"> 
					<h3><?php echo $list_2 ?></h3>
					<a href="#">read more</a>
				</li>
				<li class="ono-blog-info"> 
					<h3><?php echo $list_3 ?></h3>
					<a href="#">read more</a>
				</li>
				<li class="ono-blog-info"> 
					<h3><?php echo $list_4 ?></h3>
					<a href="#">read more</a>
				</li>
				<li class="ono-blog-info"> 
					<h3><?php echo $list_5 ?></h3>
					<a href="#">read more</a>
				</li>
				<li class="ono-blog-info"> 
					<h3><?php echo $list_6 ?></h3>
					<a href="#">read more</a>
				</li>
			</ul>
		</section>
	</div>

	<?php echo $this->endBlockComment('home_header'); ?>