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
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <title>Beyond the Alert</title>
</head>
<body>
    <div class="container">
      <div align="center"><img width="400" src="../img/h41stur.jpeg" /></div>
      <br>
    

    <h1 align="center" class="h41stur">H41stur Banking Account</h1>
    <br>
    <h2 align="center" class="h41stur" id="exploit"></h2>
    <h2></h2>

    <h2 class="h41stur">Search Engine: <?php echo $xss; ?></h2>
    <p>
        <div class="well">
            <p><b>Objectives:</b></p>

            <p>
                <ol>

                    <li>The Credit Card Number can be obtained via GET request to /16/creditCard/ with parameter user and the right token</li>
                    <li>Exfilter the credit card number and load it into an element with id "exploit"</li>
                </ol>

            </p>
        </div>

    <a href="../">Return to tasks list</a>

    </div>


</body>
</html>