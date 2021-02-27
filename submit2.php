<?php
$x=$_POST['name'];
$y=$_POST['phone'];
$z=$_POST['address'];
$a=$_POST['email'];
$b=$_POST['student_strength'];
$c=$_POST['faculty_strength'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organization";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO institute (Organization_name, Organization_number, Organization_address, Organization_email, Organization_stud_strength, Organization_faculty_strength)
 VALUES ('$x','$y','$z','$a','$b','$c')";
if ($conn->query($sql) === TRUE){
	echo "New record created successfully";
} else{
	echo "ERROR: " .$sql. "<br>" . $conn->error;
}

$conn->close();
?>
