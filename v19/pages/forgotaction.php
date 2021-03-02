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
   $successs = "YES";
    $date_  = date('Y-m-d');
 if(!isset($login)){
       header("Location:"."../index");
 }else
{
   $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, 'pass', FILTER_DEFAULT);
    
     $the_no_string = "NO";
           // $pdo = $this->pdo;
            $stmt = $pdo->prepare('SELECT email,pass,u_id,user_type  FROM tbl_user WHERE email = :email AND deleted = :n_o');
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':n_o', $the_no_string);
            $stmt->execute();
            $user_data = $stmt->fetch();
            
            if($user->password_check($pass,$user_data['pass'])){
                
        // $stmtb = $pdo ->prepare('INSERT INTO tbl_login_logs(name_of_person,phone_of_person,id_of_farm,date_time_sign,date_sign,success)VALUES(:name_of_person,:phone_of_person,:id_of_farm,:date_time_sign,:date_sign,:success)');

        //  $stmtb ->bindParam(':name_of_person', $user_data['col_fullname']);

        //  $stmtb ->bindParam(':phone_of_person', $user_data['col_primary_contact']);

        //   $stmtb ->bindParam(':id_of_farm', $user_data['id']);
        //   $stmtb ->bindParam(':date_time_sign', $date_time);
        // $stmtb ->bindParam(':date_sign', $date_);
        // $stmtb ->bindParam(':success', $successs);
 
                
                $pos = $user_data['user_type'];
                if($pos=="Administrator"){
            $_SESSION['userid'] = $user_data['u_id'];
       //  $_SESSION['col_name'] = $user_data['full_name'];
         $_SESSION['user_type'] = $user_data['user_type'];
         $_SESSION['email'] = $user_data['email'];
            // $stmtb->execute();
          header('Location:' . 'r?inv17ml44=admin_users_das'); 
                } 
                
      //           elseif($pos=="FARM MANAGER"){
      //                $_SESSION['userid'] = $user_data['col_fullname'];
      //    $_SESSION['col_name'] = $user_data['col_fullname'];
      //       // $stmtb->execute();
      //     header('Location:' . 'r?inv17ml44=dasManager'); 
      //           }
                
                else {
                 $url = explode('?', $_SERVER['HTTP_REFERER']);
        header('Location:' . $url[0] . '?a=4');   
                }  
        
        
           
    }else{
        $url = explode('?', $_SERVER['HTTP_REFERER']);
        header('Location:' . $url[0] . '?m=5');
        }
    } 

 