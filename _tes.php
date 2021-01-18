<?php 
require_once 'core/init.php';
$db = new Database;

$t = $db->tampil("SELECT IPK FROM tbl_biodata WHERE id_user = 20");
var_dump($t)?>