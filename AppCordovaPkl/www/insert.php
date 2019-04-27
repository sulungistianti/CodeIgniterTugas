<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $NIP=$_POST['NIP'];
 $Nama_dosen=$_POST['Nama_dosen'];
 $Alamat_dosen=$_POST['Alamat_dosen'];
 $Telp_dosen=$_POST['Telp_dosen'];
 $Email_dosen=$_POST['Email_dosen'];
 $alamat=$_POST['alamat'];
 
 $q=mysqli_query($con,"INSERT INTO `dosen` (`NIP`,`Nama_dosen`,`Alamat_dosen`,`Telp_dosen`,`Email_dosen`,`alamat`) VALUES ('$NIP','$Nama_dosen','$Alamat_dosen','$Telp_dosen','$Email_dosen','$alamat')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>