<?php
//session_start();

               
  function con_con (){
   $hostdb = "localhost";  // MySQl host
   $userdb = "knusbows_gmt";  // MySQL username
   $passdb = "gmt$2019";  // MySQL password
   $namedb = "knusbows_gmt";  // MySQL database name

   // Establish a connection to the database
   $dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);
   if ($dbhandle->connect_error) {
  	exit("There was an error with your connection: ".$dbhandle->connect_error);
   }
   
   return $dbhandle;
  }
  
  
function print_all_members(){
             
    $db = con_con();
    $uuid =  $_SESSION['userid'];
    $grp = $_SESSION['grp'];

    if($grp=="ALL MEMBERS"){
      $query = "SELECT first_name,last_name,house_name,other_name,profession,phone_number,profession,member_id,tittles,ranks FROM members WHERE u_id = '$uuid' AND deleted = 'NO'";  
    }else{
      $query = "SELECT first_name,last_name,other_name,house_name,profession,phone_number,profession,member_id,tittles,ranks FROM members WHERE house_name = '$grp' OR ranks = '$grp' AND  u_id = '$uuid' AND deleted = 'NO'";
  
    }

     $result= $db->query($query) or die("Error");
if($result){
if(mysqli_num_rows($result)>0){
  
  return $result;
  
}

}}




 function all_ledger_of_member($member_id){
  try {
       $string_deleted = "NO";
       $user_id = $_SESSION['userid'];
       $db = con_con();
     // $query = "SELECT SUM(fee_amount) FROM member_ledger WHERE member_id = '$member_id' AND u_id = '$user_id' AND deleted = 'NO' AND YEAR(date_recorded) = YEAR(CURDATE())"; 
     $query = "SELECT SUM(fee_amount) FROM member_ledger WHERE member_id = '$member_id' AND u_id = '$user_id' AND deleted = 'NO'"; 
      $result= $db->query($query) or die("Error");
if($result){
  if(mysqli_num_rows($result)>0){
           
    while ($row = mysqli_fetch_array($result)) {
        
             $user_data = $row;
             
             return $user_data['SUM(fee_amount)'];}}}
  
} catch (Exception $exc) {
           echo $exc->getTraceAsString();
       }
   }


   
 function all_payments_of_member($member_id){
  try {
       $string_deleted = "NO";
       $user_id = $_SESSION['userid'];
       $db = con_con();
       $query = "SELECT SUM(amount) FROM fee_payments WHERE member_id = '$member_id' AND u_id = '$user_id' AND deleted = 'NO'"; 
     // $query = "SELECT SUM(amount) FROM fee_payments WHERE member_id = '$member_id' AND u_id = '$user_id' AND deleted = 'NO' AND YEAR(payment_date) = YEAR(CURDATE())"; 
      $result= $db->query($query) or die("Error");
if($result){
  if(mysqli_num_rows($result)>0){
           
    while ($row = mysqli_fetch_array($result)) {
        
             $user_data = $row;
             
             return $user_data['SUM(amount)'];}}}
  
} catch (Exception $exc) {
           echo $exc->getTraceAsString();
       }
   }

   
   
   


   function debtors_creditors(){
             
    $db = con_con();
    $uuid =  $_SESSION['userid'];
    $query = "SELECT * FROM members WHERE u_id = '$uuid' AND deleted = 'NO'";
     $result= $db->query($query) or die("Error");
if($result){
if(mysqli_num_rows($result)>0){
  
  return $result;
  
}

}}

function view_members_ranks(){
           
  $db = con_con();
  $uuid =  $_SESSION['userid'];
   
 $billee = $_SESSION['grp'];
  $query = "SELECT member_id,last_name,first_name,tittles,profession FROM members WHERE u_id = '$uuid' AND deleted = 'NO' AND ranks = '$billee'";
   $result= $db->query($query) or die("Error");
if($result){
if(mysqli_num_rows($result)>0){

return $result;

}

}
}


function view_members_roll_list(){
           
  $db = con_con();
  $uuid =  $_SESSION['userid'];
   
 $billee = $_SESSION['grp'];
  $query = "SELECT roll_call_id,member_id,show_up,comments,date_created FROM roll_call WHERE deleted = 'NO' AND u_id = '$uuid' AND name_of_program = '$billee'";
   $result= $db->query($query) or die("Error");
if($result){
if(mysqli_num_rows($result)>0){

return $result;

}

}
}

function view_members_roll_list_count(){
           
  $db = con_con();
  $uuid =  $_SESSION['userid'];
   
 $billee = $_SESSION['grp'];
  $query = "SELECT roll_call_id,member_id,show_up,COUNT(member_id),comments,date_created FROM roll_call WHERE deleted = 'NO' AND u_id = '$uuid' AND name_of_program = '$billee' GROUP BY show_up";
   $result= $db->query($query) or die("Error");
if($result){
if(mysqli_num_rows($result)>0){

return $result;

}

}
}

