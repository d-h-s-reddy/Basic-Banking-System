<?php
  $mysqli=mysqli_connect('localhost','root','','banksystem');
  $sql="SELECT * FROM transactions";
  $result=$mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <style>
      .cen{
        text-align:center;
      }
    </style>
</head>
<body>
    <?php include 'navbar.php'?>
    <div class="container">
    <h1 align="center" class="text-primary">Transaction History</h1>
    <div class="table-responsive">
    <table class="table table-bordered table-striped table-primary table-hover cen">
        <tr class="thead-light">
            <th>SNO</th>
            <th>SENDER NAME</th>
            <th>RECEIVER NAME</th>
            <th>TRANSFERED AMOUNT</th>
            <th>DATE AND TIME</th>
        </tr>
        <?php
           while($rows=$result->fetch_assoc()){?>
           <tr>
             <td><?php echo $rows['sno'];?></td>
             <td><?php echo $rows['sender'];?></td>
             <td><?php echo $rows['receiver'];?></td>
             <td><?php echo $rows['amount'];?></td>
             <td><?php echo $rows['date_and_time'];?></td>
             </tr>
          <?php }
        ?>
    </table>
    </div>
    </div>
</body>
</html>