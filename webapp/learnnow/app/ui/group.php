 <?php


 session_start();

 require_once dirname(__FILE__).'/../../smarty/libs/Smarty.class.php';
 require_once dirname(__FILE__).'/../realtime/account/AccountManager.php';

 $groupName = $_GET['group_name'];
 
 $acctMgr = new AccountManager();
 
 $acct = $acctMgr->findAccount($_SESSION["username"]);
 
 if($acct != null){
 $acct = json_encode($acct);
 $acct = json_decode($acct);
 error_log("Account is not null");
 $tempEngine = new Smarty();

 $tempEngine->assign("navBarColor",$acct->companyStyle->navBarColor);   
 $tempEngine->assign("name",$acct->companyInfo->name); 
 $tempEngine->assign("groups",$acct->companyGroups->groups);
 $tempEngine->assign("groupName",$groupName);
  
 $tempEngine->display("group.html");
 
}

?>