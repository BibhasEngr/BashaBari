<?php

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password))
		{

			//read from database
			$query = "select * from users where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);

					if($user_data['password'] === $password)
					{

						$_SESSION['username'] = $user_data['username'];
						header("Location: User.php");
						die;
					}
				}
			}

			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="admin_login_style.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <title></title>
  </head>
  <body>
    <div id="wrapper">
      <header>
      <h1>Basa-Bari</h1>
      <h2>find the home you are looking for</h2>
    </header>

    <nav id="header-nav">
        <ul class="menu">
      <a href="Homepage.html">
        <li>home</li><a>
        <li>find houses</li>
        <li>contact us</li>
        <li>about us</li>
  <a href="RLogin.php"> <li>log in</li> </a>
    </nav>
    </div>
<div class="container">
<div class="login-box">
  <h1>Admin Login</h1>
    <form method="post">
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="username" placeholder="Username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" placeholder="Password">
  </div>

  <input type="submit" class="btn" value="Sign in">

</form>
  <div class="loginbox">

  </div>
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
