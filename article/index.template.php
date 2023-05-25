<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Honi</title>
</head>

<body>
    <?php
    include_once 'header.template.php'
        ?>
    <div class="container">
        <div class="row" id="row">
            <div class="col-3" id="tendance">
                <div class="titre-tendance">
                    <h3 class="trend">Tags</h3>
                </div>
                <div class="hashtag" id="tag">
                    <button class="btn btn-bs all">Voir tout</button>
                    <button class="btn btn-bs art">Arts</button>
                    <button class="btn btn-bs vg">VideosGames</button>
                    <button class="btn btn-bs tech">Tech</button>
                    <button class="btn btn-bs internet">Internet</button>
                    <button class="btn btn-bs coding">Coding</button>
                    <button class="btn btn-bs voyage">Voyage</button>
                    <button class="btn btn-bs environnement">Environnement</button>
                    <button class="btn btn-bs films">Films</button>
                    <button class="btn btn-bs alexa">AlexaDot</button>
                    <button class="btn btn-bs crea">Créations</button>
                </div>
            </div>
            <div class="col-8 story" id="timeline">
                <?php
                foreach ($posts as $post) {
                    ?>
                    <div id="postinet">
                        <h3>@
                            <?= $post['user'] ?>
                        </h3>
                        <p>
                            <?= $post['contenu'] ?>
                        </p>
                        <p>
                            <?= date("d/m/Y", strtotime($post['date'])) ?> à
                            <?= date("H:i", strtotime($post['date'])) ?>
                        </p>
                        <input id="sppr" type="image" src="images/logo/trashbin.png" alt="Supprimer">
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
                        <input type="text" name="user" id="user" placeholder="@pseudo" autocomplete=off>
                        <br>
                        <textarea name="contenu" id="contenu" cols="40" rows="10" required></textarea>
                        <br>
                        <input type="file" name="filepost" id="postimage">
                        <br>
                        <select class="filtretags" name="tags" id="tags">
                            <option value="">Choisir son tag</option>
                            <option value="arts">Arts</option>
                            <option value="videogames">VideosGames</option>
                            <option value="tech">Tech</option>
                            <option value="internet">Internet</option>
                            <option value="coding">Coding</option>
                            <option value="voyage">Voyage</option>
                            <option value="environnement">Environnement</option>
                            <option value="films">Films</option>
                            <option value="alexadot">AlexaDot</option>
                            <option value="créations">Créations 🧶</option>
                        </select>
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
            <a href="http://localhost/honi/inscription.php?form=formulaire_honi"><button id="register">Inscris
                    toi!</button></a>
        </div>
    </div>
    <section class="deletemodal" id="deletemodal">
        <div class="questionsppr">
            <h4 class="souhait">Souhaitez-vous vraiment supprimer ce post ?</h4>
            <br>
            <div class="btnyesorno">
                <form action="delete.php" method="POST">
                    <input type="hidden" name="form" value="formulaire_suppression_post">
                    <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                    <button class="btnyn" id="yes">Oui</button>
                </form>
                <button class="btnyn" id="negation">Non</button>
            </div>
        </div>
    </section>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>