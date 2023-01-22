<?php
class User_model
{
    private $db;
    private $table1 = 'artikel';
    private $table2 = 'user';

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllArtikel()
    {
        $query = "SELECT id_artikel,
        id_user,
        judul, 
        SUBSTRING(text_artikel, 1, 182) AS textArtikel, 
        tgl_up, 
        bulan_up, 
        tahun_up, 
        foto 
        FROM {$this->table1}";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->setResults();
    }

    public function setFoto($namaInput)
    {
        $namaFile = $_FILES[$namaInput]['name'];
        $ukuranFile = $_FILES[$namaInput]['size'];
        $tmp = $_FILES[$namaInput]['tmp_name'];
        $error = $_FILES[$namaInput]['error'];
        $ekstensiFile = explode(".", strtolower($_FILES[$namaInput]['name']));
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


        move_uploaded_file($tmp, 'img/' . $namaFile);
        return $namaFile;
    }

    public function insertArtikel()
    {
        $query = "INSERT INTO {$this->table1} values(null, :id_user, :judul, :text_artikel, :tgl_up, :bulan_up, :tahun_up, :foto)";
        $this->db->query($query);
        $this->db->bind('id_user', $_SESSION['user-login']['id_user']);
        $this->db->bind('judul', $_POST['judul']);
        $this->db->bind('text_artikel', $_POST['artikel']);
        $this->db->bind('tgl_up', $_POST['tgl_up']);
        $this->db->bind('bulan_up', $_POST['bulan_up']);
        $this->db->bind('tahun_up', $_POST['tahun_up']);
        $this->db->bind('foto', $this->setFoto('foto'));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getAllArtikelById()
    {
        $query = "SELECT SUBSTRING({$this->table1}.text_artikel, 1, 185) as textArtikel,
        {$this->table1}.id_artikel,
        {$this->table1}.id_user,
        {$this->table1}.judul,
        {$this->table1}.tgl_up,
        {$this->table1}.bulan_up,
        {$this->table1}.tahun_up,
        {$this->table1}.foto,
        {$this->table2}.id_user, 
        {$this->table2}.nama,
        {$this->table2}.email,
        {$this->table2}.password,
        {$this->table2}.no_telp,
        {$this->table2}.level
        FROM {$this->table1}
        LEFT JOIN user ON {$this->table1}.id_user = {$this->table2}.id_user 
        WHERE {$this->table1}.id_user = :id_user";
        $this->db->query($query);
        $this->db->bind('id_user', $_SESSION['user-login']['id_user']);
        $this->db->execute();
        return $this->db->setResults();
    }

    public function getArtikelById($id)
    {
        $query = "SELECT * FROM {$this->table1} LEFT JOIN {$this->table2} ON {$this->table1}.id_user = {$this->table2}.id_user WHERE {$this->table1}.id_user = :id_user";
        $this->db->query($query);
        $this->db->bind('id_user', $id);
        $this->db->execute();
        return $this->db->single();
    }
}
