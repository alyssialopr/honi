<?php
require_once 'config/database.php';

// Requête de suppression
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['form']) && $_POST['form'] === "formulaire_suppression_post") {
      if (!empty($_POST['post_id'])) {
        $data = [
          "post_id" => $_POST['post_id'],
        ];
        
        $request_delete = $database->prepare("DELETE FROM post WHERE id = :post_id");
        $post_deleted = $request_delete->execute($data);
        header('Location: index.php');
      }
    }
  } 
?>