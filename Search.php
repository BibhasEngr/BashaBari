<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
</head>
<body>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">

</form>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=basabari",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `addhouse` WHERE Name LIKE '%$str%'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>Name</th>
				<th>Description</th>
			</tr>
			<tr>
				<td><?php echo $row->city; ?></td>
				<td><?php echo $row->rent;?></td>
			</tr>

		</table>
<?php
	}


		else{
			echo "Name Does not exist";
		}


}

?>
