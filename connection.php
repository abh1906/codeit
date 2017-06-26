<?php
$servername = "localhost";
$username = "root";
$password = "Abh12345#";
$dbname="codeit";
$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error){
   echo $con->error;
}

?> 
