<?php
require 'config/database.php'; 

// Requête pour récupérer les articles
$request = $database->prepare("SELECT * FROM post ORDER BY date DESC");
$request->execute();
$posts = $request->fetchAll(PDO::FETCH_ASSOC);


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['form']) && $_POST['form'] === "formulaire_ajout_post") 
    {
      if (!empty($_POST['user'] && !empty($_POST['contenu']))) {
        $user = $_POST['user'];
        $contenu = $_POST['contenu'];

        $data = [
          "user" => $user,
          "contenu" => $contenu
        ];
  
        $request_insert = $database->prepare("INSERT INTO post (user, contenu, date) VALUES (:user, :contenu, NOW())");
        $post_inserted = $request_insert->execute($data);
      }
    }

}



require_once 'article/index.template.php';
?>