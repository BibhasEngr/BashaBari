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
		 <link rel="stylesheet" href="RSresults.css">



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
<a href="RSearch.php"><li>find houses</li><a>
		<li>contact us</li>
		<li>about us</li>
<a href="RLogin.php"> <li>log in</li> </a>
</nav>

</div>
<div class="container">
	<div class="search-box1">

    <form action="RSearch3.php" method="post">

		<i class="fa fa-search" aria-hidden="true"></i>
<input type="text" class="searchfield" name="search" placeholder="Type a keyword....">


  <input type="submit" class="btn" value="Search">

</form>

</div>
<div class="w">
	<?php
	$search= mysqli_real_escape_string($conn, $_POST['search']);
	$sql= "SELECT * FROM addhouse WHERE city LIKE '%$search%' OR area LIKE '%$search%' OR rent LIKE '%$search%'";
	$result= mysqli_query($conn, $sql);
	$queryResult= mysqli_num_rows($result);
	 echo"Total '$queryResult' results found for your search '$search'"

?>
</div>
<div class="listing">
	<?php
	if (isset($_POST["search"] ))
	{
	 $search= mysqli_real_escape_string($conn, $_POST['search']);

	 $sql= "SELECT * FROM addhouse WHERE city LIKE '%$search%' OR area LIKE '%$search%' ";
	 $result= mysqli_query($conn, $sql);
	 $queryResult= mysqli_num_rows($result);

	  if($queryResult >0)
	  {
	    while($row= mysqli_fetch_assoc($result))
	    {
	      echo "

				      <div class='results'>
                <img src='data:image/jpeg;base64,".base64_encode($row['image'] )."' height='280' width='280' class='img-thumnail'/>
				  <h3>".$row['area']." ,".$row['city']." </h3>
	        Rent: ".$row['rent']."


				<a href='RDetails.php?city=".$row['city']."& area=".$row['area']." &rent=".$row['rent']."'><button>View Details</button></a>
						</div>
					        ";
	    }
	  }
	  else
	    {
	      echo "Sorry,nothing found";
	    }


	}
	?>


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
