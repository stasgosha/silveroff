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
								<li class="right-triangle"><a href="#"><i class="icon-document" aria-hidden="true"></i>Мои заказы</a></li>
								<li class="current-menu-item"><a href="#"><i class="icon-user" aria-hidden="true"></i>Мои данные</a></li>
								<li><a href="#"><i class="icon-envelope" aria-hidden="true"></i>Обратная связь</a></li>
								<li class="left-triangle"><a href="#"><i class="icon-logout" aria-hidden="true"></i>Выйти из ЛК</a></li>
							</ul>	
							<div class="loyalty-card">
								<div class="card-img">
									<img src="img/content-page/logo_card.jpg" alt="">
								</div>
								<div class="card-score">
									<h4>Накопленные баллы:</h4>
									<p class="number"> 
										<span>0</span>
										<span>2</span>
										<span>5</span>
										<span>9</span>
									</p>
									<a>Как потратить?<i class="icon-info"></i></a>
								</div>
							</div>
						</div>
						<div class="component-content">
							<h3 class="slf-h3 font-300 with-corner">Ваши данные</h3>
							<form action="#" class="user-data-form form">
								<div class="form-wrapp-row">
									<div class="form-field">
										<input id="user-name" type="text" required class="input-field">
										<label for="user-name">Имя пользователя</label>
										<p class="slf-note min-line-height">Имя пользователя, например ivan_petrov</p>
									</div>
									<div class="form-field">
										<input id="user-name" type="text" required class="input-field">
										<label for="user-name">ФИО*</label>
										
									</div>
								</div>
								<div class="form-wrapp-row">
									<div class="form-field">
										<input id="user-email" type="email" required class="input-field">
										<label for="user-email">Ваш e-mail*</label>
									</div>
									<div class="form-field">
										<input id="user-phone" type="phone" required class="input-field">
										<label for="user-phone">Телефон*</label>
									</div>
								</div>
								<div class="form-wrapp-column">
									<div class="form-field">
										<input id="password" type="password" required class="input-field">
										<label for="password">Пароль</label>
										<p class="slf-note min-line-height">Вы можете указать новый пароль</p>
									</div>
									<div class="form-field">
										<input id="password_confirm" type="password" required class="input-field">
										<label for="password">Повторите пароль</label>
										<p class="slf-note min-line-height">
											Нужно повторить новый пароль еще раз, чтобы исключить опечатку
										</p>
									</div>
								</div>
							<form>
							<div class="user-avatar">
								<h3 class="slf-h3 font-300 with-corner">Аватар</h3>
								<div class="select-avatar-block"> 
									<div class="user-photo">
										<img src="img/content-page/avatar.jpg" alt="USER-AVATAR">
									</div>
									<div class="block-content">
										<p clas="slf-note">Если вы не загрузине собственную картинку, аватар будет получен автоматиески из сервиса <a href="#">Gravatar</a></p>
										<button class="btn btn-bordered btn-small" href="#">Обзор картинки</button>
									</div>
								</div>
								<button type="submit" class="btn btn-gray" href="#">Сохранить изменения</button>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>