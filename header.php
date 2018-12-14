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
						<div class="row align-items-center">
							<div class="col-md-4">
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
							<div class="col-md-6 d-flex justify-content-center">
								<a href="index.php" class="logo-block">
									<img src="img/logo.png" alt="">
								</a>
							</div>
							<div class="col-md-4 d-flex justify-content-end">
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
									<li><a href="catalog.php">Каталог</a></li>
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