<?php
include ('config.php');

$idpesakit=$_POST['idpesakit'];
$namapesakit=$_POST['namapesakit'];
$noic=$_POST['noic'];
$alamat=$_POST['alamat'];
$notel=$_POST['notel'];



echo"<br>";

$query="INSERT into maklumatpesakit values('$idpesakit','$namapesakit','$noic','$alamat','$notel')";
if(mysql_query($query)){
if ($result==TRUE) header("Location:datapesakit.php");
if ($result==FALSE) header("Location:datapesakit.php");}
	
else

echo " ERROR";

?>