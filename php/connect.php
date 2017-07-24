 <?php

 $username = "root";
 $password = "mekhti";
 $server = "localhost";
 $database = "tbilisishuttle";

 $conn = mysqli_connect($server,$username,$password,$database);
 //mysql_query("SET NAMES UTF8");

 if(!($conn)){
     echo "Baglanti Hatali !!!";
     exit();
 }else{
     echo "Baglanti Basarili !!!";
 }

 ?>
