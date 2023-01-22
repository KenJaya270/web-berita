<div class="container-fluid d-flex justify-content-between align-items-center">
    <h2 class="text-dark p-3">Artikelmu</h2>
    <a href="<?= BASEURL ?>/user/buatArtikel" class="btn btn-primary">Tambah Artikel</a>
</div>
<div class="container-fluid">
    <?php Flasher::flash(); ?>
</div>
<div class="content">
    <div class="container mb-5">
        <div class="row">
            <?php foreach ($data['getAllArtikelById'] as $artikel) : ?>
                <a class="container mt-1 p-0 m-0" href="">
                    <ul class="p-0">
                        <li class="bg-light p-3 list-group-item rounded d-flex align-items-start">
                            <div class="d-flex align-items-center">
                                <img class="rounded w-25" src="<?= BASEURL ?>/img/<?= $artikel['foto'] ?>" alt="" style="max-width: max-width: 50%;">
                                <div class="container">
                                    <span class="text-dark">
                                        <i>
                                            <span id="artikelTanggal"><?= $artikel['tgl_up'] ?></span> <?= $artikel['bulan_up'] ?> <?= $artikel['tahun_up'] ?>

                                        </i>
                                    </span>

                                    <h5 class="no-decoration text-dark"><?= $artikel['judul']; ?></h5>
                                    <p class="text-dark m-0"><small><i>By <?= $artikel['email'] ?></i></small></p>
                                    <p class="text-dark m-0 no-decoration">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Aksi:</div>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Hapus</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </a>
            <?php endforeach; ?>
            <a class="container mt-1 p-0 m-0" href="">
                <ul class="p-0">
                    <li class="bg-light p-3 list-group-item rounded d-flex align-items-start">
                        <div class="d-flex align-items-center">
                            <img class="rounded w-25" src="<?= BASEURL ?>/img/berita1.jpg" alt="" style="max-width: max-width: 50%;">
                            <div class="container">
                                <span class="text-dark">
                                    <i>
                                        14 Jan 2023

                                    </i>
                                </span>

                                <h5 class="no-decoration text-dark">MEGAWATI MENAIKKAN PAJAK BENSIN BBM</h5>
                                <p class="text-dark m-0"><small><i>By You</i></small></p>
                                <p class="text-dark m-0 no-decoration">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Aksi:</div>
                                <a class="dropdown-item" href="#">Edit</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </a>
            <a class="container mt-1 p-0 m-0" href="">
                <ul class="p-0">
                    <li class="bg-light p-3 list-group-item rounded d-flex align-items-start">
                        <div class="d-flex align-items-center">
                            <img class="rounded w-25" src="<?= BASEURL ?>/img/berita1.jpg" alt="" style="max-width: max-width: 50%;">
                            <div class="container">
                                <span class="text-dark">
                                    <i>
                                        14 Jan 2023

                                    </i>
                                </span>

                                <h5 class="no-decoration text-dark">MEGAWATI MENAIKKAN PAJAK BENSIN BBM</h5>
                                <p class="text-dark m-0"><small><i>By You</i></small></p>
                                <p class="text-dark m-0 no-decoration">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Aksi:</div>
                                <a class="dropdown-item" href="#">Edit</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </a>
        </div>
    </div>
</div>