<?php
session_start();

require_once './../../class/accountant.php';
 
require_once './../../pdoconn/accountantconfig.php';

$pdo = new PDO(conStringaccountant, dbUseraccountant, dbPassaccountant); 
$date_time  = date('Y-m-d H:i:s');
$now = date("Y-m-d");
$user_id = $_SESSION['userid'];
$created_by =  $_SESSION['email'];
$activity = "Income Expenditure Registration";
$summary = "Income & Expense Amount Registration Activity Recorded From Device And IP"; 
//$login = filter_input(INPUT_POST, 'submitCreateUser', FILTER_SANITIZE_STRING);

 if(!isset($user_id)){
        header('Location:' . 'r?inv17ml44=logout'); 
 }else
{
$accountitem = filter_input(INPUT_POST, 'accountitem', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$accountAmount = filter_input(INPUT_POST, 'accountAmount', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$dateadded = filter_input(INPUT_POST, 'dateadded', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);

$recordstype = $accountant -> get_income_exp_type($accountitem);

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



$stmt = $pdo ->prepare('INSERT INTO income_exp(u_id,acc_name,acc_type,acc_amt,date_reg,created_by,month_created,year_created) VALUES
 (:u_id,:acc_name,:acc_type,:acc_amt,:date_reg,:created_by,:month_created,:year_created)');

$stmt ->bindParam(':u_id', $user_id);
$stmt ->bindParam(':acc_name', $accountitem);
$stmt ->bindParam(':acc_type', $recordstype);
$stmt ->bindParam(':acc_amt', $accountAmount);
$stmt ->bindParam(':date_reg', $dateadded);
 $stmt ->bindParam(':created_by', $created_by);
 $stmt ->bindParam(':month_created', $monthcon);
 $stmt ->bindParam(':year_created', $year);


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


 