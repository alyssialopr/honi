<?php 

require 'config/database.php';

// Requête pour récupérer les utilisateurs
$request = $database->prepare ("SELECT * FROM utilisateur"); 
$request->execute();
$utilisateur = $request->fetchAll(PDO::FETCH_ASSOC);


// Requête d'inscription
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['form']) && $_POST['form'] == "formulaire_honi") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $mail = $_POST['mail'];
    $pass =  password_hash($_POST['password'], PASSWORD_BCRYPT);
  
    $data = [
      $name,
      $username,
      $mail,
      $pass,
    ];
  
    $request_insert = $database->prepare("INSERT INTO utilisateur (name, username, mail, password) VALUES (?, ?, ?, ?)");
    $utilisateur_inserted = $request_insert->execute($data);
  }
}

require_once 'article/inscription.template.php'
?>