<?php /* Smarty version Smarty-3.1.19, created on 2015-10-08 09:25:42
         compiled from "D:\workspace\php\nagoya6\admin121\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1322856161a76c01616-94858562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2f00d45407f9a3acb12e456d69eeb305af2b85e' => 
    array (
      0 => 'D:\\workspace\\php\\nagoya6\\admin121\\themes\\default\\template\\content.tpl',
      1 => 1424771622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1322856161a76c01616-94858562',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56161a76c096b7_23414466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56161a76c096b7_23414466')) {function content_56161a76c096b7_23414466($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
