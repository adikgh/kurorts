<? include 'config/core.php'; 



?>
<? include 'block/header.php'; ?>

	<div class="sana">	
		<div class="bl_c">
			<div class="sanator">
				<div class="head_c">
					<h2>Все виды санаторий</h2>
					<p>Выберите санаторий, который лучше всего Вам подходит или закажите консультацию</p>
				</div>

				<div class="sanator_c">
					<? $sql = db::query("select * from sanatorium where number is not null ORDER BY number ASC"); ?>
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
	</div>

<? include 'block/footer.php'; ?>