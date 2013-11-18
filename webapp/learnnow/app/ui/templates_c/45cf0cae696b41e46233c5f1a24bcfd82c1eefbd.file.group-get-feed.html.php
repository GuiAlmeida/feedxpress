<?php /* Smarty version Smarty-3.1.14, created on 2013-11-17 02:36:54
         compiled from "group-get-feed.html" */ ?>
<?php /*%%SmartyHeaderCode:59815274ed3fe464d1-89504941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45cf0cae696b41e46233c5f1a24bcfd82c1eefbd' => 
    array (
      0 => 'group-get-feed.html',
      1 => 1384655812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59815274ed3fe464d1-89504941',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5274ed3fee28f9_61256532',
  'variables' => 
  array (
    'name' => 0,
    'navBarColor' => 0,
    'groups' => 0,
    'group' => 0,
    'clips' => 0,
    'clip' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5274ed3fee28f9_61256532')) {function content_5274ed3fee28f9_61256532($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>L & D - <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->
           <script src="assets/js/jquery-2.0.3.min.js"></script>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

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
		<div class="navbar navbar-default" id="navbar" style="">
			<script type="text/javascript">
			 
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			 
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-book" ></i>
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
									<a href="/learnnow/app/ui/logout.php">
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

		<div class="main-container" id="main-container" style="min-height:1500px;">
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

					<?php echo $_smarty_tpl->getSubTemplate ('secure_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('groups'=>$_smarty_tpl->tpl_vars['groups']->value), 0);?>
	

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
					 
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					 	
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
						 
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						 	
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Dashboard</a>
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
					 <div class="page-header">
							<h1>
								<?php echo $_smarty_tpl->tpl_vars['group']->value;?>

								<small>
									<i class="icon-double-angle-right"></i>
									
								</small>
							</h1>
					</div><!-- /.page-header -->
					<div class="page-content" >
					
						
					

				    <div id="content">
					
					
				    <?php  $_smarty_tpl->tpl_vars['clip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['clip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clips']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['clip']->key => $_smarty_tpl->tpl_vars['clip']->value){
$_smarty_tpl->tpl_vars['clip']->_loop = true;
?>
					<div style="margin-bottom:5px;background-color:#F9F9F9;padding: 6px;" class="col-sm-12" id="<?php echo $_smarty_tpl->tpl_vars['clip']->value['_id'];?>
">
					<div class="col-sm-3" style="background-color:#C6C6C6;padding-top: 4px;padding-bottom:4px;">
					<a href="/learnnow/app/ui/content-detail.php?content_id=<?php echo $_smarty_tpl->tpl_vars['clip']->value['content']['_id'];?>
">
					<div><img src="<?php echo $_smarty_tpl->tpl_vars['clip']->value['content']['clipThumbnailUrl'];?>
" width="210" height="158" style="align:center;"/></div>
					</a>
				    </div> 
					<div class="col-sm-9" style="background-color:#F9F9F9">
					<div ><a href="/learnnow/app/ui/content-detail.php?content_id=<?php echo $_smarty_tpl->tpl_vars['clip']->value['content']['_id'];?>
"><h4 style="margin-top: 2px;"><?php echo $_smarty_tpl->tpl_vars['clip']->value['content']['title'];?>
</h4></a></div>
					<div style="margin-top: 5px;"><i class="icon-time" ></i>&nbsp;&nbsp;<abbr class="timeago" title="<?php echo $_smarty_tpl->tpl_vars['clip']->value['publishDate'];?>
"></abbr></div>
					<div style="margin-top: 5px;"><font size="3" color="grey">Tags: </font><font size="2" color="white"><span  style="background-color:grey;padding-left:3px;padding-right:3px;"><?php echo $_smarty_tpl->tpl_vars['clip']->value['content']['tags'];?>
</span></font></div>
					<?php if ($_smarty_tpl->tpl_vars['clip']->value['canLike']==true||$_smarty_tpl->tpl_vars['clip']->value['canComment']==true){?>
					<div style="margin-top: 5px;"><span class="lbl">&nbsp;
					<?php if ($_smarty_tpl->tpl_vars['clip']->value['canLike']==true){?>
					<i class="icon-thumbs-up-alt bigger-130 " style="color: gray;">  &nbsp; </i>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['clip']->value['canComment']==true){?>
					<i class="icon-comment-alt  bigger-130" style="color: gray;"> &nbsp; </i>
					<?php }?>
					</span></div>
					<?php }?>
   				    
					<div style="margin-top: 10px;"><a href="javascript:deleteFeedItem('<?php echo $_smarty_tpl->tpl_vars['clip']->value['_id'];?>
')" class="btn btn-danger btn-xs" > Delete</a></div>
					<div><a href=""></div>
					</a>
					</div>
					</div>
					
					<?php } ?>
					</div>
				                  		  
					</div><!-- /.page-content -->
					</div><!-- /.main-content -->
				
                        
			
			</div><!-- /.main-container-inner -->

			
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

	

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
       
	 
	    <script src="assets/js/bootstrap.min.js"></script>
	
		<!-- page specific plugin scripts -->
        <script src="assets/js/typeahead-bs2.min.js"></script>
		<script src="assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="assets/js/jquery.sparkline.min.js"></script>
		<script src="assets/js/flot/jquery.flot.min.js"></script>
		<script src="assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.tmpl.min.js"></script>
		<script src="assets/js/jquery.timeago.js"></script>
		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		<script>
		
		$( document ).ready(function() {
		
		   jQuery("abbr.timeago").timeago();
		  
		
	    });
		
		function deleteFeedItem(pItem){
		
		 $("#" + pItem).hide("slow", function() {
         
		  $("#" + pItem).remove();
		 
		
		});
		
		 return false;
		 }
		
		
	
		
		</script>
		<script id="clipTemplate" >
         <div style="margin-bottom:20px;" class="col-xs-4">
		       <a href="/learnnow/app/ui/content-detail.php?content_id=${_id.$id}">
				<div><img src="${clipThumbnailUrl}" width="210" height="158"/></div>
				
				<div><font size="2"><B>${title}</b></font></div>
				<span>3,001 views</span>
				
				</a>
			  
		 
		</div>
		</script>
		<!-- inline scripts related to this page -->
		 
	</body>
</html>
<?php }} ?>