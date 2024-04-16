<?php ob_start(); ?>
<?php require_once "includes/connect.php" ?>

<?php
$sql = "DELETE FROM gerechten 
        WHERE id =:id";
$prepare = $connection->prepare($sql);
$prepare->bindParam(':id', $_POST['id']);
$prepare->execute();
header("Location: admin.php");

?>