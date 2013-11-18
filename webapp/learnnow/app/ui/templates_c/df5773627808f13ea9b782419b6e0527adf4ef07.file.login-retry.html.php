<?php /* Smarty version Smarty-3.1.14, created on 2013-10-26 12:51:54
         compiled from "login-retry.html" */ ?>
<?php /*%%SmartyHeaderCode:5190526bbaeaef75d7-21977900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df5773627808f13ea9b782419b6e0527adf4ef07' => 
    array (
      0 => 'login-retry.html',
      1 => 1378792825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5190526bbaeaef75d7-21977900',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'email' => 0,
    'errorMsg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526bbaeb1283a6_75684633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526bbaeb1283a6_75684633')) {function content_526bbaeb1283a6_75684633($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="description" content="description of your site">
    <meta name="author" content="author of the site">
    <title>IndustryApp Template</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
 
   
    <script type="text/javascript">

    function getURLParameter(name) {
      return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null
   }
    


    $(function() {

    var errorMsg = getURLParameter('error_msg');

    if(errorMsg != null){
     $('#errorMsg').addClass('alert alert-error');
      $('#errorMsg').html(errorMsg);
    }

    $('#loginButton').on('click', function doLogin(){
 
	    alert('Login now');
            /*Do input validation of username and password -TODO*/ 
              
            



	    });
    });


    </script>
  </head>
  <body>
    <div id="in-nav">
      <div class="container">
        <div class="row">
          <div class="span12">
            <ul class="pull-right">
            </ul>
              <h4><strong>Kymi</strong></h4>
          </div>
        </div>
      </div>
    </div>
<div class="container">
  <div class="row">
    <div class="span6 offset2">
      <div class="login">
        <form class="form-horizontal" method="post" action="/app/admin/login.php">
          <div class="control-group">
            <div class="controls">
              <h4>Login</h4>
            </div>
          </div>
          <div class="control-group">
            <label for="inputEmail" class="control-label">Email </label>
            <div class="controls">
		    <input id="inputEmail" name="inputEmail" type="text" placeholder="Email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/>
            </div>
          </div>
          <div class="control-group">
            <label for="inputPassword" class="control-label">Password </label>
            <div class="controls">
              <input id="inputPassword" name="inputPassword" type="password" placeholder="Password"/>
            </div>
          </div>
	  <div class="control-group"> 
            <div class="controls">		  
           <button type="submit" class="btn btn-primary">
            <i class="icon-user icon-white"></i> Sign in
            </button>
          </div>
         </div>
         <div class="control-group"> 
	  <div class="controls">
          <?php if (isset($_smarty_tpl->tpl_vars['errorMsg']->value)){?>
           <div id="errorMsg" class="alert alert-error">Sorry, you have entered a Wrong username or password, please try again!</div>
           </div>
          <?php }?>
	   		  
             
          </div>
          </div> 
        
  </form>
      </div>
    </div>
  </div>
</div>
  </body><script></script>
</html>
<?php }} ?>