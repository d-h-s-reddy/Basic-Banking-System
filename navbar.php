<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<style>
  .nav-link:hover{
  background-color:#34B3F1;
  border:2px solid #000000;
  border-radius:10px;
}
</style>
  </head>
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
      <h4 class="text-dark"><b>Sparks Banking system</b></h4>
      <div class="container fluid">
        <button class="navbar-toggler"
          date-bs-toggle="collapse"
          date-bs-target="#toggleBankMenu"
          aria-controls="toggleBankMenu"
          aria-expanded="false"
          aria-label="Toggle navigation"
        type="button" name="button">
          <span class="navbar-toggle-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="toggleBankMenu">
          <ul class="navbar-nav ml-auto">
            <li>
              <a class="nav-link" href="http://localhost/banksystem/index.php"><b>Home</b></a>
            </li>
            <li>
              <a class="nav-link" href="http://localhost/banksystem/viewcustomer.php/"><b>customer</b></a>
            </li>
            <li>
                <a class="nav-link" href="http://localhost/banksystem/transaction.php/"><b>Transaction History</b></a>
            </li>
            <li>
              <a class="nav-link" href="http://localhost/banksystem/contactus.php/"><b>Contact Us</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</body>
</html>