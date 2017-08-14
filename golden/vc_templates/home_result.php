					<?php
extract( shortcode_atts( array(
 
	'title' => '10 КАНДИДАТОВ ИЗ 200 
		ПРОХОДЯТ ПРОФЕССИОНАЛЬНОЕ 
		ТЕСТИРОВАНИЕ С РЕЗУЛЬТАТОМ ВЫШЕ 80%.
		<br> <br>
		РАБОТОДАТЕЛЮ МЫ ПРЕДСТАВЛЯЕМ 
		3 ЛУЧШИХ КАНДИДАТА ПОСЛЕ 
		ВСЕХ ЭТАПОВ ОТБОРА.',
		'btn_text' => 'ХОЧЕШЬ ТАКОЙ ЖЕ <br> РЕЗУЛЬТАТ?' 
 
	), $atts ) );
	?>
	
 

<section class="result ">
	<h2>
	<?php echo $title; ?>
	</h2>
		<button id="consultation" class="btn_consultation"><?php echo $btn_text; ?></button>
	</section>

			<?php echo $this->endBlockComment('home_result'); ?>