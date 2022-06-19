<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>Spark Bank</title>
    <style>
        .display{
  margin-top: 15%;
  margin-left:4%;
  font-size: 2.5em;
  font-weight: 200;
}
#dis{
  border-radius:10px;
  border:3px solid black;
  color:white;
  background-color:black;
  font-weight:700;
}
    </style>
</head>
<body style="background-color:#FFFFFF";>
    <?php include 'navbar.php' ?>
    <div>
    <?php
    echo "<img src='banks.jpg'  . style='height:520px;  width:770px; float:right; margin-top:20px;'>";
   ?>
   </div>
   <div class="col-md-4 display text-center">
      <h1>Welcome to Sparks Banking system</h1>
      <a href="viewcustomer.php" class="btn btn-md btn-dark" id="dis">View Customers</a>
    </div>   
</body>
</html>


