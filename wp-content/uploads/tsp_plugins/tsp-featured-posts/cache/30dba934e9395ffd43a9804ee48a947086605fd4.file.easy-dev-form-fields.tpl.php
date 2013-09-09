<?php /* Smarty version Smarty-3.1.14, created on 2013-08-23 10:49:46
         compiled from "F:\xampp\htdocs\wordpress\wp-content\plugins\tsp-easy-dev\assets\templates\easy-dev-form-fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1379052173e4a4c0842-10599098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30dba934e9395ffd43a9804ee48a947086605fd4' => 
    array (
      0 => 'F:\\xampp\\htdocs\\wordpress\\wp-content\\plugins\\tsp-easy-dev\\assets\\templates\\easy-dev-form-fields.tpl',
      1 => 1377254956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1379052173e4a4c0842-10599098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field_prefix' => 0,
    'field' => 0,
    'class' => 0,
    'ovalue' => 0,
    'okey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52173e4a55ab14_18435240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52173e4a55ab14_18435240')) {function content_52173e4a55ab14_18435240($_smarty_tpl) {?><style>
.<?php echo $_smarty_tpl->tpl_vars['field_prefix']->value;?>
_form_element label{
	width: 220px;
	float: left;
	clear: left;
}

.<?php echo $_smarty_tpl->tpl_vars['field_prefix']->value;?>
_form_element {
	padding-bottom: 5px;
}
</style>
<div class="<?php echo $_smarty_tpl->tpl_vars['field_prefix']->value;?>
_form_element" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
_container_div" style="">
	<label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</label>
	<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='INPUT'){?>
	   <input class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
" />
	<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=='TEXTAREA'){?>
	   <textarea class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
</textarea>
	<?php }elseif($_smarty_tpl->tpl_vars['field']->value['type']=='SELECT'){?>
	   <select class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" >
	   		<?php  $_smarty_tpl->tpl_vars['ovalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ovalue']->_loop = false;
 $_smarty_tpl->tpl_vars['okey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ovalue']->key => $_smarty_tpl->tpl_vars['ovalue']->value){
$_smarty_tpl->tpl_vars['ovalue']->_loop = true;
 $_smarty_tpl->tpl_vars['okey']->value = $_smarty_tpl->tpl_vars['ovalue']->key;
?>
	   			<option class="level-0" value="<?php echo $_smarty_tpl->tpl_vars['ovalue']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['value']==$_smarty_tpl->tpl_vars['ovalue']->value){?>selected='selected'<?php }?>><?php echo $_smarty_tpl->tpl_vars['okey']->value;?>
</option>
	   		<?php } ?>
	   </select>
	<?php }?>
	<div class="clear"></div>
	<div id="error-message-name"></div>
</div>

<?php }} ?>