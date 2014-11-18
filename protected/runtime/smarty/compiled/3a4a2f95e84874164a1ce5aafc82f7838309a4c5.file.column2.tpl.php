<?php /* Smarty version Smarty-3.1.16, created on 2014-02-23 15:08:39
         compiled from "/printair-pl/new/printair/protected/views/layouts/column2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1830828995530a002de36a89-12359386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a4a2f95e84874164a1ce5aafc82f7838309a4c5' => 
    array (
      0 => '/printair-pl/new/printair/protected/views/layouts/column2.tpl',
      1 => 1393164517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1830828995530a002de36a89-12359386',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530a002de892f4_40694271',
  'variables' => 
  array (
    'this' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a002de892f4_40694271')) {function content_530a002de892f4_40694271($_smarty_tpl) {?><?php if (!is_callable('smarty_function_t')) include '/printair-pl/new/printair/protected/extensions/smarty/plugins/function.t.php';
?><?php echo $_smarty_tpl->tpl_vars['this']->value->pageTitle;?>

<div id="content">
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><!-- content -->

<?php echo smarty_function_t(array('text'=>"text to translate",'cat'=>"app"),$_smarty_tpl);?>
<?php }} ?>
