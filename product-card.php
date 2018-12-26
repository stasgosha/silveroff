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
		<div class="product-page-section">
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
					<div class="col-xl-5"></div>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>