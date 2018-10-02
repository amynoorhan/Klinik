<?php
include('config.php');
?>
<head>

<style>
  <html>
<style>
body {
font-family: Arial, Helvetica, sans-serif;
background-color: beige;}

body,td,th {
  color: #000;
}
</style>
<body>
<style>
#menu
{
    border:1px ;
    background-color: #ccc;
}
#menu ul
{
    list-style-type:none;
    margin:0;
    padding:0;
}
#menu ul li
{
    list-style-type:none;
    margin:0;
    padding:0;
    display:inline-table;
}
#menu ul li:hover
{
    list-style-type:none;
    margin:0;
    padding:0;
    background-color:grey;
}
#menu ul li a
{
    list-style-type:none;
    margin:0;
    padding:0;
    text-decoration:none;
    display: block;
    line-height:40px;
    padding: 0 10px;
}
body{
  background-image: url(".jpg");
background-color:beige;
 height: 110%; 

    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 10px;
    margin: 2px 0 10px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
     border-radius: 4px;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: skyblue;
    color: black;
    padding: 14px 20px;
    margin: 5px 0;
    border: none;
    cursor: pointer;
    width: 100px;
    opacity: 0.9;
     border-radius: 4px;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: pink;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 0px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
input[type=submit2] {
    width: 50px;
    background-color:pink;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
</style>
<head>
<div id="menu">

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:   #FF69B4;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color:   #FF00FF;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color:   #87CEFA;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color:    #FF00FF}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<ul>
  <li><a href="main.php">UTAMA</a></li>
  <li><a href="datapesakit.php">MAKLUMAT PESAKIT</a></li>
    <li><a href="rekod.php">REKOD PESAKIT</a></li>

       </div>
      
  </li>
</ul>

</body>
</div>
  </head>

<body>
  <center>
<font face="Courier New" font size="20" <h1>SISTEM PENDAFTARAN DAN REKOD PESAKIT</h1> </font>
<br>
<font face="Courier New" font size="20" <h1>KLINIK PASTI SIHAT</h1> </font>
</center></h4>
<br>
<br>
<br>
<br>
<br>
<br>
 
 
<style>
body {
  background-image: url(".jpg");
background-color:beige;
 height: 100%; 

    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  font-family:"calibri";
}
 #header{
  height: 355px;
  font-size: 20px;
  
  width: 100%;
  
 }
  #menu{
  border: 1px solid grey;
  
 }
  #kandungan{
  
  height: 100%;
  
 }
  #footer{
 
  height: 55px;
  text-align: center;
 
 }
 #wrapper {
  width: 100%;
  margin: 2px;
 }
#menu ul{
  list-style: none;
    margin: 0;
    padding: 0;
}

#menu ul li{
  display: inline-table;
}

#menu ul li a{
  text-decoration:none;
  display: block;
  line-height: 40px;
  padding: 0 10px;
}

#menu ul li:hover
{
  background-color: #4CAF50;
}

.dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.hover, .dropdown:hover .dropbtn {
    background-color: #4CAF50;
}

li.dropdown {
    display: inline-block;
    float: right;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color:#4CAF50}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<body>
  <div id="wrapper">

<div id="header">
  <center>
<div id="kandungan">
<style>
table,tr,th,td
{
  border: 1px solid grey;
  padding: 15px;
}
table
{
  border-collapse:collapse;
}

td {
  text-align: center;
}

tr:hover {
  background-color: #ddd;
}

th{
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: pink;
    color: black;
}

.btn {
    background-color: grey;
    color: grey;
    border: 2px solid grey;
    padding: 7px;
    border-radius: 10px;
}

.btn a {
  text-decoration: none;
  color: black;
}

.btne {
  background-color: #FFFF00;
    color: #FFFF00;
    border: 2px;
    padding: 5px;
    border-radius: 5px;
}

.btnd {
  background-color: red;
    color: red;
    border: 2px;
    padding: 5px;
    border-radius: 5px;
}

table td button a{
  text-decoration: none;
  color: black;
}
.btn{
  padding: 10px;
  font-size: 15px;
  color:black;
  background: #5F9EA0;
  border-radius: 5px;
}

</style>
<br>
<center>
<font face="Courier New" font size="20" <h1>MAKLUMAT PESAKIT</h1></font><br><br>
<?php
include('config.php');
$sql="SELECT * from maklumatpesakit ORDER BY idpesakit";
$result=mysql_query($sql)or die(mysql_error());
?>
<style>
table{
  width;100%;
}
th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
<center><table style="width:70%"><br>

  <br>
  <br>
<table border="1" width="849" align="center" cellspacing="1" cellpadding="">
<tr>
<th align="center"><strong>Id Pesakit</strong></th>
<th align="center"><strong> Nama Pesakit</strong></th>
<th align="center"><strong>No Ic</strong></th>
<th align="center"><strong>Alamat</strong></th>
<th align="center"><strong>No Telefon</strong></th>
<th align="center"><strong>Masalah Pesakit</strong></th>

<th align="center"><strong>Tindakan</strong></th>


</tr>

<?php
while($row=mysql_fetch_array($result))
{
  echo"<tr>";
    echo"<td><center>".$row["idpesakit"]."</td>";
  echo"<td>".$row["namapesakit"]."</td>";
  echo"<td>".$row["noic"]."</td>";
  echo"<td><center>".$row["alamat"]."</td>";
      echo"<td><center>".$row["notel"]."</td>";
  echo "<td><a href=\"penyakit.php?idpesakit=".$row['idpesakit']."\">Klik Sini</a>";
       echo "<td><a href=\"pros_delete.php?idpesakit=".$row['idpesakit']."\">Padam</a>";
}
echo"</table>";
echo"<center>";
echo"<br>";
?>
</table>
</center>
</form>
</body>

</center>
<br>
</div>
<div id="footer"> 
</div>
</center></form>
</div>
</body>
</html>