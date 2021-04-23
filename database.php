<?php

$name = $_POST['name'];
$cdate =$_POST['cdate'];
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

$sql = "INSERT INTO biling (name, cdate, vatbillno)
VALUES ('$name','$cdate','$vatbillno')";


if ($conn->query($sql)){
	echo "New biling record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

for ($i=1; $i < 9; $i++) { 
	# code...
	$bitem=$_POST['bitem'.$i];
	$bquantity=$_POST['bquantity'.$i];
	$brate=$_POST['brate'.$i];
	$bprice=$_POST['bprice'.$i];


if($bitem != "" && $bquantity != 0 && $brate != 0 && $bprice != 0){

	$second ="INSERT INTO saman (name,bitem, bquantity,brate,bprice)
	VALUES ('$name','$bitem','$bquantity','$brate','$bprice')";


	if ($conn->query($second) === TRUE) {
	    echo "New saman record created successfully";
	} else {
	    echo "Error: " .$second. "<br>" . $conn->error;
	}

}

}

$conn->close();

?>