//Venue / Name / Date / Comment

function view_roll_list(){
           
  $db = con_con();
  $uuid =  $_SESSION['userid'];
   
 $billee = $_SESSION['grp'];
  $query = "SELECT DISTINCT (name_of_program),comments,date_created FROM roll_call WHERE deleted = 'NO' AND u_id = '$uuid'";
   $result= $db->query($query) or die("Error");
if($result){
if(mysqli_num_rows($result)>0){

return $result;

}

}
}


function events_calendar_details($member_id){
             
  $db = con_con();
  $uuid =  $_SESSION['userid'];
  $grp = $_SESSION['grp'];
  $query = "SELECT name_of_program,slogan,venue,comments FROM events_calendar WHERE name_of_program = '$member_id' AND  u_id = '$uuid' AND deleted = 'NO'";
  
   $result= $db->query($query) or die("Error");
if($result){
if(mysqli_num_rows($result)>0){
  while ($row = mysqli_fetch_array($result)) {
         
            
    return  $row;
     }

}

}}


function individual_member_payments(){
             
  $db = con_con();
  $uuid =  $_SESSION['userid'];
  $member_id =   $_SESSION['member_id'];

$fullmember_details = member_details($member_id);
$fullname = $fullmember_details['last_name']. " ".$fullmember_details['first_name']; 
$_SESSION['fullname'] = $fullname;

  $query = "SELECT member_id,amount,payment_date,paid_by,receipt_no,time_ FROM fee_payments WHERE u_id = '$uuid' AND member_id = '$member_id' AND deleted = 'NO'";
   $result= $db->query($query) or die("Error");
if($result){
if(mysqli_num_rows($result)>0){

return $result;

}

}}


function print_income(){
             
  $db = con_con();
  $uuid =  $_SESSION['userid'];
  $member_id = "Income";
  $query = "SELECT acc_name,acc_amt,date_reg FROM income_exp WHERE u_id = '$uuid' AND acc_type = '$member_id' AND deleted = 'NO'";
   $result= $db->query($query) or die("Error");
if($result){
if(mysqli_num_rows($result)>0){

return $result;

}

}}


function print_expense(){
             
  $db = con_con();
  $uuid =  $_SESSION['userid'];
  $member_id = "Expense";
  $query = "SELECT acc_name,acc_amt,date_reg FROM income_exp WHERE u_id = '$uuid' AND acc_type = '$member_id' AND deleted = 'NO'";
   $result= $db->query($query) or die("Error");
if($result){
if(mysqli_num_rows($result)>0){

return $result;

}

}}

function org_details(){
             
  $db = con_con();
  $uuid =  $_SESSION['userid'];
  $member_id = "Expense";
  $query = "SELECT * FROM tbl_organization WHERE u_id = '$uuid' AND deleted = 'NO'";
   $result= $db->query($query) or die("Error");
if($result){
if(mysqli_num_rows($result)>0){
  while ($row = mysqli_fetch_array($result)) {
         
            
    return  $row;
     }

}

}}



function member_details($member_id){
             
  $db = con_con();
  $uuid =  $_SESSION['userid'];
 // $grp = $_SESSION['grp'];
  $query = "SELECT first_name,last_name,house_name,profession,phone_number,profession,member_id,tittles,ranks FROM members WHERE member_id = '$member_id' AND  u_id = '$uuid' AND deleted = 'NO'";
  
   $result= $db->query($query) or die("Error");
if($result){
if(mysqli_num_rows($result)>0){
  while ($row = mysqli_fetch_array($result)) {
         
            
    return  $row;
     }

}

}}


function get_payment_details_by_id($member_id){
             
  $db = con_con();
  $uuid =  $_SESSION['userid'];
  //$grp = $_SESSION['grp'];
  $query = "SELECT * FROM fee_payments WHERE id = '{$member_id}' AND  u_id = '{$uuid}' AND deleted = 'NO'";
  
   $result= $db->query($query) or die("Error");
if($result){
if(mysqli_num_rows($result)>0){
  while ($row = mysqli_fetch_array($result)) {
         
            
    return  $row;
     }

}

}}



//printing income statement codes

