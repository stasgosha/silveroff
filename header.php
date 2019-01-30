<?php
	if (!isset($page_title)) {
		$page_title = 'Заголовок страницы';
	}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $page_title ?> - Silveroff</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/jcf.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="wrapper push">
		<div class="page">
			<header class="header">
				<div class="header-top">
					<div class="container">
						<div class="header-top-inner">
							<div class="header-block">
								<div class="select-location-block">
									<div class="block-icon">
										<i class="icon-paperplane"></i>
									</div>
									<div class="block-content">
										<p>Ваш город: 
											<span class="city-select">
												<span>Санкт-Петербург</span>
												<i class="icon-chevron-down"></i>
											</span>
										</p>
										<p><a href="#">453</a> пункта выдачи</p>
									</div>
								</div>
							</div>
							<div class="header-block logo-wrapper">
								<a href="index.php" class="logo-block">
									<img src="img/logo.png" alt="">
								</a>
							</div>
							<div class="header-block">
								<div class="contact-phone-block">
									<div class="cpb-phone">
										<a href="tel:88007074368">8 (800) 707-43-68</a>
										<i class="icon-chevron-down"></i>
									</div>
									<p>Бесплатно по России / Круглосуточно</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-bottom">
					<div class="container">
						<div class="header-bottom-inner">
							<div class="header-block">
								<ul class="top-nav">
									<li data-dropdown="#catalog-dropdown">
										<a href="catalog.php">Каталог</a>
										<div class="top-nav-dropdown" id="catalog-dropdown">
											<div class="header-catalog-component">
												<div class="component-tabs-nav">
													<a href="#" class="item current" data-hover-tab="#cat-chains">
														<div class="item-icon">
															<i class="icon-cat-chains"></i>
														</div>
														<div class="item-text">Серебряные цепочки</div>
													</a>
													<a href="#" class="item" data-hover-tab="#cat-bracelet">
														<div class="item-icon">
															<i class="icon-cat-bracelet"></i>
														</div>
														<div class="item-text">Серебряные браслеты</div>
													</a>
													<a href="#" class="item" data-hover-tab="#cat-pendants">
														<div class="item-icon">
															<i class="icon-cat-pendants"></i>
														</div>
														<div class="item-text">Серебряные подвески и кулоны</div>
													</a>
													<a href="#" class="item" data-hover-tab="#cat-laces">
														<div class="item-icon">
															<i class="icon-cat-laces"></i>
														</div>
														<div class="item-text">Ювелирные шнурки и гайтаны</div>
													</a>
													<a href="#" class="item" data-hover-tab="#cat-rings">
														<div class="item-icon">
															<i class="icon-cat-rings"></i>
														</div>
														<div class="item-text">Серебряные кольца</div>
													</a>
													<a href="#" class="item" data-hover-tab="#cat-accessories">
														<div class="item-icon">
															<i class="icon-cat-accessories"></i>
														</div>
														<div class="item-text">Серебряные аксессуары</div>
													</a>
													<a href="#" class="item" data-hover-tab="#cat-watches">
														<div class="item-icon">
															<i class="icon-cat-watches"></i>
														</div>
														<div class="item-text">Серебряные подарки и сувениры</div>
													</a>
													<a href="#" class="item" data-hover-tab="#cat-earrings">
														<div class="item-icon">
															<i class="icon-cat-earrings"></i>
														</div>
														<div class="item-text">Серебряные серьги</div>
													</a>
													<a href="#" class="item" data-hover-tab="#cat-spoon">
														<div class="item-icon">
															<i class="icon-cat-spoon"></i>
														</div>
														<div class="item-text">Столовое серебро</div>
													</a>
													<a href="#" class="item" data-hover-tab="#cat-ikons">
														<div class="item-icon">
															<i class="icon-cat-ikons"></i>
														</div>
														<div class="item-text">Иконы</div>
													</a>
													<a href="#" class="item" data-hover-tab="#cat-bag">
														<div class="item-icon">
															<i class="icon-cat-bag"></i>
														</div>
														<div class="item-text">Ювелирная упаковка</div>
													</a>
												</div>
												<div class="component-tabs-container">
													<div class="tab" id="cat-chains">
														<div class="tab-content">
															<ul class="catalog-categories-list">
																<li>
																	<p class="category-name">Тип материала</p>
																	<ul class="subcategories">
																		<li><a href="#">Кожаные шнурки</a></li>
																		<li><a href="#">Каучуковые шнурки</a></li>
																		<li><a href="#">Шелковые шнурки</a></li>
																		<li><a href="#">Хлопковые шнурки</a></li>
																		<li><a href="#">Вощеные шнурки</a></li>
																	</ul>
																</li>
																<li>
																	<p class="category-name">Размеры</p>
																	<ul class="subcategories">
																		<li><a href="#">40 размер</a></li>
																		<li><a href="#">45 размер</a></li>
																		<li><a href="#">50 размер</a></li>
																		<li><a href="#">55 размер</a></li>
																		<li><a href="#">60 размер</a></li>
																		<li><a href="#">65 размер</a></li>
																		<li><a href="#">70 размер</a></li>
																	</ul>
																</li>
																<li>
																	<p class="category-name">Тип шнурка</p>
																	<ul class="subcategories">
																		<li><a href="#">Ювелирные шнурки</a></li>
																		<li><a href="#">Гайтаны</a></li>
																		<li><a href="#">Колье</a></li>
																		<li><a href="#">Шнурки с кулонами</a></li>
																	</ul>
																</li>
																<li>
																	<p class="category-name">Для кого</p>
																	<ul class="subcategories">
																		<li><a href="#">Мужские</a></li>
																		<li><a href="#">Женские</a></li>
																		<li><a href="#">Детские</a></li>
																	</ul>
																</li>
															</ul>
														</div>
														<div class="tab-image"></div>
													</div>
													<div class="tab" id="cat-bracelet">Tab content</div>
													<div class="tab" id="cat-pendants">Tab content</div>
													<div class="tab" id="cat-laces">
														<div class="tab-content"></div>
														<div class="tab-image"></div>
													</div>
													<div class="tab" id="cat-rings">Tab content</div>
													<div class="tab" id="cat-accessories">Tab content</div>
													<div class="tab" id="cat-watches">Tab content</div>
													<div class="tab" id="cat-earrings">Tab content</div>
													<div class="tab" id="cat-spoon">Tab content</div>
													<div class="tab" id="cat-ikons">Tab content</div>
													<div class="tab" id="cat-bag">Tab content</div>
												</div>
											</div>
										</div>
									</li>
									<li><a href="#">Шоу рум</a></li>
									<li><a href="delivery.php">Доставка</a></li>
									<li><a href="#">Самовывоз</a></li>
									<li><a href="#">Оплата</a></li>
									<li><a href="#">Гарантия/Возврат</a></li>
									<li><a href="#">Контакты</a></li>
								</ul>
							</div>
							<div class="header-block">
								<div class="user-info-widget">
									<div class="user-nav">
										<li><a href="#">Войти</a></li>
										<li><a href="#">Регистрация</a></li>
									</div>
									<ul class="user-buttons">
										<li>
											<a href="#" class="user-button">
												<span class="ub-icon">
													<i class="icon-stats"></i>
												</span>
												<span class="ub-count">2</span>
											</a>
										</li>
										<li>
											<a href="#" class="user-button">
												<span class="ub-icon">
													<i class="icon-like"></i>
												</span>
												<span class="ub-count">5</span>
											</a>
										</li>
										<li>
											<a href="#" class="user-button">
												<span class="ub-icon">
													<i class="icon-search"></i>
												</span>
											</a>
										</li>
										<li>
											<a href="shopping-cart.php" class="user-button">
												<span class="ub-icon">
													<i class="icon-bag"></i>
												</span>
												<span class="ub-count highlighted">12</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>