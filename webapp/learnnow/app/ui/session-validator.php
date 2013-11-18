<?php

  if(!isset($_SESSION['username']) || !isset($_SESSION['acct_id']) )
  {
	  header('Location: login.html');
	  die();
  }

  error_log("username is: ".$_SESSION['username']);




?>
