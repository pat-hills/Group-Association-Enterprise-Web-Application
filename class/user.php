<?php
class user {
    
     /** @var object $pdo Copy of PDO connection */
    private $pdo;
    /** @var object of the logged in user */
    private $user;
    /** @var string error msg */
    private $msg;
    /** @var int number of permitted wrong login attemps */
    private $permitedAttemps = 5;
    
    
    
    
  
    public function dbConnect($conString, $user, $pass){
        if(session_status() === PHP_SESSION_ACTIVE){
            try {
                $pdo = new PDO($conString, $user, $pass);
                $this->pdo = $pdo;
                return true;
            }catch(PDOException $e) { 
                $this->msg = 'Connection did not work out!';
                return false;
            }
        }else{
            $this->msg = 'Session did not start.';
            return false;
        }
    }

    public function getUser(){
        return $this->user;
    }

    
    
    
      public function count_all_users(){
         
       try {
     
        if(is_null($this->pdo)){
            $this->msg = 'Connection did not work out!';
            return [];
        }else{
            $user_id = $_SESSION['userid'];
            $stirngdel = "NO";
            $pdo = $this->pdo;
            $stmt = $pdo->prepare('SELECT COUNT(sub_id) FROM tbl_sub_user WHERE u_id = :u_id AND deleted = :del');
            $stmt ->bindParam(':u_id', $user_id);
            $stmt ->bindParam(':del', $stirngdel);
            $stmt->execute();
            $result = $stmt->fetch(); 
            return $result['COUNT(sub_id)']; 
        }
        
       } catch (\Throwable $th) {
        echo $th->getTraceAsString();
       }
    
    }


    
   public function allusers(){
    try {
         $string_deleted = "NO";
         $user_id = $_SESSION['userid'];
    
   $pdo = $this->pdo;
   $stmt = $pdo->prepare('SELECT sub_id,full_name,email,contact,user_type FROM tbl_sub_user WHERE u_id = :u_id AND deleted = :N_O_O');
   $stmt ->bindParam(':u_id', $user_id);
   $stmt ->bindParam(':N_O_O', $string_deleted);
   
   $stmt->execute();
  $data_ = $stmt ->fetchAll();
  foreach ($data_ as $row) {
      
      $full_name = $row['full_name'];
      $email = $row['email'];
      $contact = $row['contact'];
      $user_type = $row['user_type'];
      $sub_id = $row['sub_id'];  
      
     
    echo '<tr>' .
  '<td>' .
  $full_name.
  '</td>' .
   '<td>' .
   $email .
   '</td>' .
 
  '<td>' .
   $contact .
   '</td>' .
   '<td>' .
   $user_type .
   '</td>' .

   '<td>'.
   '<a  href="p/r?sub_id=' . $row['sub_id'] . '&genesis=stpby" >'
           . '<i class=" fas fa-edit"></i></a>'.'  '.
             '<a href="p/r?sub_id=' . $row['sub_id'] . '&genesis=m_del" >'
           . '<i class="fas fa-trash"></i></a>'.
   '</td>' .
   '</tr>';         
      
  }

}
catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
}

public function get_users_details_by_email($email){
         
    try {
  
     if(is_null($this->pdo)){
         $this->msg = 'Connection did not work out!';
         return [];
     }else{
         $user_id = $_SESSION['userid'];
         $stirngdel = "NO";
         $pdo = $this->pdo;
         $stmt = $pdo->prepare('SELECT full_name,email,contact FROM tbl_sub_user WHERE u_id = :u_id AND email =:email AND deleted = :del');
         $stmt ->bindParam(':u_id', $user_id);
         $stmt ->bindParam(':email', $email);
         $stmt ->bindParam(':del', $stirngdel);
         $stmt->execute();
         $result = $stmt->fetch(); 
         return $result; 
     }
     
    } catch (\Throwable $th) {
     echo $th->getTraceAsString();
    }
 
 }


