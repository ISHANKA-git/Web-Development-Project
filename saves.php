<?php 
//Create a conection with database
$con = mysqli_connect("localhost", "root", "", "website");

//Set Variebles for the input
$Name=$_POST['Name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$Message=$_POST['Message'];


//Create a MySQL command to INSERT data into data table
$sql = "INSERT INTO registers(Name,contact,email,Message) VALUES ('$Name','$contact','$email','$Message')";


//Now Insert data into database
//Check if data is inserted or not
if (!mysqli_query($con, $sql)) {
	echo "Data has not saved";
} else{
	echo "<script>alert('Wow! User Registration Completed.')</script>";}



?>