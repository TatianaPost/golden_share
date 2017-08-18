<?php
extract( shortcode_atts( array(
	'desc' => 'Среди наших клиентов – ведущие международные и отечественные компании, работающие в сферах инвестиций, строительства и недвижимости, сельского хозяйства, оптовой и розничной торговли, финансового и банковского бизнеса, высоких технологий, разработки программного обеспечения, производственные и финансовые холдинги, компании, оказывающие самые разные виды услуг.',
	'text_left'=>'Компания LG International Corp. входит в южнокорейский холдинг LG Group, который является крупнейшей финансово-промышленной группой и занимает одну из лидирующих позиций по величине среди таких мировых брендов, как Samsung, Hyundai Motor, Hyundai Heavy Industries.',
	'text_center'=>'Компания Homer SHмеждународной финансовой группы Home Credit Group, одного из мировых лидеров в области потребительского кредитования, владеющей в Украине банком Home Credit Finance. Home Credit Group является членом Группы компаний PPF, основанной в 1991 году.',
	'text_right'=>'Bobst Group - ведущий мировой поставщик оборудования и услуг для изготовителей упаковки из картона, гофрокартона и гибких материалов, а также этикеток. Компания сегодня работает более чем в 50 странах, а ее 11 производственных предприятий расположены в 8 странах.',

	'img_left' => 'image_url',
	'img_centr' => 'image_url',
	'img_right' => 'image_url',
	), $atts ) );
	?>

<div class="client_wrapper"> 
 <?php  get_breadcrumbs(); ?> 
 
	<div class="content ">
		<p><?php echo $desc ?></p>

		<div class="client_conteiner_item">
  
			<div class="client_item">
				<img src="<?php echo  wp_get_attachment_image_src($img_left, "full")[0]; ?>" alt="">
				<p><?php echo $text_left ?></p>
				<a href="#">read more</a>
			</div>

			<div class="client_item">
				<img src="<?php echo  wp_get_attachment_image_src($img_centr, "full")[0]; ?>" alt="">
				<p><?php echo $text_center ?></p>
				<a href="#">read more</a>
			</div>

			<div class="client_item">
				<img src="<?php echo  wp_get_attachment_image_src($img_right, "full")[0]; ?>" alt="">
				<p><?php echo $text_right ?></p>
				<a href="#">read more</a>
			</div>

		</div>
	</div>
 </div>
 
 <div class="call_block_wrapper">
<div class="call_block content">
		<h2>Would You like we recall <br>
			for 30 secund?</h2>
			<form action="#">
				<input type="text" placeholder="Your phone">
				<input type="submit"  value="Call to me" ="Call to me">
			</form>
		</div>
	</div>
	
	<?php echo $this->endBlockComment('client_desc'); ?>