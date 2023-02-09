<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "logindb";

If (!$con = mysqli_connect($dbhost , $dbuser, $dbpass, $dbname)){
  die("FAILED TO CONNECT");
}
