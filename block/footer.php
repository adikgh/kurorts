		<!--  -->
		<div class="form_pol">
			<div class="bl_c">
				<div class="form_pol2">
					<div class="form_pola lazy_bag" data-src="/assets/img/bag/slide2.jpg"></div>
					<div class="form_pol_c">
						<div class="head_c txt_c">
							<h2>Заполните форму заявки</h2>
							<p>У нас вы можете прекрасно отдохнуть и укрепить свое здоровье. Оставьте свои контактные данные и наш менеджер свяжется с вами. Забронируйте свой номер уже сейчас.</p>
						</div>
						<div class="form_pol_con">
							<div class="form_im">
								<input type="text" placeholder="Введите имя .." class="name" data-lenght="2">
							</div>
							<div class="form_im">
								<input type="tel" placeholder="+7 (___) ___-__-__" class="phone ms_phone" data-lenght="11">
							</div>
							<div class="form_im">
								<div class="btn orderSend">
									<span>Оставить заявку</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="bl6" id="contacts">
			<div class="bl_c">
				<div class="head_c">
					<h2>Контакты</h2>
				</div>
				<div class="bl6_c">
					<div class="bl6_l">
						<span>Двери нашего санатория всегда открыты для людей который хотят провести свой отдых с пользой для здоровья. Мы имеем огромный штаб специалистов готовых вам помочь подтянуть здоровье или же просто отдохнуть максимально эффективно и комфортно!</span>
					</div>
					<div class="bl6_r">
						<div class="bl6_i">
							<i class="fas fa-map-pin"></i>
							<span>Туркестанский обл. Сарыагашский район</span>
						</div>
						<div class="bl6_i">
							<a href="tel:<?=$site['phone']?>">
								<i class="fas fa-phone-alt"></i>
								<span><?=$site['phone_view']?></span>
							</a>
						</div>
						<div class="bl6_i">
							<a href="https://wa.me/<?=$data['whatsapp']?>?text=Я%20заинтересован%20по%20поводу%20санаторий%20...">
								<i class="fab fa-whatsapp"></i>
								<span><?=$site['whatsapp_view']?></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="bl6_maps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7120.513486401069!2d69.05847235628151!3d41.37827484274449!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2skz!4v1609767977792!5m2!1sru!2skz" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>

	</div>

	<footer class="footer">
		<div class="bl_c">
			<div class="foot_c">
				<div class="foot_i">
					<div class="foot_logo"><?=$site['name']?></div>
				</div>
				<div class="foot_i">
					<div class="sos_set">
						<div class="top_site_si"><a target="_blank" href="https://www.instagram.com/<?=$site['instagram']?>"><i class="fab fa-instagram"></i></a></div>
						<div class="top_site_si"><a target="_blank" href="https://www.facebook.com/<?=$site['facebook']?>"><i class="fab fa-facebook"></i></i></a></div>
						<div class="top_site_si"><a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=Я%20заинтересован%20по%20поводу%20санаторий%20..."><i class="fab fa-whatsapp"></i></a></div>
					</div>
				</div>
				<div class="foot_i"></div>
			</div>
			<div class="footer_b">
				<div class="footer_bl">© <?=$site['name']?>, 2022</div>
				<div class="footer_br">
					<a href="https://gprog.kz" target="_blank" class="gprog_bl">
						<span>#gprog-та</span>
						<div class="gprog_heart"><i class="fas fa-heart"></i></div>
						<span>жасалған</span>
						<div class="gprog_ab">
							<div class="gprog_lg"><div class="lazy_img" data-src="https://gprog.kz/assets/img/logo/logo.png"></div></div>
							<div class="gprog_h">G prog</div>
							<div class="gprog_p">Шипажайға арнап сайт жасатыңыз</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</footer>

	<!-- main js -->
	<script src="/assets/js/main.js?v=7"></script>
	<? foreach ($js as $i): ?> <script src="/assets/js/<?=$i?>.js?v=<?=$ver?>"></script> <? endforeach ?>

	<? if ($site['metrika'] != null): ?><noscript><div><img src='https://mc.yandex.ru/watch/<?=$site['metrika']?>' style='position:absolute; left:-9999px;'/></div></noscript><?php endif ?>
	<? if ($site['pixel'] != null): ?><noscript><img height='1' width='1' style='display:none' src='https://www.facebook.com/tr?id=<?=$site['pixel']?>&ev=PageView&noscript=1'/></noscript><?php endif ?>

</body>
</html>

	<? include 'modal.php'; ?>