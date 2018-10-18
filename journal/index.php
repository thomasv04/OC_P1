<?php
include 'connexion.php';

$req = "SELECT * FROM entree ORDER BY date desc, id desc";
$res = $conn->query($req);



?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Journal d'apprentissage</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans|Space+Mono" rel="stylesheet">
    <link rel="icon" href="img/icon.png" />
</head>

<body>
    <h1 id="title">Journal d'apprentissage</h1>
    <div class="content">
        <?php

            while ($data = mysqli_fetch_array($res)) {
                echo "<div id='entree'>
                <div class='date'><h3>";
                $date = date_create($data['date']);
                $jour = date_format($date, 'd');
                $mois = date_format($date, 'M');
                echo "".$jour."<span>".$mois."</span></h3></div>";
                // on affiche les résultats
                echo "<p>".nl2br($data['content'])."</p>";
                echo "</div>";
            }


            ?>

        <hr>
        <form action="envoie.php" method="post">
            <div>
                <textarea name="contenu" id="contenu"></textarea>
                <button>ENVOYER</button>
            </div>
        </form>



    </div>
</body>

</html>
