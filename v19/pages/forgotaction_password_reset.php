<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

require_once './../../class/user.php';
 
require_once './../../pdoconn/config.php';

 $pdo = new PDO(conString, dbUser, dbPass);
 $login = filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_STRING);
  $date_time  = date('Y-m-d H:i:s');
  $expired_token_date =  date('Y-m-d', strtotime('+1 Day'));  
$successs = "YES";
$date_  = date('Y-m-d');
$token = bin2hex(random_bytes(128));  
//$token2 = md5(uniqid(rand(), true)); 

$resetPassLink = 'https://app.knustmarshallan.org/reset-password?token=';
 
 

 if(!isset($login)){
       header("Location:"."../index");
 }else
{
   $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
   // $pass = filter_input(INPUT_POST, 'pass', FILTER_DEFAULT);
    
     $the_no_string = "NO";
           // $pdo = $this->pdo;
            $stmt = $pdo->prepare('SELECT email,u_id,user_type  FROM tbl_user WHERE email = :email AND deleted = :n_o');
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':n_o', $the_no_string);
            $stmt->execute();
            $user_data = $stmt->fetch();
            
            if($user_data['email']){
  $verified_email = $user_data['email'];
                
  $stmtb = $pdo ->prepare('INSERT INTO password_resets(email,token,date_created,token_expiry)VALUES(:email,:token,:date_created,:token_expiry)');
  $stmtb ->bindParam(':email', $email);
  $stmtb ->bindParam(':token', $token);
  $stmtb ->bindParam(':date_created', $date_);
  $stmtb ->bindParam(':token_expiry', $expired_token_date);    
  $stmtb->execute();

  $stmtb = $pdo->query("SELECT LAST_INSERT_ID()");
  $lastId2 = $stmtb->fetchColumn();

  if($lastId2){
    $to = $email;
    $subject = "Password Reset E-mail";
    $message = "You're receiving this e-mail because you or someone else has requested a password for your user account.\n
    It can be safely ignored if you did not request a password reset. Click the link below to reset your password. \n ".$resetPassLink.$token."";
  //  $msg = "Hi there, click on this URL ".$resetPassLink."" . $token . "\">link</a> to reset your password on our site";
   // $msg = wordwrap($msg,70);
    $headers = 'From:KNUST MARSHALL<no-reply@knustmarshallan.org>';  
  $mail =  mail($verified_email, $subject, $message, $headers); 
    
   if($mail){
     $_SESSION['verified_email'] = $verified_email;
    $url = explode('?', $_SERVER['HTTP_REFERER']);
    header('Location:' . $url[0] . '?email=sent');  
   }

  }else{
    $url = explode('?', $_SERVER['HTTP_REFERER']);
    header('Location:' . $url[0] . '?reset=0');
    
  }
                
            
        
           
    }else{
      $_SESSION['verified_email'] = $email;
        $url = explode('?', $_SERVER['HTTP_REFERER']);
        header('Location:' . $url[0] . '?email=wrong');
        }
    } 

 