 <?php


 session_start();

 require_once dirname(__FILE__).'/../../smarty/libs/Smarty.class.php';
 require_once dirname(__FILE__).'/../realtime/account/AccountManager.php';


 $acctMgr = new AccountManager();
 
 $acct = $acctMgr->findAccount($_SESSION["username"]);
 
 if($acct != null){
 $acct = json_encode($acct);
 $acct = json_decode($acct);
 error_log("Account is not null");
 
 //messy menu stuff
 $active = array();
 
 $active['dashboard'] = "";
 $active['groups'] = "";
 $active['post'] = "";
 $active['compose'] = "active";
 
 
 $tempEngine = new Smarty();
 $tempEngine->assign("active",$active);

 $tempEngine->assign("navBarColor",$_SESSION['navBarColor']);   
 $tempEngine->assign("name",$acct->companyInfo->name); 
 $tempEngine->assign("groups",$acct->companyGroups->groups);
 $tempEngine->assign("domain",$acct->companyInfo->url);
 $_SESSION['domain'] = $acct->companyInfo->url;
 
 error_log("Domain set is :".$acct->companyInfo->url);
  
 $tempEngine->display("compose.html");
 
}

?>
