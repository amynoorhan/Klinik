<?php
include ('config.php');

$idpesakit=$_POST['idpesakit'];
$jenispenyakit=$_POST['jenispenyakit'];
$tarikh=$_POST['tarikh'];
$nama_ubat=$_POST['nama_ubat'];




echo"<br>";

$query="INSERT into rekodpesakit values('$idpesakit','$jenispenyakit','$tarikh','$nama_ubat')";
if(mysql_query($query)){
if ($result==TRUE) header("Location:rekod.php");
if ($result==FALSE) header("Location:rekod.php");}
	
else

echo " ERROR";

?>