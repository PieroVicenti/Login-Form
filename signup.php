<?php
session_start();

   include("connection.php");
   include("functions.php");
   
   if($_SERVER['REQUEST_METHOD']==="POST")
   {
       //something was posted
       $user_name = $_POST['user_name'];
       $password = $_POST['password'];

       if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
       {
             //save to database
             $user_id = random_num(20);
             $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";
             
            mysqli_query($con, $query);
            header("Location: login.php");
            die;
       
        }else
      {
       echo "Please enter valid information";
      }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
</head>
<body>
<style type="text/css">
	

	body{
        text-align: center;
        align-items: center;
        background-color: whitesmoke;
        align-items: center;
        font-size: 1.5rem;
        font-family: monospace;
    }

	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: greenyellow;
        color: black;
		border: none;
        border-radius: 10px;
        font-size: 1.5rem;
        font-family: monospace;
	}
    #button:hover{
        background-color: green;
        color: whitesmoke;
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
	}

    #click{
        text-decoration: none;
        color: whitesmoke;
        background-color: whitesmoke;
        border:none;
        border-radius: 10px;
        color: black;
        padding: 10px;
        width: 100%;
    }
    #click:hover{
        color: black;
        background-color: yellow
    }

	</style>




<div id="box">
 
 <form method="POST">
     <div style="font-size: 20px; margin: 10px; color: white;">Signup</div>
 
     <input  id="text" type="text" name="user_name"/><br><br>
     <input  id="text" type="password" name="password"/><br><br>
 
     <input id="button" type="submit" value="Signup"/>
     <br>
     <br>
     <a id="click" href="login.php">Click to Login</a><br><br>
 </form>
   
 
</div>
</body>
</html>