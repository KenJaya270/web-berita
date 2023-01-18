<?php
class Register_model
{
    private $db;
    private $table1 = 'user';
    public function __construct()
    {
        $this->db = new Database();
    }

    public function insertUser($data)
    {
        $query = "INSERT INTO {$this->table1} VALUES(null, :nama, :email, :password, :no_telp, 'user')";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
