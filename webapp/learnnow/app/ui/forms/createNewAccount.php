
  

<?php



  /*Creating the Company account, this is not for the Emloyees/ Members of an Organisation, this is for the 
    Company as a whole to create the Account with us*/
	
  require_once  dirname(__FILE__).'/../../realtime/account/Account.php';
  require_once  dirname(__FILE__).'/../../realtime/account/AccountStatus.php';
  require_once  dirname(__FILE__).'/../../realtime/account/ActivationResultCode.php';
  require_once  dirname(__FILE__).'/../../realtime/database/DatabaseManager.php';
  require_once  dirname(__FILE__).'/../../realtime/account/AccountManager.php';

  
  $compInfo = $_POST['compInfo'];
  
  error_log($compInfo);

  
  
  $company =  json_decode($compInfo);
 
  $acctMgr = new AccountManager();
  $resultCode = $acctMgr->createTrialAccount($company);
  
  if($resultCode->code == "200"){
  
    //start a session
	session_start();
	$_SESSION['url']=$company->companyInfo->url; 
    $_SESSION['username']=$company->companyInfo->contactEmail; 
	$_SESSION['navBarColor'] = $company->companyStyle->navBarColor;
  }
  
  
  
  echo json_encode($resultCode);
   
?>


