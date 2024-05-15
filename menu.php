<?php require_once "includes/connect.php" ?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/menu.css" />


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
</head>
<?php include "includes/header.php" ?>

<body>

    <form method="get" action="searchbar.php">
        <input type="text" name="search" placeholder="Search">
        <input type="submit" name="submit-search">

    </form>

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
        echo "</div>";
    }
    ?>
</body>
<?php include "includes/footer.php" ?>

</html>