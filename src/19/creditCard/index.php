<?php
    $token = $_POST['csrf_token'];
    $user = $_POST['user_id'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../img/favicon.ico">
    <title>Beyond the Alert</title>
</head>
<body>
    <div class="container">
      <div align="center"><img width="400" src="../../img/h41stur.jpeg" /></div>
      <br>
    

    <h1 align="center" class="h41stur"></h1>
    <br>
    <p id="credit_card" class="h41stur"><?php if ($user == "3663" && $token == "d8aea5b04b59ad8a36d1e2c10a77c426") { echo "5446 1521 4446 0680"; }?></p>
    <h2 align="center" class="h41stur" id="exploit"></h2>
    <h2></h2>
    

    <a href="../">Return</a>

    </div>


</body>
</html>