<?php /* Smarty version Smarty-3.1.19, created on 2017-08-01 12:15:39
         compiled from "/Applications/MAMP/htdocs/prestaSSM2/admin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1992590929598054cb1a9768-87443818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9fd638b72d8f0de200eb395369bab45be43e55b' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestaSSM2/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1498229114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1992590929598054cb1a9768-87443818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_598054cb1b33f5_92280705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598054cb1b33f5_92280705')) {function content_598054cb1b33f5_92280705($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
