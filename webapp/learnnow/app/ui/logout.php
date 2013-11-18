<?php

          session_start();
          foreach(array_keys($_SESSION) as $k) 
	      unset($_SESSION[$k]);
           
          session_destroy();
          
          header('Location: login.html');          
	  die();

?>

