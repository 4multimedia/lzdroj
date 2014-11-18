<?php /* Smarty version Smarty-3.1.16, created on 2014-03-22 07:24:55
         compiled from "/printair-pl/new/printair/protected/views/frontend/site/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2134323481530c80798caf88-23488403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa8ae650c3a801be3b00f10f3b3e544ea7b56435' => 
    array (
      0 => '/printair-pl/new/printair/protected/views/frontend/site/index.tpl',
      1 => 1395469489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2134323481530c80798caf88-23488403',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530c80799433d7_52256888',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530c80799433d7_52256888')) {function content_530c80799433d7_52256888($_smarty_tpl) {?><<?php ?>?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?<?php ?>>

<h1>Welcome to <i><<?php ?>?php echo CHtml::encode(Yii::app()->name); ?<?php ?>></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><<?php ?>?php echo __FILE__; ?<?php ?>></code></li>
	<li>Layout file: <code><<?php ?>?php echo $this->getLayoutFile('main'); ?<?php ?>></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
<?php }} ?>
