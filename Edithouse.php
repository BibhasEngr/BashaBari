
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="Edithouse.css">
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

        <li>find houses</li>
        <li>contact us</li>
        <li>about us</li>
      <a href="RLogin.php"> <li>log in</li> </a>
      </nav>
    </div>
<div class="login-box">
  <h1>Update Your House</h1>
	<form method="post">
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
<i class="fas fa-door-open"></i>
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
  <i class="fab fa-dochub"></i>
  <input type="text" name="description" placeholder="Description">
</div>
<div class="textbox">
	<i class="fas fa-lock"></i>
	<input type="number" name="rent" placeholder="Rent">
</div>
<div class="textbox">
	<i class="fas fa-lock"></i>
	<input type="number" name="balcony" placeholder="Balcony">
</div>
<div class="textbox">
	<i class="fas fa-lock"></i>
	<input type="number" name="size" placeholder="Property Size">
</div>
<div class="textbox">
	<i class="fas fa-lock"></i>
	<input type="text" name="lift" placeholder="Lift">
</div>
<div><input type="file" name="image" id="image"></div>


<input type="submit" name="update" class="btn" value="Update">

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



<?php


	$connection = mysqli_connect("localhost", "root", "");
	$db=mysqli_select_db($connection,'basabari');


if(isset($_POST['update']))
{
	$city = $_POST['city'];
  	$area = $_POST['area'];
	$query = "UPDATE `addhouse` SET address='$_POST[address]',rooms='$_POST[rooms]',washrooms='$_POST[washrooms]',vacant='$_POST[vacant]',description='$_POST[description]',rent='$_POST[rent]',floorno='$_POST[floorno]',balcony='$_POST[balcony]',size='$_POST[size]',lift='$_POST[lift]',image='$_POST[image]' where city='$_POST[city]' AND area='$_POST[area]' ";
	$query_run=mysqli_query($connection,$query);
	if($query_run)
	{
		echo'<script type="text/javascript">alert("Data updated")</script>';
	}
	else
	{
		echo'<script type="text/javascript">alert("Data not updated")</script>';
	}
}



?>

<script>
 $(document).ready(function(){
      $('#update').click(function(){
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
