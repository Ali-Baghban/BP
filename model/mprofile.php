<?php

class profile
{
    private $db;
    private $tbl = 'user';

    public function __construct()
    {
        global $db;
        $this->db = $db;
    }
    public function profile_get($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->tbl} WHERE `id`='$id'");
        if($stmt->execute()){
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            return $row;
        }
    }
    public function profile_edit($data, $id)
    {
        $stmt = $this->db->prepare("UPDATE {$this->tbl} SET title='$data[title]', body='$data[body]', importance='$data[importance]',
                                    sort='$data[sort]'WHERE id='$id'");
        if ($stmt->execute()) return true;
    }
}