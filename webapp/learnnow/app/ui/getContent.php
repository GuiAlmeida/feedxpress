 <?php
 
    session_start();
	
	require_once dirname(__FILE__).'/../../smarty/libs/Smarty.class.php';
    require_once dirname(__FILE__).'/../realtime/content/ContentManager.php';
	require_once dirname(__FILE__).'/../realtime/account/AccountManager.php';
   
    $clips = array();
  
	$acctMgr = new AccountManager();
 
	$acct = $acctMgr->findAccount($_SESSION["username"]);
 
	 if($acct != null ){
	 
	  $contentMgr = new ContentManager();
	  $clips = $contentMgr->getLatestUploadedContent();
	  
	
   }
   
   echo json_encode($clips); 
 
?>