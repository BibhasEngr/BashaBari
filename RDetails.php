<?php

session_start();

	include("RSearch1.php");


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
	 <meta charset="utf-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <title></title>
	 <link rel="stylesheet" href="bootstrap.min.css">

	 <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
	 <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
		 <link rel="stylesheet" href="RDetails.css">



 </head>
 <body>
<title></title>
<div id="wrapper">
  <header>
  <h1>Basa-Bari</h1>
  <h2>find the home you are looking for</h2>
</header>

<nav id="header-nav">
    <ul class="menu">
  <a href="Homepage.html">
    <li>home</li><a>
    <a href="RSearch.html">  <li>find houses</li><a>
    <li>contact us</li>
    <li>about us</li>
<a href="RLogin.php"> <li>log in</li> </a>
</nav>
</div>

  <div class="container">
<?php
		   $city=mysqli_real_escape_string($conn, $_GET['city']);
			 $area=mysqli_real_escape_string($conn, $_GET['area']);
       $sql="SELECT * FROM addhouse WHERE city='$city' AND area='$area'";
       $result= mysqli_query($conn,$sql);
       $queryResults=mysqli_num_rows($result);
       if($queryResults > 0)
       {
         while ($row= mysqli_fetch_assoc($result))
         {
           echo "
					 <h2> ".$row['rooms']." Bedroom House Is For Rent In ".$row['area']." With Satisfactory Rent</h2>
					 <h3> Property ID:" .$row['pid']."</h3>
					 <table class='table'>
					  <caption><h3>Overview:</h3></caption>
					 <thead>

				             <th>Rooms</th>
										 <th>Washrooms</th>
										 <th>Rent</th>
										 <th>Floor</th>



				     </thead>
					     <tbody>
					         <tr class='active-row'>
					             <td>  <i class='fas fa-bed' aria-hidden='true'>  " .$row['rooms']."</td>
					             <td>   <i class='fas fa-bath' aria-hidden='true'></i>  ".$row['washrooms']."</td>
											 <td>  <i class='fas fa-credit-card' aria-hidden='true'>  ".$row['rent']."</td>
											 <td>   <i class='fas fa-align-justify' aria-hidden='true'>  ".$row['vacant']."</td>

					         </tr>
					     </tbody>
					 </table>

					 <table class='table'>

   		 		 <thead>
                    <tr>
										<th>Description:</th>
                    </tr>
						</thead>
							<tbody>
									<tr class='active-row'>
									<td>Property Size: " .$row['size']."sqft</td>
									</tr>
									<tr class='active-row'>
									<td>Bed: " .$row['rooms']."</td>
									</tr>
									<tr class='active-row'>
									<td>Bath: " .$row['washrooms']."</td>
									</tr>
									<tr class='active-row'>
									<td>Number of Balcony:  " .$row['balcony']."</td>
									</tr>
									<tr class='active-row'>
									<td>Floor: " .$row['floorno']."</td>
									</tr>
									<tr class='active-row'>
									<td>Lift: " .$row['lift']."</td>
									</tr>
									<tr class='active-row'>
									<td>Description: " .$row['description']."</td>
									</tr>
									<tr class='active-row'>
									<td>Rent: " .$row['rent']."</td>
									</tr>

							</tbody>
					</table>

					<table class='table'>

					<thead>
									 <tr>
									 <th>Address:</th>
									 </tr>
					 </thead>
						 <tbody>
								 <tr class='active-row'>
								 <td>City: " .$row['city']."</td>
								 </tr>
								 <tr class='active-row'>
								 <td>Area: " .$row['area']."</td>
								 </tr>
								 <tr class='active-row'>
								 <td>Address: " .$row['address']."</td>
								 </tr>


						 </tbody>
				 </table>

				 <table class='table'>

				 <thead>
									<tr>
									<th>Images:</th>
									</tr>
					</thead>
						<tbody>
								<tr class='active-row'>
								<td> <img src='data:image/jpeg;base64,".base64_encode($row['image'] )."' height='280' width='280' class='img-thumnail'/></td>
								</tr>




						</tbody>
				</table>


               ";

           // code...
         }
       }
    ?>


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
