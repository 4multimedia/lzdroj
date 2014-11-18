<?php /* Smarty version Smarty-3.1.16, created on 2014-06-14 20:31:08
         compiled from "/administrator/themes/classic/views/layouts/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:812335082539c94ec010492-61248000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b1e804d54a92091f8c4db61a86961307fe432a4' => 
    array (
      0 => '/administrator/themes/classic/views/layouts/main.tpl',
      1 => 1402770174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '812335082539c94ec010492-61248000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
    'name' => 0,
    'link' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_539c94ec24fea5_05450046',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539c94ec24fea5_05450046')) {function content_539c94ec24fea5_05450046($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo Yii::app()->request->baseUrl;?>
/files/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo Yii::app()->request->baseUrl;?>
/files/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo Yii::app()->request->baseUrl;?>
/files/css/layout.css" rel="stylesheet">
		<title><?php echo $_smarty_tpl->tpl_vars['this']->value->pageTitle;?>
 | Panel administracyjny | www.prinatair.pl</title>

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="navbar navbar-inverse" role="navigation">
			<div class="sidebar-bar">
				<h1>printair.pl</h1>
				<span id="hover-sidebar"><i class="fa fa-bars"></i></span>
			</div>
		</div>
		<div class="header-bar">
			<h2><?php echo $_smarty_tpl->tpl_vars['this']->value->pageTitle;?>
</h2>
			<div class="breadcrumbs">
				<a href="<?php echo Yii::app()->request->baseUrl;?>
/">Kokpit</a>
				<span>/</span>
				<?php if ($_smarty_tpl->tpl_vars['this']->value->breadcrumbs) {?>
				<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['this']->value->breadcrumbs; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['name']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['link']->value = $_smarty_tpl->tpl_vars['name']->key;
 $_smarty_tpl->tpl_vars['name']->iteration++;
 $_smarty_tpl->tpl_vars['name']->last = $_smarty_tpl->tpl_vars['name']->iteration === $_smarty_tpl->tpl_vars['name']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumbs']['last'] = $_smarty_tpl->tpl_vars['name']->last;
?>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumbs']['last']) {?>
						<b><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</b>
					<?php } else { ?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
						<span>/</span>
					<?php }?>
				<?php } ?>
				<?php }?>
			</div>
			<div class="clear">&nbsp;</div>
		</div>
		<div class="page-container">
			<div class="sidebar">
				<ul>
					<li><a href="<?php echo Yii::app()->request->baseUrl;?>
/"><span class="icon"><i class="fa fa-desktop"></i></span> <b>Kokpit</b></a></li>
					<li class="<?php if (Yii::app()->controller->id=="orders") {?>active<?php }?>">
						<a href="<?php echo Yii::app()->request->baseUrl;?>
/orders/"><span class="icon"><i class="fa fa-shopping-cart"></i></span> <b>Zamówienia</b> <i class="fa fa-angle-right"></i></a>
						<ul>
							<li><a href="<?php echo Yii::app()->request->baseUrl;?>
/orders/">Lista zamówień</a></li>
							<li><a href="<?php echo Yii::app()->request->baseUrl;?>
/orders/timetable">Terminarz zamówień</a></li>
							<li><a href="<?php echo Yii::app()->request->baseUrl;?>
/orders/config">Ustawienia</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo Yii::app()->request->baseUrl;?>
/customers/"><span class="icon"><i class="fa fa-users"></i></span> <b>Klienci</b> <i class="fa fa-angle-right"></i></a>
						<ul>
							<li><a href="#">Lista Klientów</a></li>
							<li><a href="#">Grupy Klientów</a></li>
							<li><a href="#">Grupy subskrybentów</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo Yii::app()->request->baseUrl;?>
/products/"><span class="icon"><i class="fa fa-archive"></i></span> <b>Produkty</b> <i class="fa fa-angle-right"></i></a>
						<ul>
							<li><a href="<?php echo Yii::app()->request->baseUrl;?>
/products">Lista produktów</a></li>
							<li><a href="<?php echo Yii::app()->request->baseUrl;?>
/media/categories">Kategorie zdjęć</a></li>
							<li><a href="<?php echo Yii::app()->request->baseUrl;?>
/gallery">Własne galerie</a></li>
							<li><a href="<?php echo Yii::app()->request->baseUrl;?>
/products/additional">Opcje dodatkowe</a></li>
							<li><a href="<?php echo Yii::app()->request->baseUrl;?>
/products/pricelist">Ustawienia cennika</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo Yii::app()->request->baseUrl;?>
/marketing/"><span class="icon"><i class="fa fa-tags"></i></span> <b>Marketing / Reklama</b> <i class="fa fa-angle-right"></i></a>
						<ul>
							<li><a href="#">Promocje</a></li>
							<li><a href="#">Rabaty</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo Yii::app()->request->baseUrl;?>
/reports/"><span class="icon"><i class="fa fa-bar-chart-o"></i></span> <b>Raporty</b> <i class="fa fa-angle-right"></i></a>
						<ul>
							<li><a href="#">Zamówienia</a></li>
							<li><a href="#">Klienci</a></li>
							<li><a href="#">Produkty</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo Yii::app()->request->baseUrl;?>
/pages/"><span class="icon"><i class="fa fa-pencil-square"></i></span> <b>Zawartość</b> <i class="fa fa-angle-right"></i></a>
						<ul>
							<li><a href="<?php echo Yii::app()->request->baseUrl;?>
/pages/">Strony informacyjne</a></li>
							<li><a href="#">Menu strony</a></li>
							<li><a href="<?php echo Yii::app()->request->baseUrl;?>
/opinion/">Opinie Klientów</a></li>
						</ul>
					</li>
					<li><a href="<?php echo Yii::app()->request->baseUrl;?>
/config/"><span class="icon"><i class="fa fa-cogs"></i></span> <b>Konfiguracja</b> <i class="fa fa-angle-right"></i></a>
						<ul>
							<li><a href="<?php echo Yii::app()->request->baseUrl;?>
/layouts/">Układ strony</a></li>
							<li><a href="<?php echo Yii::app()->request->baseUrl;?>
/forms/">Formularze</a></li>
							<li><a href="<?php echo Yii::app()->request->baseUrl;?>
/opinion/config">Opinie Klientów</a></li>
						</ul>
					</li>
					<li><a href="<?php echo Yii::app()->request->baseUrl;?>
/tools/"><span class="icon"><i class="fa fa-wrench"></i></span> <b>Narzędzia</b> <i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div>
			<div class="content">
				<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

			</div>
		</div>
		<script src="<?php echo Yii::app()->request->baseUrl;?>
/files/js/jquery.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl;?>
/files/js/jquery.ui.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl;?>
/files/js/layout.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl;?>
/files/js/bootstrap.min.js"></script>
	</body>
</html><?php }} ?>
