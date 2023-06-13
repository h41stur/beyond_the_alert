<?php
    setcookie("h41stur", time() + (86400 * 30), "/");
    $user = $_GET["email"];
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

    <form class="form-signin" method="GET">
        <h2 class="form-signin-heading">Sign in</h2>
        <input type="text" value="<?php echo $user;?>" class="input-block-level" placeholder="Email address" name="email">
        <input type="password" class="input-block-level" placeholder="Password" name="password">
        <label class="checkbox">
            <input type="checkbox" value="remember-me" name="DoesThisMatter"> Remember me
        </label>
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
    </form>

    <h2 class="h41stur"><?php echo $xss; ?></h2>
    <p>
        <div class="well">
            <p><b>Objectives:</b></p>

            <p>
                <ol>

                    <li>Use an event listener that will trigger a pop with the password in an alert</li>
                </ol>

            </p>
        </div>

    <a href="../">Return to tasks list</a>

    </div>


</body>
</html>