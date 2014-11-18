<?php /* Smarty version Smarty-3.1.16, created on 2014-02-23 15:02:18
         compiled from "/printair-pl/new/printair/protected/views//layouts/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8847662775309ff2a822f65-83317328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcb9ab31c72c30715263f06ef2afec386e5364fb' => 
    array (
      0 => '/printair-pl/new/printair/protected/views//layouts/main.tpl',
      1 => 1393164134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8847662775309ff2a822f65-83317328',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5309ff2a8239f9_73706067',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5309ff2a8239f9_73706067')) {function content_5309ff2a8239f9_73706067($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include '/printair-pl/new/printair/protected/extensions/smarty/plugins/function.link.php';
?><?php echo $_smarty_tpl->tpl_vars['this']->value->pageTitle;?>

<?php echo smarty_function_link(array('text'=>"test",'url'=>"http://host/absolute/url"),$_smarty_tpl);?>
<?php }} ?>
