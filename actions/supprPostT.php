<?php
if (isset($_POST['id']) && isset($_POST['titre']) && isset($_POST['message']) && isset($_POST['date'])){
    $id=htmlspecialchars($_POST['id']);
    $idconnecte=htmlspecialchars($_SESSION['id']);
    $contenu=htmlspecialchars($_POST['message']);
$sql = 'DELETE FROM ecrit WHERE id=? AND contenu=? AND idAuteur=?';
$query = $pdo->prepare($sql);
$query->execute(array($id,$contenu,$idconnecte));
header("Location: index.php?action=timeline");
}