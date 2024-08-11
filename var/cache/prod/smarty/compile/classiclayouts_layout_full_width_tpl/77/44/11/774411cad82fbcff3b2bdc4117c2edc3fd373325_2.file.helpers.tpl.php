<?php
/* Smarty version 4.3.1, created on 2023-06-14 16:00:35
  from 'D:\Xampp 8.2\htdocs\toko-baju\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648981b392ec03_22191608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '774411cad82fbcff3b2bdc4117c2edc3fd373325' => 
    array (
      0 => 'D:\\Xampp 8.2\\htdocs\\toko-baju\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1671869250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648981b392ec03_22191608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'D:\\Xampp 8.2\\htdocs\\toko-baju\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\77\\44\\11\\774411cad82fbcff3b2bdc4117c2edc3fd373325_2.file.helpers.tpl.php',
    'uid' => '774411cad82fbcff3b2bdc4117c2edc3fd373325',
    'call_name' => 'smarty_template_function_renderLogo_424580270648981b39283c7_97086788',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_424580270648981b39283c7_97086788 */
if (!function_exists('smarty_template_function_renderLogo_424580270648981b39283c7_97086788')) {
function smarty_template_function_renderLogo_424580270648981b39283c7_97086788(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_424580270648981b39283c7_97086788 */
}
