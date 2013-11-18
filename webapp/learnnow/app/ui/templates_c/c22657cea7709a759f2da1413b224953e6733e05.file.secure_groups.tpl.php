<?php /* Smarty version Smarty-3.1.14, created on 2013-11-05 07:42:44
         compiled from "secure_groups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:308805275044e115ac9-38031864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c22657cea7709a759f2da1413b224953e6733e05' => 
    array (
      0 => 'secure_groups.tpl',
      1 => 1383637341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308805275044e115ac9-38031864',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5275044e138d48_33587774',
  'variables' => 
  array (
    'groups' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5275044e138d48_33587774')) {function content_5275044e138d48_33587774($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
<li class="">
	<a href="/learnnow/app/ui/getFeed.php?group=<?php echo $_smarty_tpl->tpl_vars['group']->value;?>
">
		<i class="icon-double-angle-right"></i>
			<?php echo $_smarty_tpl->tpl_vars['group']->value;?>

	</a>
</li>
<?php } ?>    
<?php }} ?>