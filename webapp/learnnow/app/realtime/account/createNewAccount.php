<?php

  require_once 'Account.php';
  require_once 'AccountStatus.php';
  require_once 'ActivationResultCode.php';
  require_once '../sms/SMSManager.php';
  require_once '../database/DatabaseManager.php';
  require_once '../account/PhoneNumber.php';
  require_once dirname(__FILE__).'/../smarty/libs/Smarty.class.php';
  require_once dirname(__FILE__).'/../realtime/account/AccountManager.php';

  $name="";
  $email = $_POST['email'];
  $password = $_POST['password'];
  $mobile = $_POST['mobile'];
  $location = $_POST['location'];
  $countryCode = $_POST['country'];


  //post parameters, update Android code to send name - TODO
  if(isset($_POST['name'])){
     $name = $_POST['name'];
  }
 

  error_log($email);
  error_log($password);
  error_log($mobile);
  error_log($countryCode);
  error_log($location);

  $acctManager = new AccountManager();
  $resultCode = $acctManager->createTrialAccount($name,$email,$password,$mobile,$countryCode,$location);
  
  if($resultCode->code == 200){
    
   session_start();
   $acct = $acctManager->findAccount($username); 

   $_SESSION['username']=$username;  
   $_SESSION['acct_id']= $acct['_id']->{'$id'};  
          
   header('Location: numbers-kymi.php');          
   die();
 
  } 
   
 
  
  header('Content-type: application/json');
  echo json_encode($resultCode);

?>

