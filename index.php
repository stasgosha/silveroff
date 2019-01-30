<?php $page_title = 'Главная'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<section class="main-slider-section">
			<div class="main-slider inside-dots">
				<div class="slide" style="background-image: url(img/main-slider/slide-1-image.png);">
					<div class="container">
						<div class="slide-content">
							<div class="slide-sale-block">
								<div class="value">-70%</div>
								<p>Скидки на все</p>
							</div>
							<a href="#" class="btn">Смотреть каталог</a>
						</div>
					</div>
				</div>
				<div class="slide" style="background-image: url(img/main-slider/slide-1-image.png);">
					<div class="container">
						<div class="slide-content">
							<div class="slide-sale-block">
								<div class="value">-70%</div>
								<p>Скидки на все</p>
							</div>
							<a href="#" class="btn">Смотреть каталог</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="filter-section">
			<div class="container">
				<form action="#" class="main-filter"><!-- .mf- -->
					<div class="mf-fields">
						<div class="mf-fields-item caption-item">
							<div class="mf-caption slf-note">Я ищу</div>
						</div>
						<div class="mf-fields-item for-who">
							<div class="inline-list">
								<div class="inline-list-item">
									<div class="inline-radio white">
										<input type="radio" name="for-whom" value="for-myself" id="for-myself" checked>
										<label for="for-myself">Для себя</label>
									</div>
								</div>
								<div class="inline-list-item">
									<div class="inline-radio white">
										<input type="radio" name="for-whom" value="for-gift" id="for-gift">
										<label for="for-gift">В подарок</label>
									</div>
								</div>
							</div>
						</div>
						<div class="mf-fields-item filters">
							<div class="inline-list">
								<div class="inline-list-item">
									<div class="select-field white">
										<!-- TODO: Стилизовать выпадающее меню -->
										<select name="type">
											<option value="rings">Кольца</option>
											<option value="chains">Цепочки</option>
										</select>
									</div>
								</div>
								<div class="inline-list-item">
									<div class="select-field white">
										<select name="material">
											<option value="silver">Из серебра</option>
											<option value="gold">Из золота</option>
										</select>
									</div>
								</div>
								<div class="inline-list-item">
									<div class="select-field white">
										<select name="additional">
											<option value="with-diamonds">С бриллиантами</option>
										</select>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-gray btn-smaller">Подобрать</button>
						</div>
					</div>
				</form>
			</div>
		</section>
		<section class="banners-section">
			<div class="container">
				<div class="row">
					<!-- data-wow-delay - задержка анимации. Может быть от 0 до 0.5 секунд -->
					<div class="col-md-7 wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<div class="banner-block">
							<img src="img/banners/thick-chain.png" alt="">
							<div class="block-content">
								<h3 class="block-caption">
								<a href="#">Мужские Толстые цепочки из серебра</a>
							</h3>
								<p>(Самый большой выбор в России)</p>
								<a href="#">Смотреть</a>
							</div>
						</div>
					</div>
					<div class="col-md-7 wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<div class="banner-block">
							<img src="img/banners/jewelry-laces.png" alt="">
							<div class="block-content">
								<h3 class="block-caption">
									<a href="#">Ювелирные <br>шнурки</a>
								</h3>
								<p>(и для женщин и для мужчин)</p>
								<a href="#">Смотреть</a>
							</div>
						</div>
					</div>
					<div class="col-md-14 wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<div class="banner-block big">
							<img src="img/banners/silver-jewelry.png" alt="">
							<div class="block-content">
								<h3 class="block-caption">
									<a href="#">Серебряные украшения производства <span class="italy-underline">Италия</span></a>
								</h3>
								<p>(и для женщин и для мужчин)</p>
								<a href="#">Смотреть</a>
							</div>
						</div>
					</div>
					<div class="col-md-7 wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<div class="banner-block large">
							<img src="img/banners/silver-bracelets.png" alt="">
							<div class="block-content">
								<h3 class="block-caption">
									<a href="#">Мужские браслеты <br>из серебра</a>
								</h3>
								<p>(Самый большой выбор в России)</p>
								<a href="#">Смотреть</a>
							</div>
						</div>
					</div>
					<div class="col-md-7 wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<div class="banner-block large">
							<img src="img/banners/silver-charms.png" alt="">
							<div class="block-content">
								<h3 class="block-caption">
								<a href="#">Подарочные серебряные брелоки</a>
							</h3>
								<a href="#">Смотреть</a>
							</div>
						</div>
					</div>
					<div class="col-md-14 wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<div class="banner-block huge">
							<div class="block-slider">
								<div class="slide">
									<img src="img/banners/silver-womans-chains.png" alt="">
								</div>
								<div class="slide">
									<img src="img/banners/silver-womans-chains.png" alt="">
								</div>
								<div class="slide">
									<img src="img/banners/silver-womans-chains.png" alt="">
								</div>
								<div class="slide">
									<img src="img/banners/silver-womans-chains.png" alt="">
								</div>
								<div class="slide">
									<img src="img/banners/silver-womans-chains.png" alt="">
								</div>
							</div>
							<div class="block-content">
								<h3 class="block-caption">
									<a href="#">Серебряные <br>Женские Цепочки</a>
								</h3>
								<a href="#">Смотреть</a>
							</div>
						</div>
					</div>
					<div class="col-md-7 wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<div class="banner-block">
							<img src="img/banners/silver-cufflinks.png" alt="">
							<div class="block-content">
								<h3 class="block-caption">
									<a href="#">Серебряные <br>запонки</a>
								</h3>
								<a href="#">Смотреть</a>
							</div>
						</div>
					</div>
					<div class="col-md-7 wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<div class="banner-block">
							<img src="img/banners/mens-rings.png" alt="">
							<div class="block-content">
								<h3 class="block-caption">
									<a href="#">Мужские <br>Кольца из серебра</a>
								</h3>
								<a href="#">Смотреть</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>