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

 if($password!=$confirmpassword){
    $_SESSION['wrong'] = "YES"; 
    header("Location:"."../../reset-password?token=".$token.""); 
   }else {
    
     $the_no_string = "NO";
           // $pdo = $this->pdo;
            $stmt = $pdo->prepare('SELECT * FROM password_resets WHERE token = :token');
            $stmt->bindParam(':token', $token);
            $stmt->execute();
            $user_data = $stmt->fetch();
            
           $token = $user_data['token'];
          $date_created = $user_data['date_created'];
        $token_expiry = $user_data['token_expiry'];

          $verified_email = $user_data['email']; 
          
            if($token_expiry >= $date_created){
  
          $hash_pass = $user->password_encrypt($confirmpassword);
  
          $stmtp = $pdo->prepare("UPDATE tbl_user SET pass = :pass WHERE email = :created_by");
       
         
          $stmtp ->bindParam(':pass', $hash_pass,PDO::PARAM_STR);
          $stmtp ->bindParam(':created_by', $verified_email,PDO::PARAM_STR);
          
          if($stmtp->execute()){
            $url = explode('?', $_SERVER['HTTP_REFERER']);
          header("Location:"."../../login");
        
        }     
           
    }
    
    else{
        $url = explode('?', $_SERVER['HTTP_REFERER']);
        header('Location:' . $url[0] . '?token=expired');
        }
        
    } 
    
}
    


 