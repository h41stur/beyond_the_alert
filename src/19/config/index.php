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
    <h2></h2><h2></h2>

    <form class="form-signin" method="POST" action="../creditCard/">
        <h2 class="form-signin-heading">Sign in</h2>
        <input type="text" value="" class="input-block-level" placeholder="User ID" name="user_id">
        <input type="hidden" name="csrf_token" value="d8aea5b04b59ad8a36d1e2c10a77c426">
        <button class="btn btn-large btn-primary" type="submit">Submit</button>
    </form>

    <a href="../">Return</a>

    </div>


</body>
</html>