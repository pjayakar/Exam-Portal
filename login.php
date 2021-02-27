<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <title>registration</title>

        <link rel="stylesheet" type="text/css" href="bootstrap.css">

    </head>

<body>
<div class="container-fluid rowcol">
<div align="center">
   <h1 class="display-3">REGISTRATION-FORM</h1>
   <br>
   <br>
<form class="form-horizontal" action="submit1.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Contact number:</label>
    <div class="col-sm-3">
      <input type="number" class="form-control"placeholder="Enter Contact number" name="number">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Email:</label>
    <div class="col-sm-3">
      <input type="email" class="form-control"placeholder="Enter email" name="email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Age:</label>
    <div class="col-sm-3">
      <input type="number" class="form-control"placeholder="Enter Age" name="age">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Birth date:</label>
    <div class="col-sm-3">
      <input type="date" class="form-control"placeholder="Enter DOB" name="birthday">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Address:</label>
    <div class="col-sm-3">
      <input type="text" class="form-control"placeholder="Enter address" name="address">
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" for="pwd"><h4>choice of exam:</h4></label>
    <div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="choice" value="SET-MAT">SET-MAT
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="choice" value="DEC-MAT">DEC-MAT
  </label>
</div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" for="pwd"><h4>choice of center:</h4></label>
    <div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="location" value="Andheri">Andheri
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="location" value="Mulund">Mulund
  </label>
</div>
<div class="form-check disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="location" value="Thane">Thane
  </label>
</div>
  </div>



  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-lg">Submit</button>
    </div>
  </div>
</form>
</div>
</div>


  </body>
</html>
