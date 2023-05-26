<?php
require 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['form']) && $_POST['form'] === "formulaire_ajout_post") {
    if (!empty($_POST['user'] && !empty($_POST['contenu']))) {
      $user = $_POST['user'];
      $contenu = $_POST['contenu'];
      $tag = $_POST['tags'];

      $data = [
        "user" => $user,
        "contenu" => $contenu,
        "image" => $_FILES['filepost']['name'],
        "tag" => $tag,
      ];

      $img_name = $_FILES['filepost']['name'];
      $tmp_img_name = $_FILES['filepost']['tmp_name'];
      $upload = 'upload/';
      move_uploaded_file($tmp_img_name, $upload . $img_name);


      $request_insert = $database->prepare("INSERT INTO post (user, contenu, image, tag, date) VALUES (:user, :contenu, :image, :tag, NOW())");
      $post_inserted = $request_insert->execute($data);
      header("Location: ./index.php");
    }
  }
}

// Requête pour récupérer les articles
$request = $database->prepare("SELECT * FROM post ORDER BY date DESC");
$request->execute();
$posts = $request->fetchAll(PDO::FETCH_ASSOC);


// fonction de recherche 
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (!empty($_GET['recherche'])) {
    $data = [
      "recherche" => "%" . $_GET['recherche'] . "%",
    ];

    $request_search = $database->prepare("SELECT * FROM post WHERE contenu LIKE :recherche");
    $request_search->execute($data);
    $posts = $request_search->fetchAll(PDO::FETCH_ASSOC);
  }
}


require_once 'article/index.template.php';
?>