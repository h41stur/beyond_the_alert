<?php
    setcookie("h41stur", time() + (86400 * 30), "/");
    $xss = $_GET["search"];
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
    <p id="user_data" class="h41stur">Name: João Sem Braço, CPF: 340.737.420-86</p>
    <h2 align="center" class="h41stur" id="exploit"></h2>
    <h2></h2>
    

    <a href="../">Return</a>

    </div>


</body>
</html>