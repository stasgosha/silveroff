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
									<a href="#">
										<span class="item-icon">
											<i class="icon-document"></i>
										</span>
										<span class="item-text">Мои заказы</span>
									</a>
								</li>
								<li class="current-menu-item">
									<a href="#">
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
							<h3 class="slf-h3 font-300 with-corner">Ваши данные</h3>
							<form action="#" class="user-data-form form">
								<div class="form-row">
									<div class="form-field">
										<input id="user-name" type="text" required class="input-field">
										<label for="user-name">Имя пользователя</label>
										<p class="slf-note min-line-height">Имя пользователя, например ivan_petrov</p>
									</div>
									<div class="form-field">
										<input id="user-fullname" type="text" required class="input-field">
										<label for="user-fullname">ФИО*</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-field">
										<input id="user-email" type="email" required class="input-field">
										<label for="user-email">Ваш e-mail*</label>
									</div>
									<div class="form-field">
										<input id="user-phone" type="tel" required class="input-field">
										<label for="user-phone">Телефон*</label>
									</div>
								</div>
								<div class="form-column">
									<div class="form-field">
										<input id="password" type="password" required class="input-field">
										<label for="password">Пароль</label>
										<p class="slf-note min-line-height">Вы можете указать новый пароль</p>
									</div>
									<div class="form-field">
										<input id="password_confirm" type="password" required class="input-field">
										<label for="password_confirm">Повторите пароль</label>
										<p class="slf-note min-line-height">Нужно повторить новый пароль еще раз, чтобы исключить опечатку</p>
									</div>
								</div>
								<!--  -->
								<h3 class="slf-h3 font-300 with-corner">Аватар</h3>
								<div class="select-avatar-block">
									<div class="user-photo">
										<img src="img/cabinet/default-avatar.jpg" alt="">
									</div>
									<div class="block-content">
										<p class="slf-body-1 margin-bottom-small">Если вы не загрузите собственную картинку, аватар будет получен автоматиески из сервиса <a href="#" target="_blank">Gravatar</a></p>
										<button class="btn btn-bordered btn-small">Обзор картинки</button>
									</div>
								</div>
								<button type="submit" class="btn btn-gray wide">Сохранить изменения</button>
							<form>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>