<?php
session_start();

require_once './../../class/accountant.php';
require_once './../../class/SMS.php';
 
require_once './../../pdoconn/accountantconfig.php';
require_once './../../class/ToWords.php';

$pdo = new PDO(conStringaccountant, dbUseraccountant, dbPassaccountant); 
$date_time  = date('Y-m-d H:i:s');
$now = date("Y-m-d");
$user_id = $_SESSION['userid'];
$created_by =  $_SESSION['email'];
$activity = "Member Payment Registration";
$summary = "Member Payment Registration Activity Recorded From Device And IP"; 
//$login = filter_input(INPUT_POST, 'submitCreateUser', FILTER_SANITIZE_STRING);

$now = date("Y-m-d");
$d = date("Y");
$m= date("m");
$member_id =  $_SESSION['member_id'];
$lastId2stmtbsms_status = "";
$lastId2stmtbsms_statusnot ="";
 
//change_password_finance 


 if(!isset($user_id)){
        header('Location:' . 'r?inv17ml44=logout'); 
 }else
{

  $sum = 0;
         
//  $fullname = filter_input(INPUT_POST, 'amountpadi', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
  $mop = filter_input(INPUT_POST, 'mop', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
   $paidby = filter_input(INPUT_POST, 'paid_by', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
  $chequenumber = filter_input(INPUT_POST, 'chequenumber', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
  $sms_format_1 = trim(filter_input(INPUT_POST, 'sms_format_1', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS));
  $email_id = trim(filter_input(INPUT_POST, 'email_id', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS));
  $fullname = trim(filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS));
  $bill_item = $_POST["bill_item"];
  $amount = $_POST["amount"];
 // $total = count($bill_item);
  $code = $m."00".$d.$accountant->gen_verification_code().$member_id.$m;

  for ($i = 0; $i < count($_POST["bill_item"]); $i++) {

    $sum += $amount[$i];
  
    $stmtt = $pdo ->prepare("INSERT INTO fee_payments(member_id,u_id,amount,bill_item,receipt_no,mode_of_payment,mode_of_payment_number,payment_date,time_,paid_by,received_by)
   VALUES ('$member_id','$user_id','$amount[$i]','$bill_item[$i]','$code','$mop','$chequenumber',NOW(),NOW(),'$paidby','$created_by')");
  $stmtt ->execute();

  $stmtt = $pdo->query("SELECT LAST_INSERT_ID()");
  $lastId = $stmtt->fetchColumn();
 
    $stmtb = $pdo ->prepare('INSERT INTO task_timeliness(u_id,task,summary,date_of_task,datetime_of_task,created_by)VALUES
    (:u_id,:task,:summary,:date_of_task,:datetime_of_task,:created_by)');
   $stmtb ->bindParam(':u_id', $_SESSION['userid']);
   $stmtb ->bindParam(':task', $activity);
   $stmtb ->bindParam(':summary', $summary);
     $stmtb ->bindParam(':date_of_task', $now);
   $stmtb ->bindParam(':datetime_of_task', $date_time);
   $stmtb ->bindParam(':created_by', $_SESSION['email'] );
   $stmtb->execute();

   $stmtbb = $pdo->query("SELECT LAST_INSERT_ID()");
   $lastId2 = $stmtbb->fetchColumn();

   
//}

// else{
//   $url = explode('?', $_SERVER['HTTP_REFERER']);
//   header('Location:' . $url[0] . '?m=6');    
// }

}

if($lastId && $lastId2){
  $member_bal =  $accountant -> member_balance();
//  $toWords = new ToWord($sum);
 $sum =  number_format($sum, 2, '.', ',');
  $message = trim("Dear ". strtoupper($fullname). ", \n Kindly find acknowledgement of payment of " . $sum ." GHS ". " being part or full payment of association dues with balance " . $member_bal. " \n Thank you.");
 
  // $to_email = 'name @ company . com';
$subject = 'Part or full payment of association dues';
$headers = 'From:KNUST MARSHALL<no-reply@knustmarshallan.org>';  
//check if the email address is invalid $secure_check
$secure_check = sanitize_my_email($email_id);
if ($secure_check == false) {
  $url = explode('?', $_SERVER['HTTP_REFERER']);
   header('Location:' . $url[0] . '?m=6');  
   // echo "Invalid Email / Failed To Send Email";
} else { //send email 
  $mail =  mail($email_id, $subject, $message, $headers);

 $strUserName = "linu-council78";
 $strPassword = "c78knust";
 $strMessageType = "0";
 $strDlr = "1";
 $strMobile = $sms_format_1;
 $Sender = "Marshall";
 
  $url = "http://rslr.connectbind.com" . "/bulksms/bulksms?username=" . $strUserName . "&password=" . $strPassword . "&type=" . $strMessageType . "&dlr=" 
  . $strDlr . "&destination=" . $strMobile . "&source=" . $Sender . "&message=" . $message . "";
  
  
$url = preg_replace("/ /", "%20", $url);
$output = file_get_contents($url);
  
  
    //  $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL, $page);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //     curl_setopt($ch, CURLOPT_TIMEOUT, 120);
    //     curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
    //     curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
    //     curl_setopt($ch, CURLOPT_FAILONERROR, 1);
    //     $output = curl_exec($ch);
    //     curl_close($ch);
    //     print_r($output);

  //$output = file($page);
  
  print_r($output);



//   $grab = substr($parse_url[0], 0, 4);
  
//   if($grab=="1701"){

//     $sms_status = "SENT";

//     $stmtbsms_status = $pdo ->prepare('INSERT INTO sms_tracking(sms_message,delivery_type,sms_status,datetime_sms)VALUES
//     (:sms_message,:delivery_type,:sms_status,:datetime_sms)');
//   $stmtbsms_status ->bindParam(':sms_message', $message);
//   $stmtbsms_status ->bindParam(':delivery_type', $grab);
//   $stmtbsms_status ->bindParam(':sms_status', $sms_status);
//   $stmtbsms_status ->bindParam(':datetime_sms', $date_time);
//   $stmtbsms_status->execute();

//   $stmtbsms_status = $pdo->query("SELECT LAST_INSERT_ID()");
//   $lastId2stmtbsms_status = $stmtbsms_status->fetchColumn();

//   }else{

//     $grab2 = "1706";

//     $sms_statusnot = "NOT SENT";

//     $stmtbsms_statusnot = $pdo ->prepare('INSERT INTO sms_tracking(sms_message,delivery_type,sms_status,datetime_sms)VALUES
//     (:sms_message,:delivery_type,:sms_status,:datetime_sms)');
//   $stmtbsms_statusnot ->bindParam(':sms_message', $message);
//   $stmtbsms_statusnot ->bindParam(':delivery_type', $grab2);
//   $stmtbsms_statusnot ->bindParam(':sms_status', $sms_statusnot);
//   $stmtbsms_statusnot ->bindParam(':datetime_sms', $date_time);
//   $stmtbsms_statusnot->execute();


//   $stmtbsms_statusnot = $pdo->query("SELECT LAST_INSERT_ID()");
//   $lastId2stmtbsms_statusnot = $stmtbsms_statusnot->fetchColumn();

//   }


    if($mail && $output){
     // mail($email_id, $subject, $message, $headers);
      $url = explode('?', $_SERVER['HTTP_REFERER']);
      header('Location:' . $url[0] . '?m=5');  
    }
 
 
}
 
 
}

   

}



function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}




 