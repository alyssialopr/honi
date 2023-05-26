<?
require 'config/database.php';

if (isset ($_SESSION['id'])) {
    $datasession = ["id" => $_SESSION['id']];

    $requestsession = $database-> prepare('SELECT name, username, mail FROM utilisateur WHERE id = id');
    $requestsession->execute($datasession);
    $utilisateur = $requestsession->fetch(PDO::FETCH_ASSOC);
} else {
    $utilisateur = null;
}
?>