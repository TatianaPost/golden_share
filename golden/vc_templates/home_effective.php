				<?php
extract( shortcode_atts( array(
	'main_text' => 'ВЫСОКОЭФФЕКТИВНАЯ АВТОРСКАЯ<br>
				МОДЕЛЬ ПОДБОРА ПЕРСОНАЛА GOLDEN SHARE, <br>
				ПРИЗНАННАЯ ЭКСПЕРТАМИ ОТРАСЛИ', 
	), $atts ) );
	?>

		<section class="effective">
			<h2>ВЫСОКОЭФФЕКТИВНАЯ АВТОРСКАЯ<br>
				МОДЕЛЬ ПОДБОРА ПЕРСОНАЛА GOLDEN SHARE, <br>
				ПРИЗНАННАЯ ЭКСПЕРТАМИ ОТРАСЛИ <?php echo $main_text ?> </h2>
			</section>

		<?php echo $this->endBlockComment('home_effective'); ?>