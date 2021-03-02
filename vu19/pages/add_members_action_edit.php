<?php
session_start();

require_once './../../class/secretary.php';
 
require_once './../../pdoconn/secretaryconfig.php';

$pdo = new PDO(conStringsecretary, dbUsersecretary, dbPasssecretary); 
$date_time  = date('Y-m-d H:i:s');
$now = date("Y-m-d");
$user_id = $_SESSION['userid'];
$created_by =  $_SESSION['email'];
$activity = "Members Edit";
$summary = "Members Edit Activity Recorded From Device And IP"; 
//$login = filter_input(INPUT_POST, 'submitCreateUser', FILTER_SANITIZE_STRING);

 if(!isset($user_id)){
        header('Location:' . 'r?inv17ml44=logout'); 
 }else
{
  $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS); 

 
$firstname = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$lastname = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$place_of_birth = filter_input(INPUT_POST, 'place_of_birth', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$region_of_birth = filter_input(INPUT_POST, 'region_of_birth', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$country_of_birth = filter_input(INPUT_POST, 'country_of_birth', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);

$profession = filter_input(INPUT_POST, 'profession', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$email_id = filter_input(INPUT_POST, 'email_id', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);

$phone_number = filter_input(INPUT_POST, 'phone_number', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$street_name_house_address = filter_input(INPUT_POST, 'street_name_house_address', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$city_house_address = filter_input(INPUT_POST, 'city_house_address', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$region_of_house_address = filter_input(INPUT_POST, 'region_of_house_address', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);

$long_lived_house = filter_input(INPUT_POST, 'long_lived_house', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$house_less_than_3 = filter_input(INPUT_POST, 'house_less_than_3', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$postal_address = filter_input(INPUT_POST, 'postal_address', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$city_postal_address = filter_input(INPUT_POST, 'city_postal_address', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$region_postal_address = filter_input(INPUT_POST, 'region_postal_address', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$married = filter_input(INPUT_POST, 'married', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$married_type = filter_input(INPUT_POST, 'married_type', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$fathers_address = filter_input(INPUT_POST, 'fathers_address', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);

$fathers_contact = filter_input(INPUT_POST, 'fathers_contact', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$fathers_city_address = filter_input(INPUT_POST, 'fathers_city_address', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$fathers_region = filter_input(INPUT_POST, 'fathers_region', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);

$welfare_pin = filter_input(INPUT_POST, 'welfare_pin', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$date_of_initiation = filter_input(INPUT_POST, 'date_of_initiation', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$court_initiation = filter_input(INPUT_POST, 'court_initiation', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$house = filter_input(INPUT_POST, 'house', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$rank = filter_input(INPUT_POST, 'rank', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$lde_status = filter_input(INPUT_POST, 'lde_status', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$prospers_names = filter_input(INPUT_POST, 'prospers_names', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$name_of_parish = filter_input(INPUT_POST, 'name_of_parish', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$place_of_baptism = filter_input(INPUT_POST, 'place_of_baptism', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$fathers_name = filter_input(INPUT_POST, 'fathers_name', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$mothers_address = filter_input(INPUT_POST, 'mothers_address', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$mothers_name = filter_input(INPUT_POST, 'mothers_name', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);

$mothers_contact = filter_input(INPUT_POST, 'mothers_contact', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$mothers_city_address = filter_input(INPUT_POST, 'mothers_city_address', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$mothers_region = filter_input(INPUT_POST, 'mothers_region', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);



$other_name =strtoupper(filter_input(INPUT_POST, 'other_name', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS));
$name_of_spouse = filter_input(INPUT_POST, 'name_of_spouse', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$spouse_number = filter_input(INPUT_POST, 'spouse_number', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$spouse_address = filter_input(INPUT_POST, 'spouse_address', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$spouse_city_address = filter_input(INPUT_POST, 'spouse_city_address', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$spouse_region = filter_input(INPUT_POST, 'spouse_region', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);


$number_of_children = filter_input(INPUT_POST, 'number_of_children', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$names_of_children = filter_input(INPUT_POST, 'names_of_children', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
$tittles = filter_input(INPUT_POST, 'tittles', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);

$secondary_number = filter_input(INPUT_POST, 'secondary_number', FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);


$sms_format_1 = substr($phone_number, 1);
$sms_format_1 = $country_of_birth.$sms_format_1;

  $stmtp = $pdo->prepare("UPDATE members SET 
  last_name = :last_name,
   first_name =:first_name,
  tittles = :tittles,
   dob =:dob,
  place_of_birth = :place_of_birth,
   region_of_birth =:region_of_birth,
  country_of_birth = :country_of_birth,
   profession =:profession,
 email_id = :email_id,
   phone_number =:phone_number,
   secondary_number =:secondary_number,
  sms_format_1=:sms_format_1,
  street_name_house_address=:street_name_house_address,
  city_house_address=:city_house_address,
  region_of_house_address=:region_of_house_address,
   long_lived_house =:long_lived_house,
house_less_than_3 = :house_less_than_3,
   postal_address =:postal_address,
   city_postal_address =:city_postal_address, 
    region_postal_address =:region_postal_address, 
   married = :married,
    married_type =:married_type,
welfare_pin = :welfare_pin,
   date_of_initiation =:date_of_initiation,
  court_initiation = :court_initiation,
   house_name =:house_name,
ranks = :ranks, 
  lde_status =:lde_status,
  prospers_names = :prospers_names,
   name_of_parish =:name_of_parish,
place_of_baptism = :place_of_baptism, 
  fathers_name =:fathers_name,
  fathers_contact =:fathers_contact,
  fathers_address = :fathers_address, 
  fathers_city_address = :fathers_city_address, 
  fathers_region = :fathers_region, 
  mothers_name =:mothers_name,
mothers_address = :mothers_address,
mothers_contact = :mothers_contact,
mothers_city_address = :mothers_city_address,
mothers_region = :mothers_region,
name_of_spouse =:name_of_spouse,
  spouse_number = :spouse_number, 
  spouse_address =:spouse_address,
  spouse_city_address =:spouse_city_address,
  spouse_region =:spouse_region
  
   WHERE member_id = :member_id AND u_id = :u_id");
  
  $stmtp ->bindParam(':last_name', $lastname,PDO::PARAM_STR);
  $stmtp ->bindParam(':first_name', $firstname,PDO::PARAM_STR);
  $stmtp ->bindParam(':tittles', $tittles,PDO::PARAM_STR);
  $stmtp ->bindParam(':dob', $dob,PDO::PARAM_STR);
$stmtp ->bindParam(':place_of_birth', $place_of_birth,PDO::PARAM_STR);
  $stmtp ->bindParam(':region_of_birth', $region_of_birth,PDO::PARAM_STR);
  $stmtp ->bindParam(':country_of_birth', $country_of_birth,PDO::PARAM_STR);
  $stmtp ->bindParam(':profession', $profession,PDO::PARAM_STR);
$stmtp ->bindParam(':email_id', $email_id,PDO::PARAM_STR);
  $stmtp ->bindParam(':phone_number', $phone_number,PDO::PARAM_STR);
  $stmtp ->bindParam(':secondary_number', $secondary_number,PDO::PARAM_STR);
  
  $stmtp ->bindParam(':sms_format_1', $sms_format_1,PDO::PARAM_STR);
  $stmtp ->bindParam(':street_name_house_address', $street_name_house_address,PDO::PARAM_STR);
    $stmtp ->bindParam(':city_house_address', $city_house_address,PDO::PARAM_STR);
   $stmtp ->bindParam(':region_of_house_address', $region_of_house_address,PDO::PARAM_STR);
   $stmtp ->bindParam(':long_lived_house', $long_lived_house,PDO::PARAM_STR);
$stmtp ->bindParam(':house_less_than_3', $house_less_than_3,PDO::PARAM_STR);
  $stmtp ->bindParam(':postal_address', $postal_address,PDO::PARAM_STR);
   $stmtp ->bindParam(':city_postal_address', $city_postal_address,PDO::PARAM_STR);
   $stmtp ->bindParam(':region_postal_address', $region_postal_address,PDO::PARAM_STR);
$stmtp ->bindParam(':married', $married,PDO::PARAM_STR);
  $stmtp ->bindParam(':married_type', $married_type,PDO::PARAM_STR);
$stmtp ->bindParam(':welfare_pin', $welfare_pin,PDO::PARAM_STR);
  $stmtp ->bindParam(':date_of_initiation', $date_of_initiation,PDO::PARAM_STR);
  $stmtp ->bindParam(':court_initiation', $court_initiation,PDO::PARAM_STR);
  $stmtp ->bindParam(':house_name', $house,PDO::PARAM_STR);
 $stmtp ->bindParam(':ranks', $rank,PDO::PARAM_STR);
  $stmtp ->bindParam(':lde_status', $lde_status,PDO::PARAM_STR);
  $stmtp ->bindParam(':prospers_names', $prospers_names,PDO::PARAM_STR);
  $stmtp ->bindParam(':name_of_parish', $name_of_parish,PDO::PARAM_STR);
  $stmtp ->bindParam(':place_of_baptism', $place_of_baptism,PDO::PARAM_STR);
  $stmtp ->bindParam(':fathers_name', $fathers_name,PDO::PARAM_STR);
   $stmtp ->bindParam(':fathers_contact', $fathers_contact,PDO::PARAM_STR);
  $stmtp ->bindParam(':fathers_address', $fathers_address,PDO::PARAM_STR);
  $stmtp ->bindParam(':fathers_city_address', $fathers_city_address,PDO::PARAM_STR);
  $stmtp ->bindParam(':fathers_region', $fathers_region,PDO::PARAM_STR);
 $stmtp ->bindParam(':mothers_name', $mothers_name,PDO::PARAM_STR);
  $stmtp ->bindParam(':mothers_address', $mothers_address,PDO::PARAM_STR);
  $stmtp ->bindParam(':mothers_city_address', $mothers_city_address,PDO::PARAM_STR);
  $stmtp ->bindParam(':mothers_region', $mothers_region,PDO::PARAM_STR);
  $stmtp ->bindParam(':mothers_contact', $mothers_contact,PDO::PARAM_STR);
 $stmtp ->bindParam(':name_of_spouse', $name_of_spouse,PDO::PARAM_STR);
  $stmtp ->bindParam(':spouse_number', $spouse_number,PDO::PARAM_STR);
  $stmtp ->bindParam(':spouse_address', $spouse_address,PDO::PARAM_STR);
   $stmtp ->bindParam(':spouse_city_address', $spouse_city_address,PDO::PARAM_STR);
  $stmtp ->bindParam(':spouse_region', $spouse_region,PDO::PARAM_STR);
  $stmtp ->bindParam(':u_id', $user_id,PDO::PARAM_STR);
$stmtp ->bindParam(':member_id', $id,PDO::PARAM_STR);

  

 $stmtb = $pdo ->prepare('INSERT INTO task_timeliness(u_id,task,summary,date_of_task,datetime_of_task,created_by)VALUES
 (:u_id,:task,:summary,:date_of_task,:datetime_of_task,:created_by)');
$stmtb ->bindParam(':u_id', $_SESSION['userid']);
$stmtb ->bindParam(':task', $activity);
$stmtb ->bindParam(':summary', $summary);
  $stmtb ->bindParam(':date_of_task', $now);
$stmtb ->bindParam(':datetime_of_task', $date_time);
$stmtb ->bindParam(':created_by', $_SESSION['email'] );
$stmtb->execute();

if($stmtp->execute()){
       // $url = explode('?', $_SERVER['HTTP_REFERER']);
       //  header('Location:' . $url[0] . '?m=5');  
      // href="./pages/r?inv17ml44=add_houses"  
    //  if($secretary->saveMessageac()){
        header('Location:' . 'r?inv17ml44=add_members');    
    //  }
        
  
} else {
     $url = explode('?', $_SERVER['HTTP_REFERER']);
         header('Location:' . $url[0] . '?m=6');    
}}


 