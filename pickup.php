<?php $page_title = 'Самовывоз'; ?>
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
					<h1 class="slf-h1 margin-bottom-big">Самовывоз</h1>
				</section>
			</div>
		</div>
		<section class="pickup-section">
			<div class="container">
				<div class="pickup-nav">
					<li data-tab="#pickup-om-map" class="current">
						<i class="icon-location"></i>
						<span>На карте</span>
					</li>
					<li data-tab="#pickup-list">
						<i class="icon-bars"></i>
						<span>Списком</span>
					</li>
					<li data-tab="#pickup-points">
						<i class="icon-store"></i>
						<span>Точки самовывоза</span>
					</li>
				</div>
			</div>
			<div class="pickup-tabs-container">
				<div class="tab" id="pickup-on-map">
					<div class="pickup-on-map-component">
						<div class="map">
							<img src="img/pickup/big-map.png" alt="">
						</div>
						<div class="list-wrapper">
							<div class="container">
								<div class="list flex-right"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab" id="pickup-list">
					<div class="container">
						2
					</div>
				</div>
				<div class="tab" id="pickup-points">
					<div class="container">
						3
					</div>
				</div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>