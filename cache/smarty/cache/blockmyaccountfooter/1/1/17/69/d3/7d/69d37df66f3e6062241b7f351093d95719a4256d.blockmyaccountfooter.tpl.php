<?php /*%%SmartyHeaderCode:7038178295980567784ab20-50367589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69d37df66f3e6062241b7f351093d95719a4256d' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestaSSM2/themes/default-bootstrap/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1498229114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7038178295980567784ab20-50367589',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59805677902ac3_02004100',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59805677902ac3_02004100')) {function content_59805677902ac3_02004100($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://localhost:8888/prestaSSM2/my-account" title="Manage my customer account" rel="nofollow">My account</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://localhost:8888/prestaSSM2/order-history" title="My orders" rel="nofollow">My orders</a></li>
						<li><a href="http://localhost:8888/prestaSSM2/credit-slip" title="My credit slips" rel="nofollow">My credit slips</a></li>
			<li><a href="http://localhost:8888/prestaSSM2/addresses" title="My addresses" rel="nofollow">My addresses</a></li>
			<li><a href="http://localhost:8888/prestaSSM2/identity" title="Manage my personal information" rel="nofollow">My personal info</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
