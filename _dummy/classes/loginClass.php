<?php
require_once 'databaseClass.php';


Class Login{
    
    private $username = "username", $password = "password";


    public function validasi($username, $password){
        $db = new Database();   
        $login = mysqli_query($db->__construct(), "SELECT * FROM db_akun WHERE Username = '$username' AND password = '$password'");
    
        $cek = mysqli_num_rows($login);
        if($cek > 0){
            session_start();
            // $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            header("location:fuzzy.php");
            // echo "benar";
        }else{
            // header("location:login.php");	
            echo "<script>
                if(!alert('Maaf akun anda salah!'))
                window.location = 'login.php';
            </script>";
        }
    }

}