<?php
    session_start();
    if(isset($_SESSION['username'])) {
        // Loged in
    } else {
        header (header:"Location: login.php");
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
    <div class="toevoegen-container">
<a class ="toevoegen-button" href="update.php" Toevoegen>Toevoegen</a>
</div>

    <?php
    $sql = "SELECT * FROM gerechten";
    $stmt = $connection->query($sql);

    while ($gerechten = $stmt->fetch()) {
        echo "<div class='menu-container'>" .
            "<div class='naam'>" . $gerechten["naam"] . "</div>";
        echo "<div class='omschrijving'>" . $gerechten["omschrijving"] . "</div>";
        echo "<form method='post' action='deleteLogic.php'>";
        echo "<input type='submit' name='product_id' value='Verwijderen'>";
        echo "</form>";


        echo "</div>";
    }
    ?>
</body>
<?php include "includes/footer.php" ?>

</html>