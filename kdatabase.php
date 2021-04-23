<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" content = 'width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,shrink-to-fit=no' name='viewport'>
	<title>Billing System</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/js" href="js/bootstrap.min.js">
  		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	  	<link rel="stylesheet" type="text/fonts" href="fonts/glyphicons-halflings-regular.woff">




</head>

<body style="background-color: ">

<nav class="navbar navbar-default" style="margin:0;border:0;box-shadow: none;border-radius:0;">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			 <a class="navbar-brand" href="index.php" ><i class="glyphicon glyphicon-grain" ></i><i class="glyphicon glyphicon-apple" ></i>Hansa Vegetables and Fruits Suppliers
</a>
		</div>	 
		<div class="collapse navbar-collapse" id="myNavbar">
		 	<ul class="nav navbar-nav navbar-right">
		 		<li> <a href="#">View Records</a> </li>
				<li> <a href="#">About Us</a> </li>
				<li> <a href="#">Contact</a> </li>
			</ul>
		</div>
	</div>
</nav>

<br><br>

<?php

	$kname = $_POST['kname'];
	$kdate =$_POST['kdate'];
	$vatbillno=$_POST['vatbillno'];


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "biling";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO biling (kname, kdate, vatbillno)
	VALUES ('$kname','$kdate','$vatbillno')";


	if ($conn->query($sql)){
		echo "New biling record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}



	for ($i=1; $i < 9; $i++) { 
		# code...
		$kitem=$_POST['kitem'.$i];
		$kquantity=$_POST['kquantity'.$i];
		$krate=$_POST['krate'.$i];
		$kprice=$_POST['kprice'.$i];


	if($kitem != "" && $kquantity != 0 && $krate != 0 && $kprice != 0){

		$second ="INSERT INTO saman (kname,kitem, kquantity,krate,kprice)
		VALUES ('$kname','$kitem','$kquantity','$krate','$kprice')";


		if ($conn->query($second) === TRUE) {
		    echo


		    "New saman record created successfully";
		


		} else {
		    echo "Error: " .$second. "<br>" . $conn->error;
		}

	}

	}

	$conn->close();
?>

<br> <br>	

<div class="container-fluid">
 <a href="index.php" class="btn btn-primary"  ><span class="glyphicon glyphicon-user" style="align-content: center;"></span> Back to home page</a>

</div>
</body>
</html>