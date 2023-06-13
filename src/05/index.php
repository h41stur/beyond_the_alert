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
    

    <h1 align="center" class="h41stur"></h1>
    <h2></h2><h2></h2>

    <div align="center">
      <a href="#">Home</a><br/>
      <a href="#">Login</a><br/>
      <a href="#">About</a><br/>
      <a href="#">Admin</a><br/>
    </div>

    <h2 class="h41stur">Search Engine: <?php echo $xss; ?></h2>
    <p>
        <div class="well">
            <p><b>Objectives:</b></p>

            <p>
                <ol>

                    <li>Change all links on the page to point to "https://h41stur.com"</li>
                </ol>

            </p>
        </div>

    <a href="../">Return to tasks list</a>

    </div>


</body>
</html>