<section class="sec">
    <header class="bg-light sticky-top d-flex justify-content-between align-items-center">
        <div class="container">
            <div class="toggleMenu" onclick="menuToggle();"></div>
            <ul class="navigation d-flex align-items-center">
                <a href="#"> <img class="logo" src="<?= BASEURL ?>/img/favicon.png"></a>
                <li class="active"><a href="<?= BASEURL ?>/home/index">Home</a></li>
                <li><a href="#">Trendings</a></li>
                <li><a href="#">What's new</a></li>
                <li><a href="#">Old report</a></li>
                <li><a href="<?= BASEURL ?>/about/index">About</a></li>
                <li><a href="<?= BASEURL ?>/login/form"><button class="btn btn-primary navbar-btn">Log In</button>
                <li><a href="<?= BASEURL ?>/auth/logout"><button class="btn btn-danger navbar-btn">Log out</button>
            </ul>
        </div>
        <div class="container">

            <p class="text-dark"><small><?= $_SESSION['user-login']['email']; ?></small></p>
        </div>
    </header>