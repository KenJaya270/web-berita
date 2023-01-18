<?php
class Auth_model
{
    private $db;
    private $table1 = 'user';
    public function __construct()
    {
        $this->db = new Database();
    }

    public function userCheck($data)
    {
        $query = "SELECT * FROM {$this->table1} WHERE email = :email AND password = :password";
        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->single();
    }
}
