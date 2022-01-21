<?php
session_start();
  $_SESSION;
        
        include("connection.php");
        include("functions.php");

        $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
<style type="text/css">

 body{
   background-color: whitesmoke;
   align-items: center;
   font-size: 1.5rem;
   font-family: monospace;
 }
 #click{
   color: whitesmoke;
   text-decoration: none;
 }
 button{
   background-color: red;
   border: none;
   border-radius: 10px;
	 padding: 10px;
   width: 100%;
   font-size: 1.5rem;
   font-family: monospace;
 }
 button:hover{
   background-color: pink;
   color: black;
 }
 #box{
		background-color: black;
		width: 300px;
		padding: 20px;
    border-radius: 10px;
    position: absolute;
    top:50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color:whitesmoke;
    text-align: center;
	}







  </style>
  <div id="box">
    <button><a id="click"href="logout.php">Logout</a></button>
    <br>
    <br>
    Hello, <?php echo $user_data['user_name'] ?>.
  </div>
</body>
</html>