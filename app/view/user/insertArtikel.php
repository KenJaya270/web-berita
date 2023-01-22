<form class="pb-5" action="<?= BASEURL ?>/user/insertArtikel" method="post" enctype="multipart/form-data">
    <div class="container-fluid">
        <label class="form-label text-dark">Masukkan Foto:</label>
        <input type="file" id="foto" name="foto" class="form-control">
    </div>
    <div class="dropdown-divider"></div>
    <div class="container-fluid mb-2">
        <label class="form-label text-dark">Judul:</label>
        <input type="text" name="judul" id="judul" class="form-control" autocomplete="off">
    </div>
    <div class="container-fluid mt-2">
        <textarea class="form-control" name="artikel" id="artikel" cols="30" rows="10" placeholder="Masukkan Artikelmu.........."></textarea>
    </div>
    <div class="container-fluid mt-2">
        <label class="form-label text-dark">Tanggal Upload:</label>
        <input type="date" name="tgl_up" id="tanggal_up" class="form-control" oninput="insertArtikel();">
    </div>
    <div class="container-fluid mt-2">
        <label for="bulan_up" class="form-label text-dark">Bulan Upload:</label>
        <input type="text" name="bulan_up" id="bulan_up" class="form-control" readonly>
    </div>
    <div class="container-fluid mt-2">
        <label for="tahun_up" class="form-label text-dark">Tahun Upload:</label>
        <input type="text" name="tahun_up" id="tahun_up" class="form-control" readonly>
    </div>
    <div class="container-fluid mt-2">
        <button type="submit" class="btn btn-primary rounded-pill">Submit</button>
    </div>
</form>