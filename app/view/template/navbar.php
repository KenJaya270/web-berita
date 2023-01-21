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
            </ul>
        </div>
        <div class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php if (isset($_SESSION['user-login'])) : ?>
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['user-login']['email'] ?></span>
                <?php else : ?>
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Guest</span>
                <?php endif; ?>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item">
                    <i class="fas fa-gear fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>

                <?php if (isset($_SESSION['user-login'])) : ?>
                    <a class="dropdown-item" href="<?= BASEURL ?>/user/buatArtikel">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Buat Artikel
                    </a>
                <?php endif; ?>
                <div class="dropdown-divider"></div>
                <?php if (!isset($_SESSION['user-login'])) : ?>
                    <a class="dropdown-item" href="<?= BASEURL ?>/login">
                        <i class="fas fa-right-to-bracket fa-sm fa-fw mr-2 text-gray-400"></i>
                        Login
                    </a>
                <?php endif; ?>
                <?php if (isset($_SESSION['user-login'])) : ?>
                    <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </header>