<?php /* Smarty version Smarty-3.1.19, created on 2017-08-01 12:15:40
         compiled from "/Applications/MAMP/htdocs/prestaSSM2/admin/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:759437262598054ccc277c9-67522922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcf915c9d3cddc847ff2fcf39ba70bb19293807c' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestaSSM2/admin/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1498229114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '759437262598054ccc277c9-67522922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_598054ccc59931_06908599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598054ccc59931_06908599')) {function content_598054ccc59931_06908599($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
