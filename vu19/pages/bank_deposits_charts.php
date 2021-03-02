<?php
session_start();
#Pie Chart
  function con_con (){
   $hostdb = "localhost";  // MySQl host
   $userdb = "grup_asoc";  // MySQL username
   $passdb = "group_assoc_db_#2019";  // MySQL password
   $namedb = "group_assoc_db";  // MySQL database name

   // Establish a connection to the database
   $dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);
   if ($dbhandle->connect_error) {
  	exit("There was an error with your connection: ".$dbhandle->connect_error);
   }
   
   return $dbhandle;
  } 
   $dbcon = con_con(); 
   $user_id = $_SESSION['userid'];
   $Females = "Female";
   $Male = "Male";
   $stirngdel = "NO";
   $query = "SELECT month_deposit,SUM(amount_deposited)  FROM bank_deposits WHERE u_id = '$user_id' AND deleted = '$stirngdel' GROUP BY month_deposit";
   
        $result = $dbcon->query($query) or exit("Error code ({$dbcon->errno}): {$dbcon->error}");
       $rows['type'] = 'bar';
     
$rows['name'] = 'Deposit Charts'; 
        while($r = mysqli_fetch_array($result)) {
             $rows['data'][] = array($r['month_deposit'], $r['SUM(amount_deposited)']);
               $rows['categories'] = array($r['month_deposit']);
        } 
        
  
           
        $rslt = array();
array_push($rslt,$rows); 
print json_encode($rslt, JSON_NUMERIC_CHECK);

