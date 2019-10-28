<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="custom.css" rel="stylesheet">
    <title>Home Page</title>
</head>
<body
<?php if (basename(__FILE__) == 'file_name.php'): ?>
        id="info"
<?php endif;?>
>
<nav class="navbar fixed-top navbar-light bg-light">
    <a class="navbar-brand" href="index.php">
        <img src="https://pbs.twimg.com/profile_images/935211463232376832/DC7I1vwd_400x400.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        Home
    </a>
    <ul class="navbar-nav mr-auto inline">
        <li class="nav-item">
            <a class="nav-link" href="account.php">Account <span class="sr-only">(current)</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="info.php">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
        </li>
    </ul>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>
