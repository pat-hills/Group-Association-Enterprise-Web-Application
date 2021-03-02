<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

require_once './../class/user.php';
 
require_once './../pdoconn/config.php';

 $pdo = new PDO(conString, dbUser, dbPass);
 $login = filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_STRING);
 if(!isset($login)){
        header('Location:' . 'index'); 
 }else
{
   $user_type = "Administrator";  
   $now = date("Y-m-d");
   $full_name= filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_STRING);
   $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
   $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
   $contact = filter_input(INPUT_POST, 'contact', FILTER_SANITIZE_STRING);
   $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_STRING);

   $hash_pass = $user->password_encrypt($password);
 
 
    $stmt = $pdo ->prepare('INSERT INTO tbl_user(full_name,email,pass,contact,country,date_reg,user_type) VALUES '
            . '(:full_name,:email,:pass,:contact,:country,:date_reg,:user_type)');
$stmt ->bindParam(':full_name', $full_name);
$stmt ->bindParam(':email', $email);
 $stmt ->bindParam(':pass', $hash_pass);
$stmt ->bindParam(':contact', $contact);
$stmt ->bindParam(':country', $country);
$stmt ->bindParam(':date_reg', $now);
$stmt ->bindParam(':user_type', $user_type);

 if($stmt->execute()){
//$_SESSION['userid'] = $email;
header('Location:' . '../login');         
   }
 } 

 

?>