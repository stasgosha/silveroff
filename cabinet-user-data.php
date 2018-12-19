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
								<li><i class="icon-document" aria-hidden="true"></i><a href="#">Мои заказы</a></li>
								<li class="current-menu-item"><i class="icon-user" aria-hidden="true"></i><a href="#">Мои данные</a></li>
								<li><i class="icon-envelope" aria-hidden="true"></i><a href="#">Обратная связь</a></li>
								<li><i class="icon-logout" aria-hidden="true"></i><a href="#">Выйти из ЛК</a></li>
							</ul>	
							<div class="loyalty-card">
								<div class="card-img">
									<h3>SILVEROFF</h3>
									<p class="letter-space">серебро с мужским характером</p>
									<p>
										<span>0015</span>
										<span>1034</span>
										<span>4432</span>
										<span>5412</span>
									</p>
								</div>
								<div class="card-score">
									<h4>Накопленные баллы:</h4>
									<p class="number"> 
										<span>0</span>
										<span>2</span>
										<span>5</span>
										<span>9</span>
									</p>
									<p>Как потратить?<i class="icon-info"></i></p>
								</div>
							</div>
						</div>
						<div class="component-content">
							<h4>Ваши данные</h4>
							<div class="form-wrapp-row">
								<div class="form-field">
									<input id="user-name" type="text" required class="input-field">
									<label for="user-name">Имя пользователя</label>
									<p class="slf-note">Имя пользователя, например ivan_petrov</p>
								</div>
								<div class="form-field">
									<input id="user-name" type="text" required class="input-field">
									<label for="user-name">ФИО</label>
									
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
									<p class="slf-note">Вы можете указать новый пароль</p>
								</div>
								<div class="form-field">
									<input id="password" type="password" required class="input-field">
									<label for="password">Повторите пароль</label>
									<p class="slf-note">
										Нужно повторить новый пароль еще раз, чтобы исключить опечатку
									</p>
								</div>
							</div>
							<div class="user-avatar">
								<h4>Аватар</h4>
								<div class="component-avatar"> 
									<div class="user-photo">
										<img src="" alt="USER-AVATAR">
									</div>
									<div >
										<p clas="slf-note">Если вы не загрузине собственную картинку, аватар будет получен автоматиески из сервиса <a href="#">Gravatar</a></p>
										<a class="btn btn-bordered btn-small" href="#">Обзор картинки</a>
									</div>
								</div>
								<a class="btn btn-gray" href="#">Сохранить изменения</a>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>