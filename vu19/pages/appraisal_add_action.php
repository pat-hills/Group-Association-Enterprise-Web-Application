<?php
session_start();

require_once './../../class/accountant.php';
 
require_once './../../pdoconn/accountantconfig.php';

$pdo = new PDO(conStringaccountant, dbUseraccountant, dbPassaccountant); 
$date_time  = date('Y-m-d H:i:s');
$now = date("Y-m-d");
$user_id = $_SESSION['userid'];
$created_by =  $_SESSION['email'];
$activity = "Member Appraisal Registration";
$summary = "Member Appraisal Registration Activity Recorded From Device And IP"; 
//$login = filter_input(INPUT_POST, 'submitCreateUser', FILTER_SANITIZE_STRING);

$now = date("Y-m-d");
$d = date("Y");
$m= date("m");
$member_id =  $_SESSION['member_id'];
 
 


 if(!isset($user_id)){
        header('Location:' . 'r?inv17ml44=logout'); 
 }else
{

         
  $appraisal = filter_input(INPUT_POST, 'appraisal', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
 
             //$url = md5($code);
             $stmt = $pdo ->prepare('INSERT INTO member_appraisal(u_id,member_id,appraisal,date_recorded,created_by) VALUES '
           . ' (:u_id,:member_id,:appraisal,:date_recorded,:created_by)');
      $stmt ->bindParam(':u_id', $user_id);
      $stmt ->bindParam(':member_id', $member_id);
      $stmt ->bindParam(':appraisal', $appraisal);
      $stmt ->bindParam(':date_recorded', $now);
      $stmt ->bindParam(':created_by', $created_by);
      
   
        //    if($stmt->execute()){
        //      $this->saveMessageac();
        //      echo "<script>window.location='pages/r?inv17ml4=members_payment_list'</script>";
        //      return true;
       
        //  }else{
        //      $this->msg = 'Payment Failed.';
        //      return false;
        //  }   


 $stmtb = $pdo ->prepare('INSERT INTO task_timeliness(u_id,task,summary,date_of_task,datetime_of_task,created_by)VALUES
 (:u_id,:task,:summary,:date_of_task,:datetime_of_task,:created_by)');
$stmtb ->bindParam(':u_id', $_SESSION['userid']);
$stmtb ->bindParam(':task', $activity);
$stmtb ->bindParam(':summary', $summary);
  $stmtb ->bindParam(':date_of_task', $now);
$stmtb ->bindParam(':datetime_of_task', $date_time);
$stmtb ->bindParam(':created_by', $_SESSION['email'] );
$stmtb->execute();

if($stmt->execute()){
  $url = explode('?', $_SERVER['HTTP_REFERER']);
  header('Location:' . $url[0] . '?m=5');    

  //  $accountant->saveMessageac();
  //     echo "<script>window.location='r?inv17ml4=members_payment_list'</script>";
       return true;
  
} else {
     $url = explode('?', $_SERVER['HTTP_REFERER']);
         header('Location:' . $url[0] . '?m=6');    
}}


 