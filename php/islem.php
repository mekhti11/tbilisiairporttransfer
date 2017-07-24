<?php

include 'connect.php';

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

?>