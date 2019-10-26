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
<nav class="navbar fixed-top navbar-light bg-light">
    <a class="navbar-brand" href="index.php">
        <img src="https://pbs.twimg.com/profile_images/935211463232376832/DC7I1vwd_400x400.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        Home
    </a>
    <a class="navbar-brand" href="account.php">Account</a>
    <a class="navbar-brand" href="info.php">About</a>
    <a class="navbar-brand" href="#">Register</a>
</nav>
