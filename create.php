<?php require_once "includes/connect.php" ?>
<?php include "includes/header.php" ?>

<form method="post" action="createLogic.php">
    <label>Naam</label>
    <input type="text" name="naam" placeholder="Naam">

    <label>omschrijving</label>
    <input type="text" name="omschrijving" placeholder="omschrijving">

    <input type="submit" value="Toevoegen">
</form>