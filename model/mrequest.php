<?php

class request
{
    private $db;
    private $tbl = 'request_tbl';

    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function request_send($data)
    {
        $stmt = $this->db->prepare("INSERT INTO {$this->tbl} (`id`,`chid`,`customer_info`,`message`,`designer_info`,`status`) VALUES 
                                  (NULL ,'$data[project_id]','$data[customer_info]','$data[message]','$data[designer_info]','$data[status]')");
        if ($stmt->execute()) {
            return true;
        }
    }

    public function request_get($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->tbl} WHERE id='$id'");
        if ($stmt->execute()){
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            return $row;
        }
    }
    public function request_count(){
        $stmt = $this->db->prepare("SELECT id FROM {$this->tbl} WHERE `status`='0'");
        if ($stmt->execute()){
            $row = $stmt->rowCount();
            return $row;
        }
    }
    public function request_list_admin()
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->tbl}");
        if ($stmt->execute()) {
            $row = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $row;
        }

    }

    public function request_edit_admin($data, $id)
    {
        $stmt = $this->db->prepare("UPDATE {$this->tbl} SET `status`='$data[status]' WHERE id='$id'");
        if ($stmt->execute()){
            return true;
        }
    }

    public function request_delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM {$this->tbl} WHERE id='$id'");
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}