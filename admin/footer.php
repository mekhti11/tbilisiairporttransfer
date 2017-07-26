 <?php
  include '../php/connect.php';

/* 
*ini_set('error_reporting', E_ALL|E_STRICT);
*ini_set('display_errors', 1);
*/

  $sql = "SELECT * FROM ayarlar";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
?>
 
<div id="footer-sec">
    <?php echo $row['footer'];?>
</div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>