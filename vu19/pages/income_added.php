<?php
session_start();
#Pie Chart
function con_con (){
    $hostdb = "localhost";  // MySQl host
    $userdb = "linuyrnr_grp";  // MySQL username
    $passdb = "grp$2019";  // MySQL password
    $namedb = "linuyrnr_groassoc";  // MySQL database name
 
    // Establish a connection to the database
    $dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);
    if ($dbhandle->connect_error) {
       exit("There was an error with your connection: ".$dbhandle->connect_error);
    }
    
    return $dbhandle;
   }
   $user_id = $_SESSION['userid'];
   $income = "Income";
   $expense = "Expense";
   $stirngdel = "NO";
   $dbcon = con_con(); 
  // $query = "SELECT col_month,SUM(acc_amt)  FROM income_exp GROUP BY col_month";
   $query = "SELECT month_created,SUM(acc_amt) FROM income_exp WHERE u_id = '$user_id' AND deleted = '$stirngdel' AND acc_type = '$income'AND YEAR(date_reg) = YEAR(CURDATE()) GROUP BY month_created";
   
        $result = $dbcon->query($query) or exit("Error code ({$dbcon->errno}): {$dbcon->error}");
       $rows['type'] = 'column';
     
$rows['name'] = 'Monthly Income Chart'; 
        while($r = mysqli_fetch_array($result)) {
             $rows['data'][] = array($r['month_created'], $r['SUM(acc_amt)']);
               $rows['categories'] = array($r['month_created']);
        } 
        
      //  $query1 = "SELECT month_created,SUM(acc_amt) FROM income_exp WHERE u_id = '$user_id' AND deleted = '$stirngdel' AND acc_type = '$expense' AND YEAR(date_reg) = YEAR(CURDATE()) GROUP BY month_created";
   
       // $result1 = $dbcon->query($query1) or exit("Error code ({$dbcon->errno}): {$dbcon->error}");
      // $rows1['type'] = 'column';
     
// $rows1['name'] = 'Monthly Expense Chart'; 
//         while($r1 = mysqli_fetch_array($result1)) {
//              $rows1['data'][] = array($r1['month_created'], $r1['SUM(acc_amt)']);
//                $rows1['categories'] = array($r1['month_created']);
//         } 
        
           
        $rslt = array();
array_push($rslt,$rows); 
//array_push($rslt,$rows1);
print json_encode($rslt, JSON_NUMERIC_CHECK);

       