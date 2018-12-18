<?php $page_title = 'Серебряные браслеты'; ?>
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
							<span itemprop="name"><?= $page_title ?></span>
						</a>
						<meta itemprop="position" content="2" />
					</li>
				</ol>
			</div>
		</section>
		<section class="catalog-header">
			<div class="container">
				<div class="caption-with-line">
					<div class="caption-text">
						<h1 class="slf-h1">Серебряные браслеты</h1>
					</div>
					<div class="line-content">
						<p class="slf-body-1">135 изделий</p>
					</div>
				</div>
				<div class="tags-line mCustomScrollbar" data-mcs-axis="x" data-mcs-theme="minimal-dark">
					<div class="tags-line-inner">
						<div class="item">
							<a href="#" class="tag-button">Натуральная кожа</a>
						</div>
						<div class="item">
							<a href="#" class="tag-button">Испанская</a>
						</div>
						<div class="item">
							<a href="#" class="tag-button">Натуральная кожа</a>
						</div>
						<div class="item">
							<a href="#" class="tag-button">Испанская</a>
						</div>
						<div class="item">
							<a href="#" class="tag-button">Натуральная кожа</a>
						</div>
						<div class="item">
							<a href="#" class="tag-button">Испанская</a>
						</div>
						<div class="item">
							<a href="#" class="tag-button">Натуральная кожа</a>
						</div>
						<div class="item">
							<a href="#" class="tag-button">Испанская</a>
						</div>
						<div class="item">
							<a href="#" class="tag-button">Натуральная кожа</a>
						</div>
						<div class="item">
							<a href="#" class="tag-button">Испанская</a>
						</div>
						<div class="item">
							<a href="#" class="tag-button">Натуральная кожа</a>
						</div>
						<div class="item">
							<a href="#" class="tag-button">Испанская</a>
						</div>
						<div class="item">
							<a href="#" class="tag-button">Натуральная кожа</a>
						</div>
						<div class="item">
							<a href="#" class="tag-button">Испанская</a>
						</div>
						<div class="item holder">&nbsp;</div>
					</div>
				</div>
			</div>
		</section>
		<div class="container">
			<div class="inner-page-wrapper">
				<aside class="page-sidebar">
					<div class="sidebar small-paddings">
						<div class="sidebar-section">
							<div class="catalog-filter open-on-load" data-type="accordion">
								<div class="filter-header" data-type="accordion-header">Стоимость</div>
								<div class="filter-content" data-type="accordion-content">
									<div class="range-input">
										<input value="2000,9000" step="50" min="0" max="15000" type="range" multiple>
										<div class="range-fields">
											<div class="item label">от</div>
											<div class="item field">
												<input disabled type="text" value="2000" class="range-from">
											</div>
											<div class="item label">до</div>
											<div class="item field">
												<input disabled type="text" value="9000" class="range-to">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="catalog-filter open-on-load" data-type="accordion">
								<div class="search-results-count">13 <span>изделий</span></div>
								<div class="filter-header" data-type="accordion-header">Бренд</div>
								<div class="filter-content" data-type="accordion-content">
									<div class="filters-list mCustomScrollbar" data-mcs-axis="y" data-mcs-theme="minimal-dark">
										<div class="filters-list-inner">
											<div class="checkbox">
												<input type="checkbox" id="VoroninGold">
												<label for="VoroninGold">Voronin Gold</label>
											</div>
											<div class="checkbox">
												<input type="checkbox" id="AtisICo" checked>
												<label for="AtisICo">Атис и Ко</label>
											</div>
											<div class="checkbox">
												<input type="checkbox" id="golden">
												<label for="golden">Золотые купола</label>
											</div>
											<div class="checkbox">
												<input type="checkbox" id="lazurit">
												<label for="lazurit">Лазурит</label>
											</div>
											<div class="checkbox">
												<input type="checkbox" id="liberty">
												<label for="liberty">Либерти</label>
											</div>
											<div class="checkbox">
												<input type="checkbox" id="master-clio">
												<label for="master-clio">Мастер Клио</label>
											</div>
											<div class="checkbox">
												<input type="checkbox" id="mercury-msk">
												<label for="mercury-msk">Меркурий МСК</label>
											</div>
											<div class="checkbox">
												<input type="checkbox" id="liberty-1">
												<label for="liberty-1">Либерти</label>
											</div>
											<div class="checkbox">
												<input type="checkbox" id="master-clio-1">
												<label for="master-clio-1">Мастер Клио</label>
											</div>
											<div class="checkbox">
												<input type="checkbox" id="mercury-msk-1">
												<label for="mercury-msk-1">Меркурий МСК</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="catalog-filter" data-type="accordion">
								<div class="filter-header" data-type="accordion-header">Страна</div>
								<div class="filter-content" data-type="accordion-content"></div>
							</div>
							<div class="catalog-filter" data-type="accordion">
								<div class="filter-header" data-type="accordion-header">Для кого</div>
								<div class="filter-content" data-type="accordion-content"></div>
							</div>
							<div class="catalog-filter" data-type="accordion">
								<div class="filter-header" data-type="accordion-header">Плетение</div>
								<div class="filter-content" data-type="accordion-content"></div>
							</div>
							<div class="catalog-filter" data-type="accordion">
								<div class="filter-header" data-type="accordion-header">Стиль</div>
								<div class="filter-content" data-type="accordion-content"></div>
							</div>
							<div class="catalog-filter" data-type="accordion">
								<div class="filter-header" data-type="accordion-header">Категория</div>
								<div class="filter-content" data-type="accordion-content"></div>
							</div>
							<div class="catalog-filter" data-type="accordion">
								<div class="filter-header" data-type="accordion-header">Коллекция</div>
								<div class="filter-content" data-type="accordion-content"></div>
							</div>
							<div class="catalog-filter" data-type="accordion">
								<div class="filter-header" data-type="accordion-header">Металл</div>
								<div class="filter-content" data-type="accordion-content"></div>
							</div>
							<div class="catalog-filter" data-type="accordion">
								<div class="filter-header" data-type="accordion-header">Цвет</div>
								<div class="filter-content" data-type="accordion-content"></div>
							</div>
							<div class="catalog-filter" data-type="accordion">
								<div class="filter-header" data-type="accordion-header">Проба</div>
								<div class="filter-content" data-type="accordion-content"></div>
							</div>
							<div class="catalog-filter" data-type="accordion">
								<div class="filter-header" data-type="accordion-header">Покрытие</div>
								<div class="filter-content" data-type="accordion-content"></div>
							</div>
							<div class="catalog-filter" data-type="accordion">
								<div class="filter-header" data-type="accordion-header">Тип материала</div>
								<div class="filter-content" data-type="accordion-content"></div>
							</div>
							<div class="catalog-filter" data-type="accordion">
								<div class="filter-header" data-type="accordion-header">Вставка</div>
								<div class="filter-content" data-type="accordion-content"></div>
							</div>
							<div class="catalog-filter" data-type="accordion">
								<div class="filter-header" data-type="accordion-header">Цвет вставки</div>
								<div class="filter-content" data-type="accordion-content"></div>
							</div>
							<div class="catalog-filter" data-type="accordion">
								<div class="filter-header" data-type="accordion-header">Тип замка</div>
								<div class="filter-content" data-type="accordion-content"></div>
							</div>
							<div class="catalog-filter" data-type="accordion">
								<div class="filter-header" data-type="accordion-header">Минимальный вес</div>
								<div class="filter-content" data-type="accordion-content"></div>
							</div>
							<div class="catalog-filter" data-type="accordion">
								<div class="filter-header" data-type="accordion-header">Ширина</div>
								<div class="filter-content" data-type="accordion-content"></div>
							</div>
							<div class="catalog-filter" data-type="accordion">
								<div class="filter-header" data-type="accordion-header">Размеры</div>
								<div class="filter-content" data-type="accordion-content"></div>
							</div>
						</div>
					</div>
				</aside>
				<section class="page-content">
					<div class="filters-line">
						<div class="item current-filters">
							<div class="applied-filters-list">
								<div class="item">
									<div class="applied-filter-block">
										<span>Бренд: Атис и Ко</span>
										<div class="close-icon">
											<i class="icon-close"></i>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="applied-filter-block">
										<span>Страна: Италия</span>
										<div class="close-icon">
											<i class="icon-close"></i>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="applied-filter-block">
										<span>Коллекция: Православие</span>
										<div class="close-icon">
											<i class="icon-close"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item sort-by-filters">
							<div class="sort-by-block">
								<div class="label">Сортировать по:</div>
								<ul class="sort-by-list">
									<li class="active"><a href="#">Ширина</a></li>
									<li><a href="#">Цена</a></li>
									<li><a href="#">Популярность</a></li>
								</ul>
							</div>
							<!--  -->
							<div class="show-count-select">
								<div class="label">Показать по:</div>
								<div class="field">
									<div class="select-field bordered small fullwidth">
										<select>
											<option value="24">24</option>
											<option value="48">48</option>
											<option value="100">100</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--  -->
					<div class="catalog-category-banner" style="background-image: url(img/catalog-banner.png);"></div>
					<!--  -->
					<div class="products-list">
						<div class="item">
							<div class="product-card">
								<div class="product-labels"></div>
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
									<div class="product-text">
										<p class="slf-body-1 min-line-height margin-no">
											<a href="#">Кольцо серебряное с позолотой Спаси и сохрани</a>
										</p>
										<p class="slf-note tiny color-light">Артикул: 31103006</p>
									</div>
									<div class="product-columns">
										<div class="item">
											<div class="product-price">490 р.</div>
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
						<div class="item">
							<div class="product-card">
								<div class="product-labels">
									<div class="item orange">Хит</div>
								</div>
								<div class="product-photos">
									<div class="product-photos-slider">
										<div class="slide">
											<a href="#">
												<img src="img/products/medium/gold-ring.png" alt="">
											</a>
										</div>
										<div class="slide">
											<a href="#">
												<img src="img/products/medium/gold-ring.png" alt="">
											</a>
										</div>
										<div class="slide">
											<a href="#">
												<img src="img/products/medium/gold-ring.png" alt="">
											</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<div class="product-text">
										<p class="slf-body-1 min-line-height margin-no">
											<a href="#">Серебряное кольцо с <br>молитвой Отче наш, покрытие палладий</a>
										</p>
										<p class="slf-note tiny color-light">Артикул: 31103006</p>
									</div>
									<div class="product-columns">
										<div class="item">
											<div class="product-price">490 р.</div>
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
						<div class="item">
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
									<div class="product-text">
										<p class="slf-body-1 min-line-height margin-no">
											<a href="#">Серебряное кольцо с молитвой Отче наш, покрытие палладий</a>
										</p>
										<p class="slf-note tiny color-light">Артикул: 31103006</p>
									</div>
									<div class="product-columns align-items-end">
										<div class="item">
											<div class="product-price">3 190 р.</div>
										</div>
										<div class="item">
											<div class="product-old-price">
												<div class="label">Старая цена</div>
												<s>6 910 р.</s>
											</div>
										</div>
									</div>
								</div>
								<div class="product-hidden-content">
									<button class="btn btn-dark btn-smaller fullwidth">Добавить в корзину</button>
									<div class="hidden-content-section">
										<p class="slf-note small margin-bottom-tiny">Доступные размеры</p>
										<ul class="sizes-list">
											<li>
												<div class="selectable">
													<input type="checkbox" id="product-3-size-20-5" checked>
													<label for="product-3-size-20-5">20.5</label>
												</div>
											</li>
											<li>
												<div class="selectable">
													<input type="checkbox" id="product-3-size-21-0">
													<label for="product-3-size-21-0">21.0</label>
												</div>
											</li>
											<li>
												<div class="selectable">
													<input type="checkbox" id="product-3-size-22-0">
													<label for="product-3-size-22-0">22.0</label>
												</div>
											</li>
											<li>
												<div class="selectable">
													<input type="checkbox" id="product-3-size-23-5">
													<label for="product-3-size-23-5">23.5</label>
												</div>
											</li>
											<li>
												<div class="selectable">
													<input type="checkbox" id="product-3-size-24-0">
													<label for="product-3-size-24-0">24.0</label>
												</div>
											</li>
											<li>
												<div class="selectable">
													<input type="checkbox" id="product-3-size-25-0">
													<label for="product-3-size-25-0">25.0</label>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="product-card">
								<div class="product-labels"></div>
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
									<div class="product-text">
										<p class="slf-body-1 min-line-height margin-no">
											<a href="#">Серебряное кольцо с молитвой Отче наш, покрытие палладий</a>
										</p>
										<p class="slf-note tiny color-light">Артикул: 31103006</p>
									</div>
									<div class="product-columns">
										<div class="item">
											<div class="product-price">490 р.</div>
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
									<button class="btn btn-lightgray btn-smaller tiny-side-paddings fullwidth">Сообщить о поступлении</button>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="product-card">
								<div class="product-labels">
									<div class="item red">-50%</div>
								</div>
								<div class="product-photos">
									<div class="product-photos-slider">
										<div class="slide">
											<a href="#">
												<img src="img/no-image.png" alt="">
											</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<div class="product-text">
										<p class="slf-body-1 min-line-height margin-no">
											<a href="#">Серебряное кольцо с молитвой Отче наш, покрытие палладий</a>
										</p>
										<p class="slf-note tiny color-light">Артикул: 31103006</p>
									</div>
									<div class="product-columns">
										<div class="item">
											<div class="product-price">490 р.</div>
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
						<div class="item">
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
									<div class="product-text">
										<p class="slf-body-1 min-line-height margin-no">
											<a href="#">Серебряное кольцо с молитвой Отче наш, покрытие палладий</a>
										</p>
										<p class="slf-note tiny color-light">Артикул: 31103006</p>
									</div>
									<div class="product-columns">
										<div class="item">
											<div class="product-price">490 р.</div>
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
						<div class="item">
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
									<div class="product-text">
										<p class="slf-body-1 min-line-height margin-no">
											<a href="#">Серебряное кольцо с молитвой Отче наш, покрытие палладий</a>
										</p>
										<p class="slf-note tiny color-light">Артикул: 31103006</p>
									</div>
									<div class="product-columns">
										<div class="item">
											<div class="product-price">490 р.</div>
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
						<div class="item">
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
									<div class="product-text">
										<p class="slf-body-1 min-line-height margin-no">
											<a href="#">Серебряное кольцо с молитвой Отче наш, покрытие палладий</a>
										</p>
										<p class="slf-note tiny color-light">Артикул: 31103006</p>
									</div>
									<div class="product-columns">
										<div class="item">
											<div class="product-price">490 р.</div>
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
						<div class="item">
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
									<div class="product-text">
										<p class="slf-body-1 min-line-height margin-no">
											<a href="#">Серебряное кольцо с молитвой Отче наш, покрытие палладий</a>
										</p>
										<p class="slf-note tiny color-light">Артикул: 31103006</p>
									</div>
									<div class="product-columns">
										<div class="item">
											<div class="product-price">490 р.</div>
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
						<div class="item">
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
									<div class="product-text">
										<p class="slf-body-1 min-line-height margin-no">
											<a href="#">Серебряное кольцо с молитвой Отче наш, покрытие палладий</a>
										</p>
										<p class="slf-note tiny color-light">Артикул: 31103006</p>
									</div>
									<div class="product-columns">
										<div class="item">
											<div class="product-price">490 р.</div>
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
						<div class="item">
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
									<div class="product-text">
										<p class="slf-body-1 min-line-height margin-no">
											<a href="#">Серебряное кольцо с молитвой Отче наш, покрытие палладий</a>
										</p>
										<p class="slf-note tiny color-light">Артикул: 31103006</p>
									</div>
									<div class="product-columns">
										<div class="item">
											<div class="product-price">490 р.</div>
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
						<div class="item">
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
									<div class="product-text">
										<p class="slf-body-1 min-line-height margin-no">
											<a href="#">Серебряное кольцо с молитвой Отче наш, покрытие палладий</a>
										</p>
										<p class="slf-note tiny color-light">Артикул: 31103006</p>
									</div>
									<div class="product-columns">
										<div class="item">
											<div class="product-price">490 р.</div>
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
					</div>
					<div class="catalog-footer">
						<div class="item">
							<a href="#" class="btn btn-light">
								<i class="icon-plus"></i>
								<span>Показать еще</span>
							</a>
						</div>
						<div class="item">
							<ul class="pagination">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">6</a></li>
								<li>...</li>
								<li><a href="#">9</a></li>
							</ul>
						</div>
					</div>
				</section>
			</div>
		</div>
		<section class="brands-section">
			<div class="container">
				<div class="section-caption">
					<h2 class="slf-h2">Наши бренды</h2>
				</div>
				<div class="brands-slider slider-default-paddings">
					<div class="slide">
						<img src="img/partners/estet.png" alt="">
					</div>
					<div class="slide">
						<img src="img/partners/silver-wings.png" alt="">
					</div>
					<div class="slide">
						<img src="img/partners/estet.png" alt="">
					</div>
					<div class="slide">
						<img src="img/partners/silver-wings.png" alt="">
					</div>
					<div class="slide">
						<img src="img/partners/estet.png" alt="">
					</div>
					<div class="slide">
						<img src="img/partners/silver-wings.png" alt="">
					</div>
					<div class="slide">
						<img src="img/partners/estet.png" alt="">
					</div>
					<div class="slide">
						<img src="img/partners/silver-wings.png" alt="">
					</div>
				</div>
			</div>
		</section>
		<section class="advantages-section section-default-paddings">
			<div class="container">
				<div class="section-caption">
					<h2 class="slf-h2">Преимущества серебряных цепочек</h2>
				</div>
				<div class="slf-typography text-center">
					<p>Браслет – изумительное и великолепное украшение для рук. Возможно, в силу климата, в котором мы живем, браслеты незаслуженно забываются на долгую пору зимы и осени. В это время года серебряные или стеклянные браслеты, как один из основных видов украшений в бижутерии, носят только особенные ценительницы. Наверное, здесь также присутствует фактор удобства и уместности такого украшения в офисе.</p>
					<p>Янтарный браслет на резинке чешское стеклоНо, например, правильно подобранный крупный браслет, одетый поверх рукава водолазки или блузки, не только не будет вам мешать, но и очень эффектно дополнит ваш наряд.</p>
				</div>
			</div>
		</section>
		<section class="similar-categories-section">
			<div class="container">
				<div class="section-caption">
					<h2 class="slf-h2">Похожие категории</h2>
				</div>
				<ul class="similar-categories-list">
					<li><a href="#">Серебряные цепочки</a></li>
					<li><a href="#">Серебряные подвески и кулоны</a></li>
					<li><a href="#">Серебряные кольца</a></li>
					<li><a href="#">Серебряные аксессуары</a></li>
					<li><a href="#">Серебряные кольца</a></li>
				</ul>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>