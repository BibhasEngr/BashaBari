<?php

session_start();

	include("RSearch2.php");


?>


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

<div class="sb">
	    <h2>Search By Filters</h2>
    <form action="RSearch5.php" method="post">

		<select name="search1">

			<option value="">  Please select city</option>
			<option value="Dhaka">Dhaka</option>
			<option value="Chittagong">Chittagong</option>
					<option value="Barishal">Barishal</option>
							<option value="Khulna">Khulna</option>
									<option value="Rajshahi">Rajshahi</option>
											<option value="Mymensingh">Mymensingh</option>
													<option value="Rangpur">Rangpur</option>
										<option value="Sylhet">Sylhet</option>
		</select><br><br>

		<h3>Select Your Rent Range</h3>
		<select name="search3">
			<option value="">  From</option>
			<option value="5000">5000</option>
			<option value="10000">10000</option>
			<option value="15000">15000</option>
			<option value="20000">20000</option>
			<option value="25000">25000</option>
			<option value="35000">35000</option>
		</select><br><br>

	<select name="search4">
		<option value=""> To</option>
		<option value="5000">5000</option>
		<option value="10000">10000</option>
		<option value="15000">15000</option>
		<option value="20000">20000</option>
		<option value="25000">25000</option>
		<option value="35000">35000</option>
	</select><br><br>
	<input type="submit" name="submit" class="btn" value="Search">
</form>

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
