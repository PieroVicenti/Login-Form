<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample_db";

// variable which connects to the database
// the if statement has been put simply to trhow an error in case the 
//connection with the database goes wrong
if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){

    die("Failed connection with database");
}



?>