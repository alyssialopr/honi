<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Mon compte</title>
</head>
<body>
<?php 
    include_once 'header.template.php'
?>

<div class="container">
    <div class="row" id="row">
        <div class="col-3" id="compteprofil">
            <div class="top-profpage">
                <h2>Mon compte</h2>
            </div>
            <img class="bonhomme" src="images/Logo/bonhomme.png" alt="logo photo de profil">
            <h4 id="pseudo">
                <?php echo $_SESSION ['name']; ?>
                <br>
                @<?php echo $_SESSION['username'];?>
            </h4>
        </div>
        <div class="col-8"></div>
        <div class="col-1">
            <div class="modale" id="modale">
                <button id="close">x</button>
                <form action="" method="POST">
                    <input type="hidden" name="form" value="formulaire_ajout_post">
                    <input type="text" name="user" id="user" placeholder="@pseudo" autocomplete=off>
                    <br>
                    <textarea name="contenu" id="contenu" cols="40" rows="10" required></textarea>
                    <br>
                    <input id="subpost" type="submit" value="Envoyer">
                </form>
            </div>
        </div>
        <button id="newpost">
            <span class="plus"><img class="fleche" src="images/Logo/fleche.png" alt="fleche"></span>
        </button>
    </div>
</div>

<script src="js/main.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"
></script>
</body>
</html>