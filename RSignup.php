<?php
session_start();

	include("Connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$password = $_POST['password'];

		if(!empty($fullname) && !empty($username) && !empty($email) && !empty($mobile) && !empty($password) && !is_numeric($fullname))
		{

			//save to database
			$query = "insert into users (fullname, username ,email ,mobile ,password) values ('$fullname','$username','$email','$mobile','$password')";

			mysqli_query($con, $query);

			header("Location: RLogin.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="RSignup.css">
		<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  </head>
  <body>

    <div id="wrapper">
      <header>
      <h1>Basa-Bari</h1>
      <h2>find the home you are looking for</h2>
    </header>

    <nav>
      <ul class="menu">
            <a href="Homepage.html">  <li>home</li><a>

        <a href="RSearch.php"> <li>find houses</li><a>
        <li>contact us</li>
        <li>about us</li>
      <a href="RLogin.php"> <li>log in</li> </a>
      </nav>
    </div>
<div class="container">
<div class="login-box">
  <h1>Sign Up</h1>
    <form method="post">
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="fullname" placeholder="Full Name">
  </div>
  <div class="textbox">
    <i class="fas fa-user-secret"></i>
    <input type="text" name="username" placeholder="Username">
  </div>
  <div class="textbox">
  <i class="far fa-envelope-open"></i>
    <input type="text" name="email" placeholder="E-mail">
  </div>
  <div class="textbox">
<i class="fas fa-mobile-alt"></i>
    <input type="text" name="mobile" placeholder="Mobile No">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" placeholder="Password">
  </div>
  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="re-password" placeholder="Re-type Password">
  </div>

  <input type="submit" class="btn" value="Sign up">
  </form>
  </div>
  </div>

<footer class="panel-footer">

   <div class="row">
     <section id="hours" class="col-sm-4">
       <span>Hours:</span><br>
       Sun-Thurs: 11:15am - 10:00pm<br>
       Sat: 11:15am - 2:30pm<br>
       Friday Closed
       <hr class="visible-xs">
     </section>
     <section id="address" class="col-sm-4">
       <span>Address:</span><br>
       Chittagong University of Enginering & Technology <br>
       Chittagong, Bangladesh
       <hr class="visible-xs">
     </section>
     <section id="testimonials" class="col-sm-4">
       <p>"Best place to find your dream house!"</p>
       <p>"Really made finding houser a lot easier!"</p>
     </section>
   </div>
   <div class="text-center">&copy; Copyright Basa-Bari 2020</div>

</footer>


  </body>
</html>
