<?php
session_start();

require_once './../../class/secretary.php';
 
require_once './../../pdoconn/secretaryconfig.php';

$pdo = new PDO(conStringsecretary, dbUsersecretary, dbPasssecretary); 
$date_time  = date('Y-m-d H:i:s');
$now = date("Y-m-d");
$user_id = $_SESSION['userid'];
$created_by =  $_SESSION['email'];
$activity = "Program Or Event Edit";
$summary = "Program Or Event Edit Activity Recorded From Device And IP"; 
//$login = filter_input(INPUT_POST, 'submitCreateUser', FILTER_SANITIZE_STRING);

 if(!isset($user_id)){
        header('Location:' . 'r?inv17ml44=logout'); 
 }else
{
  $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
  $nameofprogram = filter_input(INPUT_POST, 'nameofprogram', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
  $slogan = filter_input(INPUT_POST, 'slogan', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
  $venue = filter_input(INPUT_POST, 'venue', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
  $comments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);



  $stmtp = $pdo->prepare("UPDATE events_calendar SET name_of_program = :name_of_program, slogan = :slogan, venue = :venue,comments = :comments WHERE u_id = :u_id AND event_id = :id");
 
  $stmtp ->bindParam(':name_of_program', $nameofprogram,PDO::PARAM_STR);
  $stmtp ->bindParam(':slogan', $slogan,PDO::PARAM_STR);
  $stmtp ->bindParam(':venue', $venue,PDO::PARAM_STR);
  $stmtp ->bindParam(':comments', $comments,PDO::PARAM_STR); 

$stmtp ->bindParam(':u_id', $user_id,PDO::PARAM_STR);
$stmtp ->bindParam(':id', $id,PDO::PARAM_STR);

  

 $stmtb = $pdo ->prepare('INSERT INTO task_timeliness(u_id,task,summary,date_of_task,datetime_of_task,created_by)VALUES
 (:u_id,:task,:summary,:date_of_task,:datetime_of_task,:created_by)');
$stmtb ->bindParam(':u_id', $_SESSION['userid']);
$stmtb ->bindParam(':task', $activity);
$stmtb ->bindParam(':summary', $summary);
  $stmtb ->bindParam(':date_of_task', $now);
$stmtb ->bindParam(':datetime_of_task', $date_time);
$stmtb ->bindParam(':created_by', $_SESSION['email'] );
$stmtb->execute();

if($stmtp->execute()){
       // $url = explode('?', $_SERVER['HTTP_REFERER']);
       //  header('Location:' . $url[0] . '?m=5');  
      // href="./pages/r?inv17ml44=add_houses"  
    //  if($secretary->saveMessageac()){
        header('Location:' . 'r?inv17ml44=add_event');    
    //  }
        
  
} else {
     $url = explode('?', $_SERVER['HTTP_REFERER']);
         header('Location:' . $url[0] . '?m=6');    
}}


 