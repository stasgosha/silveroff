<?php $page_title = 'Корзина покупок'; ?>
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
					<h1 class="slf-h1">Корзина покупок</h1>
					<div class="shopping-cart">
						<div class="cart-header d-none d-lg-flex">
							<div class="item photo-label">&nbsp;</div>
							<div class="item description-label">Наименование</div>
							<div class="item size-label">Размер</div>
							<div class="item count-label">Количество</div>
							<div class="item favourites-label">Избранное</div>
							<div class="item price-label">Стоимость</div>
							<div class="item controls-label">Удалить</div>
						</div>
						<div class="cart-list">
							<div class="shopping-cart-item">
								<div class="shopping-cart-item-inner">
									<div class="item-column item-photo">
										<img src="img/products/small/silver-ring.png" alt="">
									</div>
									<div class="item-column item-description">
										<p class="slf-body-1 bigger margin-no">Серебряное кольцо спаси и сохрани с чернением и позолотой</p>
										<p class="slf-note color-light">Артикул: 31103006</p>
									</div>
									<div class="item-column item-size">
										<div class="size-select">
											<div class="field">
												<div class="select-field bordered fullwidth">
													<select>
														<option value="22.0">22.0</option>
													</select>
												</div>
											</div>
											<a href="#">Добавить другой размер</a>
										</div>
									</div>
									<div class="item-column item-count">
										<div class="count-select">
											<div class="control" data-action="subtraction">
												<i class="icon-minus"></i>
											</div>
											<input type="text" data-min="1" data-max="100" value="1" class="field selectedCount" readonly>
											<div class="control" data-action="addition">
												<i class="icon-plus"></i>
											</div>
										</div>
									</div>
									<div class="item-column item-favourites">
										<button class="action-icon-button switch">
											<i class="icon-like"></i>
										</button>
									</div>
									<div class="item-column item-price">
										<div class="price-block">
											<p class="price" data-price="4190">4 190 р.</p>
											<p class="old-price"><s>6 910</s> р. (-15%)</p>
										</div>
									</div>
									<div class="item-column item-controls">
										<button class="action-icon-button" data-action="removeFromCart" data-target=".shopping-cart-item">
											<i class="icon-close"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="shopping-cart-item">
								<div class="shopping-cart-item-inner">
									<div class="item-column item-photo">
										<img src="img/products/small/gold-ring.png" alt="">
									</div>
									<div class="item-column item-description">
										<p class="slf-body-1 bigger margin-no">Серебряное кольцо спаси и сохрани с чернением и позолотой</p>
										<p class="slf-note color-light">Артикул: 31103006</p>
									</div>
									<div class="item-column item-size">
										<div class="size-select">
											<div class="field">
												<div class="select-field bordered fullwidth">
													<select>
														<option value="22.0">22.0</option>
													</select>
												</div>
											</div>
											<a href="#">Добавить другой размер</a>
										</div>
									</div>
									<div class="item-column item-count">
										<div class="count-select">
											<div class="control" data-action="subtraction">
												<i class="icon-minus"></i>
											</div>
											<input type="text" data-min="1" data-max="100" value="1" class="field selectedCount" readonly>
											<div class="control" data-action="addition">
												<i class="icon-plus"></i>
											</div>
										</div>
									</div>
									<div class="item-column item-favourites">
										<button class="action-icon-button switch">
											<i class="icon-like"></i>
										</button>
									</div>
									<div class="item-column item-price">
										<div class="price-block">
											<p class="price" data-price="4190">4 190 р.</p>
										</div>
									</div>
									<div class="item-column item-controls">
										<button class="action-icon-button" data-action="removeFromCart" data-target=".shopping-cart-item">
											<i class="icon-close"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="shopping-cart-item">
								<div class="shopping-cart-item-inner">
									<div class="item-column item-photo">
										<img src="img/products/small/silver-ring.png" alt="">
									</div>
									<div class="item-column item-description">
										<p class="slf-body-1 bigger margin-no">Серебряное кольцо спаси и сохрани с чернением и позолотой</p>
										<p class="slf-note color-light">Артикул: 31103006</p>
									</div>
									<div class="item-column item-size">
										<div class="size-select">
											<div class="field">
												<div class="select-field bordered fullwidth">
													<select>
														<option value="22.0">22.0</option>
													</select>
												</div>
											</div>
											<a href="#">Добавить другой размер</a>
										</div>
									</div>
									<div class="item-column item-count">
										<div class="count-select">
											<div class="control" data-action="subtraction">
												<i class="icon-minus"></i>
											</div>
											<input type="text" data-min="1" data-max="100" value="1" class="field selectedCount" readonly>
											<div class="control" data-action="addition">
												<i class="icon-plus"></i>
											</div>
										</div>
									</div>
									<div class="item-column item-favourites">
										<button class="action-icon-button switch">
											<i class="icon-like"></i>
										</button>
									</div>
									<div class="item-column item-price">
										<div class="price-block">
											<p class="price" data-price="4190">4 190 р.</p>
										</div>
									</div>
									<div class="item-column item-controls">
										<button class="action-icon-button" data-action="removeFromCart" data-target=".shopping-cart-item">
											<i class="icon-close"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="cart-footer">
							<div class="cart-footer-inner">
								<div class="item d-none d-xxl-block">
									<button class="btn btn-bordered" data-action="clearProductsList">Очистить корзину</button>
								</div>
								<div class="item">
									<div class="promo-code-input">
										<p>У меня есть промо-код для скидки</p>
										<div class="input-field">
											<input type="text" placeholder="Укажите ваш промо-код для скидки">
										</div>
									</div>
								</div>
								<div class="item">
									<div class="cart-total-block">
										<div class="subtotal">
											<div class="item">
												<div class="label">Итого без скидки:</div>
												<div class="value"><span id="total-price">7890</span>р.</div>
											</div>
											<div class="item">
												<div class="label">Моя скидка:</div>
												<div class="value accented"><span id="discount">1200</span>р.</div>
											</div>
										</div>
										<div class="total">
											<div class="total-item label">Итого без доставки:</div>
											<div class="total-item count"><span id="goods-count">2</span> шт.</div>
											<div class="total-item total-price"><span id="total-price-with-discount">6640</span> р.</div>
										</div>
										<button class="btn btn-big btn-orange with-loader">Перейти к оформлению</button>
									</div>
								</div>
							</div>
						</div>
						<div class="cart-additional">
							<h3 class="slf-h3 text-center">Добавить к заказу подарочную упаковку</h3>
							<div class="cart-additional-list">
								<div class="additional-cart-item">
									<div class="item-column item-photo">
										<img src="img/products/small/bag.png" alt="">
									</div>
									<div class="item-column item-description">
										<p class="slf-body-1 bigger margin-no">Серебряное кольцо спаси и сохрани с чернением и позолотой</p>
										<p class="slf-note color-light">Артикул: 31103006</p>
									</div>
									<div class="item-column item-count">
										<div class="count-select">
											<div class="control" data-action="subtraction">
												<i class="icon-minus"></i>
											</div>
											<input type="text" data-min="1" data-max="100" value="1" class="field selectedCount" readonly>
											<div class="control" data-action="addition">
												<i class="icon-plus"></i>
											</div>
										</div>
									</div>
									<div class="item-column item-price">
										<div class="price-block">
											<p class="price" data-price="350">350 р.</p>
										</div>
									</div>
									<div class="item-column item-buttons">
										<button class="btn btn-dark btn-small">
											<i class="icon-plus" style="font-size: 10px;"></i>
											<span>Добавить в корзину</span>
										</button>
									</div>
								</div>
								<div class="additional-cart-item">
									<div class="item-column item-photo">
										<img src="img/products/small/envelope.png" alt="">
									</div>
									<div class="item-column item-description">
										<p class="slf-body-1 bigger margin-no">Серебряное кольцо спаси и сохрани с чернением и позолотой</p>
										<p class="slf-note color-light">Артикул: 31103006</p>
									</div>
									<div class="item-column item-count">
										<div class="count-select">
											<div class="control" data-action="subtraction">
												<i class="icon-minus"></i>
											</div>
											<input type="text" data-min="1" data-max="100" value="1" class="field selectedCount" readonly>
											<div class="control" data-action="addition">
												<i class="icon-plus"></i>
											</div>
										</div>
									</div>
									<div class="item-column item-price">
										<div class="price-block">
											<p class="price" data-price="170">170 р.</p>
										</div>
									</div>
									<div class="item-column item-buttons">
										<button class="btn btn-dark btn-small">
											<i class="icon-plus" style="font-size: 10px;"></i>
											<span>Добавить в корзину</span>
										</button>
									</div>
								</div>
							</div>
							<div class="show-all-additional-items">
								<span>Посмотреть все варианты подарочной упаковки</span>
								<i class="icon-chevron-down"></i>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<section class="recomendations-section">
			<div class="container">
				<div class="section-caption">
					<h2 class="slf-h2">Рекомендуем</h2>
				</div>
				<div class="goods-slider">
					<div class="goods-slide slide">
						<div class="product-card">
							<div class="product-labels">
								<div class="item green">Новинка</div>
								<div class="item orange">Хит</div>
							</div>
							<div class="product-photos">
								<div class="product-photos-slider">
									<div class="slide">
										<a href="#">
											<img src="img/products/medium/gold-ring.png" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<div class="product-text fixed-height">
									<p class="slf-body-1 large min-line-height margin-no">
										<a href="#">Кольцо серебряное с позолотой Спаси и сохрани</a>
									</p>
									<p class="slf-note color-light">Артикул: 31103006</p>
								</div>
								<div class="product-columns">
									<div class="item">
										<div class="product-price big">490 р.</div>
									</div>
									<div class="item">
										<div class="select-field bordered small fullwidth">
											<select>
												<option value="22.0">22.0</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="product-hidden-content">
								<button class="btn btn-dark btn-smaller fullwidth">Добавить в корзину</button>
							</div>
						</div>
					</div>
					<div class="goods-slide slide">
						<div class="product-card">
							<div class="product-labels">
								<div class="item red">-50%</div>
							</div>
							<div class="product-photos">
								<div class="product-photos-slider">
									<div class="slide">
										<a href="#">
											<img src="img/products/medium/silver-ring.png" alt="">
										</a>
									</div>
									<div class="slide">
										<a href="#">
											<img src="img/products/medium/silver-ring.png" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<div class="product-text fixed-height">
									<p class="slf-body-1 large min-line-height margin-no">
										<a href="#">Серебряное кольцо с <br>молитвой Отче наш, <br>покрытие палладий</a>
									</p>
									<p class="slf-note color-light">Артикул: 31103006</p>
								</div>
								<div class="product-columns">
									<div class="item">
										<div class="product-price big">490 р.</div>
									</div>
									<div class="item">
										<div class="select-field bordered small fullwidth">
											<select>
												<option value="22.0">22.0</option>
												<option value="22.0">22.0</option>
												<option value="22.0">22.0</option>
												<option value="22.0">22.0</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="product-hidden-content">
								<button class="btn btn-dark btn-smaller fullwidth">Добавить в корзину</button>
							</div>
						</div>
					</div>
					<div class="goods-slide slide">
						<div class="product-card">
							<div class="product-labels">
								<div class="item blue">Рекомендуем</div>
							</div>
							<div class="product-photos">
								<div class="product-photos-slider">
									<div class="slide">
										<a href="#">
											<img src="img/products/medium/gold-ring.png" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<div class="product-text fixed-height">
									<p class="slf-body-1 large min-line-height margin-no">
										<a href="#">Кольцо серебряное с позолотой Спаси и сохрани</a>
									</p>
									<p class="slf-note color-light">Артикул: 31103006</p>
								</div>
								<div class="product-columns">
									<div class="item">
										<div class="product-price big">490 р.</div>
									</div>
									<div class="item">
										<div class="select-field bordered small fullwidth">
											<select>
												<option value="22.0">22.0</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="product-hidden-content">
								<button class="btn btn-dark btn-smaller fullwidth">Добавить в корзину</button>
							</div>
						</div>
					</div>
					<div class="goods-slide slide">
						<div class="product-card">
							<div class="product-labels">
								<div class="item red">-50%</div>
							</div>
							<div class="product-photos">
								<div class="product-photos-slider">
									<div class="slide">
										<a href="#">
											<img src="img/products/medium/silver-ring.png" alt="">
										</a>
									</div>
									<div class="slide">
										<a href="#">
											<img src="img/products/medium/silver-ring.png" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<div class="product-text fixed-height">
									<p class="slf-body-1 large min-line-height margin-no">
										<a href="#">Серебряное кольцо с <br>молитвой Отче наш, <br>покрытие палладий</a>
									</p>
									<p class="slf-note color-light">Артикул: 31103006</p>
								</div>
								<div class="product-columns">
									<div class="item">
										<div class="product-price big">490 р.</div>
									</div>
									<div class="item">
										<div class="select-field bordered small fullwidth">
											<select>
												<option value="22.0">22.0</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="product-hidden-content">
								<button class="btn btn-dark btn-smaller fullwidth">Добавить в корзину</button>
							</div>
						</div>
					</div>
					<div class="goods-slide slide">
						<div class="product-card">
							<div class="product-labels">
								<div class="item green">Новинка</div>
								<div class="item orange">Хит</div>
							</div>
							<div class="product-photos">
								<div class="product-photos-slider">
									<div class="slide">
										<a href="#">
											<img src="img/products/medium/gold-ring.png" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<div class="product-text fixed-height">
									<p class="slf-body-1 large min-line-height margin-no">
										<a href="#">Кольцо серебряное с позолотой Спаси и сохрани</a>
									</p>
									<p class="slf-note color-light">Артикул: 31103006</p>
								</div>
								<div class="product-columns">
									<div class="item">
										<div class="product-price big">490 р.</div>
									</div>
									<div class="item">
										<div class="select-field bordered small fullwidth">
											<select>
												<option value="22.0">22.0</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="product-hidden-content">
								<button class="btn btn-dark btn-smaller fullwidth">Добавить в корзину</button>
							</div>
						</div>
					</div>
					<div class="goods-slide slide">
						<div class="product-card">
							<div class="product-labels">
								<div class="item red">-50%</div>
							</div>
							<div class="product-photos">
								<div class="product-photos-slider">
									<div class="slide">
										<a href="#">
											<img src="img/products/medium/silver-ring.png" alt="">
										</a>
									</div>
									<div class="slide">
										<a href="#">
											<img src="img/products/medium/silver-ring.png" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<div class="product-text fixed-height">
									<p class="slf-body-1 large min-line-height margin-no">
										<a href="#">Серебряное кольцо с <br>молитвой Отче наш, <br>покрытие палладий</a>
									</p>
									<p class="slf-note color-light">Артикул: 31103006</p>
								</div>
								<div class="product-columns">
									<div class="item">
										<div class="product-price big">490 р.</div>
									</div>
									<div class="item">
										<div class="select-field bordered small fullwidth">
											<select>
												<option value="22.0">22.0</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="product-hidden-content">
								<button class="btn btn-dark btn-smaller fullwidth">Добавить в корзину</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>