<?php 
 $mysql=mysqli_connect('localhost','root','','banksystem');
$id=$_GET['sid'];
$sql = "SELECT Id,Account_No,Customer_Name,Email_id,Balance FROM tbl_bank WHERE Id =".$id ;
$result = $mysql->query($sql);
$rows = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Transfer</title>
    <style>
        .cen{
            text-align:center;
        }
    </style>
</head>
<body align="center">
     <?php include 'navbar.php' ?>
     <h1 align="center" class="text-primary">Selected Customer Details</h1><br>
     <div class="container">
        <div class="table-responsive">
            <table align="center" class="table table-hover table-bordered cen">
                <tr class="thead-light">
                   <th>ID</th>
                   <th>ACCOUNT_NO</th>
                   <th>CUSTOMER_NAME</th>
                   <th>EMAIL_ID</th>
                   <th>BALANCE</th>
                </tr>
                <tr class="table-success">
                   <td><?php echo $rows['Id'];?></td>
                   <td><?php echo $rows['Account_No'];?></td>
                   <td><?php echo $rows['Customer_Name'];?></td>
                   <td><?php echo $rows['Email_id'];?></td>
                   <td><?php echo $rows['Balance'];?></td>
               </tr>
           </table><br>
       </div>
       <div align="center">
           <form action="http://localhost/banksystem/aftransfer.php/" method="get">
               <input type="hidden" name="sendId" value="<?php echo $rows['Id']?>">
               <label><b><h1>Transfer To:</h1></b></label>
            <?php 
            $sql = "SELECT `Id`,`Customer_Name` from tbl_bank";
            $result=$mysql->query($sql);
            ?>
               <select name="receiverId">
                   <option value="" disabled selected>Choose the customer</option>
                <?php while($res=$result->fetch_assoc()){?>
                    <option value="<?php echo $res['Id']; ?>"><?php echo $res['Customer_Name']; ?></option>
            <?php }?>
                </select><br>
                <label><h1>Enter the Amount:</h1></label>
                    <input type="number" name="amount" ><br>
                    <input type="submit" value="Transfer Money" class="btn btn-outline-success">
            </form>
        </div>
    </div>   
</body>
</html>