 public function get_users_details_by_fullname($email){
         
    try {
  
     if(is_null($this->pdo)){
         $this->msg = 'Connection did not work out!';
         return [];
     }else{
         $user_id = $_SESSION['userid'];
         $stirngdel = "NO";
         $pdo = $this->pdo;
         $stmt = $pdo->prepare('SELECT full_name,email,contact FROM tbl_sub_user WHERE u_id = :u_id AND full_name =:email AND deleted = :del');
         $stmt ->bindParam(':u_id', $user_id);
         $stmt ->bindParam(':email', $email);
         $stmt ->bindParam(':del', $stirngdel);
         $stmt->execute();
         $result = $stmt->fetch(); 
         return $result; 
     }
     
    } catch (\Throwable $th) {
     echo $th->getTraceAsString();
    }
 
 }


public function all_users_activities(){
    try {
         $string_deleted = "NO";
         $user_id = $_SESSION['userid'];
    
   $pdo = $this->pdo;
   $stmt = $pdo->prepare('SELECT task,summary,date_of_task,datetime_of_task,created_by FROM task_timeliness WHERE u_id = :u_id AND deleted = :N_O_O AND YEAR(date_of_task) = YEAR(CURDATE())');
  
   $stmt ->bindParam(':u_id', $user_id);
   $stmt ->bindParam(':N_O_O', $string_deleted);
   
   $stmt->execute();
  $data_ = $stmt ->fetchAll();
  foreach ($data_ as $row) {

    $user_data = $this->get_users_details_by_email($row['created_by']);
    $user_fullname = $user_data['full_name'];
     
    echo '<tr>' .
    '<td>' .
$row['task'].
'</td>' .
  '<td>' .
  $row['summary'].
  '</td>' .
   '<td>' .
   $row['datetime_of_task'].
   '</td>' .
   '<td>' .
   $user_fullname.
   '</td>' .
   '</tr>';         
      
  }

}
catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
}


public function count_total_activities_done_today(){
         
    try {
  
     if(is_null($this->pdo)){
         $this->msg = 'Connection did not work out!';
         return [];
     }else{
         $user_id = $_SESSION['userid'];
         $stirngdel = "NO";
         $pdo = $this->pdo;
         $stmt = $pdo->prepare('SELECT COUNT(id) FROM task_timeliness WHERE u_id = :u_id AND deleted = :del AND DAY(date_of_task) = DAY(CURDATE()) AND MONTH(date_of_task) = MONTH(CURDATE()) AND YEAR(date_of_task) = YEAR(CURDATE())');
         $stmt ->bindParam(':u_id', $user_id);
         $stmt ->bindParam(':del', $stirngdel);
         $stmt->execute();
         $result = $stmt->fetch(); 
         return $result['COUNT(id)']; 
     }
     
    } catch (\Throwable $th) {
     echo $th->getTraceAsString();
    }
 
 }


 public function count_total_activities_done_monthly(){
         
    try {
  
     if(is_null($this->pdo)){
         $this->msg = 'Connection did not work out!';
         return [];
     }else{
         $user_id = $_SESSION['userid'];
         $stirngdel = "NO";
         $pdo = $this->pdo;
         $stmt = $pdo->prepare('SELECT COUNT(id) FROM task_timeliness WHERE u_id = :u_id AND deleted = :del AND MONTH(date_of_task) = MONTH(CURDATE()) AND YEAR(date_of_task) = YEAR(CURDATE())');
         $stmt ->bindParam(':u_id', $user_id);
         $stmt ->bindParam(':del', $stirngdel);
         $stmt->execute();
         $result = $stmt->fetch(); 
         return $result['COUNT(id)']; 
     }
     
    } catch (\Throwable $th) {
     echo $th->getTraceAsString();
    }
 
 }



