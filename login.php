<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/login.css" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<?php include "includes/header.php" ?>

<body>
    <form name="login-form" action="form.php" method="post">
        <p>Username:<input type="text" name="username"></p>
        <p>Password:<input type="text" name="password"></p>
        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>