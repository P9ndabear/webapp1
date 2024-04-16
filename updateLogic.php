<?php ob_start(); ?>
<?php require_once "includes/connect.php" ?>

<?php
$sql = "UPDATE gerechten
        SET naam = :naam, omschrijving = :omschrijving
        WHERE id = :id";
$stmt = $connection->prepare($sql);
$stmt->bindParam(":id", $_GET['id']);
$stmt->bindParam(":naam", $_POST['naam']);
$stmt->bindParam(":omschrijving", $_POST['omschrijving']);
$stmt->execute();
header("Location: admin.php");

?>