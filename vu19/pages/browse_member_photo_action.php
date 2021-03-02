<?php
session_start();

require_once './../../class/secretary.php';
 
require_once './../../pdoconn/secretaryconfig.php';

$pdo = new PDO(conStringsecretary, dbUsersecretary, dbPasssecretary); 
$date_time  = date('Y-m-d H:i:s');
$now = date("Y-m-d");
$user_id = $_SESSION['userid'];
$created_by =  $_SESSION['email'];
$activity = "Appraisal Edit";
$summary = "Appraisal Edit Activity Recorded From Device And IP"; 
$member_id =  $_SESSION['member_id'];
//$login = filter_input(INPUT_POST, 'submitCreateUser', FILTER_SANITIZE_STRING);

 if(!isset($user_id)){
        header('Location:' . 'r?inv17ml44=logout'); 
 }else
{
 
  $statusMsg = '';
$fileName = '';
  // File upload path
  $targetDir = "./../../class/uploads/";
  $fileName = basename($_FILES["file"]["name"]);
  $targetFilePath = $targetDir . $fileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  
  if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"]) &&  ($_FILES["file"]["size"] < 8388608) ){
      // Allow certain file formats
      $allowTypes = array('jpg','png','jpeg','gif','pdf','JPG');

    //   if(filesize($fileName) > 8388608 ){
    //       die("Uploaded file size is too huge, upload 3 to 5 MB ");
    //   }

      if(in_array($fileType, $allowTypes)){
          // Upload file to server
          if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
              // Insert image file name into database
             // $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");

             $stmtp = $pdo->prepare("UPDATE members SET picture_url = :picture_url WHERE member_id = :member_id AND u_id = :u_id");
            
            
             $stmtp ->bindParam(':picture_url', $fileName,PDO::PARAM_STR);   
          $stmtp ->bindParam(':member_id', $member_id,PDO::PARAM_STR);
            $stmtp ->bindParam(':u_id', $user_id,PDO::PARAM_STR);

              if($stmtp->execute()){
                header('Location:' . 'r?inv17ml44=membber_picture_upload');    
                //  $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
             
                }else{
                  $statusMsg = "File upload failed, please try again.";
              } 
          }else{
              $statusMsg = "Sorry, there was an error uploading your file.";
          }
      }else{
          $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
      }



  }else{
      $statusMsg = 'Please select a file less than 8MB to upload.';
  }
  
  // Display status message
  echo $statusMsg;


//   $stmtp = $pdo->prepare("UPDATE member_appraisal SET appraisal = :deleted WHERE id = :member_id AND u_id = :u_id");
  
//   $stmtp ->bindParam(':deleted', $appraisal,PDO::PARAM_STR);
//   $stmtp ->bindParam(':member_id', $id,PDO::PARAM_STR);
// $stmtp ->bindParam(':u_id', $user_id,PDO::PARAM_STR);

  

//  $stmtb = $pdo ->prepare('INSERT INTO task_timeliness(u_id,task,summary,date_of_task,datetime_of_task,created_by)VALUES
//  (:u_id,:task,:summary,:date_of_task,:datetime_of_task,:created_by)');
// $stmtb ->bindParam(':u_id', $_SESSION['userid']);
// $stmtb ->bindParam(':task', $activity);
// $stmtb ->bindParam(':summary', $summary);
//   $stmtb ->bindParam(':date_of_task', $now);
// $stmtb ->bindParam(':datetime_of_task', $date_time);
// $stmtb ->bindParam(':created_by', $_SESSION['email'] );
// $stmtb->execute();

// if($stmtp->execute()){
    

//         header('Location:' . 'r?inv17ml44=appraisal_list');    
  
        
  
// } else {
//      $url = explode('?', $_SERVER['HTTP_REFERER']);
//          header('Location:' . $url[0] . '?m=6');    
// }


}


 