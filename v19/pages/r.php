<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 
$page = "";
$url = "";
session_start();
if (isset($_SESSION['userid'])) {
     $page = filter_input(INPUT_GET, 'inv17ml44', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
    if (isset($page)) {
     // $member_id = filter_input(INPUT_GET, 'mc17d', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
     // $_SESSION['member_id'] =$member_id; //load_users_task
  
        if ($page == 'admin_users_das') {
            $_SESSION['pg'] = 'admin_users_das';
        }


        if ($page == 'load_users_task') {
            $_SESSION['pg'] = 'load_users_task';
        }


        if ($page == 'admin_financial_das') {
            $_SESSION['pg'] = 'admin_financial_das';
        }


        if ($page == 'add_u_sers') {
            $_SESSION['pg'] = 'add_u_sers';
        } 

        if ($page == 'logout') {
            $_SESSION['pg'] = 'logout';
        }

        header('Location:' . '../v');
        
    } else {

       header('Location:' . '../index');
    }
} else {
 
    header('Location:' . '../index');
    
}