<?php
require_once './../class/secretary.php';
 
require_once './../pdoconn/secretaryconfig.php';

$pdo = new PDO(conStringsecretary, dbUsersecretary, dbPasssecretary); 
$date_time  = date('Y-m-d H:i:s');
$now = date("Y-m-d");
$user_id = $_SESSION['userid'];
$member_id = $_SESSION['member_id'];
$created_by =  $_SESSION['email'];
$del = "YES";
//$login = filter_input(INPUT_POST, 'submitCreateUser', FILTER_SANITIZE_STRING);

 if(!isset($user_id)){
        header('Location:' . 'r?inv17ml44=logout'); 
 }else
{
$stmt = $pdo->prepare("UPDATE members SET deleted = :del WHERE id = :member_id AND u_id = :user_idd");
  

$stmt ->bindParam(':del', $del);
$stmt ->bindParam(':member_id', $member_id);
$stmt ->bindParam(':user_idd', $user_id);
if($stmt->execute()){
echo "<script>window.location='./r?inv17ml4=add_members'</script>";
}

//header('Location:' . 'r?inv17ml44=add_members'); 
}

// if($stmt->execute()){
   
  
// } 
// else {
//      $url = explode('?', $_SERVER['HTTP_REFERER']);
//          header('Location:' . $url[0] . '?m=6');    
// }}


 