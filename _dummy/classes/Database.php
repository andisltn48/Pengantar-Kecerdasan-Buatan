<?php

class Database {
  private static $INSTANCE = null;

  private $mysqli,
    $HOST = 'localhost',
    $USER = 'root',
    $PASS = '',
    $DB = 'beasiswa';

  public function __construct() {
    $this->mysqli =  new mysqli($this->HOST, $this->USER, $this->PASS, $this->DB);
    if (mysqli_connect_error()) {
      die('Gagal Koneksi ke DB');
    }
  }

  // Singleton Pattern -> menguji koneksi agar tidak double
  public static function getInstance() {
    if (!isset(self::$INSTANCE)) {
      self::$INSTANCE = new Database;
    }
    return self::$INSTANCE;
  }

  public function tampilData() {
    $data = mysqli_query($this->mysqli, "SELECT * FROM dummy");
    while ($row = mysqli_fetch_assoc($data)) {
      $hasil[] = $row;
    }
    return $hasil;
  }
}
