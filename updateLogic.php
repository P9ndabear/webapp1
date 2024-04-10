<?php require_once "includes/connect.php" ?>

<?php
var_dump($_POST);
$sql = "INSERT INTO gerechten (naam, omschrijving)
        VALUES (:naam, :omschrijving)";
$stmt = $connection->prepare($sql);
$stmt->bindParam(":naam", $_POST['naam']);
$stmt->bindParam(":omschrijving", $_POST['omschrijving']);
$stmt->execute();
?>
