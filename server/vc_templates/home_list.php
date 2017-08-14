		<?php
		extract( shortcode_atts( array(
			'list_text_1' => 'Для привлечения в команду заказчика высококлассных специалистов рекрутеры Golden Share создали и поддерживают собственную networking систему и актуальную базу данных компаний-партнеров. Это позволяет оперативно организовать поток качественных кандидатов фактически на любую вакансию.', 
			'list_text_2' => 'Для привлечения в команду заказчика высококлассных специалистов рекрутеры Golden Share создали и поддерживают собственную networking систему и актуальную базу данных компаний-партнеров. Это позволяет оперативно организовать поток качественных кандидатов фактически на любую вакансию.', 
			'list_text_3' => 'Для привлечения в команду заказчика высококлассных специалистов рекрутеры Golden Share создали и поддерживают собственную networking систему и актуальную базу данных компаний-партнеров. Это позволяет оперативно организовать поток качественных кандидатов фактически на любую вакансию.', 
			'list_text_4' => 'Для привлечения в команду заказчика высококлассных специалистов рекрутеры Golden Share создали и поддерживают собственную networking систему и актуальную базу данных компаний-партнеров. Это позволяет оперативно организовать поток качественных кандидатов фактически на любую вакансию.', 
		//-------------------------------------------------
			'list_title_1' => 'FIRST STEP',
			'list_title_2' => 'FIRST STEP',
			'list_title_3' => 'FIRST STEP',
			'list_title_4' => 'FIRST STEP',

			'list_sub_title_1' => 'HR LEAD GENERATION',
			'list_sub_title_2' => 'HR LEAD GENERATION',
			'list_sub_title_3' => 'HR LEAD GENERATION',
			'list_sub_title_4' => 'HR LEAD GENERATION',
			), $atts ) );
			?>


			<div class="list-wrapper">
				<section class="list">
					<ul>
						<!-- Item-->
						<li class="num">
							<div class="title_and_sub">
								<h2 class="num_title">
									<?php echo $list_title_1; ?>
								</h2>
								<h3 class="num_sub_title">
									<?php echo $list_sub_title_1; ?>
								</h3>
							</div>
							<p class="num_content">
								<?php echo $list_text_1; ?></p>
							</li>
							<!-- Item-->
							<li class="num">
								<div class="title_and_sub">
									<h3 class="num_sub_title">
										<?php echo $list_sub_title_2; ?>
									</h3>
									<h2 class="num_title">
										<?php echo $list_title_2; ?>
									</h2>
									
								</div>
								<p class="num_content">
									<?php echo $list_text_2; ?></p>
								</li>
								<!-- Item-->
								<li class="num">
									<div class="title_and_sub">
										<h2 class="num_title">
											<?php echo $list_title_3; ?>
										</h2>
										<h3 class="num_sub_title">
											<?php echo $list_sub_title_3; ?>
										</h3>
									</div>
									<p class="num_content">
										<?php echo $list_text_3; ?></p>
									</li>
									<!-- Item-->
									<li class="num">
										<div class="title_and_sub">
											<h3 class="num_sub_title">
												<?php echo $list_sub_title_4; ?>
											</h3>
											<h2 class="num_title">
												<?php echo $list_title_4; ?>
											</h2>
											
										</div>
										<p class="num_content">
											<?php echo $list_text_4; ?></p>
										</li>
									</ul>
								</section>
							</div>

							<?php echo $this->endBlockComment('home_list'); ?>