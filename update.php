<?php require_once "includes/connect.php" ?>
<?php include "includes/header.php" ?>

<form method="post" action="updateLogic.php">
    <label>Naam</label>
    <input type="text" name="naam" placeholder="Naam">

    <label>Omschrijving</label>
    <input type="text" name="omschrijving" placeholder="Omschrijving">

    <input type="submit" value="Bijwerken">
</form>