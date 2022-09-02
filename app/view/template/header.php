<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= BASEURL?>/css/style.css">
    <!-- <link rel="stylesheet" href="<?= BASEURL?>/css/style1.css"> -->

    <title>Halaman <?= $data['judul'];?></title>

    <!-- Favicons -->
	<link rel="icon" type="img/png" href="img/favicon.png" sizes="40x40">
	<link rel="apple-touch-icon" href="img/favicon.png">
</head>
<body>
<section class="sec">
        <header>
            <a href="#"> <img class ="logo" src="img/logo.png"></a> <h1>BNews</h1>
            <div class="toggleMenu" onclick="menuToggle();"></div>
            <ul class="navigation">
                <li class="active"><a href="home.html">Home</a></li>
                <li><a href="#">Trendings</a></li>
                <li><a href="#">What's new</a></li>
                <li><a href="#">Old report</a></li>
                <li><a href="#">About</a></li>
                <li><a href="<?= BASEURL ?>/login/form"><button class="btn-danger navbar-btn">Log In</button>
            </ul>
        </header>