<?php
session_start();

require_once './../../class/secretary.php';
 
require_once './../../pdoconn/secretaryconfig.php';

$pdo = new PDO(conStringsecretary, dbUsersecretary, dbPasssecretary); 
$date_time  = date('Y-m-d H:i:s');
$now = date("Y-m-d");
$user_id = $_SESSION['userid'];
$created_by =  $_SESSION['email'];
$activity = "Organizational Edit Details";
$summary = "Organizational Edit Details Device And IP"; 
//$login = filter_input(INPUT_POST, 'submitCreateUser', FILTER_SANITIZE_STRING);

 if(!isset($user_id)){
        header('Location:' . 'r?inv17ml44=logout'); 
 }else
{

  //logo_codes

  $img_directory = "./../../class/uploads/";
             
             
      
  $img_name = $_FILES['file_image']['name'];
  $img_tmp_name = $_FILES['file_image']['tmp_name'];
  $img_size = $_FILES['file_image']['size'];
  $img_type = $_FILES['file_image']['type'];
  
  
  $img_path = $img_directory.$img_name;
    
  $img_results = move_uploaded_file($img_tmp_name, $img_path);
  
  if(!$img_results){
      echo "Error Uploading";
  }
  if(!get_magic_quotes_gpc()){
      $img_name = addslashes($img_name);
      $img_path = addslashes($img_path);
  }


  //end_logo_codes

  $org_name = filter_input(INPUT_POST, 'org_name', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
  $cult_council = filter_input(INPUT_POST, 'cult_council', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
  $contact_1 = filter_input(INPUT_POST, 'contact_1', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
  $contact_2 = filter_input(INPUT_POST, 'contact_2', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
  $website = filter_input(INPUT_POST, 'website', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
  $slogan = filter_input(INPUT_POST, 'slogan', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
  //$deleted = "YES";



  $stmtp = $pdo->prepare("UPDATE tbl_organization SET org_name = :org_name, cult_council = :cult_council,
  contact_1 = :contact_1,contact_2 = :contact_2,email = :email,website = :website,slogan = :slogan,upload_logo_url =:upload_logo_url
   WHERE u_id = :u_id");
  
  $stmtp ->bindParam(':org_name', $org_name,PDO::PARAM_STR);
  $stmtp ->bindParam(':cult_council', $cult_council,PDO::PARAM_STR);
  
  $stmtp ->bindParam(':contact_1', $contact_1,PDO::PARAM_STR);
  $stmtp ->bindParam(':contact_2', $contact_2,PDO::PARAM_STR);
  
  $stmtp ->bindParam(':email', $email,PDO::PARAM_STR);
  $stmtp ->bindParam(':website', $website,PDO::PARAM_STR);
  $stmtp ->bindParam(':upload_logo_url', $img_name,PDO::PARAM_STR);
  
  $stmtp ->bindParam(':slogan', $slogan,PDO::PARAM_STR);
$stmtp ->bindParam(':u_id', $user_id,PDO::PARAM_STR);

  

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
        $url = explode('?', $_SERVER['HTTP_REFERER']);
         header('Location:' . $url[0] . '?m=5');  
    
        
  
} else {
     $url = explode('?', $_SERVER['HTTP_REFERER']);
         header('Location:' . $url[0] . '?m=6');    
}}


 