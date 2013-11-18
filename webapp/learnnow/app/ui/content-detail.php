 <?php


 session_start();

 require_once dirname(__FILE__).'/../../smarty/libs/Smarty.class.php';
 require_once dirname(__FILE__).'/../realtime/account/AccountManager.php';
 require_once dirname(__FILE__).'/../realtime/content/ContentManager.php';
 require_once dirname(__FILE__).'/../realtime/account/ActivationResultCode.php';

 
 $clipId = $_GET['content_id']; 
 
 $acctMgr = new AccountManager();
 $url = "";
 $fullscreen = "";
 $scrolling = "no";
 
 $acct = $acctMgr->findAccount($_SESSION["username"]);
 
 if($acct != null){
 $acct = json_encode($acct);
 $acct = json_decode($acct);
 error_log("Content id is ".$clipId);
 
 
 //messy menu stuff
 $active = array();
 
 $active['dashboard'] = "";
 $active['groups'] = "";
 $active['post'] = "";
 $active['compose'] = "";
 
 
 
 $tempEngine = new Smarty();
 $tempEngine->assign("active",$active);
 $tempEngine->assign("navBarColor",$acct->companyStyle->navBarColor);   
 $tempEngine->assign("name",$acct->companyInfo->name); 
 $tempEngine->assign("groups",$acct->companyGroups->groups);
 
 $contentMgr = new ContentManager();
 $clip = $contentMgr->findContent($clipId);
 
 error_log("Clip is".json_encode($clip));
 
 $groupsSentClip = $contentMgr->findGroupsFedWithContent($clipId,$_SESSION['domain']);
 
 error_log("Groups already sent are :".json_encode($groupsSentClip));
 
 $tempEngine->assign("url",$clip['contentUrl']);
 $tempEngine->assign("title",$clip['title']);
 $tempEngine->assign("scroll","no"); 
 $tempEngine->assign("fullscreen",""); 
 $tempEngine->assign("scroll","no"); 
 $tempEngine->assign("contentId",$clipId); 
 $tempEngine->assign("groupsSentClip",$groupsSentClip); 
 
 if($clip['xtype'] == "html5") {
  $tempEngine->assign("fullscreen","/fullscreen#/");
  }
  else if($clip['xtype'] == "blog"){
   $tempEngine->assign("scroll","yes"); 
  }
  else if($clip['xtype'] == "youtube"){
  //$tempEngine->assign("url","http://www.youtube.com/embed/".$clip['url']);
  
  }
 
  error_log($clip['xtype']);
  error_log($clip['contentUrl']);
 $tempEngine->display("content-detail.html");
 
}

?>
