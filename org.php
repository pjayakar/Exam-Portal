<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="bootstrap.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>organisation</title>
<style>
body{
  font-family: Calibri, Helvetica, sans-serif;
   background-image: linear-gradient(to bottom right,#393fa1,black,white);
  color: white;
}
.container {
   background-image: linear-gradient(to bottom right,#393fa1,black,white);
  color: white;
}

input[type=text], input[type=password], textarea {
  width: 75%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: rgb(187, 134, 178);
  outline: none;
}
 div {
            padding: 10px 0;
         }
hr {
  border: 1px solid #181515;
  margin-bottom: 55px;
}

</style>
</head>
<body align="center">
<form action="submit2.php" method="post">
  <div class="container-fluid" align="center">
  <center>  <h1> Organization Registeration Form</h1> </center>
  <br>
  <label><b>Name</b></label>   <br>
<input type="text" name="name" placeholder= "Name" size="15" required class="col-sm-3" name="name"/>
<br>
<label> <b>Student Strength: </b></label>  <br>
<input type="text" name="student_strength" placeholder="Student strength" size="15" required class="col-sm-3" />
<br>
<label> <b>Faculty Strength: </b></label>  <br>
<input type="text" name="faculty_strength" placeholder="Faculty strength" size="15"required class="col-sm-3"/>
<br>
<label>
<b>Phone :</b>
</label>  <br>
<input type="text" name="phone" placeholder="phone no." size="10" required class="col-sm-3"> <br>
<b>Current Address :</b>  <br>
<textarea placeholder="Current Address" value="address" required class="col-sm-3" name="address">
</textarea>
<br>
 <label for="email"><b>Email</b></label>  <br>
 <input type="text" placeholder="Enter Email" name="email" required class="col-sm-3" name="email">  <br>
<button type="submit" class="btn btn-lg btn-primary">Register</button>
</form>
</body>
</html>
