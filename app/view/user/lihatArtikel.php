<div class="d-flex justify-content-center p-lg-2 mt-2">
    <div class="container d-flex flex-column">
        <h1 class=""><?= $data['getArtikelById']['judul'] ?></h1>
        <div class="d-flex align-items-start mb-2">
            <span class="mr-2 small text-dark">
                By <?= $data['getArtikelById']['email'] ?>
            </span>
            <span class="small text-dark">
                <span id="coba"></span>
                <span id="artikelTanggal"><?= $data['getArtikelById']['tgl_up'] ?></span>
                <?= $data['getArtikelById']['bulan_up'] ?>
                <?= $data['getArtikelById']['tahun_up'] ?>
            </span>
        </div>
        <div class="container w-100 d-flex align-items-center flex-column">
            <img style="width: 100vh;" class="rounded" src="<?= BASEURL ?>/img/<?= $data['getArtikelById']['foto'] ?>" alt="">
            <div class="d-flex justify-content-start mt-lg-3">
                <p class="text-dark text-justify"><?= $data['getArtikelById']['text_artikel']; ?></p>
            </div>
        </div>

    </div>
</div>