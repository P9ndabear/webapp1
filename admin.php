<?php
session_start();
if (isset($_SESSION['username'])) {
    // Logged in
} else {
    header(header: "Location: login.php");
}

?>

<?php require_once "includes/connect.php" ?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/admin.css" />


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
</head>
<?php include "includes/header.php" ?>

<body>
    <div class="top-container">
        <a class="top-button" href="create.php" Toevoegen>Toevoegen</a>
    </div>
    <div class="top-container">
        <a class="top-button" href="logout.php" Uitloggen>Uitloggen</a>
    </div>

    <?php
    $sql = "SELECT * FROM gerechten";
    $stmt = $connection->query($sql);

    while ($gerechten = $stmt->fetch()) {
        echo "<div class='menu-container'>" .
            "<div class='naam'>" . $gerechten["naam"] . "</div>";
        echo "<div class='omschrijving'>" . $gerechten["omschrijving"] . "</div>";
        echo "<div class='prijs-container'>";
        echo "<p class='prijs'>€</p>";
        echo "<div class='prijs'>" . $gerechten["prijs"] . "</div>";
        echo "</div>";
        echo "<form method='get' action='update.php'>";
        echo "<input type='hidden' name='id' value='" . $gerechten['id'] . "' />" ;
        echo "<input type='submit' name='update' value='Bijwerken'>";
        echo "</form>";
        echo "<form method='post' action='deleteLogic.php'>";
        echo "<input type='hidden' name='id' value='" . $gerechten['id'] . "' />";
        echo "<input type='submit' name='delete' value='Verwijderen'>";
        echo "</form>";


        echo "</div>";
    }
    ?>
</body>
<?php include "includes/footer.php" ?>

</html>