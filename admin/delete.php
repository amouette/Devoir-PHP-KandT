<?php
require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Poster un message</title>
</head>
<body>
<?php
$updateVisu =" SELECT         
           `id`, `slug`, `title`, `h1`, `p`, `span-class`, `span-text`, `img-alt`, `img-src`, `nav-title`
           FROM
            `page`
            WHERE
            `id`= :id
            
            ;"; /* on  recupere les donnée id competence intitulé resume dateStart et datefinish de tableau Mysql 'anonce'*/
$stmt = $pdo->prepare($updateVisu);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
?>
<a href="show.php">allez la page show</a><br>
<a href="index.php">allez vers la page admin</a><br>
<?php if (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
    tu veux suprimer la page de  <?=$row["title"]?>
<form  action="doDelete.php" method="post">
    <input  id="prodId" name="id" type="hidden" value="<?=$row["id"]?>">
    <input type="submit" name="submit" value="Oui" class="envoie">
</form>
    <button type="button" name="button"><a href="show.php">non</a></button>
<?php endif;?>
</body>
</html>
