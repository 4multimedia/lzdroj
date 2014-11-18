<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta id="Viewport" name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, width=device-width">
		<link href="<?=Yii::app()->request->baseUrl;?>/files/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?=Yii::app()->request->baseUrl;?>/files/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?=Yii::app()->request->baseUrl;?>/files/css/login.css" rel="stylesheet">
		<title><?=$this->pageTitle;?> | Panel administracyjny</title>
		
		<script src="/administrator/files/js/jquery.min.js"></script>
		<script src="/administrator/files/js/bootstrap.min.js"></script>

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php $this->widget('application.extensions.widgets.Language.Dropdowns');?>
		<?=$content;?>
	</body>
</html>