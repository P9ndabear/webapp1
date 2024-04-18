<?php require_once "includes/connect.php" ?>
<?php include "includes/header.php" ?>

<form method="post" action="createLogic.php">
    <label>Naam</label>
    <input type="text" name="naam" placeholder="Naam">

    <label>Omschrijving</label>
    <input type="text" name="omschrijving" placeholder="Omschrijving">

    <label>Prijs</label>
    <input type="text" name="prijs" placeholder="Prijs">

    <input type="submit" value="Toevoegen">
</form>