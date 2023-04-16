<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Honi</title>
</head>
<body>
    <header class="header">
        <div class="logo-honi">
            <img id="bee-honi" src="images/Logo/abeille-HONI.png" alt="logo Abeille Honi">
        </div>
        <div class="titre">
            <h3 class="honi">Honi</h3>
        </div>
            <div class="recherche">
                <form> 
                    <input type="search" class="search" placeholder="Recherche">
                </form>
            </div>
            <div class="head-logo" id="sidenavbar">
                <button class="btn-logo"><img class="logo" id="discussion" src="images/Logo/discution.png" alt="logo discussion"><span class="modif">Discussions</span></button>
                <button class="btn-logo"><img class="logo" id="notifications" src="images/Logo/notification.png" alt="logo notification"><span class="modif">Notifications</span></button>
                <button class="btn-logo"><img class="logo" id="reglage" src="images/Logo/reglages.png" alt="logo reglage"><span class="modif">Réglages</span></button>
                <button class="btn-logo" id="compte"><img class="logo" id="utilisateur" src="images/Logo/utilisateur.png" alt="logo utilisateur" ><span class="modif">Compte</span></button>
                <button id="closed">x</button>
            </div>
            <button class="hamburger" id="burger"></button>
    </header>
    <div class="container">
        <div class="row" id="row">
            <div class="col-3" id="tendance">
                <div class="titre-tendance">
                    <h3 class="trend">Tags</h3>
                </div>
                <div class="hashtag" id="tag">
                    <button class="btn btn-bs" onclick="filterSelection('all')">Voir tout</button>
                    <button class="btn btn-bs" onclick="filterSelection('art')">Arts</button>
                    <button class="btn btn-bs" onclick="filterSelection('jv')">VideosGames</button>
                    <button class="btn btn-bs" onclick="filterSelection('livres')">Livres</button>
                    <button class="btn btn-bs">Internet</button>
                    <button class="btn btn-bs">Coding</button>
                    <button class="btn btn-bs">Voyage</button>
                    <button class="btn btn-bs">Environnement</button>
                    <button class="btn btn-bs">Films</button>
                    <button class="btn btn-bs">AlexaDot</button>
                    <button class="btn btn-bs">Créations</button>
                </div>
            </div>
            <div class="col-8 story" id="timeline">
                    <?php if (!empty ($user) && !empty($contenu)) :  ?>
                    <?= "@$user" ?>
                    <?= ": $contenu" ?>
                    <?php endif; ?>
                        <?php
                            foreach($posts as $post){
                        ?>
                        <div id="postinet">
                            <h3>@<?= $post['user'] ?></h3>
                            <p><?= $post['contenu'] ?></p>
                            <p><?= date("d/m/Y", strtotime($post['date'])) ?> à <?= date("H:i", strtotime($post['date'])) ?></p>
                            
                            <form action="delete.php" method="POST">
                                <input type="hidden" name="form" value="formulaire_suppression_post">
                                <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                                <input id="sppr" type="image" src="images/logo/trashbin.png" alt="Supprimer">
                            </form>
                        </div>
                    <?php
                    }
                    ?>

            </div>
       
            <div class="col-1" id="floatbutton">
                <div class="modale" id="modale">
                    <button id="close">x</button>
                    <form action="" method="POST">
                        <input type="hidden" name="form" value="formulaire_ajout_post">
                        <input type="text" name="user" id="user" placeholder="@pseudo">
                        <br>
                        <textarea name="contenu" id="contenu" cols="40" rows="10" required></textarea>
                        <br>
                        <input id="subpost" type="submit" value="Envoyer">
                    </form>
                </div>
            </div> 
     </div>
    </div>
    <button id="newpost">
        <span class="plus">+</span>
    </button>
    <div class="popup" id="pop">
        <div class="popup-container">
            <p class="message"> Pour voir plus de posts </p>
            <a href="http://localhost/honi/inscription.php?form=formulaire_honi"><button id="register">Inscris toi !</button></a>
        </div>
    </div>
    <script src="main.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"
    ></script>
</body>
</html>