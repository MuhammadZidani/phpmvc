<?php
class Blog_model
{
    private $table = 'guru';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBLog()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }
    public function getBlogById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function tambahDataGuru($data)
    {
        $query = " INSERT INTO guru VALUES('', :no_kd, :nama_guru, :mata_pelajaran)";
        $this->db->query($query);
        $this->db->bind('no_kd', $data['no_kd']);
        $this->db->bind('nama_guru', $data['nama_guru']);
        $this->db->bind('mata_pelajaran', $data['mata_pelajaran']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataGuru($id)
    {
        $query = "DELETE FROM guru WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);
        
        $this->db->execute();
        
        return $this->db->rowCount();
    }
}