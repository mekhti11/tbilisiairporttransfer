<?php
session_start();
include 'connect.php';
  ini_set('error_reporting', E_ALL|E_STRICT);
  ini_set('display_errors', 1);


if(isset($_POST['reserveprivateshuttle'])){
  $sql ="INSERT INTO `shuttle`(`name`, `mail`, `phone`, `private`, `hotel_name`, `transferdate`, 
                              `transfertime`, `transfertype`, `flight`, `personnum`) VALUES 
                              (
                                '".$_POST['uname']."','".$_POST['email']."','".$_POST['phonenum']."','private','".$_POST['hotel_name']."',
                                '".$_POST['transfer_date']."','".$_POST['hour']." : ".$_POST['minute']."','".$_POST['transfer_type']."',
                                '".$_POST['flight']."',".$_POST['personnum']."
                              )";

  if( mysqli_query($conn,$sql))
    header("Location:../index.php?reserveprivateshuttle=ok");
  else
    header("Location:../index.php?reserveprivateshuttle=no");
  
}


if(isset($_POST['hotel_reserveashuttle'])){
  $query = "SELECT * FROM `hotels` WHERE `hotel_name` = '".$_SESSION['hotel_name']."'";
  $result = mysqli_query($conn,$query);
  $row = mysqli_fetch_array($result);
  $sql ="INSERT INTO `shuttle`(`name`, `mail`, `phone`, `private`, `hotel_name`, `transferdate`, 
                              `transfertime`, `transfertype`, `flight`, `personnum` , `hotel_id`) VALUES 
                              (
                                '".$_POST['uname']."','".$_POST['email']."','".$_POST['phonenum']."','private','".$_SESSION['hotel_name']."',
                                '".$_POST['transfer_date']."','".$_POST['hour']." : ".$_POST['minute']."','".$_POST['transfer_type']."',
                                '".$_POST['flight']."',".$_POST['personnum'].",".$row['hotel_id']."
                              )";
  if( mysqli_query($conn,$sql))
    header("Location:../pages/newres.php?reserveprivateshuttle=ok");
  else
    header("Location:../pages/newres.php?reserveprivateshuttle=no");
}


if(isset($_POST['ayarkaydet'])){
  $sql = "UPDATE `ayarlar` SET `title`='".$_POST['title']."',`phonenum`='".$_POST['phonenum']."',
          `address`='".$_POST['address']."',`mail`='".$_POST['mail']."' WHERE 1";
  if( mysqli_query($conn,$sql))
    header("Location:../admin/ayarlar.php?ayarkaydet=ok");
  else
   header("Location:../admin/ayarlar.php?ayarkaydet=no");
}


if(isset($_POST['bookashuttle'])){
  $sql ="INSERT INTO `shuttle`(`name`, `mail`, `phone`, `private`, `hotel_name`, `transferdate`, 
                              `transfertime`, `transfertype`, `flight`, `personnum`) VALUES 
                              (
                                '".$_POST['uname']."','".$_POST['email']."','".$_POST['phonenum']."','shuttle','".$_POST['hotel_name']."',
                                '".$_POST['transferdate']."','".$_POST['shuttletime']."','".$_POST['transfer_type']."',
                                '".$_POST['flight']."',".$_POST['personnum']."
                              )";
  echo $sql;
  if( mysqli_query($conn,$sql))
    header("Location:../pages/bookashuttle.php?submit=ok");
  else
    header("Location:../pages/bookashuttle.php?submit=no");
  
}

if(isset($_POST['searchshuttle'])){
  $resnum = $_POST['resnum'];
  $sql = "SELECT * FROM `shuttle` WHERE `id` = ".$resnum;
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
  if($_POST['uname'] == $row['name'] && $_POST['email'] == $row['mail']){
    $_SESSION['shuttle_id'] = $row['id'];
    header("Location:../pages/urbookin.php?reservation=".$resnum);
    exit();
  }else{
    header("Location:../pages/urbookin.php?reservation=".'0');
  }
}


if(isset($_POST['hotellogin'])){
  $hotel_kadi = $_POST['uname'];
  $password = $_POST['psw'];
  $sql = "SELECT * FROM `hotels` WHERE `hotel_kadi` = '".$hotel_kadi."' AND `password`= '".$password."'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
  echo $row['hotel_id'];
  $_SESSION['hotel_id'] = $row['hotel_id'];
  $hotel_id = $row['hotel_id'];
  $_SESSION['hotel_name'] = $row['hotel_name'];
  if($hotel_id > 0){
    header("Location:../pages/reservations.php?login=ok");
    exit();
  }
  else{
    header("Location:../pages/errorpage.php?login=no");
  }
}

if(isset($_POST['hotel_logout'])){
  unset($_SESSION['hotel_name']);
  header("Location:../index.php");
}


?>