<?php

use App\Entity\User;
use App\Tools\NavigationTools;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/override-bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Bookeo</title>
</head>

<body>

    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img width="90" src="assets/images/logo-bookeo.jpg" alt="Logo Bookeo">
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a href="index.php" class="nav-link px-2 <?= NavigationTools::addActiveClass('page', 'home') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?controller=book&action=list" class="nav-link px-2 <?= NavigationTools::addActiveClass('book', 'list') ?>">Books list</a>
                </li>
                <?php if (User::isLogged() && User::isAdmin()) { ?>
                    <li><a href="index.php?controller=book&action=add" class="nav-link px-2 <?= NavigationTools::addActiveClass('book', 'add') ?>">Add a book</a></li>
                <?php } ?>
            </ul>

            <div class="col-md-3 text-end">
                <?php if (User::isLogged()) { ?>
                    <a href="index.php?controller=auth&action=logout" class="btn btn-primary">Logout</a>
                <?php } else { ?>
                    <a href="index.php?controller=auth&action=login" class="btn btn-outline-primary me-2 <?= NavigationTools::addActiveClass('auth', 'login') ?>">Log in</a>
                    <a href="index.php?controller=user&action=register" class="btn btn-outline-primary me-2 <?= NavigationTools::addActiveClass('user', 'register') ?>">Register</a>
                <?php } ?>
            </div>
        </header>

        <main>