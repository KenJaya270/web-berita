<?php
class User_model
{
    private $db;
    private $table1 = 'artikel';

    public function __construct()
    {
        $this->db = new Database();
    }

    public function setFoto($namaInput)
    {
        $namaFile = $_FILES[$namaInput]['name'];
        $ukuranFile = $_FILES[$namaInput]['size'];
        $tmp = $_FILES[$namaInput]['tmp_name'];
        $error = $_FILES[$namaInput]['error'];
        $ekstensiFile = explode(".", strtolower($_FILES[$namaInput]));
        $ekstensiFileValid = [
            'jpg',
            'jpeg',
            'png'
        ];

        if (!in_array(end($ekstensiFile), $ekstensiFileValid)) {
            Flasher::setFlash('danger', 'tambahkan', '(Harus JPG, PNG, JPEG) Foto Gagal');
            header('Location: ' . BASEURL . '/user/formInsertArtikel');
            return false;
        }

        if ($error === 4) {
            Flasher::setFlash('danger', '', 'Silahkan upload foto');
            header('Location: ' . BASEURL . '/user/formInsertArtikel');
            return false;
        }

        if ($ukuranFile > 40000000) {
            Flasher::setFlash('danger', '', 'Size Foto Harus Kurang Dari 40MB');
            header('Location: ' . BASEURL . '/user/formInsertArtikel');
            return false;
        }

        $direct = 'img/';

        move_uploaded_file($tmp, $direct);
        return $namaFile;
    }

    public function insertArtikel()
    {
        $query = "INSERT INTO {$this->table1} values(null, :id_user, :judul, :tgl_up, :bulan_up, :tahun_up, :foto)";
        $this->db->query($query);
        $this->db->bind('id_user', $_POST['id_user']);
        $this->db->bind('judul', $_POST['judul']);
        $this->db->bind('tgl_up', $_POST['tgl_up']);
        $this->db->bind('bulan_up', $_POST['bulan_up']);
        $this->db->bind('tahun_up', $_POST['tahun_up']);
        $this->db->bind('foto', $this->setFoto('foto'));
        $this->db->execute();
        return $this->db->rowCount();
    }
}
