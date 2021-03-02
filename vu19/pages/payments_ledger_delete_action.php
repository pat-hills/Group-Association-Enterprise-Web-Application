<?php
session_start();

require_once './../../class/accountant.php';
 
require_once './../../pdoconn/accountantconfig.php';

$pdo = new PDO(conStringaccountant, dbUseraccountant, dbPassaccountant); 
$date_time  = date('Y-m-d H:i:s');
$now = date("Y-m-d");
$user_id = $_SESSION['userid'];
$created_by =  $_SESSION['email'];
$activity = "Member Payment Delete";
$summary = "Member Payment Delete Activity Recorded From Device And IP"; 
//$login = filter_input(INPUT_POST, 'submitCreateUser', FILTER_SANITIZE_STRING);

$now = date("Y-m-d");
$d = date("Y");
$m= date("m");
$member_id =  $_SESSION['member_id'];
 
 


 if(!isset($user_id)){
        header('Location:' . 'r?inv17ml44=logout'); 
 }else
{

         
  $amountpadi = filter_input(INPUT_POST, 'amountpadi', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
  $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
  $mop = filter_input(INPUT_POST, 'mop', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
   $paidby = filter_input(INPUT_POST, 'paid_by', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
  $chequenumber = filter_input(INPUT_POST, 'chequenumber', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
  $code = $m."00".$d.$accountant->gen_verification_code().$member_id.$m;
             //$url = md5($code);


   $stmt = $pdo->prepare("UPDATE fee_payments SET deleted = :deleted WHERE u_id = :u_id AND id =:id");
     
    $deleted = "YES"; 
     
  
     
      $stmt ->bindParam(':deleted', $deleted);
      $stmt ->bindParam(':u_id', $user_id);
      $stmt ->bindParam(':id', $id);


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
//  $url = explode('?', $_SERVER['HTTP_REFERER']);
header('Location:' . 'r?inv17ml44=members_payment_list');    

  //  $accountant->saveMessageac();
  //     echo "<script>window.location='r?inv17ml4=members_payment_list'</script>";
       return true;
  
} else {
     $url = explode('?', $_SERVER['HTTP_REFERER']);
         header('Location:' . $url[0] . '?m=6');    
}}


 