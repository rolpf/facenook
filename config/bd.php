<?php
// Script login.php utilisé pour la connexion à la BD

// a l'iut ipabdd
$host = "localhost"; // le chemin vers le serveur (localhost dans 99% des cas)

// nom de la base de donnée
// A l IUT, prenomnom 
// ordi perso, a vous de le créer.
$db = "facenook";

// identifiant de la base de donnée
// A l iut prenom.nom
// windows : root
// Mac : root
$user = "root";


// mdp phpmyadmin
// A l iut, généré automatiquement
// windows : vide
// Mac : root
$passwd = "";

try {
    // On essaie de créer une instance de PDO.
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $passwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . "<br />";
    die(1);
}


?>
