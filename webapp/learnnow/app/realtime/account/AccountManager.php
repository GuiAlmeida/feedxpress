<?php
  require_once 'Account.php';
  require_once 'AccountSettings.php';
  require_once 'AccountStatus.php';
  require_once 'ActivationResultCode.php';
 
  require_once  dirname(__FILE__).'/../database/DatabaseManager.php';


  class AccountManager{

  
  function AccountManager(){

  }	  



  function createTrialAccount($pCompany){

   $activationStatus = "";
   $resultCode = new ActivationResultCode(); 
   error_log("entering createTrialAccount");

   $dbManager = new DatabaseManager();
   $connection =$dbManager->getConnection(); 
   $db = $connection->learnnow;
   $accounts = $db->accounts;
   
   $query =(array('$or' => array(array("companyInfo.name" => $pCompany->companyInfo->name), array("companyInfo.url" => $pCompany->companyInfo->url))));
   
   $my_account = $accounts->findOne($query);
   
   if($my_account == null){
   
     $accounts->save($pCompany);
	 $resultCode->setData("200","OK");
	  error_log("saving new account");
   }
   else
   {
	    error_log("Account already exists");	
   }
   
   

   $connection->close();
   return $resultCode;

  }

   function findAccount($pUsername){

    $account=null;
    $dbManager = new DatabaseManager();
    $conn = $dbManager->getConnection();
    $db= $conn->learnnow;
    $result = $db->accounts->findOne(array("companyInfo.contactEmail" => $pUsername) );

    if($result != null){
     $account = $result;
    } 

    $conn->close();
    return $account;
  }

  function isValidGroup($pDdomain,$pGroup){
    /*TODO: Validation*/
    return true;
  
  }
 
 
 

  }

    
?>