 public function count_total_activities_done_yearly(){
         
    try {
  
     if(is_null($this->pdo)){
         $this->msg = 'Connection did not work out!';
         return [];
     }else{
         $user_id = $_SESSION['userid'];
         $stirngdel = "NO";
         $pdo = $this->pdo;
         $stmt = $pdo->prepare('SELECT COUNT(id) FROM task_timeliness WHERE u_id = :u_id AND deleted = :del AND YEAR(date_of_task) = YEAR(CURDATE())');
         $stmt ->bindParam(':u_id', $user_id);
         $stmt ->bindParam(':del', $stirngdel);
         $stmt->execute();
         $result = $stmt->fetch(); 
         return $result['COUNT(id)']; 
     }
     
    } catch (\Throwable $th) {
     echo $th->getTraceAsString();
    }
 
 }


 public function usersdropdown(){
    try {
$string_deleted = "NO";
$user_id = $_SESSION['userid'];
   
  $pdo = $this->pdo;
  $stmt = $pdo->prepare('SELECT full_name FROM tbl_sub_user WHERE u_id = :u_id AND deleted = :N_O_O');
  $stmt ->bindParam(':u_id', $user_id);
  $stmt ->bindParam(':N_O_O', $string_deleted);
if($stmt->execute()){
 while ($row = $stmt ->fetch()){
   echo "<option value = '$row[full_name]'>"  .$row['full_name'] ."</option>";
                   
}  
return true;
}else{
   return false;
}
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
}



public function load_users_task(){
    try {


         $string_deleted = "NO";
         $user_id = $_SESSION['userid'];
    $fullname = filter_input(INPUT_POST, 'house_name', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);

    $user_data = $this->get_users_details_by_fullname($fullname);
    $email = $user_data['email'];
    
    $pdo = $this->pdo;
    $stmt = $pdo->prepare('SELECT task,summary,datetime_of_task FROM task_timeliness WHERE deleted = :N_O_O AND u_id =:u_id AND created_by = :created_by');
   
    $stmt ->bindValue(':N_O_O', $string_deleted);
    $stmt ->bindValue(':u_id', $user_id);
    $stmt ->bindValue(':created_by', $email);
    $stmt->execute();
   $data_ = $stmt ->fetchAll();

   if(!$data_){
       echo "No records for user";
   }else{
    foreach ($data_ as $row) {
        echo '<tr>' .
       '<td>' .
       $row['task'].
       '</td>' .
       '<td>' .
       $row['summary'].
       '</td>' .
     
      '<td>' .
      $row['datetime_of_task'].
       '</td>' .
       '</tr>';         
          
      }
   }
  
  
        
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
     }






        
     
    
     public function count_all_loginstoday(){
         
        if(is_null($this->pdo)){
            $this->msg = 'Connection did not work out!';
            return [];
        }else{
            $stirngdel = "YES";
            $now = ("Y-m-d");
            $pdo = $this->pdo;
            $stmt = $pdo->prepare('SELECT COUNT(id) FROM tbl_login_logs WHERE success = :del AND DATE(date_time_sign) = CURDATE()');
            $stmt ->bindParam(':del', $stirngdel);
           //   $stmt ->bindParam(':now', $now);
            $stmt->execute();
            $result = $stmt->fetch(); 
            return $result['COUNT(id)']; 
        }}



        public function password_encrypt($password) {
            $hash_format = "$2y$10$";
            $salt_length = 132;
            $salt = $this->generate_salt($salt_length);
            $format_and_salt = $hash_format . $salt;
            $hash = crypt($password, $format_and_salt);
            return $hash;
        }
        
        public function generate_salt($length) {
            $unique_random_string = md5(uniqid(mt_rand(), true));
            $base64_string = base64_encode($unique_random_string);
            $modified_base64_string = str_replace('+', '.', $base64_string);
            $salt = substr($modified_base64_string, 0, $length);
            return $salt;
        }
        
        public function password_check($password, $existing_hash) {
            $hash = crypt($password, $existing_hash);
            if ($hash === $existing_hash) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
        
        public function recordsMessage(){
            echo  '<div class="alert alert-info">';
            echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
             echo '<strong><i class="icon-pen icon-large"></i>&nbsp;Record Information Successfully Saved,Thank You</strong>';
               echo'</div>';
         }
    
    
    
            
      
      
 public function _some_ego($time_ago){
           try {
               $cur_time 	= time();
$time_elapsed 	= $cur_time - $time_ago;
$seconds 	= $time_elapsed ;
$minutes 	= round($time_elapsed / 60 );
$hours 		= round($time_elapsed / 3600);
$days 		= round($time_elapsed / 86400 );
$weeks 		= round($time_elapsed / 604800);
$months 	= round($time_elapsed / 2600640 );
$years 		= round($time_elapsed / 31207680 );
// Seconds
if($seconds <= 60){
	$ego  = "$seconds seconds ago";
}
//Minutes
else if($minutes <=60){
	if($minutes==1){
		$ego  = "one minute ago";
	}
	else{
		$ego  = "$minutes minutes ago";
	}
}
//Hours
else if($hours <=24){
	if($hours==1){
		$ego  = "an hour ago";
	}else{
		$ego  = "$hours hours ago";
	}
}
//Days
else if($days <= 7){
	if($days==1){
		$ego  = "yesterday";
	}else{
		$ego  = "$days days ago";
	}
}
//Weeks
else if($weeks <= 4.3){
	if($weeks==1){
		$ego  = "a week ago";
	}else{
		$ego  = "$weeks weeks ago";
	}
}
//Months
else if($months <=12){
	if($months==1){
		$ego  = "a month ago";
	}else{
		$ego  = "$months months ago";
	}
}
//Years
else{
	if($years==1){
		$ego  ="one year ago";
	}else{
		$ego  = "$years years ago";
	}
}
return $ego;
}
catch (Exception $exc) {
               echo $exc->getTraceAsString();
           }
              }
     
              
   public function time_passed($timestamp){
    //type cast, current time, difference in timestamps
    $timestamp      = (int) $timestamp;
    $current_time   = time();
    $diff           = $current_time - $timestamp;
    
    //intervals in seconds
    $intervals      = array (
        'year' => 31556926, 'month' => 2629744, 'week' => 604800, 'day' => 86400, 'hour' => 3600, 'minute'=> 60
    );
    
    //now we just find the difference
    if ($diff == 0)
    {
        return 'just now';
    }    

    if ($diff < 60)
    {
        return $diff == 1 ? $diff . ' second ago' : $diff . ' seconds ago';
    }        

    if ($diff >= 60 && $diff < $intervals['hour'])
    {
        $diff = floor($diff/$intervals['minute']);
        return $diff == 1 ? $diff . ' minute ago' : $diff . ' minutes ago';
    }        

    if ($diff >= $intervals['hour'] && $diff < $intervals['day'])
    {
        $diff = floor($diff/$intervals['hour']);
        return $diff == 1 ? $diff . ' hour ago' : $diff . ' hours ago';
    }    

    if ($diff >= $intervals['day'] && $diff < $intervals['week'])
    {
        $diff = floor($diff/$intervals['day']);
        return $diff == 1 ? $diff . ' day ago' : $diff . ' days ago';
    }    

    if ($diff >= $intervals['week'] && $diff < $intervals['month'])
    {
        $diff = floor($diff/$intervals['week']);
        return $diff == 1 ? $diff . ' week ago' : $diff . ' weeks ago';
    }    

    if ($diff >= $intervals['month'] && $diff < $intervals['year'])
    {
        $diff = floor($diff/$intervals['month']);
        return $diff == 1 ? $diff . ' month ago' : $diff . ' months ago';
    }    

    if ($diff >= $intervals['year'])
    {
        $diff = floor($diff/$intervals['year']);
        return $diff == 1 ? $diff . ' year ago' : $diff . ' years ago';
    }
}
 
}
