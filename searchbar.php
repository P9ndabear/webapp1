<?php require_once "includes/connect.php" ?>


<?php
if (isset($_GET['submit-search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM gerechten WHERE naam LIKE :search";
    $stmt = $connection->prepare($sql);
    $var = "%" . $_GET['search'] . "%";
    $stmt->bindParam(":search",  $var);

    $stmt->execute();


    while ($gerechten = $stmt->fetch()) {
        if ($stmt->rowCount() > 0) {
            echo "<div class='menu-container'>" .
                "<div class='naam'>" . $gerechten["naam"] . "</div>";
            echo "<div class='omschrijving'>" . $gerechten["omschrijving"] . "</div>";
            echo "</div>";
        }
    }
} if ($stmt->rowCount() < 1) {
    echo "Geen resultaten gevonden";
}
?>