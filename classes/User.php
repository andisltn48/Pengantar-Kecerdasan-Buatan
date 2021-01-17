<?php

class User {
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

  public function register_user($fields = []) {
    if($this->_db->insert('tbl_user', $fields)){
      return true;
    } else {
      return false;
    }
  }

  public function cek_email($email) {
    $data = $this->_db->get_info('tbl_user', 'email', $email);
    if (empty($data)) {
      return false;
    } else {
      return true;
    }
  }
}
