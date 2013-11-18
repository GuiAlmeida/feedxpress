<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 14:17:42
         compiled from "group.html" */ ?>
<?php /*%%SmartyHeaderCode:60145267c814bd7821-03191170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '867ba79fb8493fc8c566ea29cf495cb99a76a862' => 
    array (
      0 => 'group.html',
      1 => 1382537861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60145267c814bd7821-03191170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5267c814c83642_90629812',
  'variables' => 
  array (
    'name' => 0,
    'navBarColor' => 0,
    'groups' => 0,
    'group' => 0,
    '(\'groupName\')' => 0,
    'groupName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5267c814c83642_90629812')) {function content_5267c814c83642_90629812($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>L & D - <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->
        <link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.css" />
		<!-- fonts -->

		<link rel="stylesheet" href="assets/css/ace-fonts.css" />

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="assets/js/ace-extra.min.js"></script>
		 <style>
		.navbar { background: <?php echo $_smarty_tpl->tpl_vars['navBarColor']->value;?>
; }
        </style>		

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
			
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
						        L & D - <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
					

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
			 
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			 
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						 
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					 
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

						<ul class="nav nav-list">
						<li >
							<a href="dashboard.php">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> Dashboard </span>
							</a>
						</li>

						<li class="active open">
							<a href="#" class="dropdown-toggle">
								<i class="icon-group"></i>
								<span class="menu-text">Groups </span>

								<b class="arrow icon-angle-down"></b>
							</a>
						
							<ul class="submenu">
							<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
							  <?php if ($_smarty_tpl->tpl_vars['group']->value==$_smarty_tpl->tpl_vars[('groupName')]->value){?>
                                <li class="active">
							    <?php }else{ ?> 
                                 <li>
                              <?php }?>
								
								  <a href="group.php?group_name=<?php echo $_smarty_tpl->tpl_vars['group']->value;?>
">
										<i class="icon-double-angle-right"></i>
									<?php echo $_smarty_tpl->tpl_vars['group']->value;?>

									</a>
								</li>
								<?php } ?>
							</ul>
						</li>

						

						<li >
							<a href="post.php" class="dropdown-toggle">
								<i class="icon-envelope-alt"></i>
								<span class="menu-text"> Post </span>

							</a>

							
						</li>

					
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Groups</a>
							</li>
							<li>
								<a href="#"><?php echo $_smarty_tpl->tpl_vars['groupName']->value;?>
</a>
							</li>
						
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

		<div class="page-content">
		<div class="row">
	    <div class="col-xs-12">
		<div class="container" >
		 <div class="page-header">
		   <h1> <?php echo $_smarty_tpl->tpl_vars['groupName']->value;?>
 <small><i class="icon-double-angle-right"></i></small></h1>
		 </div>
							
						</div>
			        </div><!-- /.col -->
				<!--	 <div class="col-xs-3" style="">
					 <div class="container" >
						 <div class="page-header">
						   <h1><small></small></h1>
						 </div>
					</div> 
				 </div> -->
			      </div><!-- /.row -->
			
			    
			 
				</div><!-- /.page-content -->
				</div><!-- /.main-content -->
			 </div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
 
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>
		<script src="assets/js/bootstrap-tag.min.js"></script>
		<script src="assets/js/chosen.jquery.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		<script>
		var groups = [];
		
		$( document ).ready(function() {
		
		  $(".chosen-select").chosen(); 
		
		  var tag_input = $('#tags');
		  if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
		  {
			tag_input.tag(
			  {
				placeholder:tag_input.attr('placeholder'),
				//enable typeahead by specifying the source array
				 
				
			  }
			);
		  }
		  else {
			//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
			tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="8">'+tag_input.val()+'</textarea>').remove();
			//$('#form-field-tags').autosize({append: "\n"});
		  }
		
		 /* $.ajax({
		  type: "GET",
		  url: "http://localhost/learnnow/v1/Accounts/admin@delloite.com/Groups",
		  success: function(data){
		  
		   groups = data;
		   
		    var tag_input = $('#groups');
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
				{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						 source: data
						
					  }
					);
				}
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="8">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "\n"});
				}
		  },
		  dataType: "json"
		});*/
		});
		</script>
 
		<!-- inline scripts related to this page -->
	</body>
</html>
<?php }} ?>