<?php


if (!isset($_POST['user']) || !isset($_POST['mdp'])) { 
  header('location: index.php?action=login');
} else {
  $sqlConnect = "select * from user where login=? and mdp=sha1(?)";
  $query = $pdo->prepare($sqlConnect);
  $query->execute(array($_POST['user'],$_POST['mdp']));
  $user = $query->fetch();

  if ($user === false) {
    header('location: index.php?action=login');
  } else {
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['login'];

    if (isset($_POST['rememberme'])) {
        $token = bin2hex(random_bytes(20));
        setcookie('token', $token, time() + 86400 );
    } else {
        $token = '';
        setcookie('token', $token, time() - 3600 );
    }
    $sql = "update user set remember=? where id=?";
    $query = $pdo->prepare($sql);
    $query->execute([$token,$_SESSION['id']]);
    header('location: index.php?action=profil');
  }
}
