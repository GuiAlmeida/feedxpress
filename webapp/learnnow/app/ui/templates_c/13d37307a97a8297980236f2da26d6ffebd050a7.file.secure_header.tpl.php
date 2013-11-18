<?php /* Smarty version Smarty-3.1.14, created on 2013-11-11 09:48:06
         compiled from "secure_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15852527ec783684013-20386804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13d37307a97a8297980236f2da26d6ffebd050a7' => 
    array (
      0 => 'secure_header.tpl',
      1 => 1384163271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15852527ec783684013-20386804',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527ec7836a7295_73427476',
  'variables' => 
  array (
    'active' => 0,
    'groups' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527ec7836a7295_73427476')) {function content_527ec7836a7295_73427476($_smarty_tpl) {?><ul class="nav nav-list">
						<li class="<?php echo $_smarty_tpl->tpl_vars['active']->value['dashboard'];?>
">
							<a href="dashboard.php">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> Dashboard </span>
							</a>
						</li>

						<li class="<?php echo $_smarty_tpl->tpl_vars['active']->value['groups'];?>
">
							<a href="#" class="dropdown-toggle">
								<i class="icon-group"></i>
								<span class="menu-text">Groups </span>

								<b class="arrow icon-angle-down"></b>
							</a>
						
							<ul class="submenu">
							<?php echo $_smarty_tpl->getSubTemplate ('secure_groups.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('groups'=>$_smarty_tpl->tpl_vars['groups']->value), 0);?>
	  
							</ul>
							
						</li>

						

						<li class="<?php echo $_smarty_tpl->tpl_vars['active']->value['post'];?>
">
							<a href="post.php" class="dropdown-toggle">
								<i class="icon-upload"></i>
								<span class="menu-text"> Upload </span>

							</a>

							
						</li>
						<li class="<?php echo $_smarty_tpl->tpl_vars['active']->value['compose'];?>
">
							<a href="compose.php" class="dropdown-toggle">
								<i class="icon-pencil"></i>
								<span class="menu-text"> Compose </span>

							</a>

							
						</li>
						<li class="">
							<a href="#" class="dropdown-toggle">
								<i class="icon-hdd"></i>
								<span class="menu-text">Plugins</span>

								<b class="arrow icon-angle-down"></b>
							</a>
						
							<ul class="submenu">
							 
							</ul>
							
						</li>

</ul><!-- /.nav-list -->

<?php }} ?>