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
$summary = "Bill Item Registration Activity Recorded From Device And IP"; 
//$login = filter_input(INPUT_POST, 'submitCreateUser', FILTER_SANITIZE_STRING);

 if(!isset($user_id)){
        header('Location:' . 'r?inv17ml44=logout'); 
 }else
{

$remove[] = "'";
$remove[] = '"';
$remove[] = "-"; // just as another example



$nameofaccount = filter_input(INPUT_POST, 'nameofaccount', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);

$nameofaccount = str_replace( $remove, "", $nameofaccount );
//$nameofaccount = preg_replace("'", ' ', $nameofaccount);
//$nameofaccount = str_replace("'", " ", $nameofaccount);
$categoryacc = filter_input(INPUT_POST, 'categoryacc', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);



$stmt = $pdo ->prepare('INSERT INTO account_items(u_id,account_type,acc_name,date_reg,created_by) VALUES
 (:u_id,:account_type,:account_name,:date_reg,:created_by)');

$stmt ->bindParam(':u_id', $user_id);
$stmt ->bindParam(':account_type', $categoryacc);
$stmt ->bindParam(':account_name', $nameofaccount);
$stmt ->bindParam(':date_reg', $now);
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


 