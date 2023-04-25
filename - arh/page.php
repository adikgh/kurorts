<?php include 'config/core.php';

	if (isset($_GET['id']) || $_GET['id'] == '') {
		$id = $_GET['id'];
		$sql = db::query("select * from sana where id = '$id'");
		if (mysqli_num_rows($sql) != 0) {
		   $sana = mysqli_fetch_array($sql);
		} else {
			header('location: /sana.php');
		}
	} else {
		header('location: /sana.php');
	}

	$site[title_ru] = $sana[name].' | '.$site[title_ru];
?>
<?php include 'block/header.php'; ?>


	<!--  -->
		<div class="pg">
			<div class="bl_c">
				<div class="pgc">

					<div class="pg1">
						<div class="head_c">
							<h2><?=$sana['name']?></h2>
						</div>
					</div>


					<div class="pg2">
					  	<div class="swiper-container gallery-top">
					    	<div class="swiper-wrapper">
						    	<?php
						    		$sql3 = db::query("select * from sana_img where sana_id = '$id'");
									while ($img = mysqli_fetch_array($sql3)) {
									   echo '
								   		<div class="swiper-slide">
												<img class="lazy_img" data-src="/assets/img/sanatorim/'.$sana[nm].'/'.$img[src].'">
						    				</div>
									   ';
									}
						    	?>
					    	</div>
					    	<div class="swiper-button-next gallery-top-next">
					    		<i class="fal fa-chevron-right"></i>
					    	</div>
					    	<div class="swiper-button-prev gallery-top-prev">
					    		<i class="fal fa-chevron-left"></i>
					    	</div>
						</div>
						<div class="swiper-container gallery-thumbs">
					    	<div class="swiper-wrapper">
						    	<?php
						    		$sql3 = db::query("select * from sana_img where sana_id = '$id'");
									while ($img = mysqli_fetch_array($sql3)) {
									   echo '
								   		<div class="swiper-slide">
												<img class="lazy_img" data-src="/assets/img/sanatorim/'.$sana[nm].'/'.$img[src].'">
						    				</div>
									   ';
									}
						    	?>
					    	</div>
						</div>
					</div>


					<div class="pg4" id="price">
						<div class="head_c">
							<h3>Цены путевок</h3>
						</div>
						<div class="pg4_c">

							<?php
					    		$sql4 = db::query("select * from sana_price where sana_id = '$id'");
								while ($price2 = mysqli_fetch_array($sql4)) {
								   echo '
								    	<div class="pg4_i">
											<div class="pg4_it">
												<span>'.$price2[name].'</span>
											</div>
										';
									if ($price2[price1] != null) {
										echo '
												<div class="pg4_ic">
													<div class="pg4_ict">
														<div class="pg4_icti">
															<i class="far fa-user"></i>
															<span>Вид размещения:</span>
															<p>1 персон</p>
														</div>
														<div class="pg4_icti">
															<i class="far fa-calendar-alt"></i>
															<span>Проживание:</span>
															<p>от 5 дней</p>
														</div>
														<div class="pg4_icti">
															<i class="far fa-car"></i>
															<span>Тансфер:</span>
															<p>бесплатно</p>
														</div>
													</div>
													<div class="pg4_icp">
														<div class="pg4_ic_pr">'.$price2[price1].' ТГ/ДЕНЬ</div>
														<div class="pg4_ic_btn">
															<div class="btn disb_zab">Купить сейчас</div>
														</div>
													</div>
												</div>
											';
									}
									if ($price2[price2] != null) {
										echo '
												<div class="pg4_ic">
													<div class="pg4_ict">
														<div class="pg4_icti">
															<i class="far fa-user"></i>
															<span>Вид размещения:</span>
															<p>2 персон</p>
														</div>
														<div class="pg4_icti">
															<i class="far fa-calendar-alt"></i>
															<span>Проживание:</span>
															<p>от 5 дней</p>
														</div>
														<div class="pg4_icti">
															<i class="far fa-car"></i>
															<span>Тансфер:</span>
															<p>бесплатно</p>
														</div>
													</div>
													<div class="pg4_icp">
														<div class="pg4_ic_pr">'.$price2[price2].' ТГ/ДЕНЬ</div>
														<div class="pg4_ic_btn">
															<div class="btn disb_zab">Купить сейчас</div>
														</div>
													</div>
												</div>
											';
									}
									if ($price2[price3] != null) {
										echo '
												<div class="pg4_ic">
													<div class="pg4_ict">
														<div class="pg4_icti">
															<i class="far fa-user"></i>
															<span>Вид размещения:</span>
															<p>3 персон</p>
														</div>
														<div class="pg4_icti">
															<i class="far fa-calendar-alt"></i>
															<span>Проживание:</span>
															<p>от 5 дней</p>
														</div>
														<div class="pg4_icti">
															<i class="far fa-car"></i>
															<span>Тансфер:</span>
															<p>бесплатно</p>
														</div>
													</div>
													<div class="pg4_icp">
														<div class="pg4_ic_pr">'.$price2[price3].' ТГ/ДЕНЬ</div>
														<div class="pg4_ic_btn">
															<div class="btn disb_zab">Купить сейчас</div>
														</div>
													</div>
												</div>
											';
									}
									if ($price2[price4] != null) {
										echo '
												<div class="pg4_ic">
													<div class="pg4_ict">
														<div class="pg4_icti">
															<i class="far fa-user"></i>
															<span>Вид размещения:</span>
															<p>4 персон</p>
														</div>
														<div class="pg4_icti">
															<i class="far fa-calendar-alt"></i>
															<span>Проживание:</span>
															<p>от 5 дней</p>
														</div>
														<div class="pg4_icti">
															<i class="far fa-car"></i>
															<span>Тансфер:</span>
															<p>бесплатно</p>
														</div>
													</div>
													<div class="pg4_icp">
														<div class="pg4_ic_pr">'.$price2[price4].' ТГ/ДЕНЬ</div>
														<div class="pg4_ic_btn">
															<div class="btn disb_zab">Купить сейчас</div>
														</div>
													</div>
												</div>
											';
									}
									echo '
											<div class="pg4_ib"></div>
										</div>
								   ';
								}
					    	?>


						</div>
					</div>

					<div class="pg3">
						<div class="head_c">
							<h3>Об санаторий</h3>
						</div>
						<div class="pg3_c">
							<span><?=$sana['info']?></span>
						</div>
					</div>

				</div>
			</div>
		</div>

<?php include 'block/footer.php'; ?>