<?php
/**
 * Step 1: Require the Slim Framework
 *
 * If you are not using Composer, you need to require the
 * Slim Framework and register its PSR-0 autoloader.
 *
 * If you are using Composer, you can skip this step.
 */

require 'Slim/Slim.php';
require_once  dirname(__FILE__).'/../app/realtime/database/DatabaseManager.php';
require_once  dirname(__FILE__).'/../app/realtime/content/ContentManager.php';

\Slim\Slim::registerAutoloader();

/**
 * Step 2: Instantiate a Slim application
 *
 * This example instantiates a Slim application using
 * its default settings. However, you will usually configure
 * your Slim application now by passing an associative array
 * of setting names and values into the application constructor.
 */
$app = new \Slim\Slim();

/**
 * Step 3: Define the Slim application routes
 *
 * Here we define several Slim application routes that respond
 * to appropriate HTTP request methods. In this example, the second
 * argument for `Slim::get`, `Slim::post`, `Slim::put`, `Slim::patch`, and `Slim::delete`
 * is an anonymous function.
 */



$app->get('/Clips', function () use ($app){

  $dbMgr = new DatabaseManager();
  $conn = $dbMgr->getConnection();	
  $db = $conn->learnnow;
  $clips = $db->clips; 
  
  $cursor = $clips->find(array(), array("_id" => false)); 
  $tempArr = iterator_to_array($cursor,false);
  error_log("DO NOT GET IT"); 
   
  $conn->close();
  $res = $app->response();
  $res->setStatus(200);
  $res->write(json_encode($tempArr));
  $app->contentType('application/json');
 // header('Content-Type: application/json');
 

});

$app->get('/PopularContent', function () {

  $dbMgr = new DatabaseManager();
  $conn = $dbMgr->getConnection();	
  $db = $conn->learnnow;
  $clips = $db->clips; 
  
  $cursor = $clips->find(array(), array("_id" => 0)); 
  $tempArr = iterator_to_array($cursor,false);

  $conn->close();
  header('Content-Type: application/json');
  echo json_encode($tempArr);

});

// All API Calls from Mobile Apps
$app->get('/Accounts/:domain/Groups', function ($domain){


  $dbMgr = new DatabaseManager();
  $conn = $dbMgr->getConnection();	
  $db = $conn->learnnow;
  $accounts = $db->accounts; 
  
  $cursor = $accounts->find(array("companyInfo.url" => $domain), array("_id" => 0)); 
  
  if($cursor != null){
  
  error_log("cursor is NOT null");
  $tempArr = iterator_to_array($cursor,true);
 
 

  //$companyGroups = $tempArr['0'];
  //$groups = $companyGroups[0];

  $conn->close();

  header('Content-Type: application/json');
  echo json_encode( $tempArr["0"]["companyGroups"]["groups"]);
  }
  else
  {
    log_error("cursor is  null");
  }

});

$app->get('/Accounts/:domain/Groups/:group/Feed', function ($domain){


  $dbMgr = new DatabaseManager();
  $conn = $dbMgr->getConnection();	
  $db = $conn->learnnow;
  $accounts = $db->feeds; 
  
  $cursor = $accounts->find(array("companyInfo.url" => $domain), array("_id" => 0)); 
  
  if($cursor != null){
  
  error_log("cursor is NOT null");
  $tempArr = iterator_to_array($cursor,true);
 
 

  //$companyGroups = $tempArr['0'];
  //$groups = $companyGroups[0];

  $conn->close();

  header('Content-Type: application/json');
  echo json_encode( $tempArr["0"]["companyGroups"]["groups"]);
  }
  else
  {
    log_error("cursor is  null");
  }

});





$app->get('/ClipsArray', function () {

  $tempArr = array("Wisconsin","Wyoming");
  error_log("Fetched the array !");
  header('Content-Type: application/json');
  echo json_encode($tempArr);

});


//Content related stuff
$app->get('/Accounts/:userid/Clips/:clipid', function ($userId,$clipId) {

  $contentMgr = new ContentManager();
  $clip = $contentMgr->findContent($clipId);
  //$tempArr = iterator_to_array($clip,true);
  error_log($clip['xtype']);
  header('Content-Type: application/json');
  echo json_encode($clip);
});



$app->run();

?>
