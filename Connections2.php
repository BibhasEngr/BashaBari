<!DOCTYPE html>

<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


 </script>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<body>
    <center>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "basabari");

        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

  $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

			    	$city = $_REQUEST['city'];
						$area = $_REQUEST['area'];
						$address = $_REQUEST['address'];
						$floorno = $_REQUEST['floorno'];
						$rooms = $_REQUEST['rooms'];
						$washrooms = $_REQUEST['washrooms'];
						$vacant = $_REQUEST['vacant'];
						$description = $_REQUEST['description'];
            $rent = $_REQUEST['rent'];
						$balcony = $_REQUEST['balcony'];
            $size = $_REQUEST['size'];
            $lift = $_REQUEST['lift'];
            $pid = $_SESSION['username'];
            $id=$user_data['id'];


        $sql = "INSERT INTO addhouse VALUES ('$pid','$id','$city','$area','$address','$floorno','$rooms','$washrooms','$vacant','$description','$rent','$balcony','$size','$lift','$image')";

        if(mysqli_query($conn, $sql))
				{
          echo'<script type="text/javascript">alert("Your House Has Been Succesfully Added")</script>';

                	header("Location: User.php");


        }
				else
				{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }


        mysqli_close($conn);
        ?>
    </center>
</body>
</html>
