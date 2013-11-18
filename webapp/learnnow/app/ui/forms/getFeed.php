 <?php
 
    session_start();
	require_once dirname(__FILE__).'/../../smarty/libs/Smarty.class.php';
    require_once dirname(__FILE__).'/../../realtime/content/ContentManager.php';
	require_once dirname(__FILE__).'/../../realtime/account/AccountManager.php';
   
    $clips = array();
    $group = $_GET['group'];
	

	
	$acctMgr = new AccountManager();
 
	$acct = $acctMgr->findAccount($_SESSION["username"]);
 
	 if($acct != null && $acctMgr->isValidGroup($_SESSION['domain'],$group) == true){
	 
	 $acct = json_encode($acct);
	 $acct = json_decode($acct);
	 error_log("Account is not null");
	 $tempEngine = new Smarty();

	 $tempEngine->assign("navBarColor",$_SESSION['navBarColor']);   
	 $tempEngine->assign("group",$group);   
	 $tempEngine->assign("name",$acct->companyInfo->name); 
	 $tempEngine->assign("groups",$acct->companyGroups->groups);
	 $tempEngine->assign("domain",$acct->companyInfo->url);
	 $_SESSION['domain'] = $acct->companyInfo->url;
	
	
		$contentMgr = new ContentManager();
		$clips = $contentMgr->findFeedForGroup($_SESSION['domain'],$group);
		
		
	 $tempEngine->display("group-get-feed.html");
	
	
   }
   
    
 
?>