function searchincomexpense(){
           
  $db = con_con();
  $uuid =  $_SESSION['userid'];
   
  $datefrom = $_SESSION['datefrom'];
  $dateto =  $_SESSION['dateto'];
  $acc_type ="Income";

  $query = "SELECT id,acc_name,acc_type,acc_amt,date_reg FROM income_exp WHERE u_id = '{$uuid}' AND deleted = 'NO' AND acc_type ='{$acc_type}'
  AND date_reg >= '{$datefrom}' AND date_reg <= '{$dateto}' ";
   $result= $db->query($query) or die("Error");
if($result){
if(mysqli_num_rows($result)>0){

return $result;

}

}
}


function searchincomexpensesum(){
  $initial_balance = 0.00;         
  $db = con_con();
  $uuid =  $_SESSION['userid'];
   
  $datefrom = $_SESSION['datefrom'];
  $dateto =  $_SESSION['dateto'];
  $acc_type ="Income";

  $query = "SELECT SUM(acc_amt) FROM income_exp WHERE u_id = '{$uuid}' AND deleted = 'NO' AND acc_type ='{$acc_type}'
  AND date_reg >= '{$datefrom}' AND date_reg <= '{$dateto}' ";
   $result= $db->query($query) or die("Error");
if($result){
if(mysqli_num_rows($result)>0){

  while ($row = mysqli_fetch_array($result)) {
         
            
    return  $row['SUM(acc_amt)'] + $initial_balance;
     }
 

}

}
}


function searchexpensesum(){
  $initial_balance = 0.00;            
  $db = con_con();
  $uuid =  $_SESSION['userid'];
   
  $datefrom = $_SESSION['datefrom'];
  $dateto =  $_SESSION['dateto'];
  $acc_type ="Expense";

  $query = "SELECT SUM(acc_amt) FROM income_exp WHERE u_id = '{$uuid}' AND deleted = 'NO' AND acc_type ='{$acc_type}'
  AND date_reg >= '{$datefrom}' AND date_reg <= '{$dateto}' ";
   $result= $db->query($query) or die("Error");
if($result){
if(mysqli_num_rows($result)>0){

  while ($row = mysqli_fetch_array($result)) {
         
            
    return  $row['SUM(acc_amt)'] + $initial_balance;
     }
 

}

}
}



function searchExpense(){
           
  $db = con_con();
  $uuid =  $_SESSION['userid'];
   
  $datefrom = $_SESSION['datefrom'];
  $dateto =  $_SESSION['dateto'];
  $acc_type ="Expense";

  $query = "SELECT id,acc_name,acc_type,acc_amt,date_reg FROM income_exp WHERE u_id = '{$uuid}' AND deleted = 'NO' AND acc_type ='{$acc_type}'
  AND date_reg >= '{$datefrom}' AND date_reg <= '{$dateto}' ";
   $result= $db->query($query) or die("Error");
if($result){
if(mysqli_num_rows($result)>0){

return $result;

}

}
}





function searchpayements(){
           
  $db = con_con();
  $uuid =  $_SESSION['userid'];
   
  $datefrom = $_SESSION['datefrom'];
  $dateto =  $_SESSION['dateto'];
  $acc_type ="Expense";

  $query = "SELECT amount,payment_date,time_,member_id FROM fee_payments WHERE u_id = '{$uuid}' AND deleted = 'NO'
  AND payment_date >= '{$datefrom}' AND payment_date <= '{$dateto}' ";
   $result= $db->query($query) or die("Error");
if($result){
if(mysqli_num_rows($result)>0){

return $result;

}

}
}


function searchpayementssum(){
  $initial_balance = 0.00;        
  $db = con_con();
  $uuid =  $_SESSION['userid'];
   
  $datefrom = $_SESSION['datefrom'];
  $dateto =  $_SESSION['dateto'];
  $acc_type ="Expense";

  $query = "SELECT SUM(amount) FROM fee_payments WHERE u_id = '{$uuid}' AND deleted = 'NO'
  AND payment_date >= '{$datefrom}' AND payment_date <= '{$dateto}' ";
   $result= $db->query($query) or die("Error");
if($result){
if(mysqli_num_rows($result)>0){

  while ($row = mysqli_fetch_array($result)) {
         
            
    return  $row['SUM(amount)'] + $initial_balance;
     }

}

}
}


function profit_loss(){
  try {
    //code...
    $initial_balance = 0.00;
    $get_balance_paid =  (searchexpensesum() ) - ( searchpayementssum() + searchincomexpensesum());

    $start_balance = $initial_balance + $get_balance_paid;

    if($start_balance){
      if($start_balance==0){
  $start_balance =   $start_balance." -"."";
    }elseif ($start_balance<0) {
 $start_balance = str_replace("-", "", $start_balance) . " Profit";
   }  else {

 $start_balance = $start_balance."  Loss";



    }
  } 

  return $start_balance;

  } catch (\Throwable $th) {
    //throw $th;
  }
}

 






