<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="Ustyle.css">
  </head>
  <body>
    <div id="wrapper">
      <header>
      <h1>Basa-Bari</h1>
      <h1>Welcome  <?php echo $user_data['username']; ?> </h1>
    </header>
    <nav>
         <ul class="menu">
         <a href="Homepage.html">  <li>home</li><a>
           <li>find houses</li>
           <li>contact us</li>
           <li>about us</li>
     <a href="RLogin.php"> <li>log in</li> </a>
         </nav>

       </div>
       <nav>
            <ul class="op">
             <li><a href="RAddhouse.php"> Add Houses</a></li>
						 <li><a href="logout.php">Logout</a></li>
             <li><a href="Edithouse.php">Edit Houses</li>
            </nav>

            <nav>
                 <ul class="op2">

                  <li><i class="fas fa-home"></i></li>
                      <li><i class="fas fa-house-damage"></i></li>
                   <li><i class="fas fa-house-damage"></i></li>
                 </nav>
