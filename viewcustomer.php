<?php
  $mysqli=new mysqli('localhost','root','','banksystem');
  //checking the connection
  if($mysqli->connect_error){
    die('Connection Error (' .$mysqli->connect_error.')'.
    $mysqli->connect_error);
  }
  //Sql query to select data from the database
  $sql="SELECT * FROM tbl_bank ";
  $result = $mysqli->query($sql);
  $mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view customer</title>
    <!-- css files-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
      .cen{
        text-align:center;
      }
    </style>
</head>
<body>
    <div>
      <?php include 'navbar.php' ?>
    </div>
    <div class="container">
    <div class="tbl table-responsive">
       <h1 align="center" class="text-primary"><b>Customer Details</b></h1>
       <!-- table creation-->
       <table class="table table-bordered table-striped table-primary table-hover cen">
           <tr class="table-light">
             <th>ID</th>
             <th>ACCOUNT_NO</th>
             <th>CUSTOMER_NAME</th>
             <th>EMAIL_ID</th>
             <th>BALANCE</th>
             <th>OPERATION</th>
           </tr>
           <?php
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <form action="moneytransfer.php" method="get">
                <input type='hidden' name='sid' value="<?php echo $rows['Id']; ?>">
                <td><?php echo $rows['Id'];?></td>
                <td><?php echo $rows['Account_No'];?></td>
                <td><?php echo $rows['Customer_Name'];?></td>
                <td><?php echo $rows['Email_id'];?></td>
                <td><?php echo $rows['Balance'];?></td>
                <td><input type="submit" value="Transfer" name="choice" class="btn btn-outline-success btn-rounded" ></td>
                </form>
            </tr>
            <?php
                }
            ?>
       </table>
    </div>
    </div>
</body>
</html>