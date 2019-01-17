<?php $page_title = 'Страница товара'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<section class="breadcrumbs-section">
			<div class="container">
				<ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="item" href="catalog.php">
							<span itemprop="name">Каталог</span>
						</a>
						<meta itemprop="position" content="1" />
					</li>
					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="item" href="catalog.php">
							<span itemprop="name">Серебряные цепочки</span>
						</a>
						<meta itemprop="position" content="2" />
					</li>
					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="item" href="catalog.php">
							<span itemprop="name"><?= $page_title ?></span>
						</a>
						<meta itemprop="position" content="3" />
					</li>
				</ol>
			</div>
		</section>
		<div class="product-page-section pps-main-info">
			<div class="container">
				<div class="row">
					<div class="col-xl-9">
						<div class="product-photos-component">
							<div class="product-photos-previews">
								<div class="previews-slider">
									<div class="slide">
										<div class="preview-image">
											<img src="img/product-page/ring-preview.jpg" alt="">
										</div>
									</div>
									<div class="slide">
										<div class="preview-image">
											<img src="img/product-page/ring-preview.jpg" alt="">
										</div>
									</div>
									<div class="slide">
										<div class="preview-image">
											<img src="img/product-page/ring-preview.jpg" alt="">
										</div>
									</div>
									<div class="slide">
										<div class="preview-image">
											<img src="img/product-page/ring-preview.jpg" alt="">
										</div>
									</div>
									<div class="slide">
										<div class="preview-image">
											<img src="img/product-page/ring-preview.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="product-photos-big-image">
								<div class="product-labels">
									<div class="item green">Новинка</div>
									<div class="item red">-50%</div>
								</div>
								<div class="big-image-slider">
									<div class="slide">
										<img src="img/product-page/ring-large.jpg" alt="">
									</div>
									<div class="slide">
										<img src="img/product-page/ring-large.jpg" alt="">
									</div>
									<div class="slide">
										<img src="img/product-page/ring-large.jpg" alt="">
									</div>
									<div class="slide">
										<img src="img/product-page/ring-large.jpg" alt="">
									</div>
									<div class="slide">
										<img src="img/product-page/ring-large.jpg" alt="">
									</div>
								</div>
								<div class="share-link">
									<i class="icon-plus"></i>
									<span>Поделиться</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-5">
						<div class="product-about-component">
							<div class="short-info">
								<div class="item">
									<p class="slf-body-1 small margin-no">Бренд: <strong>Casual</strong></p>
									<p class="slf-body-1 small margin-no">Производство: <strong>Россия</strong></p>
								</div>
								<div class="item">
									<p class="slf-body-1 small margin-no color-text-lightgray">Артикул: <strong>31101122</strong></p>
								</div>
							</div>
							<h1 class="product-caption">Толстая серебряная цепь мужская, плетение Бисмарк, ручной вязке, 250 гр. с чернением, ширина 1,6 см</h1>
							<p class="product-description">Браслет из серебра шириной 2 см создан для мужчин, которые привыкли приковывать к себе внимание и получают от этого немалое удовольствие. Стильное украшение обработано способом родирования, благодаря чему приобретает сияющий блеск.</p>
							<div class="divider"></div>
							<div class="product-size-select">
								<p class="pss-caption">
									<i class="icon-ruler"></i>
									<span>Размеры в наличии</span>
								</p>
								<ul class="sizes-list">
									<li>
										<div class="selectable big">
											<input type="checkbox" id="product-size-16-5" checked>
											<label for="product-size-16-5">16.5</label>
										</div>
									</li>
									<li>
										<div class="selectable big">
											<input type="checkbox" id="product-size-17">
											<label for="product-size-17">17</label>
										</div>
									</li>
									<li>
										<div class="selectable big">
											<input type="checkbox" id="product-size-18-5">
											<label for="product-size-18-5">18.5</label>
										</div>
									</li>
									<li>
										<div class="selectable big wide">
											<input type="checkbox" id="product-size-none">
											<label for="product-size-none">Не знаю размер</label>
										</div>
									</li>
								</ul>
								<div class="pss-links">
									<div class="item">
										<a href="#">Не нашли нужный размер?</a>
									</div>
									<div class="item">
										<a href="#">Как подобрать размер</a>
									</div>
								</div>
							</div>
							<div class="divider"></div>
							<div class="product-price">
								<div class="current-price">25 505 р.</div>
								<div class="old-price">
									<div class="val">37 505 р.</div>
									<div class="economy">Вы экономите: 12000 р.</div>
								</div>
							</div>
							<div class="product-buttons">
								<div class="item">
									<button class="btn btn-gray fullwidth">Купить</button>
								</div>
								<div class="item">
									<button class="btn fullwidth">Купить в 1 клик</button>
								</div>
							</div>
							<div class="product-actions">
								<div class="item">
									<a href="#" class="product-acions--button">
										<i class="icon-like"></i>
										<span>Сохранить в избранное</span>
									</a>
								</div>
								<div class="item">
									<a href="#" class="product-acions--button">
										<i class="icon-stats"></i>
										<span>Сравнить</span>
									</a>
								</div>
							</div>
							<div class="divider big-margins"></div>
							<div class="product-delivery-info">
								<div class="di-icon">
									<img src="img/icons/bag-arrow.svg" alt="">
								</div>
								<div class="di-text">
									<h5 class="di-caption">Получить заказ в г. Москва</h5>
									<p class="slf-note">Самовывоз на ВДНХ - сегодня (бесплатно) <br>Самовывоз на ПВЗ - послезавтра (169р.) <br>Курьерская доставка - послезавтра (300р.)</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="product-page-section pps-about">
			<div class="container">
				<div class="tabs-nav-wrapper margin-bottom-large">
					<ul class="tabs-nav">
						<li data-tab="#manufacturer-tag" class="current">
							<a href="#" onclick="return false;">Бирка завода изготовителя</a>
						</li>
						<li data-tab="#assay-chamber-stamp">
							<a href="#" onclick="return false;">Клеймо пробирной палаты</a>
						</li>
						<li data-tab="#manufacturer-name">
							<a href="#" onclick="return false;">Именник производителя</a>
						</li>
						<li data-tab="#warranty">
							<a href="#" onclick="return false;">Гарантия</a>
						</li>
					</ul>
				</div>
				<div class="tabs-container product-tabs">
					<div class="tab" id="manufacturer-tag">
						<div class="tab-image">
							<img src="img/product-page/manufacturer-tag.svg" alt="" width="250">
						</div>
						<div class="tab-content">
							<p>Вся продукция представленная в магазине Silveroff.ru прошла обязательное опробирование и клеймение в Пробирной палате РФ. Это означает что государство подтвердило качество продукции и содержание в ней драгоценного металла не ниже чем указано на оттиске клейма. <br>Клеймо "проба" это специальный знак, который устанавливается механическим, электроискровым или лазерным методом сотрудником пробирной палаты. <br>Клеймо унифицировано и имеет следующий вид:</p>
						</div>
					</div>
					<div class="tab" id="assay-chamber-stamp">
						<div class="tab-image">
							<img src="img/product-page/assay-chamber-stamp.svg" alt="" width="176">
						</div>
						<div class="tab-content">
							<p>Каждое украшение в магазине Silveroff.ruимеет паспорт-бирку на которой указан: Артикул изделия - уникальный номер изделия, присваиваемый производителем. Наименование изделия, например, кольцо, серьги, подвеска.,Тип металла и его проба, например, золото 585, серебро 925.,Точный вес данного изделия в граммах., вставка если есть, производитель, импортер, и уникальный штрих код изделия в котором зашифрована вся информация об изделии.</p>
						</div>
					</div>
					<div class="tab" id="manufacturer-name">
						<div class="tab-image">
							<img src="img/product-page/manufacturer-name.svg" alt="" width="434">
						</div>
						<div class="tab-content">
							<p>Кроме клейма государственной пробирной палаты на каждом ювелирном украшении должен стоять именник. Именник – это оттиск на ювелирном изделии (будь то золото или другой драгоценный металл), которое ставит производитель. Именник содержит информацию:</p>
							<ul>
								<li>- Шифр Государственной инспекции пробирного надзора.</li>
								<li>- Год выпуска украшения. Каждому году соответствует одна буква.</li>
								<li>- Индивидуальный код завода-изготовителя украшения. Это индивидуальный шифр изготовителя, который регистрируется в инспекции Пробирного надзора в обязательном порядке.</li>
							</ul>
						</div>
					</div>
					<div class="tab" id="warranty">
						<div class="tab-image">
							<img src="img/product-page/document-signed.svg" alt="" width="56">
						</div>
						<div class="tab-content">
							<p>Продажу продукции через магазин Silveroff.ru осуществляет ООО «Династия». <br>Юридическая деятельность осуществляется на основании Свидетельства о государственной регистрации юридического лица № 1177746265575 <br>Продажа ювелирных изделий осуществляется на основании Свидетельства о постановке на специальный учет в Пробирную палату РФ № ЮЛ7701604404</p>
							<img src="img/temp/warranty.png" alt="">
							<p>Более подробную информацию о компании и реквизитах, можно получить на странице <a href="#" target="_blank">О магазине</a>.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="product-page-section pps-params">
			<div class="container">
				<h4 class="params-caption">Параметры</h4>
				<div class="params-list">
					<div class="params-col">
						<div class="params-item">
							<div class="item-name">Страна</div>
							<div class="item-value">Россия</div>
						</div>
						<div class="params-item">
							<div class="item-name">Ширина</div>
							<div class="item-value">8мм</div>
						</div>
						<div class="params-item">
							<div class="item-name">Вставка</div>
							<div class="item-value">Без вставок</div>
						</div>
					</div>
					<div class="params-col">
						<div class="params-item">
							<div class="item-name">Цвет металла</div>
							<div class="item-value">Белый</div>
						</div>
						<div class="params-item">
							<div class="item-name">Тип металла</div>
							<div class="item-value">Серебро</div>
						</div>
						<div class="params-item">
							<div class="item-name">Проба</div>
							<div class="item-value">925</div>
						</div>
					</div>
					<div class="params-col">
						<div class="params-item">
							<div class="item-name">Минимальный вес</div>
							<div class="item-value">67,53г</div>
						</div>
						<div class="params-item">
							<div class="item-name">Коллекция</div>
							<div class="item-value">Мужская</div>
						</div>
						<div class="params-item">
							<div class="item-name">Покрытие</div>
							<div class="item-value">Родирование</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="product-page-section pps-similar">
			<div class="container">
				<h4 class="slf-h2 text-center margin-bottom-medium">Другие товары из этой категории</h4>
				<div class="similar-products-slider">
					<?php for ($i=0; $i < 6; $i++): ?>
						<div class="slide">
							<a href="#" class="similar-product-card">
								<div class="card-image">
									<img src="img/product-page/similar-ring.png" alt="">
								</div>
								<div class="card-price">5500 р.</div>
							</a>
						</div>
					<?php endfor; ?>
				</div>
			</div>
		</div>
		<div class="product-page-section pps-features">
			<div class="container">
				<div class="pps-features-list">
					<div class="item">
						<div class="item-icon">
							<i class="icon-reload"></i>
						</div>
						<div class="item-content">
							<p class="item-caption">Обмен изделия в течении 7 дней</p>
							<p>Важно: у Вас должно сохраняться бирка и отсутствовать следы носки</p>
						</div>
						<div class="item-button">
							<a href="#" class="btn">Подробнее</a>
						</div>
					</div>
					<div class="item">
						<div class="item-icon">
							<i class="icon-ring">
								<span>3</span>
							</i>
						</div>
						<div class="item-content">
							<p class="item-caption">Привезем 3 товара на выбор</p>
							<p>Неважно - поломка ли это замка, шатающаяся закрепка или выпавший камень</p>
						</div>
						<div class="item-button">
							<a href="#" class="btn">Узнать детали</a>
						</div>
					</div>
					<div class="item">
						<div class="item-icon">
							<i class="icon-certificate"></i>
						</div>
						<div class="item-content">
							<p class="item-caption">Работаем с крупными заводами</p>
							<p>“Новичков” у нас вполне заслуженно не любят. Для каждого товара указываем производителя</p>
						</div>
						<div class="item-button">
							<a href="#" class="btn">Список заводов</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="product-page-section pps-kit">
			<div class="container">
				<h4 class="slf-h2 text-center margin-bottom-medium">Комплект изделия</h4>
				<div class="product-kit">
					<div class="kit-item">
						<div class="product-card small">
							<div class="product-labels"></div>
							<div class="product-photos">
								<a href="#">
									<img src="img/products/medium/silver-ring.png" alt="">
								</a>
							</div>
							<div class="product-content">
								<div class="product-text">
									<p class="slf-body-1 min-line-height margin-no">
										<a href="#">Серебряное кольцо спаси и сохрани с чернением и позолотой</a>
									</p>
									<p class="slf-note tiny color-light">Артикул: 31103006</p>
								</div>
								<div class="product-columns">
									<div class="item">
										<div class="product-price">4 190 р.</div>
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
						</div>
					</div>
					<div class="kit-sign">
						<i class="icon-plus-light"></i>
					</div>
					<div class="kit-item">
						<div class="product-card small">
							<div class="product-labels"></div>
							<div class="product-photos">
								<a href="#">
									<img src="img/products/medium/silver-ring.png" alt="">
								</a>
							</div>
							<div class="product-content">
								<div class="product-text">
									<p class="slf-body-1 min-line-height margin-no">
										<a href="#">Серебряное кольцо спаси и сохрани с чернением и позолотой</a>
									</p>
									<p class="slf-note tiny color-light">Артикул: 31103006</p>
								</div>
								<div class="product-columns">
									<div class="item">
										<div class="product-price">4 190 р.</div>
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
						</div>
					</div>
					<div class="kit-sign">
						<i class="icon-equal"></i>
					</div>
					<div class="kit-price-wrapper">
						<div class="kit-price">
							<div class="old-price">Цена: <span class="old-price-value">34 000 р.</span> <span class="price-discount">- 5%</span></div>
							<div class="current-price">32 000 р.</div>
						</div>
						<a href="#" class="btn btn-dark">Купить комплект со скидкой</a>
					</div>
				</div>
			</div>
		</div>
		<div class="product-page-section pps-other-products">
			<div class="container">
				<h4 class="slf-h2 text-center margin-bottom-tiny">С этим товаров покупают</h4>
				<p class="slf-body-1 bigger text-center margin-bottom-medium">вам могут понравиться эти товары</p>
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
		</div>
		<div class="product-page-section pps-similar-categories">
			<div class="container">
				<h4 class="slf-h2 text-center margin-bottom-medium">ПОХОЖИЕ категории</h4>
				<ul class="similar-categories-list">
					<li><a href="#">Серебряные цепочки</a></li>
					<li><a href="#">Серебряные подвески и кулоны</a></li>
					<li><a href="#">Серебряные кольца</a></li>
					<li><a href="#">Серебряные аксессуары</a></li>
					<li><a href="#">Серебряные кольца</a></li>
				</ul>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>