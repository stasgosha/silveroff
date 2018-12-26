<?php $page_title = 'Личный кабинет'; ?>
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
					<h1 class="slf-h1">Личный кабинет</h1>
					<div class="user-cabinet-component">
						<div class="component-sidebar">
							<ul class="cabinet-nav">
								<li>
									<a href="cabinet-orders.php">
										<span class="item-icon">
											<i class="icon-document"></i>
										</span>
										<span class="item-text">Мои заказы</span>
									</a>
								</li>
								<li>
									<a href="cabinet-user-data.php">
										<span class="item-icon">
											<i class="icon-user"></i>
										</span>
										<span class="item-text">Мои данные</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="item-icon">
											<i class="icon-envelope"></i>
										</span>
										<span class="item-text">Обратная связь</span>
									</a>
								</li>
								<li>
									<a href="#" class="logout">
										<span class="item-icon">
											<i class="icon-logout"></i>
										</span>
										<span class="item-text">Выйти из ЛК</span>
									</a>
								</li>
							</ul>
							<div class="discount-card">
								<div class="card-image">
									<img src="img/cabinet/discount-card.png" alt="">
								</div>
								<div class="card-score">
									<p class="item-caption">Накопленные баллы:</p>
									<div class="number"> 
										<span>0</span>
										<span>2</span>
										<span>5</span>
										<span>9</span>
									</div>
									<a href="#" class="info-link">
										<span>Как потратить?</span>
										<i class="icon-info"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="component-content">
							<div class="cabinet-orders-list">
								<div class="item">
									<div class="cabinet-order-block shipping-service" data-type="accordion">
										<div class="block-header" data-type="accordion-header">
											<div class="bh-item">
												<div class="order-caption">
													<div class="order-number">Заказ №221454</div>
													<div class="order-date">от 8 Августа 2018 06:21</div>
												</div>
												<div class="order-status shipping-service">
													<i class="icon-truck"></i>
													<span>Передан в службу доставки</span>
												</div>
											</div>
											<div class="bh-item">
												<div class="order-action-link">
													<i class="icon-cancel"></i>
													<span>Отменить заказ</span>
												</div>
											</div>
											<div class="opener">
												<i class="icon-chevron-down"></i>
											</div>
										</div>
										<div class="block-content" data-type="accordion-content">
											<div class="order-content">
												<div class="order-content-column order-info">
													<p class="column-name">Информация о заказе:</p>
													<div class="order-params">
														<div class="item">
															<div class="item-label">Адрес доставки:</div>
															<div class="item-value">Санкт-Петербург, Володарского 32 кв 13</div>
														</div>
														<div class="item">
															<div class="item-label">Телефон:</div>
															<div class="item-value">89112719359</div>
														</div>
														<div class="item">
															<div class="item-label">Доставка:</div>
															<div class="item-value">Boxberry Санкт-Петербург Коломенская 47</div>
														</div>
														<div class="item">
															<div class="item-label">Стоимость доставки:</div>
															<div class="item-value">179 руб.</div>
														</div>
														<div class="item">
															<div class="item-label">Оплата:</div>
															<div class="item-value">
																<span class="margin-right-normal">Оплата картой</span>
																<button class="btn btn-tiny btn-green">Оплатить заказ</button>
															</div>
														</div>
														<div class="item">
															<div class="item-label">Стоимость заказа:</div>
															<div class="item-value">11339 руб.</div>
														</div>
													</div>
												</div>
												<div class="order-content-column order-shipping-status">
													<p class="column-name">Статус доставки:</p>
													<div class="order-params">
														<div class="item">
															<div class="item-label">18.09.18 11:11</div>
															<div class="item-value">Передан в службу доставки</div>
														</div>
														<div class="item">
															<div class="item-label">17.09.18 18:06</div>
															<div class="item-value">Новый</div>
														</div>
													</div>
													<div class="shipping-info">
														<div class="order-params">
															<div class="item">
																<div class="item-label">Трек отслеживания:</div>
																<div class="item-value">54329234-0933</div>
															</div>
															<div class="item">
																<div class="item-label">Статус службы доставки:</div>
																<div class="item-value">Передан в службу доставки</div>
															</div>
															<div class="item">
																<div class="item-label">Способ доставки:</div>
																<div class="item-value">
																	<div class="shipping-service-logo">
																		<img src="img/logos/boxberry.png" alt="">
																	</div>
																	<a href="#" target="_blank" class="nowrap">Отследить заказ</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="order-content-column order-goods">
													<p class="column-name">Товары в заказе (2):</p>
													<div class="order-products-list">
														<div class="labels-row d-none d-lg-flex">
															<div class="item image">Товар</div>
															<div class="item description">Описание</div>
															<div class="item count">Количество</div>
															<div class="item price">Стоимость</div>
															<div class="item total-price">Общая стоимость</div>
														</div>
														<div class="products-list-item">
															<div class="item-block image flex-center">
																<img src="img/products/tiny/silver-ring.png" alt="">
															</div>
															<div class="item-block description">
																<p class="slf-body-1 bigger min-line-height margin-no">
																	<a href="#">Серебряное кольцо с <br>молитвой Отче наш, покрытие палладий</a>
																</p>
																<p class="slf-note small color-light ">Артикул: 31103006</p>
															</div>
															<div class="item-block count flex-center">
																<p class="item-value">1</p>
															</div>
															<div class="item-block price flex-center">
																<p class="item-value">4 190 р.</p>
															</div>
															<div class="item-block total-price flex-center">
																<p class="item-value">4 190 р.</p>
															</div>
														</div>
														<div class="products-list-item">
															<div class="item-block image flex-center">
																<img src="img/products/tiny/silver-ring.png" alt="">
															</div>
															<div class="item-block description">
																<p class="slf-body-1 bigger min-line-height margin-no">
																	<a href="#">Серебряное кольцо с <br>молитвой Отче наш, покрытие палладий</a>
																</p>
																<p class="slf-note small color-light ">Артикул: 31103006</p>
															</div>
															<div class="item-block count flex-center">
																<p class="item-value">1</p>
															</div>
															<div class="item-block price flex-center">
																<p class="item-value">4 190 р.</p>
															</div>
															<div class="item-block total-price flex-center">
																<p class="item-value">4 190 р.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="cabinet-order-block" data-type="accordion">
										<div class="block-header" data-type="accordion-header">
											<div class="bh-item">
												<div class="order-caption">
													<div class="order-number">Заказ №221454</div>
													<div class="order-date">от 8 Августа 2018 06:21</div>
												</div>
												<div class="order-status cancelled">
													<i class="icon-remove"></i>
													<span>Отменен</span>
												</div>
											</div>
											<div class="opener">
												<i class="icon-chevron-down"></i>
											</div>
										</div>
										<div class="block-content" data-type="accordion-content">
											<div class="order-content">
												<div class="order-content-column order-info">
													<p class="column-name">Информация о заказе:</p>
													<div class="order-params">
														<div class="item">
															<div class="item-label">Адрес доставки:</div>
															<div class="item-value">Санкт-Петербург, Володарского 32 кв 13</div>
														</div>
														<div class="item">
															<div class="item-label">Телефон:</div>
															<div class="item-value">89112719359</div>
														</div>
														<div class="item">
															<div class="item-label">Доставка:</div>
															<div class="item-value">Boxberry Санкт-Петербург Коломенская 47</div>
														</div>
														<div class="item">
															<div class="item-label">Стоимость доставки:</div>
															<div class="item-value">179 руб.</div>
														</div>
														<div class="item">
															<div class="item-label">Оплата:</div>
															<div class="item-value">
																<span class="margin-right-normal">Оплата картой</span>
																<button class="btn btn-tiny btn-green">Оплатить заказ</button>
															</div>
														</div>
														<div class="item">
															<div class="item-label">Стоимость заказа:</div>
															<div class="item-value">11339 руб.</div>
														</div>
													</div>
												</div>
												<div class="order-content-column order-shipping-status">
													<p class="column-name">Статус доставки:</p>
													<div class="order-params">
														<div class="item">
															<div class="item-label">18.09.18 11:11</div>
															<div class="item-value">Передан в службу доставки</div>
														</div>
														<div class="item">
															<div class="item-label">17.09.18 18:06</div>
															<div class="item-value">Новый</div>
														</div>
													</div>
													<div class="shipping-info">
														<div class="order-params">
															<div class="item">
																<div class="item-label">Трек отслеживания:</div>
																<div class="item-value">54329234-0933</div>
															</div>
															<div class="item">
																<div class="item-label">Статус службы доставки:</div>
																<div class="item-value">Передан в службу доставки</div>
															</div>
															<div class="item">
																<div class="item-label">Способ доставки:</div>
																<div class="item-value">
																	<div class="shipping-service-logo">
																		<img src="img/logos/boxberry.png" alt="">
																	</div>
																	<a href="#" target="_blank" class="nowrap">Отследить заказ</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="order-content-column order-goods">
													<p class="column-name">Товары в заказе (2):</p>
													<div class="order-products-list">
														<div class="labels-row d-none d-lg-flex">
															<div class="item image">Товар</div>
															<div class="item description">Описание</div>
															<div class="item count">Количество</div>
															<div class="item price">Стоимость</div>
															<div class="item total-price">Общая стоимость</div>
														</div>
														<div class="products-list-item">
															<div class="item-block image flex-center">
																<img src="img/products/tiny/silver-ring.png" alt="">
															</div>
															<div class="item-block description">
																<p class="slf-body-1 bigger min-line-height margin-no">
																	<a href="#">Серебряное кольцо с <br>молитвой Отче наш, покрытие палладий</a>
																</p>
																<p class="slf-note small color-light ">Артикул: 31103006</p>
															</div>
															<div class="item-block count flex-center">
																<p class="item-value">1</p>
															</div>
															<div class="item-block price flex-center">
																<p class="item-value">4 190 р.</p>
															</div>
															<div class="item-block total-price flex-center">
																<p class="item-value">4 190 р.</p>
															</div>
														</div>
														<div class="products-list-item">
															<div class="item-block image flex-center">
																<img src="img/products/tiny/silver-ring.png" alt="">
															</div>
															<div class="item-block description">
																<p class="slf-body-1 bigger min-line-height margin-no">
																	<a href="#">Серебряное кольцо с <br>молитвой Отче наш, покрытие палладий</a>
																</p>
																<p class="slf-note small color-light ">Артикул: 31103006</p>
															</div>
															<div class="item-block count flex-center">
																<p class="item-value">1</p>
															</div>
															<div class="item-block price flex-center">
																<p class="item-value">4 190 р.</p>
															</div>
															<div class="item-block total-price flex-center">
																<p class="item-value">4 190 р.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="cabinet-order-block done" data-type="accordion">
										<div class="block-header" data-type="accordion-header">
											<div class="bh-item">
												<div class="order-caption">
													<div class="order-number">Заказ №221454</div>
													<div class="order-date">от 8 Августа 2018 06:21</div>
												</div>
												<div class="order-status done">
													<i class="icon-tick"></i>
													<span>Доставлен и оплачен</span>
												</div>
											</div>
											<div class="opener">
												<i class="icon-chevron-down"></i>
											</div>
										</div>
										<div class="block-content" data-type="accordion-content">
											<div class="order-content">
												<div class="order-content-column order-info">
													<p class="column-name">Информация о заказе:</p>
													<div class="order-params">
														<div class="item">
															<div class="item-label">Адрес доставки:</div>
															<div class="item-value">Санкт-Петербург, Володарского 32 кв 13</div>
														</div>
														<div class="item">
															<div class="item-label">Телефон:</div>
															<div class="item-value">89112719359</div>
														</div>
														<div class="item">
															<div class="item-label">Доставка:</div>
															<div class="item-value">Boxberry Санкт-Петербург Коломенская 47</div>
														</div>
														<div class="item">
															<div class="item-label">Стоимость доставки:</div>
															<div class="item-value">179 руб.</div>
														</div>
														<div class="item">
															<div class="item-label">Оплата:</div>
															<div class="item-value">
																<span class="margin-right-normal">Оплата картой</span>
																<button class="btn btn-tiny btn-green">Оплатить заказ</button>
															</div>
														</div>
														<div class="item">
															<div class="item-label">Стоимость заказа:</div>
															<div class="item-value">11339 руб.</div>
														</div>
													</div>
												</div>
												<div class="order-content-column order-shipping-status">
													<p class="column-name">Статус доставки:</p>
													<div class="order-params">
														<div class="item">
															<div class="item-label">18.09.18 11:11</div>
															<div class="item-value">Передан в службу доставки</div>
														</div>
														<div class="item">
															<div class="item-label">17.09.18 18:06</div>
															<div class="item-value">Новый</div>
														</div>
													</div>
													<div class="shipping-info">
														<div class="order-params">
															<div class="item">
																<div class="item-label">Трек отслеживания:</div>
																<div class="item-value">54329234-0933</div>
															</div>
															<div class="item">
																<div class="item-label">Статус службы доставки:</div>
																<div class="item-value">Передан в службу доставки</div>
															</div>
															<div class="item">
																<div class="item-label">Способ доставки:</div>
																<div class="item-value">
																	<div class="shipping-service-logo">
																		<img src="img/logos/boxberry.png" alt="">
																	</div>
																	<a href="#" target="_blank" class="nowrap">Отследить заказ</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="order-content-column order-goods">
													<p class="column-name">Товары в заказе (2):</p>
													<div class="order-products-list">
														<div class="labels-row d-none d-lg-flex">
															<div class="item image">Товар</div>
															<div class="item description">Описание</div>
															<div class="item count">Количество</div>
															<div class="item price">Стоимость</div>
															<div class="item total-price">Общая стоимость</div>
														</div>
														<div class="products-list-item">
															<div class="item-block image flex-center">
																<img src="img/products/tiny/silver-ring.png" alt="">
															</div>
															<div class="item-block description">
																<p class="slf-body-1 bigger min-line-height margin-no">
																	<a href="#">Серебряное кольцо с <br>молитвой Отче наш, покрытие палладий</a>
																</p>
																<p class="slf-note small color-light ">Артикул: 31103006</p>
															</div>
															<div class="item-block count flex-center">
																<p class="item-value">1</p>
															</div>
															<div class="item-block price flex-center">
																<p class="item-value">4 190 р.</p>
															</div>
															<div class="item-block total-price flex-center">
																<p class="item-value">4 190 р.</p>
															</div>
														</div>
														<div class="products-list-item">
															<div class="item-block image flex-center">
																<img src="img/products/tiny/silver-ring.png" alt="">
															</div>
															<div class="item-block description">
																<p class="slf-body-1 bigger min-line-height margin-no">
																	<a href="#">Серебряное кольцо с <br>молитвой Отче наш, покрытие палладий</a>
																</p>
																<p class="slf-note small color-light ">Артикул: 31103006</p>
															</div>
															<div class="item-block count flex-center">
																<p class="item-value">1</p>
															</div>
															<div class="item-block price flex-center">
																<p class="item-value">4 190 р.</p>
															</div>
															<div class="item-block total-price flex-center">
																<p class="item-value">4 190 р.</p>
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
					</div>
				</section>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>