<?php
include("config/bd.php");
include("config/actions.php");
include("config/blade.php");


session_start();
ob_start(); // Je démarre le buffer de sortie : les données à afficher sont stockées

if (!isset($_SESSION['id']) && isset($_COOKIE['token'])) {
  $sql = "select * from user where remember=?";
  $query = $pdo->prepare($sql);
  $query->execute(array($_COOKIE['token']));
  $user = $query->fetch();

  if ($user !== false) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['login'];
  }
}

?>

<?php
// Quelle est l'action à faire ?
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "index"; // p-e changer en "accueil"
}

// Est ce que cette action existe dans la liste des actions
if (array_key_exists($action, $listeDesActions) == false) {
    echo $blade->make('errors.404')->render();
} else {
    include($listeDesActions[$action]); // Oui, on la charge
}

if(isset($_SESSION['info']))
    unset($_SESSION['info']);

ob_end_flush(); // Je ferme le buffer, je vide la mémoire et affiche tout ce qui doit l'être
?>
