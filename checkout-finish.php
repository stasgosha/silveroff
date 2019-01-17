<?php $page_title = 'Заказ оформлен'; ?>
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
					<div class="checkout-finish-component"><!-- .cfc- -->
						<div class="component-content">
							<div class="cfc-list">
								<div class="item margin-no">
									<div class="item-icon"></div>
									<div class="item-content">
										<h3 class="component-caption"><strong>Спасибо!</strong> Пудрявцев Сергей</h3>
									</div>
								</div>
								<div class="item">
									<div class="item-icon">
										<img src="img/icons/tick-filled.svg" alt="">
									</div>
									<div class="item-content">
										<div class="order-status">Ваш заказ оформлен</div>
									</div>
								</div>
								<div class="item">
									<div class="item-icon">
										<img src="img/icons/document-filled.svg" alt="">
									</div>
									<div class="item-content">
										<div class="order-info">
											<p class="order-number">Номер заказа: <strong>№1499-0007</strong></p>
											<p class="order-tracking">Для отслеживания в <a href="#">Личном кабинете</a></p>
											<p class="order-note">Вы можете посмотреть текущий статус заказа в личном кабинете после авторизации на сайте. <br>Для авторизации на сайте используйте указанный при оформлении номер телефона и форму восстановления пароля</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="item-icon pull-up">
										<img src="img/icons/person-filled.svg" alt="">
									</div>
									<div class="item-content">
										<div class="order-params-list">
											<div class="list-item">
												<div class="item-label">Получатель:</div>
												<div class="item-value">Андрей Николаевич Смирнов <br>7925128922 <br>privetmedved@my.com</div>
											</div>
											<div class="list-item">
												<div class="item-label">Способ доставки:</div>
												<div class="item-value">Самовывоз</div>
											</div>
											<div class="list-item">
												<div class="item-label">Адрес доставки:</div>
												<div class="item-value">г. Москва, акненский пр-д, д. 3, стр. 1 <br><a href="#" class="work-time">Часы работы и как добраться</a></div>
											</div>
											<div class="list-item">
												<div class="item-label">Дата доставки:</div>
												<div class="item-value">9 августа, в среду</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="item-icon pull-up">
										<img src="img/icons/rouble-filled.svg" alt="">
									</div>
									<div class="item-content">
										<div class="order-params-list">
											<div class="list-item">
												<div class="item-label">Способ оплаты:</div>
												<div class="item-value">Оплата наличными при получении</div>
											</div>
										</div>
										<p class="order-consist">Состав заказа: 2 товара <br>вес: 1740 г.</p>
										<div class="order-price-info-list">
											<div class="list-item">
												<div class="item-label font-400">Начислено бонусов:</div>
												<div class="item-value">71 балл</div>
											</div>
											<div class="list-item">
												<div class="item-label">Стоимость товара:</div>
												<div class="item-value">6 640 р.</div>
											</div>
											<div class="list-item">
												<div class="item-label">Стоимость доставки:</div>
												<div class="item-value">250 р.</div>
											</div>
											<div class="list-item">
												<div class="item-label">Итого сумма к оплате:</div>
												<div class="item-value">7 890 р.</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item align-items-center">
									<div class="item-icon">
										<img src="img/icons/thumb-up-filled.svg" alt="">
									</div>
									<div class="item-content">
										<p class="order-last-step">Ожидайте звонка менеджера с подтверждением заказа или СМС о готовности заказа</p>
									</div>
								</div>
							</div>
						</div>
						<div class="component-sidebar">
							<div class="sidebar-image">
								<img src="img/checkout-finish/bag.png" alt="">
							</div>
							<div class="sidebar-socials">
								<p>Приесодиняйтесь к нам <br>в социальных сетях!</p>
								<ul class="socials-list rounded margin-bottom-normal">
									<li>
										<a href="#" target="_blank">
											<i class="icon-bigmir"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon-odnoklassniki"></i>
										</a>
									</li>
								</ul>
								<ul class="socials-list rounded">
									<li>
										<a href="#" target="_blank">
											<i class="icon-google-plus"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon-youtube"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon-pinterest"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon-instagram"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>