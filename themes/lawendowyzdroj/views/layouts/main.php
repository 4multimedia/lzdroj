<!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="/files/js/bootstrap.min.js"></script>
		<title>Lawendowy Zdrój</title>

		<link href="<?=Yii::app()->theme->baseUrl;?>/files/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?=Yii::app()->baseUrl;?>/files/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?=Yii::app()->theme->baseUrl;?>/files/css/main.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    
		<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<div class="page">
			<div class="wrapper">
				<div class="top">
					<ul>
						<li><a href="/o-nas">O nas</a></li>
						<li><a href="/kontakt">Kontakt</a></li>
						<li><a href="/pytania">Pytania</a></li>
						<li><a href="/kreator-podrozy" class="wizard">Kreator podróży</a></li>
						<li><a href="<?=Yii::app()->createUrl("logowanie");?>">Zaloguj się</a></li>
						<li><form><input type="text" name="string" placeholder="Szukaj w portalu"><button></button></form></li>
						<li><a href="#"><img src="<?=Yii::app()->theme->baseUrl;?>/files/img/lang_pl.gif"></a></li>
					</ul>
				</div>
				<header>
					<a href="/index"><img src="<?=Yii::app()->theme->baseUrl;?>/files/img/img_logo.png" class="logo"></a>
					<ul>
						<li><a class="first" href="<?=Yii::app()->createUrl("noclegi");?>">noclegi <span>w hotelu</span></a></li>
						<li><a href="<?=Yii::app()->createUrl("turnusy-lecznicze");?>">turnusy lecznicze <span>zabiegi medyczne - wellnes & spa</span></a></li>
						<li><a href="/busko-zdroj">Busko Zdrój <span>i okolice dla turystów</span></a></li>
					</ul>
					
					<a href="/generuj-super-oferte" class="super">Generuj super ofertę</a>
				</header>
				
				<?=$content;?>
				
			</div>
		</div>
		
	</body>
</html>
