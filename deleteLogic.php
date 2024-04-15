<?php ob_start(); ?>
<?php require_once "includes/connect.php" ?>

<?php
$id = $_GET['id'];
$sql = "DELETE FROM gerechten WHERE id =:id";
$prepare =$connection->prepare($sql);
$prepare->bindParam(':id', $id);
$prepare->execute();
header("Location: admin.php");

?>