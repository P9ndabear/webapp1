<?php 
    session_start();
if (isset($_POST['login'])) {
    if ($_POST['username'] == "admin" && $_POST['password'] == "geheim") {
        $_SESSION['username'] = "admin";
        header(header:"Location: admin.php");
    }
}
?>


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
    <form name="login-form" action="login.php" method="post">
        <p>Username:<input REQUIRED type="text" name="username"></p>
        <p>Password:<input REQUIRED type="password" name="password"></p>
        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>