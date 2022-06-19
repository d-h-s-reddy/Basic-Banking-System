<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AfterTransfer</title>
</head>
<body align="center">
    <?php include 'navbar.php'?>
    <?php
      $mysqli=mysqli_connect('localhost','root','','banksystem');
      $rid=$_GET['receiverId'];
      $sid=$_GET['sendId'];
      $amount=$_GET['amount'];
      $sql1="SELECT * FROM tbl_bank WHERE Id=".$sid;
      $sql2="SELECT * FROM tbl_bank WHERE Id=".$rid;
      $res1=$mysqli->query($sql1);
      $res2=$mysqli->query($sql2);
      $row1=mysqli_fetch_assoc($res1);
      $row2=mysqli_fetch_assoc($res2);
      $senderBalance =$row1['Balance'];
    ?>
    <h1 align="center" class="text-primary">
        <?php
        if(($senderBalance < $amount)or($amount <= 0)){
            echo "Insufficient Balance or Invalid Amount 
                  please check the balance";
        }
        else{
          $newbalance1=$row1['Balance']-$amount;
          $newbalance2=$row2['Balance']+$amount;
          $sql1="UPDATE tbl_bank SET Balance=$newbalance1 WHERE Id=$sid";
          $sql2="UPDATE tbl_bank SET Balance=$newbalance2 WHERE Id=$rid";
          $res1=$mysqli->query($sql1);
          $res2=$mysqli->query($sql2);
          echo "Transaction successful";
        }
        ?>
    </h1>
    <?php 
      $sname=$row1['Customer_Name'];
      $rname=$row2['Customer_Name'];
      $sql = "INSERT INTO transactions(`sender`,`receiver`,`amount`,`date_and_time`) VALUES('$sname','$rname','$amount',NOW())";
      $result=$mysqli->query($sql);
    ?>
    <div class="container" align="center">
    <form action="http://localhost/banksystem/viewcustomer.php/" method="get">
        <input type="submit" value="view Customers" class="btn btn-outline-success">
    </form><br>
    <form action="http://localhost/banksystem/transaction.php/" method="get">
        <input type="submit" value="Transaction History" class="btn btn-outline-success">
    </form>
    </div>
</body>
</html>