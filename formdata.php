<?php 

$db = mysqli_connect("localhost","root","","ajaxlearning");

if($db){
	echo "Connected";
}

if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email'])) {
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	$Query = mysqli_query($db, "INSERT INTO student_data(name,phone,email) VALUES ('$name','$phone','$email')");

	if($Query){
		echo "Data Saved Successfully";
	}else{
		echo "Error";
	}
}

 ?>