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
$successs = "YES";
$date_  = date('Y-m-d'); 
 
 if(!isset($login)){
       header("Location:"."../index");
 }else
{
   $token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);
   $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
   $confirmpassword = filter_input(INPUT_POST, 'confirmpassword', FILTER_SANITIZE_STRING);


    
     $the_no_string = "NO";
           // $pdo = $this->pdo;
            $stmt = $pdo->prepare('SELECT email FROM password_resets WHERE token = :token AND token_expiry > :date_of_today LIMIT 1');
            $stmt->bindParam(':token', $token);
            $stmt->bindParam(':date_of_today', $date_);
            $stmt->execute();
            $user_data = $stmt->fetch();
            
            if($user_data['email']){
          $verified_email = $user_data['email'];
          $_SESSION['verified_email'] = $verified_email; 
  
          $hash_pass = $user->password_encrypt($confirmpassword);
  
          $stmtp = $pdo->prepare("UPDATE tbl_sub_user SET pass = :pass WHERE email = :created_by");
       
         
          $stmtp ->bindParam(':pass', $hash_pass,PDO::PARAM_STR);
          $stmtp ->bindParam(':created_by', $verified_email,PDO::PARAM_STR);
          $stmtp->execute();              
          if($stmtp->execute()){
           // $url = explode('?', $_SERVER['HTTP_REFERER']);
           header("Location:"."../index");
        
        }     
           
    }else{
        $url = explode('?', $_SERVER['HTTP_REFERER']);
        header('Location:' . $url[0] . '?token=expired');
        }
    } 

 