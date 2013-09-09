<?php /* Smarty version Smarty-3.1.14, created on 2013-08-23 10:49:46
         compiled from "F:\xampp\htdocs\wordpress\wp-content\plugins\tsp-featured-posts\templates\tsp-featured-posts_shortcode_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1256952173e4a3e2f95-45471900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b28aa9d0d293f77701964f2627abcbde49a65a4' => 
    array (
      0 => 'F:\\xampp\\htdocs\\wordpress\\wp-content\\plugins\\tsp-featured-posts\\templates\\tsp-featured-posts_shortcode_settings.tpl',
      1 => 1377254870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1256952173e4a3e2f95-45471900',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
    'error' => 0,
    'message' => 0,
    'plugin_name' => 0,
    'form_fields' => 0,
    'field' => 0,
    'nonce_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52173e4a49ecd0_92740843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52173e4a49ecd0_92740843')) {function content_52173e4a49ecd0_92740843($_smarty_tpl) {?> <div class="tsp_container">
	<div class="icon32" id="tsp_icon"></div>
	<h2>Featured Posts Default Settings (The Software People)</h2>
	<div class="mycomment">
		<p><h3>Using Featured Posts Shortcode <a href="#" class="toggle">(hide/show details)</a>:</h3></p>
		<div class="note-details">
			<ul style="list-style-type:square;">
				<li>Changing the default post options below allows you to place <strong>[tsp-featured-posts]</strong> shortcode tag into any post or page with these options.</li>
				<li>However, if you wish to add different options to the <strong>[tsp-featured-posts]</strong> shortcode please use the following settings:
					<ul style="padding-left: 30px;">
						<li>Title: <strong>title="Title of Posts"</strong></li>
						<li>Max Words in Title: <strong>max_words=10</strong></li>
						<li>Show Author: <strong>show_author="Y"</strong>(Options: Y, N)</li>
						<li>Show Publish Date: <strong>show_date="Y"</strong>(Options: Y, N)</li>
						<li>Show Quotes: <strong>show_quotes="Y"</strong>(Options: Y, N)</li>
						<li>Show Posts with No Media Content: <strong>show_text_posts="N"</strong>(Options: Y, N)</li>
						<li>Number Posts: <strong>number_posts="5"</strong></li>
						<li>Excerpt Length (Layouts #0 & #3): <strong>excerpt_min="60"</strong></li>
						<li>Excerpt Length (Layouts #1, #2 & #4[Slider]): <strong>excerpt_max="100"</strong></li>
						<li>Post IDs: <strong>post_ids="5,3,4"</strong></li>
						<li>Category: <strong>category="0"</strong>(Any category ID, 0 returns all categories)</li>
						<li>Slider Width: <strong>slider_width="865"</strong></li>
						<li>Slider Height: <strong>slider_height="365"</strong></li>
						<li>Layout: <strong>layout="0"</strong>(Options: 0, 1, 2, 3, 4)
							<ul style="padding-left: 30px;">
								<li>0: Left: Image - Right: Title, Text (Thumbnail)</li>
								<li>1: Top: Title - Left: Image - Right: Text (Featured-Medium)</li>
								<li>2: Left: Title, Image - Right: Text (Featured-Large)</li>
								<li>3: Left: Image - Right: Text (Thumbnail/No title)</li>
								<li>4: Slider: Title, Image - Right: Text (Featured-Large)</li>
							</ul>
						</li>
						<li>Order By: <strong>order_by="DESC"</strong>(Options: rand,title,date,author,modified,ID)</li>
						<li>Thumbnail Width: <strong>thumb_width="80"</strong></li>
						<li>Thumbnail Height: <strong>thumb_height="80"</strong></li>
						<li>HTML Tag Before Title: <strong>before_title="&lt;h3&gt;"</strong></li>
						<li>HTML Tag After Title: <strong>after_title="&lt;/h3&gt;"</strong></li>
					</ul>
				</li>
				<li>Insert your desired shortcode into any page or post.</li>
			</ul>
			<hr>
			A shortcode with all the options will look like the following:<br><br>
			<strong>[tsp-featured-posts title="Title of Posts" max_words=10 show_quotes="N" show_author="Y" show_date="N" show_text_posts="N" number_posts="5" excerpt_min="60" excerpt_max="100" post_ids="5,3,4" category="0" slider_width="865" slider_height="365 layout="0" order_by="DESC" thumb_width="80" thumb_height="80" before_title="" after_title=""]</strong>
		</div>
	
	</div>
	<script>
		
		jQuery("div.tsp_container a.toggle").click(function () {
			jQuery(".note-details").toggle();
		});
		
	</script>
	<div class="updated fade" <?php if (!$_smarty_tpl->tpl_vars['form']->value||$_smarty_tpl->tpl_vars['error']->value!=''){?>style="display:none;"<?php }?>><p><strong><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</strong></p></div>
	<div class="error" <?php if (!$_smarty_tpl->tpl_vars['error']->value){?>style="display:none;"<?php }?>><p><strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong></p></div>
	<form method="post" action="admin.php?page=<?php echo $_smarty_tpl->tpl_vars['plugin_name']->value;?>
.php">
		<fieldset>
		<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['EASY_DEV_FORM_FIELDS']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>$_smarty_tpl->tpl_vars['field']->value), 0);?>

		<?php } ?>
		</fieldset>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['plugin_name']->value;?>
_form_submit" value="submit" />
		<p class="submit">
			<input type="submit" class="button-primary" value="Save Changes" />
		</p>
		<?php echo $_smarty_tpl->tpl_vars['nonce_name']->value;?>

	</form>
</div><!-- tsp_container -->
<?php }} ?>