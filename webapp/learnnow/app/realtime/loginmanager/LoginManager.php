<?php

  
  require_once dirname(__FILE__).'/../database/DatabaseManager.php';

  class LoginManager{

   function LoginManager(){


   }

   function authenticate($pLogin,$pPassword){

    $auth = false;	   

    $dbManager = new DatabaseManager();
    $conn = $dbManager->getConnection();
    $db= $conn->learnnow;
    $result = $db->accounts->find(array("companyInfo.contactEmail" => $pLogin,"companyInfo.password" => $pPassword) );
    if($result->count() == 1){

	    $auth = true;
    }
    
   return $auth;
   }

  }	






?>
