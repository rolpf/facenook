<?php


if (isset($_SESSION['id'])) {

  $token = '';
  setcookie('token', $token, time() - 3600 );

  $sql = "update user set remember=? where id=?";
  $query = $pdo->prepare($sql);
  $query->execute([$token,$_SESSION['id']]);

  unset($_SESSION['id']);
}

header('location: index.php?action=index');
