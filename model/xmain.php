<?php

class xmain
{   private $db;
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function security_check()
    {
        return true;
    }

    public function sec_check()
    {
        if (isset($_SESSION['login'])) {
            return true;

        } else {
            return false;
        }
    }
    public function status_check(){
        $stmt = $this->db->prepare("SELECT status FROM info_tbl");
        if ($stmt->execute()){
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            return $row;
        }
    }
    public function redirect(){
        header("Location: index.php");
    }
}