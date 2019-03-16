<?php

	$con = mysqli_connect("localhost","root","","db_warehouse");
	if (mysqli_connect_errno())
  		{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}


	$category = $_POST['categoryName'];
	$product = $_POST['productName'];

	$sql = "INSERT INTO products (category_id, name) VALUES ('$category','$product')";
	//$sendData = mysqli_query($con, $sql);

	if (mysqli_query($con, $sql)) {
     echo "New record created successfully";
     header("location:no_07.php");
	}else {
     echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

	


?>