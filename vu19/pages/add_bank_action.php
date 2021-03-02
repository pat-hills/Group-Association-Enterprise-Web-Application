<?php
session_start();

require_once './../../class/accountant.php';
 
require_once './../../pdoconn/accountantconfig.php';

$pdo = new PDO(conStringaccountant, dbUseraccountant, dbPassaccountant); 
$date_time  = date('Y-m-d H:i:s');
$now = date("Y-m-d");
$user_id = $_SESSION['userid'];
$created_by =  $_SESSION['email'];
$activity = "Association Bank Account Registration";
$summary = "Income & Expense Amount Registration Activity Recorded From Device And IP"; 
//$login = filter_input(INPUT_POST, 'submitCreateUser', FILTER_SANITIZE_STRING);

 if(!isset($user_id)){
        header('Location:' . 'r?inv17ml44=logout'); 
 }else
{
$bankname = filter_input(INPUT_POST, 'bankname', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$accountnumber = filter_input(INPUT_POST, 'accountnumber', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$branch = filter_input(INPUT_POST, 'branch', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);





$stmt = $pdo ->prepare('INSERT INTO bank_details(u_id,bank_name,acc_number,branch,date_registered,created_by) VALUES
 (:u_id,:bank_name,:acc_number,:branch,:date_registered,:created_by)');

$stmt ->bindParam(':u_id', $user_id);
$stmt ->bindParam(':bank_name', $bankname);
$stmt ->bindParam(':acc_number', $accountnumber);
$stmt ->bindParam(':branch', $branch);
 $stmt ->bindParam(':date_registered', $now);
 $stmt ->bindParam(':created_by', $created_by); 

 $summarytask = $summary.getUserIpAddr();


 $stmtb = $pdo ->prepare('INSERT INTO task_timeliness(u_id,task,summary,date_of_task,datetime_of_task,created_by)VALUES
 (:u_id,:task,:summary,:date_of_task,:datetime_of_task,:created_by)');
$stmtb ->bindParam(':u_id', $_SESSION['userid']);
$stmtb ->bindParam(':task', $activity);
$stmtb ->bindParam(':summary', $summarytask);
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


function getUserIpAddr(){
   if(!empty($_SERVER['HTTP_CLIENT_IP'])){
       //ip from share internet
       $ip = $_SERVER['HTTP_CLIENT_IP'];
   }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
       //ip pass from proxy
       $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
   }else{
       $ip = $_SERVER['REMOTE_ADDR'];
   }
   return $ip;
}

 