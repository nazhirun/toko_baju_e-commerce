<?php
/* Smarty version 4.3.1, created on 2023-06-14 16:06:00
  from 'D:\Xampp 8.2\htdocs\toko-baju\admtokobaju\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648982f81c5b15_60766098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a60d7d97a5c5852c35c0ea8cc1d8ba56e423c0c3' => 
    array (
      0 => 'D:\\Xampp 8.2\\htdocs\\toko-baju\\admtokobaju\\themes\\default\\template\\content.tpl',
      1 => 1681801498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648982f81c5b15_60766098 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
