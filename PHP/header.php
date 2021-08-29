<?php include "PHP/db.php" ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="img/logo.svg">
    <meta charset="UTF-8" lang="RO-ro">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Nuci Romania</title>
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $site_key ?>"></script>
</head>

<body>
<div class="preloader">
    <img src="img/logo.svg" alt="logo">
</div>