<?php


class Login {

    private $_db;

    public function __construct() {
        $this->_db = Database::getInstance();
    }

    public function login_user($email, $password) {
        $data = $this->_db->get_info('tbl_user', 'email', $email);
        if (password_verify($password, $data['password'])) {
            return true;
        } else {
            return false;
        }
    }

    public function cek_email($email){
        $data = $this->_db->get_info('tbl_user', 'email', $email);
        if(empty($data)){
            return false;
        } else {
            return true;
        }
    }

    // public function validasi($username, $password) {
    //     // echo $username;
    //     // echo $password;
    //     $db = new Database();
    //     $login = new mysqli($db->__construct(), "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password' ");

    //     $cek = mysqli_num_rows($login);
    //     if ($cek > 0) {
    //         session_start();
    //         // $_SESSION['username'] = $username;
    //         $_SESSION['status'] = "login";
    //         header("location:../index.php");
    //         // echo "benar";
    //     } else {
    //         // header("location:login.php");
    //         die;
    //         echo "<script>
    //             if(!alert('Maaf akun anda salah!'))
    //                 window.location = '../login.php';
    //         </script>";
    //     }
    // }
}
