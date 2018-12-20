<?php $page_title = 'Оформление заказа'; ?>
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
					</div>
					<div class="checkout">
						<h2 class="slf-h1 margin-bottom-medium">Оформление заказа</h2>
						<p class="slf-body-1">* Поля помеченные звездочкой обязательны для заполнения, остальные данные Вы всегда сможете согласовать с нашим менеджером по телефону при подтверждении заказа.</p>
						<form action="#" class="checkout-form form">
							<div class="checkout-form-content">
								<div class="checkout-form-content-inner">
									<div class="user-info">
										<h3 class="slf-h3 font-300 margin-bottom-big">Ваши данные</h3>
										<div class="equal-width-columns">
											<div class="column">
												<div class="form-field">
													<input id="user-name" type="text" required class="input-field">
													<label for="user-name">ФИО*</label>
												</div>
											</div>
											<div class="column">
												<div class="form-field">
													<input id="user-phone" type="phone" required class="input-field">
													<label for="user-phone">Телефон*</label>
												</div>
											</div>
											<div class="column">
												<div class="form-field">
													<input id="user-email" type="email" required class="input-field">
													<label for="user-email">Ваш e-mail*</label>
												</div>
											</div>
										</div>
									</div>
									<div class="delivery-city">
										<h3 class="slf-h3 font-300 margin-bottom-big">Город доставки</h3>
										<div class="delivery-city-select">
											<div class="label">Варианты доставки:</div>
											<div class="field">
												<div class="select-field inline">
													<select>
														<option value="1">Санкт-Петербург</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="delivery-method">
										<h3 class="slf-h3 font-300 margin-bottom-normal">Способ получения заказа</h3>
										<div class="radio-tabs">
											<div class="item current" data-tab="#courier-tab">
												<input type="radio" name="delivery_method" value="courier" id="courier" checked>
												<label for="courier">
													<div class="item-icon">
														<i class="icon-man-with-box"></i>
													</div>
													<div class="item-caption">Курьером</div>
													<p class="slf-note">Доставка до вашей двери</p>
												</label>
											</div>
											<div class="item" data-tab="#customer-pickup-tab">
												<input type="radio" name="delivery_method" value="customer-pickup" id="customer-pickup">
												<label for="customer-pickup">
													<div class="item-icon">
														<i class="icon-save-location"></i>
													</div>
													<div class="item-caption">Самовывоз</div>
													<p class="slf-note">251 пункт выдачи заказов</p>
												</label>
											</div>
											<div class="item" data-tab="#post-office-tab">
												<input type="radio" name="delivery_method" value="post-office" id="post-office">
												<label for="post-office">
													<div class="item-icon">
														<i class="icon-post-box"></i>
													</div>
													<div class="item-caption">Почтой</div>
													<p class="slf-note">В вашем почтовом отделении</p>
												</label>
											</div>
										</div>
										<div class="shipping-tabs-container">
											<div class="shipping-tab" id="courier-tab">
												<h3 class="slf-h3 font-300 margin-bottom-normal">Курьерская служба</h3>
												<div class="delivery-services-list">
													<div class="item">
														<div class="delivery-service-radio-block">
															<input type="radio" name="delivery_service" id="dpd">
															<label for="dpd">
																<div class="item-logo">
																	<img src="img/logos/dpd.png" alt="">
																</div>
																<div class="item-caption">Курьерской службой DPD</div>
																<ul class="item-params">
																	<li>от 250руб.</li>
																	<li>до 2 дней</li>
																</ul>
															</label>
														</div>
													</div>
													<div class="item">
														<div class="delivery-service-radio-block">
															<input type="radio" name="delivery_service" id="sdek">
															<label for="sdek">
																<div class="item-logo">
																	<img src="img/logos/sdek.png" alt="">
																</div>
																<div class="item-caption">Курьерской службой СДЭК</div>
																<ul class="item-params">
																	<li>
																		<div class="km-from-mkad">
																			<span>КМ от МКАД</span>
																			<div class="count-select black">
																				<div class="control" data-action="subtraction">
																					<i class="icon-minus"></i>
																				</div>
																				<input type="text" data-min="1" data-max="100" value="1" class="field selectedCount" readonly>
																				<div class="control" data-action="addition">
																					<i class="icon-plus"></i>
																				</div>
																			</div>
																		</div>
																	</li>
																	<li>от 350руб.</li>
																	<li>до 4 дней</li>
																</ul>
															</label>
														</div>
													</div>
												</div>
												<h3 class="slf-h3 font-300 margin-bottom-medium">Куда нужно доставить</h3>
												<div class="shipping-address-form">
													<div class="form-row">
														<div class="form-field wide">
															<input id="shipping-street" type="text" required class="input-field">
															<label for="shipping-street">Улица</label>
														</div>
														<div class="form-field">
															<input id="shipping-building" type="text" required class="input-field">
															<label for="shipping-building">Дом, корпус, строение</label>
															<div class="field-error">
																<label for="shipping-building">Для расчета стоимости доставки, требуется указать ваш индекс</label>
															</div>
														</div>
														<div class="form-field">
															<input id="shipping-apartments" type="text" class="input-field">
															<label for="shipping-apartments">Квартира, офис</label>
														</div>
													</div>
													<div class="form-row">
														<div class="expand-trigger">
															<i class="icon-plus"></i>
															<span>Указать подъезд, домофон, этаж и комментарий курьеру</span>
														</div>
													</div>
												</div>
												<h3 class="slf-h3 font-300 margin-bottom-medium">Дата доставки</h3>
												<div class="select-shipping-date">
													<div class="shipping-date">Завтра, 10 августа, с 10:00 до 18:00</div>
													<div class="shipping-price">250 руб.</div>
												</div>
											</div>
											<div class="shipping-tab" id="customer-pickup-tab">
												<div class="find-on-map">
													<i class="icon-location"></i>
													<span>Найти пункт на карте</span>
												</div>
												<div class="map-container margin-bottom-large">
													<img src="img/temp/map.png" alt="">
												</div>
												<h3 class="slf-h3 font-300 margin-bottom-small">Пункты самовывоза</h3>
												<div class="pickup-points-list mCustomScrollbar" data-mcs-theme="dark">
													<div class="pickup-points-list-inner">
														<div class="item">
															<div class="pickup-point-block">
																<input type="radio" name="pickup-points" id="pp_silveroff">
																<label for="pp_silveroff">
																	<div class="item-logo">
																		<img src="img/logos/silveroff.png" alt="">
																	</div>
																	<div class="item-content">
																		<div class="item-caption">Самовывоз ВДНХ</div>
																		<p class="slf-body-1">Шоурум - Москва 
																			<br>Адрес: м. ВДНХ ул. Касаткина д. 3Ф стр.7 
																			<br>Режим работы магазина: ПН-ПТ: 10 до 19 часов, Сб-Вск: 12 до 17 часов 
																			<br>Срок хранения заказа на пункте выдачи: 7 дней - до 16.10.2018
																		</p>
																	</div>
																	<div class="item-price">0руб.</div>
																</label>
															</div>
														</div>
														<div class="item">
															<div class="pickup-point-block">
																<input type="radio" name="pickup-points" id="pp_boxberry_1">
																<label for="pp_boxberry_1">
																	<div class="item-logo">
																		<img src="img/logos/boxberry.png" alt="">
																	</div>
																	<div class="item-content">
																		<div class="item-caption">Самовывоз - Путилково д, Новотушинская ул, д. 4</div>
																		<p class="slf-body-1">Шоурум - Москва 
																			<br>Адрес: м. ВДНХ ул. Касаткина д. 3Ф стр.7 
																			<br>Режим работы магазина: ПН-ПТ: 10 до 19 часов, Сб-Вск: 12 до 17 часов 
																			<br>Срок хранения заказа на пункте выдачи: 7 дней - до 16.10.2018
																		</p>
																	</div>
																	<div class="item-price">549руб.</div>
																</label>
															</div>
														</div>
														<div class="item">
															<div class="pickup-point-block">
																<input type="radio" name="pickup-points" id="pp_boxberry">
																<label for="pp_boxberry">
																	<div class="item-logo">
																		<img src="img/logos/boxberry.png" alt="">
																	</div>
																	<div class="item-content">
																		<div class="item-caption">Самовывоз - Путилково д, Новотушинская ул, д. 4</div>
																		<p class="slf-body-1">Шоурум - Москва 
																			<br>Адрес: м. ВДНХ ул. Касаткина д. 3Ф стр.7 
																			<br>Режим работы магазина: ПН-ПТ: 10 до 19 часов, Сб-Вск: 12 до 17 часов 
																			<br>Срок хранения заказа на пункте выдачи: 7 дней - до 16.10.2018
																		</p>
																	</div>
																	<div class="item-price">549руб.</div>
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="shipping-tab" id="post-office-tab">
												Нет дизайна
											</div>
										</div>
									</div>
									<div class="payment-methods">
										<h3 class="slf-h3 font-300 margin-bottom-large">Способы оплаты</h3>
										<div class="payment-methods-list">
											<div class="item">
												<input type="radio" name="payment-method" id="pm-cash" checked>
												<label for="pm-cash">
													<div class="item-logo">
														<img src="img/logos/cash.png" alt="">
													</div>
													<div class="item-content">
														<p class="item-caption">Наличными</p>
														<p>Наличными средствами при курьерской доставке или самовывозе.</p>
													</div>
												</label>
											</div>
											<div class="item">
												<input type="radio" name="payment-method" id="pm-visa">
												<label for="pm-visa">
													<div class="item-logo">
														<img src="img/logos/visa-mastercard.png" alt="">
													</div>
													<div class="item-content">
														<p class="item-caption">Оплата Visa и Mastercard</p>
														<p>Все операции по оплате банковскими картами проходят в режиме затиы. 0% комиссий.</p>
													</div>
												</label>
											</div>
											<div class="item">
												<input type="radio" name="payment-method" id="pm-yandex">
												<label for="pm-yandex">
													<div class="item-logo">
														<img src="img/logos/yandex-money.png" alt="">
													</div>
													<div class="item-content">
														<p class="item-caption">Яндекс деньги</p>
														<p>Комиссия 0%</p>
													</div>
												</label>
											</div>
											<div class="item">
												<input type="radio" name="payment-method" id="pm-banks">
												<label for="pm-banks">
													<div class="item-logo">
														<img src="img/logos/banks.png" alt="">
													</div>
													<div class="item-content">
														<p class="item-caption">Оплата через интернет-банк</p>
														<p>Оплата с помощью интернет банкинга Сбербанк Онлайн, Альфа-Клик, PSB-Retail</p>
													</div>
												</label>
											</div>
											<div class="item">
												<input type="radio" name="payment-method" id="pm-receipt">
												<label for="pm-receipt">
													<div class="item-logo">
														<img src="img/logos/receipt.png" alt="">
													</div>
													<div class="item-content">
														<p class="item-caption">Оплата по квитанции в банке</p>
														<p>Оплата по квитанции в бижайшем отделении банка</p>
													</div>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="checkout-form-footer">
								<div class="form-footer-block">
									<div class="checkout-total">
										<div class="item">
											<div class="item-icon">
												<i class="icon-rouble"></i>
											</div>
											<div class="item-label">Стоимость товара:</div>
											<div class="item-value">6 640 р.</div>
										</div>
										<div class="item">
											<div class="item-icon">
												<i class="icon-delivery"></i>
											</div>
											<div class="item-label">Стоимость доставки:</div>
											<div class="item-value">250 р.</div>
										</div>
										<div class="item bigger">
											<div class="item-icon highlighted">
												<i class="icon-wallet"></i>
											</div>
											<div class="item-label">Итого сумма к оплате:</div>
											<div class="item-value">7 890 р.</div>
										</div>
									</div>
								</div>
								<div class="form-footer-block">
									<div class="checkout-accept">
										<p>Нажимая на кнопку, вы подтверждаете свое совершеннолетие, соглашаетесь на обработку <br class="d-none d-xxl-inline">персональных данных в соответствии с Пользовательским соглашением, <br class="d-none d-xxl-inline">а также ознакомлен с <a href="#" target="_blank">Политикой конфиденциальности</a></p>
										<button type="submit" class="btn btn-green with-loader">Подтвердить заказ</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</section>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>