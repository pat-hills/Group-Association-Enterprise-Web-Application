<?php
session_start();

require_once './../../class/accountant.php';
 
require_once './../../pdoconn/accountantconfig.php';

$pdo = new PDO(conStringaccountant, dbUseraccountant, dbPassaccountant); 
$date_time  = date('Y-m-d H:i:s');
$now = date("Y-m-d");
$user_id = $_SESSION['userid'];
$created_by =  $_SESSION['email'];
$activity = "Bill Preparation Registration";
$summary = "Bill Preparation Registration Activity Recorded From Device And IP"; 
//$login = filter_input(INPUT_POST, 'submitCreateUser', FILTER_SANITIZE_STRING);

 if(!isset($user_id)){
        header('Location:' . 'r?inv17ml44=logout'); 
 }else
{
$billitem = filter_input(INPUT_POST, 'billitem', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$name_house = filter_input(INPUT_POST, 'name_house', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$amount = filter_input(INPUT_POST, 'amount', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);



$stmt = $pdo ->prepare('INSERT INTO member_bill(u_id,bill_item,house_name,amount_involved,date_recorded,entered_by) VALUES
 (:u_id,:bill_item,:house_name,:amount_involved,:date_recorded,:entered_by)');

$stmt ->bindParam(':u_id', $user_id);
$stmt ->bindParam(':bill_item', $billitem);
$stmt ->bindParam(':house_name', $name_house);
 $stmt ->bindParam(':amount_involved', $amount);
 $stmt ->bindParam(':date_recorded', $now);
 $stmt ->bindParam(':entered_by', $created_by);


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


 