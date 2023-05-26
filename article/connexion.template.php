<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Connexion à Honi</title>
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
            <div class="col-6" id="connexion">
                <div class="inside">
                    <p class="connect">Connectez-vous</p>
                    <p class="options-connexion">Se connecter avec :</p>
                    <div class="logo-connexion">
                        <img class="facebook" src="images/Logo/Facebook.png" alt="Logo facebook">
                        <img class="google" src="images/Logo/google.png" alt="Logo facebook">
                        <img class="apple" src="images/Logo/apple.png" alt="Logo facebook">
                    </div>
                    <p class="ou">ou</p>
                    <div class="input">
                        <form class="formulaire" id="compte" action="" method="POST" autocomplete="off">
                            <input type="hidden" name="form" value="formulaire_connexion">
                            <br>
                            <input type="text" name="username" class="nom-util" placeholder="Nom d'utilisateur">
                            <br><br>
                            <input type="password" name="password" class="mdp" placeholder="Mot de passe">
                            <input type="submit" class="submit" value="Se connecter">
                            <p class="oup">Ou</p>
                        </form>
                        <a href="inscription.php"><button class="inscription">Créer un compte</button></a>
                    </div>
                </div>
            </div>
            <div class="col" id="no"></div>
        </div>
    </div>
</body>

</html>