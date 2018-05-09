<?php
require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>change ton post</title>
</head>
<body>
<?php
$modif =" SELECT         
           `id`, `slug`, `title`, `h1`, `p`, `span-class`, `span-text`, `img-alt`, `img-src`, `nav-title`
           FROM
            `page`
            WHERE
            `id`= :id
            
            ;"; /* on  recupere les donnée id competence intitulé resume dateStart et datefinish de tableau Mysql 'anonce'*/
$stmt = $pdo->prepare($modif);
  $stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
?>
<a href="index.php">retourner vers la page admin</a><br>
<a href="show.php">retourner vers la page show</a><br>
<?php if (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
<form  action="doEdit.php" method="post">
    <input value="<?=$row["slug"]?>" type="text" name="slug" >
    <input type="text" value="<?=$row["title"]?>" name="title" >
    <input type="text" value="<?=$row["h1"]?>" name="h1">
    <input type="text" value="<?=$row["p"]?>" name="p">
    <input type="text" value="<?=$row["span-class"]?>" name="span-class" >
    <input type="text" value="<?=$row["span-text"]?>" name="span-text" >
    <input type="text" value="<?=$row["img-alt"]?>" name="img-alt" size="12" >
    <input type="text" value="<?=$row["img-src"]?>" name="img-src" size="12" >
    <input type="text" value="<?=$row["nav-title"]?>" name="nav-title" size="12" >
    <input  id="prodId" name="id" type="hidden" value="<?=$row["id"]?>">
    <input  value="submit"type="submit" name="submit"  class="envoie">
</form>
<?php endif;?>
</body>
</html>
