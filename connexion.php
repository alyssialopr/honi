<?php 
require 'config/database.php';

// Requête de connexion 
// (ouverture de la session)
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pass2 = $_POST['password'];
        
    if (($_POST['username']) && ($_POST['password'])) {
            $username = ($_POST['username']);
            $pass =  ($_POST['password']);
            // requete pour récuperer l'username et le password
            $recupUser = $database -> prepare('SELECT * FROM utilisateur WHERE username = ?');
            $recupUser -> execute(array ($username));
            $user = $recupUser->fetch();

            $motdepasse = password_verify($_POST['password'], $user['password']);
                if ($motdepasse == true){
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['password'] = $user['password'];
                    $_SESSION['id'] = $recupUser -> fetch()['id'];
                    header('Location:profil.php');
                }

                else {
                    echo "Votre username ou votre mot de passe est incorrect";
                }
        }
}

require_once 'article/connexion.template.php'
?>