<?php
include('config.php');
$idpesakit=$_GET['idpesakit'];
$query="delete from maklumatpesakit where idpesakit='$idpesakit'";
$result=mysql_query($query);


if($result==TRUE){
	header ("location:datapesakit.php");
}

?>