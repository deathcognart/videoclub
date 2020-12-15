<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Utilisateur</title>
</head>
<body>

<div class="container">
<?php

require 'config.php';

try {
    $dbh = new PDO($dsn, $username);
} catch (PDOException $e) {
    //var_dump($e);
    echo '<div class="alert alert-danger" role="alert">
  Problème de connexion à la base de données.
</div>';
    exit;
}

?>