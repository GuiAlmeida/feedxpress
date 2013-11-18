<?php /* Smarty version Smarty-3.1.14, created on 2013-11-11 08:49:42
         compiled from "content-detail.html" */ ?>
<?php /*%%SmartyHeaderCode:13974526ca1b9792c95-78620090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '585fb22424533a8291d7b71c8fe2367d28e37837' => 
    array (
      0 => 'content-detail.html',
      1 => 1384159781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13974526ca1b9792c95-78620090',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526ca1b9888e59_21970851',
  'variables' => 
  array (
    'name' => 0,
    'navBarColor' => 0,
    'groups' => 0,
    'title' => 0,
    'url' => 0,
    'fullscreen' => 0,
    'scroll' => 0,
    'contentId' => 0,
    'group' => 0,
    'groupsSentClip' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526ca1b9888e59_21970851')) {function content_526ca1b9888e59_21970851($_smarty_tpl) {?><!DOCTYPE html>
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
		<link rel="stylesheet" href="assets/css/chosen.css" />

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
								<a href="#">Content</a>
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
					 
					 <h4> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </h4>
					<div class="hr hr16 hr-dotted"></div>
					  <div class="row">
						<div class="col-xs-7" >
								<!-- PAGE CONTENT BEGINS -->
								
                                <iframe id="slideshow_frame" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['fullscreen']->value;?>
" frameborder="0" width="100%" height="400px" marginheight="0" marginwidth="0"  scrolling="<?php echo $_smarty_tpl->tpl_vars['scroll']->value;?>
">
								<i class="icon-spinner icon-spin orange bigger-125"></i>
								</iframe>
							    <div >Views 3000 | like 250</div>
								
								<!-- PAGE CONTENT ENDS -->
						</div><!-- /.col -->
						
						    <div class="col-xs-5 " style="box-sizing:border-box;">
							<form class="form form-vertical " role="form" name="content-form" id="content-form" method="POST" action="/learnnow/app/ui/forms/postFeedItem.php">
														
							   <div class="form-group">
							      <input type="hidden" name="contentId" id="contentId" value="<?php echo $_smarty_tpl->tpl_vars['contentId']->value;?>
">
								  <label class="" for=""><h5>Select Group(s)</h5></label>
								  <div class="hr hr8 hr-dotted"></div>
								 
								   <select multiple="" class="width-80 chosen-select tag-input-style" name="groups[]" class="col-xs-9 " id="groups[]" style="margin-top:5px;" data-placeholder="Choose the Groups...">
									<option value="">&nbsp;</option>
									<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['group']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value;?>
</option>
									<?php } ?>
 							       </select>
																			
							   </div>
							  
								<div class="form-group">
								 <div class="">
									<label class="" ><h5>Post Options</h5></label>
									<div class="hr8 hr  hr-dotted"></div>
									<div class="checkbox">
										<label>
											<input id="canLike" name="canLike" type="checkbox" class="ace ace-checkbox-2" value="off"/>
											<span class="lbl">&nbsp;&nbsp;&nbsp;<i class="icon-thumbs-up-alt  "> &nbsp; </i>Show Like options to users  ? </span>
										</label>
									</div>
									<div class="checkbox">
										<label>
										    <input id="canComment" name="canComment" type="checkbox" class="ace ace-checkbox-2" value="off"/>
											<span class="lbl">&nbsp;&nbsp;&nbsp;<i class="icon-comment-alt"> &nbsp; </i>Allow Comments  ? </span>
										</label>
									</div>
								</div>
                               </div>
							   <div class="form-group">
								  <label class="col-sm-3 control-label no-padding" for=""></label>
									<div class="col-sm-9">
										<button class="btn btn-primary">Publish</button>
									 </div>
							   </div>
							   	
							   <div class="clearfix"/><br/>
							   <div class="form-group">
							   <div class="hr8 hr  hr-dotted"></div>
							    <div style="margin-bottom: 5px;"> Published in group(s): </div>
								<div style="">
								<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groupsSentClip']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
									<span class="badge badge-grey" style="margin-bottom:8px;"><font size="2"><?php echo $_smarty_tpl->tpl_vars['group']->value['companyGroup'];?>
</font></span>
								<?php } ?>
								</div>
								<div class="hr8 hr  hr-dotted"></div>
								</div>
								
							   <div class="form-group">
								  <label class="col-sm-9 control-label " for=""></label>
									<div class="col-sm-9" id="content-submit-status">
										
									 </div>
							   </div>	
							   
							 
							    
								
							  					
							  
							</form>
							 
							</div>
					  </div><!-- /.row -->
					 

					</div>
					
				 </div>
					<div class="hr hr4 hr-dotted"></div>
					<a class="btn col-sm-1" style="margin:10px;" href="/learnnow/app/ui/dashboard.php"><i class="icon-circle-arrow-left bigger-120"></i>Back</a>

                    <div class="row">				
					 <div id="content" class="col-sm-12" style="min-height:500px;"> 
					 
					 </div>
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
		<script src="assets/js/jquery.tmpl.min.js"></script>
		<script src="assets/js/chosen.jquery.min.js"></script>
		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		<script>
		
		$( document ).ready(function() {
		
		  $(".chosen-select").chosen();
          
		  var $form = $('#content-form');
		  $form.on('submit', function() {		  
		   
		   $("#content-submit-status").html("<center><i class=\"icon-spinner icon-spin orange bigger-200\"></i> <span><font size=\"3\">Submitting Content...</font></span></center>");
		   serializedData = $(this).serialize();
		   
		    // fire off the request to /form.php
			request = $.ajax({
				url: "/learnnow/app/ui/forms/postFeedItem.php",
				type: "POST",
				data: serializedData,
				
			});

			// callback handler that will be called on success
			request.done(function (response, textStatus, jqXHR){
				// log a message to the console
				 data = JSON.parse(response);
				 
				 if(data.code == "200"){
				  
				  $("#content-submit-status").html("<center><i class=\"icon-check-sign orange bigger-170\"></i><span><font size=\"3\">&nbsp;&nbsp;Content submitted</font></span></center>");
				  
				 }
				 else
				 {
				    $("#content-submit-status").html("<center><i class=\" orange bigger-170\"></i><span><font size=\"3\">&nbsp;&nbsp;"+data.statusCode+"</font></span></center>");
				 }
			});

			// callback handler that will be called on failure
			request.fail(function (jqXHR, textStatus, errorThrown){
				// log the error to the console
				alert(
					"The following error occured: "+
					textStatus, errorThrown
				);
		   
		   });
		   
		   
		   
		    return false;
		
		  });
		
		
	     });
		
	
		
		
		</script>
		
		<!-- inline scripts related to this page -->
		 
	</body>
</html>
<?php }} ?>