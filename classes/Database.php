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

  public function tampil_data($table) {
    $data = new mysqli($this->mysqli, "SELECT * FROM $table");
    while ($row = mysqli_fetch_assoc($data)) {
      $rows[] = $row;
    }
    return $rows;
  }

  public function edit_data($id) {
    $data = new mysqli($this->mysqli, "SELECT * FROM dummy WHERE id='$id'");
    while ($row = mysqli_fetch_assoc($data)) {
      $rows[] = $row;
    }
    return $rows;
  }

  // public function tambah_data($nama,$ipk,$penghasilan,$jarak){
  //     new mysqli($this->mysqli, "INSERT INTO dummy VALUES ('','$nama', $ipk, $penghasilan, $jarak)");
  // }

  // public function update_data($id, $nama, $ipk, $penghasilan, $jarak) {
  //   new mysqli($this->mysqli, "UPDATE dummy SET Nama='$nama', Ipk ='$ipk', Penghasilan='$penghasilan', Jarak='$jarak' WHERE id='$id'");
  // }

  // public function hapus_data($id) {
  //   new mysqli($this->mysqli, "DELETE FROM dummy WHERE id=$id");
  // }

  public function insert($table, $fields = []) {
    $column = implode(", ", array_keys($fields));

    $valuesArray = [];
    $i = 0;
    foreach ($fields as $key => $values) {
      if (is_int($values)) {
        $valuesArray[$i] = $this->escape($values);
      } else {
        $valuesArray[$i] = "'" . $this->escape($values) . "'";
      }
      $i++;
    }

    $values = implode(", ", $valuesArray);


    $query = "INSERT INTO $table ($column) VALUES ($values)";

    return $this->run_query($query, 'Masalah saat memasukkan data');
  }

  public function get_info($table, $column, $value) {
    if (!is_int($value)) {
      $value = "'" . $value . "'";
    }
    $query = "SELECT * FROM $table WHERE $column = $value";
    $result = $this->mysqli->query($query);
    while ($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  public function run_query($query, $msg) {
    if ($this->mysqli->query($query)) return true;
    else die($msg);
  }

  public function escape($name) {
    return $this->mysqli->real_escape_string($name);
  }

  public static function check($table){
    $c = "SELECT COUNT(*) FROM $table";
    return $c;
  }

  
}