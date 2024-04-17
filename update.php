<?php require_once "includes/connect.php" ?>
<?php include "includes/header.php" ?>

<?php
$sql = "SELECT * FROM gerechten WHERE id = :id";
$stmt = $connection->prepare($sql);
$stmt->bindParam(":id", $_GET['id']);
$stmt->execute();
$gerechten = $stmt->fetch();
?>

<form method="post" action="updateLogic.php">
    <label>Naam</label>
    <input type="text" name="naam" value="<?php echo $gerechten['naam'] ?>">

    <label>Omschrijving</label>
    <input type="text" name="omschrijving" value="<?php echo $gerechten['naam'] ?>">

    <input type="hidden" name="id" value="<?php echo $gerechten['id'] ?>">


    <input type="submit" naam="bijwerken" value="Bijwerken">
</form>