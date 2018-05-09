<?php
require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>SHOW</title>
</head>
<body>
<?php
$full =" SELECT         
           `id`, `slug`, `title`, `h1`, `p`, `span-class`, `span-text`, `img-alt`, `img-src`, `nav-title`
           FROM
            `page`
            
            ;"; /* on  recupere les donnée id competence intitulé resume dateStart et datefinish de tableau Mysql 'anonce'*/
$stmt = $pdo->prepare($full);
$stmt->execute();
?>
<h1 class="annonce-titre">Tout les post</h1>
<a href="index.php">retourner vers la page admin</a>
<section class="container-annonce">
    <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
        <div class="paragraphe">
            <div >
                <p>SLUG : <?=$row["slug"]?></p><br>
                <p>title : <?=$row["title"]?></p><br>
                <p>h1 : <?=$row["h1"]?></p><br>
                <p>p : <?=$row["p"]?></p><br>
                <p>span-class : <?=$row["span-class"]?></p><br>
                <p>span-text : <?=$row["span-text"]?></p><br>
                <p>img-alt : <?=$row["img-alt"]?></p><br>
                <p>img-src : <?=$row["img-src"]?></p><br>
                <p>nav-title : <?=$row["nav-title"]?></p><br>
        </div>
        </div>
        <a href="delete.php?id=<?=$row["id"]?>">suprimé</a>
        <a href="edit.php?id=<?=$row["id"]?>">modifié</a>

    <?php endwhile;?> <!- on ferme la balise php et on fini la condition tant que ->
</section>
</body>
