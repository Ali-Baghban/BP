<?php

$db = new PDO("mysql:host=localhost;dbname=bp","root","");
$db->exec("set names utf8");
include_once 'model/minfo.php';
$config_obj = new info();
$config= $config_obj->get_general_info();

?>