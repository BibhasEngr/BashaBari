<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="RAddhouse.css">
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

      <a href="RSearch.php">  <li>find houses</li><a>
        <li>contact us</li>
        <li>about us</li>
      <a href="RLogin.php"> <li>log in</li> <a>
      </nav>
    </div>
    	Hello, <?php echo $user_data['username']; ?>
<div class="login-box">
  <h1>Add Details Of Your House</h1>
	<form action="Connections2.php" method="post" enctype="multipart/form-data">

  <div class="textbox">
  <i class="fas fa-city"></i>
    <input type="text" name="city" placeholder="City">
  </div>
	<div class="textbox">
	<i class="fas fa-vector-square"></i>
		<input type="text" name="area" placeholder="Area">
	</div>
  <div class="textbox">
    <i class="fas fa-map-marker-alt"></i>
    <input type="text" name="address" placeholder="Address">
  </div>

  <div class="textbox">
<i class="fas fa-align-justify"></i>
    <input type="text" name="floorno" placeholder="Floor No">
  </div>
  <div class="textbox">
    <i class="fa fa-bed" aria-hidden="true"></i>
    <input type="number" name="rooms" placeholder="Number of rooms">
  </div>

  <div class="textbox">
  <i class="fas fa-bath"></i>
    <input type="number" name="washrooms" placeholder="No of Washroom">
  </div>

<div class="textbox">
<i class="fab fa-vuejs"></i>
  <input type="number" name="vacant" placeholder="Vacancy">
</div>
<div class="textbox">
  <i class="fa fa-info" aria-hidden="true"></i>
  <input type="text" name="description" placeholder="Description">
</div>
<div class="textbox">
  <i class="fa fa-credit-card" aria-hidden="true"></i>
	<input type="number" name="rent" placeholder="Rent">
</div>
<div class="textbox">
	<i class="fas fa-lock"></i>
	<input type="number" name="balcony" placeholder="Balcony">
</div>
<div class="textbox">
	<i class="fas fa-vector-square"></i>
	<input type="number" name="size" placeholder="Property Size">
</div>
<div class="textbox">
  <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
 <input type="text" name="lift" placeholder="Lift">
</div>
<div>Upload a image:<input type="file" name="image" id="image"></div>



  <input type="submit" class="btn" value="Submit">
	  </form>
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

<script>
 $(document).ready(function(){
      $('#submit').click(function(){
           var image_name = $('#image').val();
           if(image_name == '')
           {
                alert("Please Select Image");
                return false;
           }
           else
           {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                     alert('Invalid Image File');
                     $('#image').val('');
                     return false;
                }
           }
      });
 });
 </script>
