<?php /* Smarty version Smarty-3.1.14, created on 2013-11-10 09:40:30
         compiled from "dashboard.html" */ ?>
<?php /*%%SmartyHeaderCode:252575263c78ebfe540-57007211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '146d0956a4adb5530794548d0fdb7d57e03e777a' => 
    array (
      0 => 'dashboard.html',
      1 => 1384076429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252575263c78ebfe540-57007211',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5263c78ec67cd6_08099214',
  'variables' => 
  array (
    'name' => 0,
    'navBarColor' => 0,
    'groups' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5263c78ec67cd6_08099214')) {function content_5263c78ec67cd6_08099214($_smarty_tpl) {?><!DOCTYPE html>
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
		.navbar-color-class { color: <?php echo $_smarty_tpl->tpl_vars['navBarColor']->value;?>
;}
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
								Dashboard
								<small>
									<i class="icon-double-angle-right"></i>
									
								</small>
							</h1>
					</div><!-- /.page-header -->
					<div class="page-content" >
					<div class="row">
					<div class="space-6"></div>

								
					<div class="col-sm-12">		
						
						<div class="col-sm-5">
										<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5>
													<i class="icon-signal"></i>
													Stats by Group
												</h5>

												<div class="widget-toolbar no-border">
													<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
														This Week
														<i class="icon-angle-down icon-on-right bigger-110"></i>
													</button>

													<ul class="dropdown-menu pull-right dropdown-125 dropdown-lighter dropdown-caret">
														<li class="active">
															<a href="#" class="blue">
																<i class="icon-caret-right bigger-110">&nbsp;</i>
																This Week
															</a>
														</li>

														<li>
															<a href="#">
																<i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
																Last Week
															</a>
														</li>

														<li>
															<a href="#">
																<i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
																This Month
															</a>
														</li>

														<li>
															<a href="#">
																<i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
																Last Month
															</a>
														</li>
													</ul>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div id="piechart-placeholder"></div>

													<div class="hr hr8 hr-double"></div>

													<div class="clearfix">
														<div class="grid3">
															<span class="grey">
																<i class="icon-facebook-sign icon-2x blue"></i>
																&nbsp; likes
															</span>
															<h4 class="bigger pull-right">1,255</h4>
														</div>

														<div class="grid3">
															<span class="grey">
																<i class="icon-twitter-sign icon-2x purple"></i>
																&nbsp; tweets
															</span>
															<h4 class="bigger pull-right">941</h4>
														</div>

														<div class="grid3">
															<span class="grey">
																<i class="icon-pinterest-sign icon-2x red"></i>
																&nbsp; pins
															</span>
															<h4 class="bigger pull-right">1,050</h4>
														</div>
													</div>
												</div><!-- /widget-main -->
											</div><!-- /widget-body -->
										</div><!-- /widget-box -->
									</div><!-- /span -->
									<div class="vspace-sm"></div>

							<div class="col-sm-7 infobox-container">
									<div class="infobox infobox-green  ">
										<div class="infobox-icon">
											<i class="icon-envelope bigger-300"></i>
										</div>

										<div class="infobox-data">
											<span class="infobox-data-number">32</span>
											<div class="infobox-content">posts</div>
										</div>
										<div class="stat stat-success">8%</div>
									</div>

									<div class="infobox infobox-blue  ">
										<div class="infobox-icon">
											<i class="icon-user bigger-300"></i>
										</div>

										<div class="infobox-data">
											<span class="infobox-data-number">11</span>
											<div class="infobox-content">new registrations</div>
										</div>

										<div class="badge badge-success">
											+32%
											<i class="icon-arrow-up"></i>
										</div>
									</div>

									<div class="infobox infobox-pink  ">
										<div class="infobox-icon">
											<i class="icon-thumbs-up"></i>
										</div>

										<div class="infobox-data">
											<span class="infobox-data-number">8</span>
											<div class="infobox-content">likes</div>
										</div>
										<div class="stat stat-important">4%</div>
									</div>

									<div class="infobox infobox-red  ">
										<div class="infobox-icon">
											<i class="icon-eye-open"></i>
										</div>

										<div class="infobox-data">
											<span class="infobox-data-number">700</span>
											<div class="infobox-content">content views</div>
										</div>
									</div>
                                </div>
						
					</div>	
					
					<div class="hr hr32 hr-dotted col-sm-12"></div>
					<h4>Popular content</h4>
					<div class="col-sm-12">
				    <div id="content" style="margin-top:30px;">
					</div>
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
		<script src="assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="assets/js/jquery.sparkline.min.js"></script>
		<script src="assets/js/flot/jquery.flot.min.js"></script>
		<script src="assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.tmpl.min.js"></script>
		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		<script>
		
		var g_data; //bad ;-)
		
		$( document ).ready(function() {
		
		   
		    var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "ALS",  data: 38.7, color: "#68BC31"},
				{ label: "BTC",  data: 24.5, color: "#2091CF"},
				{ label: "Testing Services",  data: 8.2, color: "#AF4E96"},
				{ label: "BIM",  data: 18.6, color: "#DA5430"},
				{ label: "HR",  data: 10, color: "#FEE074"},
				{ label: "Finance",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			 setTimeout('getPopularContent()',1000);
			 
			 
			 
		
	    });
		
		function getPopularContent(){
		
		
		 $.ajax({
			type: "GET",
			url: "/learnnow/app/ui/getContent.php",
            dataType: "json",			
			error: function(XMLHttpRequest, textStatus, errorThrown){
				alert("Status: " + textStatus); 
				alert("Error: " + errorThrown);
			},
			success: function(data){
              var id="";
		     //alert(JSON.stringify(data));
			 if(data){
              
			    g_data = data; // bad ;-), need to avoid globals
				for(i = 0; i < data.length; i++) {
			     id = Math.floor(Math.random()*10000)+1;
				 $("#content").append("<div class=\"col-xs-12\" id=\""+id+"\">");
			     i = append4Clips(data,i,id);
				}
				
				
				
			
			    //$("#clipTemplate").tmpl(data).appendTo("#content");
			  }	     
            //setTimeout('getPopularContent()',3000);
            return true;   
           }});
		
		
		
		
		}
		
		function append4Clips(data,i,id){
		 var counter = 0;
		 
		 for(j=i; j < data.length; j++){
		 
		   $("#clipTemplate").tmpl(data[j]).appendTo("#"+id);
		   counter++;
		   
		   if(counter == 4)
		   break;
		   
		 }
		
		 return j;
		}
		
		</script>
		<script id="clipTemplate" >
         <div style="margin-bottom:20px;" class="col-xs-3">
		       <a href="/learnnow/app/ui/content-detail.php?content_id=${_id.$id}">
				<div><img src="${clipThumbnailUrl}" width="180" height="158"/></div>
				
				<div><font size="2"><B>${title}</b></font></div>
				<span>3,000 views</span>
				</a>
			  
		 
		</div>
		</script>
		<!-- inline scripts related to this page -->
		 
	</body>
</html>
<?php }} ?>