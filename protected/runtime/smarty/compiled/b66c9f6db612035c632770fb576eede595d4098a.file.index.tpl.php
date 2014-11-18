<?php /* Smarty version Smarty-3.1.16, created on 2014-03-01 20:35:15
         compiled from "/printair-pl/new/printair/administrator/themes/classic/views/site/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5040294675312363dc79ca6-70046171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b66c9f6db612035c632770fb576eede595d4098a' => 
    array (
      0 => '/printair-pl/new/printair/administrator/themes/classic/views/site/index.tpl',
      1 => 1393702514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5040294675312363dc79ca6-70046171',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5312363dcfeb23_21900120',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5312363dcfeb23_21900120')) {function content_5312363dcfeb23_21900120($_smarty_tpl) {?><<?php ?>?php
/* @var $this SiteController */


?<?php ?>>

<h1>Welcome to <i><?php echo Yii::app()->name;?>
</i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code></code></li>
	<li>Layout file: <code><<?php ?>?php echo $this->getLayoutFile('main'); ?<?php ?>></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
<?php }} ?>
