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
    return $this->mysqli;
  }

  // Singleton Pattern -> menguji koneksi agar tidak double
  public static function getInstance() {
    if (!isset(self::$INSTANCE)) {
      self::$INSTANCE = new Database;
    }
    return self::$INSTANCE;
  }

  public function query(){
    $data = mysqli_query($this->mysqli, "SELECT * FROM dummy");
    while ($row = mysqli_fetch_assoc($data)){
        $rows[] = $row;
    }
    return $rows;
  }

  public function edit_data($id){
      $data = mysqli_query($this->mysqli, "SELECT * FROM dummy WHERE id='$id'");
      while ($row = mysqli_fetch_assoc($data)){
          $rows[] = $row;
      }
      return $rows;
  }

  public function tambah_data($nama,$ipk,$penghasilan,$jarak){
      mysqli_query($this->mysqli, "INSERT INTO dummy VALUES ('','$nama', $ipk, $penghasilan, $jarak)");
  }

  public function update_data($id, $nama, $ipk, $penghasilan, $jarak){
      mysqli_query($this->mysqli, "UPDATE dummy SET Nama='$nama', Ipk ='$ipk', Penghasilan='$penghasilan', Jarak='$jarak' WHERE id='$id'");
  }

  public function hapus_data($id){
      mysqli_query($this->mysqli, "DELETE FROM dummy WHERE id=$id" );
  }
}
