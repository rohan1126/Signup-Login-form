<?php
session_start();

  include("connection.php");
  include("functions.php");

	

  if($_SERVER['REQUEST_METHOD']=="POST"){
  $user_name=mysqli_real_escape_string($con,$_POST['user_name']);
  $password =mysqli_real_escape_string($con,$_POST['password']);



	$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);
	$number    = preg_match('@[0-9]@', $password);
	$specialChars = preg_match('@[^\w]@', $password);

	// $hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';
	// salt password]

	$salt = "47286rguibhifujsdgiough78r432gb!DSWQE989)H/";

	$hashed_password = hash('sha1',$password);

	$new_password = ($hashed_password . $salt);

	
	$user_num = preg_match('@[^\w]@', $user_name);




  if(!empty($user_name) && !empty($password))

	// 	if($user_req) {
	//     echo 'Username should not containt special chars';
	// }


	if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8 || $user_num) {
			echo 'Username should not include any special charachters';
    echo ' Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
}
else { {

			

				$user_id = random_num(20);
				$query = "insert into users (user_id,user_name,password,salt) values ('$user_id','$user_name','$new_password','$salt')";

				mysqli_query($con, $query);

				header("Location: login.php");
				die;



			}

  }else
  {
    echo "Please enter valid information";
  }

  }



?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
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
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>
			<p>Enter User Name</p>

			<input id="text" type="text" name="user_name"><br><br>
			<p>Enter password</p>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>
