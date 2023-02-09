
<?php
session_start();

  include("connection.php");
  include("functions.php");
  include("mailer.php");

  

  $user_data = check_login($con);


  $user_id = $_POST['user_name'];
  $email =$_POST['email'];
  $message=$_POST['message'];

  // $times = $_POST['appt'];
 



  // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  $query = "INSERT INTO `message` (`userid`, `email`, `messages`) VALUES ('$user_id','$email','$message')";

  mysqli_query($con,$query);



    // header("Location: login.php");
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lab4</title>
</head>
<style type="text/css">

  body{
    align-items: center;
    text-align: center;
    background-color: grey;
  }


	</style>
<body>
  <a href = "logout.php">Logout</a>
  <h1>Hello <?php echo $user_data['user_name'];?></h1>
   <form method = "post">
    <h3>Enter email</h3>
   <input id="text" type="text" name="email"><br><br>
   <h3> Select time </h3>

<input type="time" id="appt" name="appt">
       <br><br>
    <textarea name = "message" placeholder="Please type message here"></textarea>
    <br>
    <br>
    <button  type = "submit" name ="send"> Send</button>



   </form>
</body>



</html>