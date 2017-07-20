 <?php

 $username = "root";
 $password = "mekhti";
 $server = "localhost";
 $database = "tbilisishuttle";

 $connect = mysql_connect($server,$username,$password);
 //mysql_query("SET NAMES UTF8");

 if(!($connect)){
     echo "Baglanti Hatali !!!";
     exit();
 }else{
     echo "Baglanti Basarili !!!";
 }

 $db = mysql_select_db($database);
 if(!($db))
     echo "Database baglanti hatasi";
 else
     echo "Database baglanti basarili";

 ?>
