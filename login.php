<?php 

session_start();

	include("connection.php");
	include("functions.php");
	// include("signup.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = mysqli_real_escape_string($con,$_POST['user_name']);
		$password = mysqli_real_escape_string($con,$_POST['password']);
	
		$salt = "47286rguibhifujsdgiough78r432gb!DSWQE989)H/";

		$hashed_password = hash('sha1',$password);
	
		$new_password = ($hashed_password . $salt);
	


		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			
			

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);
	

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password']=== $new_password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}

				}
				else
				{
					echo "wrong username or password!";
				}

			}


			

		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>
			<p>Enter Username</p>
			<input id="text" type="text" name="user_name"><br><br>
			<p>Enter password</p>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
			<a href="index.php">Click to go to Home page</a><br><br>
		</form>
	</div>
</body>
</html>
