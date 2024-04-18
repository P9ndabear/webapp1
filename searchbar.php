<?php require_once "includes/connect.php" ?>


<?php 
    if (isset($_GET['submit-search'])) {
        $search = $_GET['search'];
        $sql = "SELECT * FROM gerechten WHERE naam LIKE '%$search%' OR omschrijving LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        if ($queryResult > 0) {
            while ($gerechten = mysqli_fetch_assoc($result))
            echo "<div class='menu-container'>" .   
            "<div class='naam'>" . $gerechten["naam"] . "</div>";
        echo "<div class='omschrijving'>" . $gerechten["omschrijving"] . "</div>";
        echo "</div>";
        }
        else {
            echo "Dit gerecht bestaat niet";
        }
    }
?>

