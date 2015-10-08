<?php /*%%SmartyHeaderCode:312356161996c559d5-42057189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5419c61bb1542b5e3282074e63bc8e3baf5bd5d8' => 
    array (
      0 => 'D:\\workspace\\php\\nagoya6\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1424771622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312356161996c559d5-42057189',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56162438382b06_79971517',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56162438382b06_79971517')) {function content_56162438382b06_79971517($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//nagoya6.com/zh/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="搜索" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>搜索</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
