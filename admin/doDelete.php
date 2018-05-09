<?php
require_once 'connect.php';
if (!isset($_POST['id'])) {
    header("Location: index.php?error=noidtodelete");
    exit;
}
require_once 'connect.php';
$suppdelete = "DELETE FROM 
  `page` 
WHERE 
  `id` = :id
;";
$stmt = $pdo->prepare($suppdelete);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
header('Location: indew.php');
errorHandler($stmt);
header("Location: index.php");