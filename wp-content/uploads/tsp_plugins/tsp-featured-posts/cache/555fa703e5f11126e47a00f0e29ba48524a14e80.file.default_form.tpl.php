<?php /* Smarty version Smarty-3.1.14, created on 2013-08-23 10:50:46
         compiled from "F:\xampp\htdocs\wordpress\wp-content\plugins\tsp-featured-posts\templates\default_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134452173e869cfc28-83545341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '555fa703e5f11126e47a00f0e29ba48524a14e80' => 
    array (
      0 => 'F:\\xampp\\htdocs\\wordpress\\wp-content\\plugins\\tsp-featured-posts\\templates\\default_form.tpl',
      1 => 1377254870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134452173e869cfc28-83545341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_fields' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52173e86a46410_16943553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52173e86a46410_16943553')) {function content_52173e86a46410_16943553($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['EASY_DEV_FORM_FIELDS']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>$_smarty_tpl->tpl_vars['field']->value), 0);?>

<?php } ?><?php }} ?>