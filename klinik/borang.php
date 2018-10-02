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
   <li><a href="datapesakit.php">REKOD PESAKIT</a></li>
       </div>
      
  </li>
</ul>

</body>
</div>
    </head>
<body bgcolor="beige">
<form action="prosborang.php" method="post">
<center>
<body>
<P><font face="Courier New" font size="20" <h1>PENDAFTARAN MAKLUMAT PESAKIT</h1> </font>

 <P><font face="Courier New" font size="20" <h1>KILINIK PASTI SIHAT</h1> </font>
 </center></h4>
 <html>
<style>
<style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>
<body>

<div class="container">
<form action="prosborang.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="id">Id Pesakit</label>
      </div>
      <div class="col-75">
        <input type="text" id="id" name="idpesakit" placeholder=" Id pesakit">
      </div>
    </div>
       <div class="row">
      <div class="col-25">
        <label for="id">Nama Pesakit</label>
      </div>
      <div class="col-75">
        <input type="text" id="id" name="namapesakit" placeholder=" Mengikut kad pengenalan">
      </div>
    </div>
       <div class="row">
      <div class="col-25">
        <label for="id">No Kad Pengenalan</label>
      </div>
      <div class="col-75">
        <input type="text" id="id" name="noic" placeholder=" No K/P">
      </div>
    </div>
       <div class="row">
      <div class="col-25">
        <label for="id">Alamat</label>
      </div>
      <div class="col-75">
        <input type="text" id="id" name="alamat" placeholder=" Alamat sebenar">
      </div>
    </div>
       <div class="row">
      <div class="col-25">
        <label for="id">No Telefon</label>
      </div>
      <div class="col-75">
        <input type="text" id="id" name="notel" placeholder=" Nombor telefon">
      </div>
    </div>
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
</center>
</body>

</body>


<div class="bg"></div>
</div>
<center>
<div id="footer">
<h4>© KLINIK PASTI SIHAT. 2018 ALL RIGHTS RESERVED: KLINIK PASTI SIHAT</h4>
</center>
</div>
</div>


</html>
</center>

</html>
