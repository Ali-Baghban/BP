<?php

class project
{
    private $db;
    private $tbl = "project_tbl";

    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function project_get_chid($username)
    {
        try {
            $stmt = $this->db->prepare("SELECT id FROM user_tbl WHERE username='$username'");
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            return $row;
        } catch (exception $e) {

        }

    }
    public function project_list_admin()
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM {$this->tbl}");
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $row;
        } catch (exception $e) {

        }

    }
    public function project_list($username)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM {$this->tbl} WHERE chid IN(SELECT id FROM user_tbl WHERE username='$username')");
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $row;
        } catch (exception $e) {

        }

    }

    public function project_add($data)
    {
        //var_dump($data);
        try {
            $stmt = $this->db->prepare("INSERT INTO {$this->tbl} (`id`, `chid`,`name`,`company`, `status`,
                                    `price`, `details`) VALUES
                                  (NULL,'$data[chid]','$data[name]','$data[company]','$data[status]','$data[price]',
                                  '$data[details]')");
            #######################################################
            $stmt2 = $this->db->prepare("INSERT INTO `file_tbl` (`id`, `url`, `chid`) VALUES 
              (NULL,'$data[file_path]', (SELECT MAX(id) FROM project_tbl))");
            $stmt3 = $this->db->prepare("INSERT INTO `image_tbl` (`id`,`url`,`chid`) VALUES 
              (NULL,  '$data[img1]', (SELECT MAX(id) FROM project_tbl))");
            $stmt4 = $this->db->prepare("INSERT INTO `image_tbl` (`id`,`url`,`chid`) VALUES 
              (NULL,  '$data[img2]', (SELECT MAX(id) FROM project_tbl))");
            $stmt5 = $this->db->prepare("INSERT INTO `image_tbl` (`id`,`url`,`chid`) VALUES 
              (NULL,  '$data[img3]', (SELECT MAX(id) FROM project_tbl))");
            #######################################################
            if ($stmt->execute() && $stmt2->execute() &&
                $stmt3->execute() &&
                $stmt4->execute() &&
                $stmt5->execute()
            ##############################
            ){
                return true;
            }
        } catch (exception $e) {

        }
    }
    public function project_edit_admin($data, $id)
    {
        //var_dump($data);
        $stmt = $this->db->prepare("UPDATE {$this->tbl} SET status='$data[status]' WHERE id='$id'");


        if ($stmt->execute()) return true;
    }
    public function project_edit($data, $id)
    {
        $stmt = $this->db->prepare("UPDATE {$this->tbl} SET name='$data[name]',company='$data[company]',
                                              details='$data[details]',price='$data[price]' WHERE id='$id'");
        $stmt2 = $this->db->prepare("UPDATE file_tbl SET url='$data[file_path]' WHERE chid='$id'");
        //$stmt3 = $this->db->prepare("UPDATE image_tbl SET url='$data[name]', type='$data[type]',
          //                                    options='$data[options]',price='$data[price] WHERE id='$id'");

        if ($stmt->execute() && $stmt2->execute()) return true;
    }

    public function project_get($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->tbl} WHERE id='$id'");
        $stmt2 = $this->db->prepare("SELECT * FROM file_tbl WHERE chid='$id'");
        $stmt3 = $this->db->prepare("SELECT * FROM image_tbl WHERE chid=$id");
        if ($stmt->execute() && $stmt2->execute() && $stmt3->execute()) {
            $res = $stmt->fetch(PDO::FETCH_OBJ);
            $res2 = $stmt2->fetch(PDO::FETCH_OBJ);
            $res3 = $stmt3->fetchAll(PDO::FETCH_OBJ);
            $row = $res;
            foreach ($res3 as $item){
                $row->img[] = $item->url;
            }
            $row->file_path = $res2->url;

//var_dump($row);
            return $row;
        } else {
            return false;
        }
    }
    public function project_count(){
        $stmt = $this->db->prepare("SELECT id FROM {$this->tbl}");
        if ($stmt->execute()){
            $row = $stmt->rowCount();
            return $row;
        }
    }
    public function project_delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM {$this->tbl} WHERE id='$id'");
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}