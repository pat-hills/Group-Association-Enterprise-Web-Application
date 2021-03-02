<?php
session_start();

require_once './../../class/user.php';
 
require_once './../../pdoconn/config.php';

$pdo = new PDO(conString, dbUser, dbPass); 
$date_time  = date('Y-m-d H:i:s');
$now = date("Y-m-d");
$user_id = $_SESSION['userid'];
$created_by =  $_SESSION['email'];
$login = filter_input(INPUT_POST, 'submitCreateUser', FILTER_SANITIZE_STRING);

 if(!isset($login) && !isset($user_id)){
        header('Location:' . 'r?inv17ml44=logout'); 
 }else
{
$fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);

$confirmpassword = filter_input(INPUT_POST, 'confirmpassword', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$contact = filter_input(INPUT_POST, 'contact', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);

$usertype = filter_input(INPUT_POST, 'usertype', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);

$hash_pash = $user->password_encrypt($password);

$stmt = $pdo ->prepare('INSERT INTO tbl_sub_user(u_id,full_name,email,pass,contact,date_reg,user_type,created_by) VALUES (:u_id,:full_name,:email,:pass,:contact,:date_reg,:user_type,:created_by)');

$stmt ->bindParam(':u_id', $user_id);
$stmt ->bindParam(':full_name', $fullname);
$stmt ->bindParam(':email', $email);
$stmt ->bindParam(':pass', $hash_pash);
$stmt ->bindParam(':contact', $contact);
$stmt ->bindParam(':date_reg', $now);
$stmt ->bindParam(':user_type', $usertype);
$stmt ->bindParam(':created_by', $created_by);
$stmt->execute();
 $stmt = $pdo->query("SELECT LAST_INSERT_ID()");
 $lastId = $stmt->fetchColumn();

if($lastId){
$subject = 'Account Registration On Group MIS';
$url = "https://app.knustmarshallan.org/vu19/";
$message = trim("Dear ". strtoupper($fullname). ", \n Kindly find your account credentials On Group MIS for your organization \n Email: " . $email. " \n Password: ".$confirmpassword." \n Kindly visit this URL : ".$url."
 \n Please Change Your Password After Logged In \n Thank You!");
 $headers = 'From:KNUST MARSHALL<no-reply@knustmarshallan.org>';  

       $mail =  mail($email, $subject, $message, $headers);
       if($mail){
              $url = explode('?', $_SERVER['HTTP_REFERER']);
              header('Location:' . $url[0] . '?m=5');    
       }else{
              $url = explode('?', $_SERVER['HTTP_REFERER']);
              header('Location:' . $url[0] . '?m=6');        
       }
       
  
} else {
     $url = explode('?', $_SERVER['HTTP_REFERER']);
         header('Location:' . $url[0] . '?m=7');    
}}


 