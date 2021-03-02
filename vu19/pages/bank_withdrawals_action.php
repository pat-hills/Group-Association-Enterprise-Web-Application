<?php
session_start();

require_once './../../class/accountant.php';
 
require_once './../../pdoconn/accountantconfig.php';

$pdo = new PDO(conStringaccountant, dbUseraccountant, dbPassaccountant); 
$date_time  = date('Y-m-d H:i:s');
$now = date("Y-m-d");
$user_id = $_SESSION['userid'];
$created_by =  $_SESSION['email'];
$activity = "Bank Withdrawal Registration";
$summary = "Bank Withrawal Amount Registration Activity Recorded From Device And IP"; 
//$login = filter_input(INPUT_POST, 'submitCreateUser', FILTER_SANITIZE_STRING);

 if(!isset($user_id)){
        header('Location:' . 'r?inv17ml44=logout'); 
 }else
{
$bankname = filter_input(INPUT_POST, 'bankname', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$accountAmount = filter_input(INPUT_POST, 'accountAmount', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$depositor = filter_input(INPUT_POST, 'depositor', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$dateadded = filter_input(INPUT_POST, 'dateadded', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$reason = filter_input(INPUT_POST, 'reason', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);

$month = date('m',strtotime($dateadded));
$year = date('y',strtotime($dateadded));


if($month=="01"){
    $monthcon = "Jan";
}elseif ($month=="02") {
      $monthcon = "Feb";  
   }
elseif ($month=="03") {
      $monthcon = "Mar";  
   }
 elseif ($month=="04") {
      $monthcon = "Apr";  
   } elseif ($month=="05") {
      $monthcon = "May";  
   } elseif ($month=="06") {
      $monthcon = "Jun";  
   } elseif ($month=="07") {
      $monthcon = "Jul";  
   } elseif ($month=="08") {
      $monthcon = "Aug";  
   } elseif ($month=="09") {
      $monthcon = "Sep";  
   } elseif ($month=="10") {
      $monthcon = "Oct";  
   } elseif ($month=="11") {
      $monthcon = "Nov";  
   }elseif ($month=="12") {
      $monthcon = "Dec";  
   }



$stmt = $pdo ->prepare('INSERT INTO bank_withdrawals(u_id,bank_name,amount_withdrawn,withdrawn_by,date_time,month_withdrawn,year_withdrawn,reason,created_by) VALUES
 (:u_id,:bank_name,:amount_deposited,:depositor,:date_time,:month_deposit,:year_deposit,:reason,:created_by)');

$stmt ->bindParam(':u_id', $user_id);
$stmt ->bindParam(':bank_name', $bankname);
$stmt ->bindParam(':amount_deposited', $accountAmount);
$stmt ->bindParam(':depositor', $depositor);
 $stmt ->bindParam(':date_time', $dateadded);
 $stmt ->bindParam(':month_deposit', $monthcon);
 $stmt ->bindParam(':year_deposit', $year);
 $stmt ->bindParam(':reason', $reason);
 $stmt ->bindParam(':created_by', $created_by);

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
  
} else {
     $url = explode('?', $_SERVER['HTTP_REFERER']);
         header('Location:' . $url[0] . '?m=6');    
}}


 