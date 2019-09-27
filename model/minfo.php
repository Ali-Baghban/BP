<?php

class info
{
    private $tbl = "info_tbl";
    private $db;

    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function get_general_info()
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->tbl}");
        if($stmt->execute()){
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            return $row;
        }
    }
    public function info_edit($data){
        $stmt = $this->db->prepare("UPDATE {$this->tbl} SET title='$data[title]', details='$data[details]', 
                                    phone='$data[phone]', fax='$data[fax]', address='$data[address]', email='$data[email]',
                                    facebook='$data[facebook]', twitter='$data[twitter]', link1='$data[link1]',
                                    link2='$data[link2]',link3='$data[link3]', status='$data[status]'");
        if ($stmt->execute()) return true;
    }
}

