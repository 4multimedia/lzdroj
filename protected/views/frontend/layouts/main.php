<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/bootstrap.min.css" rel="stylesheet">
		
		<title>Title</title>

		<link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/icomoon.css" rel="stylesheet">
		<link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/layout.css" rel="stylesheet">
		
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="top">
			<div class="container">
			<?php
				$this->widget('zii.widgets.CMenu', array (
					'items'=> array(
						array('label'=>'Strona główna', 'url' => array('/index')),
						array('label'=>'Moje konto', 'url' => array('/konto')),
						array('label'=>'Przechowalnia', 'url' => array('/przechowalnia')),
						array('label'=>'Zrealizuj zamówienie', 'url' => array('/zrealizuj')),
					),
					'htmlOptions' => array('class' => 'top-menu-left hidden-xs')
				));
				
				$this -> widget('application.extensions.widgets.Language.Select', array('selected' => 'pl'));
			?>
			</div>
		</div>
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-4 col-md-2 col-xs-12">
						<h1>Print<b>air</b></h1>
					</div>
					<div class="col-md-6 col-sm-8 col-xs-12 col-md-offset-1">
						<form>
							<input type="text" name="" placeholder="Wyszukaj obraz, np. Wiosenny pejzaż">
							<button class="effects" type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<div class="col-md-3 hidden-xs hidden-sm">
						<div class="cart">
							<span class="icon icon-cart3"></span>
							<b><?=CHtml::link('Twój koszyk: <em>pusty</em>', 'koszyk');?></b>
							<button class="hidden-md"><i class="fa fa-angle-down"></i></button>
						</div>
					</div>
				</div>
				<div class="top-menu">
				<?php
					$this->widget('zii.widgets.CMenu', array (
						'items'=> array(
							array('label'=>'Strona główna', 'url' => array('/index')),
							array('label'=>'Nasza oferta', 'url' => array('/oferta')),
							array('label'=>'Galeria zdjęć', 'url' => array('/galeria-zdjec')),
							array('label'=>'Opinie Klientów', 'url' => array('/opinie')),
							array('label'=>'Regulamin', 'url' => array('/regulamin')),
							array('label'=>'Z Twojego zdjęcia', 'url' => array('/z-twojego-zdjecia')),
							array('label'=>'Kontakt', 'url' => array('/kontakt')),
						),
						'htmlOptions' => array('class' => 'hidden-xs')
					));
				?>
				</div>
			</div>
		</div>
		<div class="container content">
			<div class="title">
				<h2><?php echo CHtml::encode($this->pageTitle); ?></h2>
				<div class="breadcrumbs">
					<ul>
						<li><a href="/index">Strona główna</a> <span>&raquo;</span></li>
						<?php if (is_array($this->breacrumbs)) { ?>
							<?php foreach ($this->breacrumbs as $url => $name) { $i++; ?>
								<?php if (count($this->breacrumbs) > $i) { ?>
									<li><a href="/<?php echo $url; ?>"><?=$name;?></a> <span>&raquo;</span></li>
								<?php } else { ?>
									<li><?=$name;?></li>
								<?php } ?>
							<?php } ?>
						<?php } else { ?>
						<li><?=$this->breacrumbs;?></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<?php echo $content; ?>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	</body>
</html>