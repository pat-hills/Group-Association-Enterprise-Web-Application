<?php
session_start();

require_once './../../class/accountant.php';
require_once './../../class/SMS.php';
 
require_once './../../pdoconn/accountantconfig.php';
require_once './../../class/ToWords.php';

require_once './../../class/user.php';
 
require_once './../../pdoconn/config.php';

$pdo = new PDO(conStringaccountant, dbUseraccountant, dbPassaccountant); 
$date_time  = date('Y-m-d H:i:s');
$now = date("Y-m-d");
$user_id = $_SESSION['userid'];
$created_by =  $_SESSION['email'];
$activity = "Member Password Change";
$summary = "Member Password Change Activity Recorded From Device And IP"; 
//$login = filter_input(INPUT_POST, 'submitCreateUser', FILTER_SANITIZE_STRING);

$now = date("Y-m-d");
$d = date("Y");
$m= date("m");
$member_id =  $_SESSION['member_id'];
 
//change_password_finance 


 if(!isset($user_id)){
        header('Location:' . 'r?inv17ml44=logout'); 
 }else
{



  $newpassword = filter_input(INPUT_POST, 'newpassword', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
   $confirmnewpassword = filter_input(INPUT_POST, 'confirmnewpassword', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
  
   if($newpassword != $confirmnewpassword){

    $url = explode('?', $_SERVER['HTTP_REFERER']);
    header('Location:' . $url[0] . '?m=1');    

   }else {


   $hash_pass = $user->password_encrypt($confirmnewpassword);
  
   $stmtp = $pdo->prepare("UPDATE tbl_sub_user SET pass = :pass WHERE email = :created_by");

  
   $stmtp ->bindParam(':pass', $hash_pass,PDO::PARAM_STR);
   $stmtp ->bindParam(':created_by', $created_by,PDO::PARAM_STR);
   $stmtp->execute();

    $stmtb = $pdo ->prepare('INSERT INTO task_timeliness(u_id,task,summary,date_of_task,datetime_of_task,created_by)VALUES
    (:u_id,:task,:summary,:date_of_task,:datetime_of_task,:created_by)');
   $stmtb ->bindParam(':u_id', $_SESSION['userid']);
   $stmtb ->bindParam(':task', $activity);
   $stmtb ->bindParam(':summary', $summary);
     $stmtb ->bindParam(':date_of_task', $now);
   $stmtb ->bindParam(':datetime_of_task', $date_time);
   $stmtb ->bindParam(':created_by', $_SESSION['email'] );
   $stmtb->execute();


   if($stmtp->execute() && $stmtb->execute()){
    $url = explode('?', $_SERVER['HTTP_REFERER']);
    header('Location:' . $url[0] . '?m=6');    

} else {
  $url = explode('?', $_SERVER['HTTP_REFERER']);
      header('Location:' . $url[0] . '?m=6');    
}

   }

  

}







 