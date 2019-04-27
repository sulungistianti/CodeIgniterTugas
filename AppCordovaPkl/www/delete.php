<?php
 include "db.php";
 if(isset($_GET['NIP']))
 {
 $NIP=$_GET['NIP'];
 $q=mysqli_query($con,"delete from `dosen` where `NIP`='$NIP'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
