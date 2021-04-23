<?php

$bname = $_POST['bname'];
$bdate =$_POST['bdate'];
$bvatbillno=$_POST['bvatbillno'];


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

$third = "INSERT INTO bbiling (bname, bdate, bvatbillno)
VALUES ('$bname','$bdate','$bvatbillno')";


if ($conn->query($third)){
	echo "New biling record created successfully";
} else {
	echo "Error: " . $third . "<br>" . $conn->error;
}

for ($j=1; $j < 9; $j++) { 
	# code...
	$bitem=$_POST['bitem'.$j];
	$bquantity=$_POST['bquantity'.$j];
	$brate=$_POST['brate'.$j];
	$bprice=$_POST['bprice'.$j];


if($bitem != "" && $bquantity != 0 && $brate != 0 && $bprice != 0){

	$fourth ="INSERT INTO bsaman (bname,bitem, bquantity,brate,bprice)
	VALUES ('$bname','$bitem','$bquantity','$brate','$bprice')";


	if ($conn->query($fourth) === TRUE) {
	    echo "New saman record created successfully";
	} else {
	    echo "Error: " .$fourth. "<br>" . $conn->error;
	}

}

}

$conn->close();

?>