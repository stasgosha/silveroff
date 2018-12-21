<?php $page_title = 'Самовывоз'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<section class="breadcrumbs-section">
			<div class="container">
				<ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="item" href="index.php">
							<span itemprop="name">Silveroff</span>
						</a>
						<meta itemprop="position" content="1" />
					</li>
					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="item" href="#">
							<span itemprop="name"><?= $page_title ?></span>
						</a>
						<meta itemprop="position" content="2" />
					</li>
				</ol>
			</div>
		</section>
		<div class="container">
			<div class="inner-page-wrapper">
				<section class="page-content">
					<h1 class="slf-h1 margin-bottom-big">Самовывоз</h1>
				</section>
			</div>
		</div>
		<section class="pickup-section">
			<div class="container">
				<div class="pickup-nav">
					<li data-tab="#pickup-om-map" class="current">
						<i class="icon-location"></i>
						<span>На карте</span>
					</li>
					<li data-tab="#pickup-list">
						<i class="icon-bars"></i>
						<span>Списком</span>
					</li>
					<li data-tab="#pickup-points">
						<i class="icon-store"></i>
						<span>Точки самовывоза</span>
					</li>
				</div>
			</div>
			<div class="pickup-tabs-container">
				<div class="tab current" id="pickup-om-map">
					<div class="pickup-on-map-component">
						<div class="component-map" style="background-image: url(img/pickup/big-map.png);"></div>
						<div class="component-list-wrapper">
							<div class="block-caption">
								<i class="icon-info"></i>
								<p>Вы можете забрать интересующий Вас товар с нашего склада после предварительного согласования с менеджером</p>
							</div>
							<div class="points-list mCustomScrollbar" data-mcs-theme="dark">
								<div class="points-list-inner">
									<?php for ($i=0; $i < 8; $i++): ?>
										<div class="item">
											<div class="pickup-point-info-block small" data-type="accordion">
												<div class="item-header" data-type="accordion-header">
													<div class="header-text">
														<p>Москва <br>
														<span class="addr">г, Холодильный пер, д.3, оф. 11А</span></p>
													</div>
													<div class="header-price">от 169 руб.</div>
												</div>
												<div class="item-content" data-type="accordion-content">
													<div class="item-content-inner">
														<div class="short-info">
															<div class="point-logo">
																<img src="img/logos/boxberry.png" alt="">
															</div>
															<p><strong>Срок доставки в пункт:</strong><br> 1 дней - 06.09.18.</p>
															<ul class="point-features">
																<li>
																	<i class="icon-card"></i>
																</li>
																<li>
																	<i class="icon-wallet-flat"></i>
																</li>
																<li>
																	<i class="icon-hanger"></i>
																</li>
																<li>
																	<i class="icon-back"></i>
																</li>
															</ul>
															<p><strong>Срок хранения:</strong> до 20.09.18</p>
															<p><strong>Стоимость доставки в пункт:</strong> от 169руб.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php endfor; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab" id="pickup-list">
					<div class="container">
						<div class="points-list">
							<div class="points-list-inner">
								<?php for ($i=0; $i < 8; $i++): ?>
									<div class="item">
										<div class="pickup-point-info-block" data-type="accordion">
											<div class="item-header" data-type="accordion-header">
												<div class="header-text">
													<p>Москва <br>
													<span class="addr">г, Холодильный пер, д.3, оф. 11А</span></p>
													<div class="show-on-map show-if-opened">
														<i class="icon-location"></i>
														<span>Показать на карте</span>
													</div>
												</div>
												<div class="header-price">от 169 руб.</div>
											</div>
											<div class="item-content" data-type="accordion-content">
												<div class="item-content-inner">
													<div class="short-info">
														<div class="point-logo">
															<img src="img/logos/boxberry.png" alt="">
														</div>
														<p><strong>Срок доставки в пункт:</strong><br> 1 дней - 06.09.18.</p>
														<ul class="point-features">
															<li>
																<i class="icon-card"></i>
															</li>
															<li>
																<i class="icon-wallet-flat"></i>
															</li>
															<li>
																<i class="icon-hanger"></i>
															</li>
															<li>
																<i class="icon-back"></i>
															</li>
														</ul>
														<p><strong>Срок хранения:</strong> до 20.09.18</p>
														<p><strong>Стоимость доставки в пункт:</strong> от 169руб.</p>
													</div>
													<div class="description slf-typography">
														<p>Проезд: автобус - №№ 177, 669. Остановка "Привольная улица". Метро "Жулебино". От метро - первый вагон из центра, выход на ул. Авиаконструктора Миля, далее пешком. Слева будет магазин "МясновЪ", аптека, поликлиника №23, "Пятерочка". После "Пятерочки" будет стоять памятник В.Л. Милю и вертолет МИ-2, необходимо перейти дорогу. Держаться чуть левее, пройти мимо Вертолета, перед вами будет дом 31, со стороны бульвара первый нежилой подъезд, вывеска "ВИКТОРИЯ". <br>пн-сб:08.00-23.50</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php endfor; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="tab" id="pickup-points">
					<div class="container">
						<div class="points-list">
							<div class="points-list-inner">
								<div class="item">
									<div class="pickup-point-info-block open-on-load" data-type="accordion">
										<div class="item-header" data-type="accordion-header">
											<div class="header-text">
												<p>Москва <br>
												<span class="addr">г, Холодильный пер, д.3, оф. 11А</span></p>
											</div>
											<div class="header-price">Бесплатно</div>
										</div>
										<div class="item-content" data-type="accordion-content">
											<div class="item-content-inner">
												<div class="short-info">
													<div class="point-logo">
														<img src="img/logos/boxberry.png" alt="">
													</div>
													<p><strong>Срок доставки в пункт:</strong><br> 1 дней - 06.09.18.</p>
													<ul class="point-features">
														<li>
															<i class="icon-card"></i>
														</li>
														<li>
															<i class="icon-wallet-flat"></i>
														</li>
														<li>
															<i class="icon-hanger"></i>
														</li>
														<li>
															<i class="icon-back"></i>
														</li>
													</ul>
													<p><strong>Срок хранения:</strong> до 20.09.18</p>
													<p><strong>Стоимость доставки в пункт:</strong> от 169руб.</p>
												</div>
												<div class="description slf-typography">
													<p>Проезд: автобус - №№ 177, 669. Остановка "Привольная улица". Метро "Жулебино". От метро - первый вагон из центра, выход на ул. Авиаконструктора Миля, далее пешком. Слева будет магазин "МясновЪ", аптека, поликлиника №23, "Пятерочка". После "Пятерочки" будет стоять памятник В.Л. Милю и вертолет МИ-2, необходимо перейти дорогу. Держаться чуть левее, пройти мимо Вертолета, перед вами будет дом 31, со стороны бульвара первый нежилой подъезд, вывеска "ВИКТОРИЯ". <br>пн-сб:08.00-23.50</p>
												</div>
												<div class="item-map">
													<img src="img/pickup/pickup-map.png" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>