<?php

session_start();

	include("RSearch2.php");


?>
<html>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
    <li>find houses</li>
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
 <a href="RSearch4.php">	<button>Filters</button> </a>

</div>
<div class="listing">

    <?php
       $sql="SELECT * FROM addhouse";
       $result= mysqli_query($conn,$sql);
       $queryResults=mysqli_num_rows($result);
       if($queryResults > 0)
       {
         while ($row= mysqli_fetch_assoc($result))
         {
           echo "<div class='results'>
           <img src='data:image/jpeg;base64,".base64_encode($row['image'] )."' height='280' width='280' class='img-thumnail'/>
           <h3>".$row['area']." ,".$row['city']." </h3>

              <p>
               Rent: ".$row['rent']."
              </p>

              <button>View Details</button>
               </div>";

           // code...
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
</html>
