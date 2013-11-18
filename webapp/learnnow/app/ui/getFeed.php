 <?php
 
    session_start();
	
	require_once dirname(__FILE__).'/../../smarty/libs/Smarty.class.php';
    require_once dirname(__FILE__).'/../realtime/content/ContentManager.php';
	require_once dirname(__FILE__).'/../realtime/account/AccountManager.php';
   
    $clips = array();
    $group = $_GET['group'];
	
     error_log("Domain from Session is: ".$_SESSION['domain']);
	 error_log("Group is: ".$group);
	
	$acctMgr = new AccountManager();
 
	$acct = $acctMgr->findAccount($_SESSION["username"]);
 
	 if($acct != null && $acctMgr->isValidGroup($_SESSION['domain'],$group) == true){
	 
	 $acct = json_encode($acct);
	 $acct = json_decode($acct);
	 error_log("Account is not null");
	 
	$contentMgr = new ContentManager();
	$clips = $contentMgr->findFeedForGroup($_SESSION['domain'],$group);
	
	
	//messy menu stuff
	$active = array();
	$active['dashboard'] = "";
	$active['groups'] = "active";
	$active['post'] = "";
	$active['compose'] = "";
 
 
	$tempEngine = new Smarty();
	$tempEngine->assign("active",$active);

	$tempEngine->assign("navBarColor",$_SESSION['navBarColor']);   
	$tempEngine->assign("group",$group);   
	$tempEngine->assign("clips",$clips);   
	$tempEngine->assign("name",$acct->companyInfo->name); 
	$tempEngine->assign("groups",$acct->companyGroups->groups);
	$tempEngine->assign("domain",$acct->companyInfo->url);
	$_SESSION['domain'] = $acct->companyInfo->url;
	
	 $tempEngine->display("group-get-feed.html");
	
	
   }
   
    
 
?>