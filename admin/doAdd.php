<?php
require_once 'connect.php';

if (!empty($_POST['submit'])) {
    $insertAdd = "INSERT INTO `page` 
      (`id`, `slug`, `title`, `h1`, `p`, `span-class`, `span-text`, `img-alt`, `img-src`, `nav-title`) 
     VALUES 
      (NULL,:slug, :title, :h1, :p, :spanClass, :spanText, :imgAlt, :imgSrc, :navTitle);";

    $stmt = $pdo->prepare($insertAdd);
    $stmt->bindValue(':slug', $_POST['slug']);
    $stmt->bindValue(':title', $_POST['title']);
    $stmt->bindValue(':h1', $_POST['h1']);
    $stmt->bindValue(':p', $_POST['p']);
    $stmt->bindValue(':spanClass', $_POST['span-class']);
    $stmt->bindValue(':spanText', $_POST['span-text']);
    $stmt->bindValue(':imgAlt', $_POST['img-alt']);
    $stmt->bindValue(':imgSrc', $_POST['img-src']);
    $stmt->bindValue(':navTitle', $_POST['nav-title']);
    $stmt->execute();
    header('Location: index.php');

}