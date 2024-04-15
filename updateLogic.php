<?php ob_start(); ?>
<?php require_once "includes/connect.php" ?>

<?php
$sql = "INSERT INTO gerechten (naam, omschrijving)
        VALUES (:naam, :omschrijving)";
$stmt = $connection->prepare($sql);
$stmt->bindParam(":naam", $_POST['naam']);
$stmt->bindParam(":omschrijving", $_POST['omschrijving']);
$stmt->execute();
header("Location: admin.php");
?>
