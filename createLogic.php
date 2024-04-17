<?php ob_start(); ?>
<?php require_once "includes/connect.php" ?>

<?php
$sql = "INSERT INTO gerechten (naam, omschrijving, prijs)
        VALUES (:naam, :omschrijving, :prijs)";
$stmt = $connection->prepare($sql);
$stmt->bindParam(":naam", $_POST['naam']);
$stmt->bindParam(":omschrijving", $_POST['omschrijving']);
$stmt->bindParam(":prijs", $_POST['prijs']);

$stmt->execute();
header("Location: admin.php");
?>
