<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?=Yii::app()->request->baseUrl;?>/files/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?=Yii::app()->request->baseUrl;?>/files/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?=Yii::app()->request->baseUrl;?>/files/css/layout.css" rel="stylesheet">
		<title><?=$this->pageTitle;?> | Panel administracyjny | www.prinatair.pl</title>

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="navbar navbar-inverse" role="navigation">
			<div class="sidebar-bar">
				<h1>webair.pl</h1>
				<span id="hover-sidebar"><i class="fa fa-bars"></i></span>
			</div>
			
			<div class="sidebar-option">
				<div class="btn-group button">
					<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Powiadomienia <span class="badge">42</span> <span class="caret"></span></button>
					<ul class="dropdown-menu dropdown-menu-notification pull-right" role="menu">
						<li><p>Powiadomienia</p></li>
						<li class="item"><a href="#">Zamówienie: 2014-06-16 (Status: Nowe)<br>Zamawiający: <b>Jan Kowalski</b> Wartość zamówienia: <b>109,00 zł</b></a></li>
						<li class="item open"><a href="#">Zamówienie: 2014-06-16 (Status: Nowe)<br>Zamawiający: <b>Jan Kowalski</b> Wartość zamówienia: <b>109,00 zł</b></a></li>
						<li class="item open"><a href="#">Zamówienie: 2014-06-16 (Status: Nowe)<br>Zamawiający: <b>Jan Kowalski</b> Wartość zamówienia: <b>109,00 zł</b></a></li>
						<li class="item"><a href="#">Zamówienie: 2014-06-16 (Status: Nowe)<br>Zamawiający: <b>Jan Kowalski</b> Wartość zamówienia: <b>109,00 zł</b></a></li>
						<li class="item onen"><a href="#">Zamówienie: 2014-06-16 (Status: Nowe)<br>Zamawiający: <b>Jan Kowalski</b> Wartość zamówienia: <b>109,00 zł</b></a></li>
					</ul>
				</div>
				<div class="btn-group btn-group-languages button">
					<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><img src="<?=Yii::app()->request->baseUrl;?>/files/img/<?=Yii::app()->language;?>.png"> <?=Languages::languageActive();?> <span class="caret"></span></button>
					<ul class="dropdown-menu dropdown-menu-line pull-right" role="menu">
						<?php foreach (Languages::languagesArray() as $LangKey => $LangName) { ?>
							<li><a href="?lang=<?=$LangKey;?>"><img src="<?=Yii::app()->request->baseUrl;?>/files/img/<?=$LangKey;?>.png"> <?=$LangName;?></a></li>
						<?php } ?>
					</ul>
				</div>
				<div class="btn-group button">
					<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><?=Users::info('email');?> <span class="caret"></span></button>
					<ul class="dropdown-menu dropdown-menu-line pull-right" role="menu">
						<li><a href="#">Edytuj profil</a></li>
						<li><a href="#">Historia konta</a></li>
						<li class="divider"></li>
						<li><a href="/administrator/logout">Wyloguj się</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="header-bar">
			<h2><?=$this->pageTitle;?></h2>
			<div class="breadcrumbs">
				<a href="<?=Yii::app()->request->baseUrl;?>/">Kokpit</a>
				<span>/</span>
				<? if ($this->breadcrumbs) { ?>
				<?php foreach ($this->breadcrumbs as $link => $name) { $i++; ?>
					<? if ($i == count($this->breadcrumbs)) { ?>
						<b><?=$name;?></b>
					<?php } else { ?>
						<a href="/administrator<?=$link;?>"><?=$name;?></a>
						<span>/</span>
					<?php } ?>
				<?php } ?>
				<?php } ?>
			</div>
			<div class="clear">&nbsp;</div>
		</div>
		<div class="page-container">
			<div class="sidebar">
				<ul>
					<li><a href="<?=Yii::app()->request->baseUrl;?>/"><span class="icon"><i class="fa fa-desktop"></i></span> <b>Kokpit</b></a></li>
					<?= Yii::app() -> access -> render(); ?>
					<li class="{if Yii::app()->controller->id == "orders"}active{/if}">
						<a href="<?=Yii::app()->request->baseUrl;?>/offers/"><span class="icon"><i class="fa fa-shopping-cart"></i></span> <b>Oferty</b> <i class="fa fa-angle-right"></i></a>
						<ul>
							<li><a href="<?=Yii::app()->request->baseUrl;?>/offers/categories/">Kategorie</a></li>
						</ul>
					</li>
					<li>
						<a href="<?=Yii::app()->request->baseUrl;?>/customers/"><span class="icon"><i class="fa fa-users"></i></span> <b>Klienci</b> <i class="fa fa-angle-right"></i></a>
						<ul>
							<li><a href="#">Lista Klientów</a></li>
							<li><a href="#">Grupy Klientów</a></li>
							<li><a href="#">Grupy subskrybentów</a></li>
						</ul>
					</li>
					<li>
						<a href="<?=Yii::app()->request->baseUrl;?>/products/"><span class="icon"><i class="fa fa-archive"></i></span> <b>Produkty</b> <i class="fa fa-angle-right"></i></a>
						<ul>
							<li><a href="<?=Yii::app()->request->baseUrl;?>/products/index">Lista produktów</a></li>
							<li><a href="<?=Yii::app()->request->baseUrl;?>/media/categories">Kategorie zdjęć</a></li>
							<li><a href="<?=Yii::app()->request->baseUrl;?>/gallery">Własne galerie</a></li>
							<li><a href="<?=Yii::app()->request->baseUrl;?>/products/additional">Opcje dodatkowe</a></li>
							<li><a href="<?=Yii::app()->request->baseUrl;?>/products/pricelist">Ustawienia cennika</a></li>
						</ul>
					</li>
					<li>
						<a href="<?=Yii::app()->request->baseUrl;?>/marketing/"><span class="icon"><i class="fa fa-tags"></i></span> <b>Marketing / Reklama</b> <i class="fa fa-angle-right"></i></a>
						<ul>
							<li><a href="#">Promocje</a></li>
							<li><a href="#">Rabaty</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</li>
					<li>
						<a href="<?=Yii::app()->request->baseUrl;?>/reports/"><span class="icon"><i class="fa fa-bar-chart-o"></i></span> <b>Raporty</b> <i class="fa fa-angle-right"></i></a>
						<ul>
							<li><a href="#">Zamówienia</a></li>
							<li><a href="#">Klienci</a></li>
							<li><a href="#">Produkty</a></li>
						</ul>
					</li>
					<li>
						<a href="<?=Yii::app()->request->baseUrl;?>/pages/"><span class="icon"><i class="fa fa-pencil-square"></i></span> <b>Zawartość</b> <i class="fa fa-angle-right"></i></a>
						<ul>
							<li><a href="<?=Yii::app()->request->baseUrl;?>/pages/">Strony informacyjne</a></li>
							<li><a href="#">Menu strony</a></li>
							<li><a href="<?=Yii::app()->request->baseUrl;?>/opinion/">Opinie Klientów</a></li>
						</ul>
					</li>
					<li><a href="<?=Yii::app()->request->baseUrl;?>/config/"><span class="icon"><i class="fa fa-cogs"></i></span> <b>Konfiguracja</b> <i class="fa fa-angle-right"></i></a>
						<ul>
							<li><a href="<?=Yii::app()->request->baseUrl;?>/layouts/">Układ strony</a></li>
							<li><a href="<?=Yii::app()->request->baseUrl;?>/forms/">Formularze</a></li>
							<li><a href="<?=Yii::app()->request->baseUrl;?>/opinion/config">Opinie Klientów</a></li>
						</ul>
					</li>
					<li><a href="<?=Yii::app()->request->baseUrl;?>/tools/"><span class="icon"><i class="fa fa-wrench"></i></span> <b>Narzędzia</b> <i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div>
			<div class="content">
				<?=$content;?>
			</div>
		</div>
		<script src="<?=Yii::app()->request->baseUrl;?>/files/js/jquery.min.js"></script>
		<script src="<?=Yii::app()->request->baseUrl;?>/files/js/jquery.ui.js"></script>
		<script src="<?=Yii::app()->request->baseUrl;?>/files/js/layout.js"></script>
		<script src="<?=Yii::app()->request->baseUrl;?>/files/js/bootstrap.min.js"></script>
	</body>
</html>