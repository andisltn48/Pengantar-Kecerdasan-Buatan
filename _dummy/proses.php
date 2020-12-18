<?php

require_once 'core/init.php';

$db = new Database();
$login = new Login();

$action = $_GET['aksi'];


if ($action == 'tambah'){
    $db->tambah_data($_POST['nama'], $_POST['ipk'], $_POST['penghasilan'], $_POST['jarak']);
    header("Location:fuzzy.php");
    
} else if ($action == 'update'){
    $db->update_data($_POST['id'], $_POST['nama'], $_POST['ipk'], $_POST['penghasilan'], $_POST['jarak']);
    header("Location:fuzzy.php");

} else if ($action == 'hapus'){
    $db->hapus_data($_GET['id']);
    header("Location:fuzzy.php");

} else if ($action == 'login'){
    $login->validasi($_POST['username'], $_POST['password']);

} else if ($action == 'logout'){
    session_start();
    session_destroy();
    header("location:login.php");
}
?>