<head>
  <style>
  table{
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  td, th{
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
  tr:nth-child(even){
    backgroup-color: #dddddd;
  }
  </style>
</head>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organization";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT Stud_name, Stud_choice_center FROM student WHERE stud_choice_exam = 'SET-MAT'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
echo "<table>";
  while($row = $result->fetch_assoc()){
    echo"<tr><td> Name: " . $row["Stud_name"] . "</td><td> Center: " . $row["Stud_choice_center"] .  "<tr><td>";
  }
  echo "</table>";
}
else{
  echo "0 results";
}
$conn->close();
 ?>
