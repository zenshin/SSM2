<?php /* Smarty version Smarty-3.1.19, created on 2017-08-01 11:22:37
         compiled from "/Applications/MAMP/htdocs/prestaSSM2/admin196gatvgz/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14880871665980566d1f7644-50499052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eef02a3218e1a9128de3f44e3ea16d9c9aa9ea2' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestaSSM2/admin196gatvgz/themes/default/template/content.tpl',
      1 => 1498229114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14880871665980566d1f7644-50499052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5980566d2077f4_11649148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5980566d2077f4_11649148')) {function content_5980566d2077f4_11649148($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
