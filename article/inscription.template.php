<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>S'incrire sur Honi</title>
</head>

<body>
    <header class="header">
        <div class="logo-honi">
            <a href="http://localhost/honi/index.php">
                <img id="bee-honi" src="images/Logo/abeille-HONI.png" alt="logo Abeille Honi">
            </a>
        </div>
        <div class="titre">
            <h3 class="honi">Honi</h3>
        </div>
        <div class="recherche">
            <form>
                <input type="search" class="search" placeholder="Recherche">
            </form>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col" id="no"></div>
            <div class="col-6" id="inscription">
                <div class="inside">
                    <p class="inspect">Inscrivez vous</p>
                    <p class="options-inscription">S'inscrire avec :</p>
                    <div class="logo-connexion">
                        <img class="facebook" src="images/Logo/Facebook.png" alt="Logo facebook">
                        <img class="google" src="images/Logo/google.png" alt="Logo facebook">
                        <img class="apple" src="images/Logo/apple.png" alt="Logo facebook">
                    </div>
                    <p class="ou">ou</p>
                    <div class="input">
                        <form class="formulaire" method="POST" action="index.php" autocomplete="off">
                            <input type="hidden" name="form" value="formulaire_honi">
                            <br>
                            <input type="text" name="name" class="nom-util" placeholder="Prénom">
                            <br><br><br>
                            <input type="text" name="username" class="nom-util" placeholder="Nom d'utilisateur">
                            <br><br><br>
                            <input type="email" name="mail" class="email" placeholder="Email">
                            <br><br><br>
                            <input type="password" name="password" class="mdp" placeholder="Mot de passe">
                            <input type="submit" name="validation" class="submit" value="S'inscrire">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col" id="no"></div>
        </div>
    </div>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>