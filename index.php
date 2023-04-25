<? include 'config/core.php';	





	$header = false;
?>
<? include 'block/header.php'; ?>

	<!--  -->
	<div class="top_site_gh">
		<div class="top_site_bag lazy_bag" data-src="/assets/img/bag/slide4.jpg"></div>
		<div class="top_site_bag2"></div>
		<div class="bl_c">
			<div class="top_site_hu">
				<h2>Мы делаем все ради <br>вашего комфорта</h2>
				<p>Из за большой популярности наши Курорты, <br>мы рекомендуем всем <span>звонить и бронировать места заранее</span></p>
				<div class="top_site_hub">
					<div class="btn disb_zab">Торопитесь!</div>
					<div class="top_site_abs lazy_bag" data-src="/assets/img/bag/19384.png"></div>
				</div>
			</div>
			<div class="top_site_s">
				<div class="top_site_si"><a target="_blank" href="https://www.instagram.com/<?=$site['instagram']?>"><i class="fab fa-instagram"></i></a></div>
				<div class="top_site_si"><a target="_blank" href="https://www.facebook.com/<?=$site['facebook']?>"><i class="fab fa-facebook"></i></i></a></div>
			</div>
		</div>
	</div>


	<!--  -->
	<div class="bl1">
		<div class="bl_c">
			<div class="bl1_c">
				<div class="bl1_i">
					<div class="bl1_ic">
						<div class="bl1_is">
							<span>28</span>
						</div>
						<div class="bl1_ist">
							<span>cанатории</span>
						</div>
					</div>
					<div class="bl1_it">
						<span>Отдыхающие в нашей санаторий улучшают самочуствие , скорость мышление и востонавливают силы. Здесь вы можите хорошенько отдохнуть от мирской суеты , которая навернека не раз вас утомила</span>
					</div>
				</div>
				<div class="bl1_i">
					<div class="bl1_ic">
						<div class="bl1_is">
							<span>10</span>
						</div>
						<div class="bl1_ist">
							<span>лет</span>
						</div>
					</div>
					<div class="bl1_it">
						<span>За 10 лет работы  мы многого достигли и можем назвать себя лидером среди агенств в направлении лечебно-профилактикой сфере</span>
					</div>
				</div>
				<div class="bl1_i">
					<div class="bl1_ic">
						<div class="bl1_is">
							<span>20 500 +</span>
						</div>
					</div>
					<div class="bl1_it">
						<span>У нас много довольных клиентов обещяющие сново посетить</span>
					</div>
				</div>
			</div>
			<div class="bl1_btn">
				<a href="/sana.php">
					<div class="btn">
						<span>Каталог санаториев</span>
						<i class="far fa-long-arrow-right"></i>
					</div>
				</a>
			</div>
			<div class="bl1_btn">
				<a href="/sana.php">
					<div class="btn">
						<span>Шипажайлар тізімі</span>
						<i class="far fa-long-arrow-right"></i>
					</div>
				</a>
			</div>
		</div>
	</div>


	<!--  -->
	<div class="bl2">
		<div class="bl_c">
			<div class="bl2_c">
				<div class="head_c">
					<h2>Что Вас ждет в Сарыагаше</h2>
				</div>
				<div class="bl2_con">
					<div class="nash_pri">
						<div class="nash_prim">
							<i class="fas fa-badge-check"></i>
						</div>
						<div class="nash_prit">
							<h4>ОТЛИЧНЫЙ СЕРВИС</h4>
							<p>Опытные врачи и медперсонал</p>
						</div>
					</div>
					<div class="nash_pri">
						<div class="nash_prim">
							<i class="fas fa-credit-card-blank"></i>
						</div>
						<div class="nash_prit">
							<h4>УДОБНАЯ ОПЛАТА</h4>
							<p>Все виды оплат для Вашего удобства</p>
						</div>
					</div>
					<div class="nash_pri">
						<div class="nash_prim">
							<i class="fas fa-car"></i>
						</div>
						<div class="nash_prit">
							<h4>БЕСПЛАТНЫЙ ТАНСФЕР</h4>
							<p>Встречаем из ЖД вокзала</p>
						</div>
					</div>
					<div class="nash_pri">
						<div class="nash_prim">
							<i class="fas fa-clipboard-user"></i>
						</div>
						<div class="nash_prit">
							<h4>ПЕРСОНАЛ</h4>
							<p>Вежливый, обученный персонал</p>
						</div>
					</div>
					<div class="nash_pri">
						<div class="nash_prim">
							<i class="fas fa-thumbs-up"></i>
						</div>
						<div class="nash_prit">
							<h4>ВЫГОДНО</h4>
							<p>По сравнению с другими, у нас выгоднее</p>
						</div>
					</div>
					<div class="nash_pri">
						<div class="nash_prim">
							<i class="fas fa-hand-holding-usd"></i>
						</div>
						<div class="nash_prit">
							<h4>ЦЕНА</h4>
							<p>Низкие, доступные цены на санаторный отдых</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bl2_a lazy_bag" data-src="/assets/img/bag/b8292acafd72142128a3481ac4b0abff.jpg">
			<div class="bl2_ac"></div>
		</div>
	</div>



	<!--  -->
	<div class="bl_c">
		<div class="sanator">
			<div class="head_c">
				<h3>Лучшие санатории</h3>
				<p>Выберите санаторий, который лучше всего Вам подходит или закажите консультацию</p>
			</div>

			<div class="sanator_c">
				<? $sql = db::query("select * from sanatorium where number is not null and sel = 1 ORDER BY number ASC"); ?>
			   <? while ($ana = mysqli_fetch_array($sql)): ?>
			      <? $id = $ana['id']; ?>
					<div class="sanator_item">
						<a class="sanator_img" href="/sanatorium/?id=<?=$ana['id']?>">
							<div class="lazy_bag" data-src="/assets/uploads/sanatorium/<?=$ana['img']?>"></div>
						</a>
						<div class="sanator_con">
							<div class="sanator_name"><?=$ana['name_'.$lang]?></div>
							<div class="sanator_cin">
								<div class="bl5_icp"><?=t::w('from1').fun::p($ana['id'])?> тг. <?=t::w('from2')?></div>
							</div>
							<div class="sanator_zabr">
								<div class="btn disb_zab">Забронировать</div>
							</div>
						</div>
					</div>
				<? endwhile ?>
			</div>

		</div>
	</div>


	<div class="bl3">
		<div class="bl3_a lazy_bag" data-src="/assets/img/bag/slide1.jpg"></div>
		<div class="bl_c">
			<div class="bl3_c">
				<div class="bl3_l">
					<div class="head_c">
						<h2>Есть вопросы?</h2>
						<p>Если у вас есть какие-либо вопросы, напишите нам WhatsApp</p>
					</div>
				</div>
				<div class="bl3_r">
					<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=Я%20заинтересован%20по%20поводу%20санаторий%20...">
						<div class="btn btn_whatsapp">
							<i class="fab fa-whatsapp"></i>
							<span>Написать на WhatsApp</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="bl4" id="services">
		<div class="bl_c">
			<div class="head_c">
				<h2>Путевки по ценам самих санаториев</h2>
				<p>Мы предлагает Вам приобрести путевки или забронировать номера <br>во все санатории города Сарыагаш по самой низкой цене, путевки по ценам самих санаториев.</p>
			</div>

			<div class="bl4_c">
				<div class="pot_gt">
					<div class="pot_gti">
						<h6>Бесплатная консультация</h6>
						<p>Мы поможем Вам выбрать подходящую санаторию по его лечебному профилю.</p>
					</div>
					<div class="pot_gti">
						<h6>Бронь без комиссии</h6>
						<p>Забронируем номера по цене самих санаториев. Предварительное бронирование.</p>
					</div>
					<div class="pot_gti">
						<h6>Бесплатный трансфер</h6>
						<p>Дальше мы встречаем Вас с вокзала или аэропорта и бесплатно довезем до дверей санатория.</p>
					</div>
				</div>
				<div class="pot_gi">
					<img class="lazy_bag" data-src="/assets/img/bag/car.png">
					<img class="lazy_bag" data-src="/assets/img/bag/kt.png">
				</div>
			</div>
		</div>
	</div>




	<!--  -->
	<div class="bl5" id="reviews">
		<div class="bl_c">
			<div class="head_c">
				<h2>Отзывы наших отдыхающых</h2>
				<div class="swiper-button-next bl5_next">
					<i class="fas fa-caret-right"></i>
				</div>
				<div class="swiper-button-prev bl5_prev">
					<i class="fas fa-caret-left"></i>
				</div>
			</div>
			<div class="bl5_c">
				<div class="swiper-container bl5_con">
					<div class="swiper-wrapper">

						<? $sql = db::query("select * from `review`"); ?>
						<? while($ana = mysqli_fetch_array($sql)): ?>
							<div class="swiper-slide bl5_i">
								<div class="bl5_iln">
									<div class="bl5_ilogo lazy_img2" data-src="/assets/img/reviews/<?=$ana['logo']?>"></div>
									<div class="bl5_ilc">
										<div class="bl5_ilname"><?=$ana['name']?></div>
										<div class="bl5_ildate"><?=$ana['date']?> года</div>
									</div>
									<div class="bl5_ildt">
										<span><?=$ana['dt']?></span>
									</div>
								</div>
								<div class="bl5_it">
									<span><?=$ana['txt_ru']?></span>
								</div>
							</div>
						<? endwhile ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<? include 'block/footer.php'; ?>