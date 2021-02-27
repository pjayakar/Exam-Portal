<?php
$x=$_POST['name'];
$y=$_POST['number'];
$z=$_POST['email'];
$a=$_POST['age'];
$b=$_POST['birthday'];
$c=$_POST['address'];
$e=$_POST['choice'];
$f=$_POST['location'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organization";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO student (Stud_name, Stud_contact, Stud_email, Stud_age, Stud_birthday, Stud_address, Stud_choice_exam, Stud_choice_center)
 VALUES ('$x','$y','$z','$a','$b','$c','$e','$f')";
if ($conn->query($sql) === TRUE){
	echo "\nNew record created successfully";
} else{
	echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

?>
