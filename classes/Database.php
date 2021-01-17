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

  // public function tampil_data($table) {
  //   $data = new mysqli($this->mysqli, "SELECT * FROM $table");
  //   while ($row = mysqli_fetch_assoc($data)) {
  //     $rows[] = $row;
  //   }
  //   return $rows;
  // }

  // public function edit_data($id) {
  //   $data = new mysqli($this->mysqli, "SELECT * FROM dummy WHERE id='$id'");
  //   while ($row = mysqli_fetch_assoc($data)) {
  //     $rows[] = $row;
  //   }
  //   return $rows;
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
    else die(mysqli_error($this->mysqli));
  }

  public function tampil($query) {
    $data = $this->mysqli->query($query);
    while ($row = $data->fetch_assoc()) {
      $rows[] = $row;
    }
    return $rows;
  }

  public function cari_data($table, $column, $c) {
    if (isset($_GET[$c])) {
      ini_set('display_errors', 'Off');
      $cari = $_GET[$c];
      $data = "SELECT * FROM $table where $column LIKE '%" . $cari . "%'";
      if ($this->tampil($data) > 0) {
        echo "<h1 class='title is-5'>Hasil Pencarian: </h1>";
      } else {
        echo "<h1 class='title has-text-centered '>Pencarian Tidak Ditemukan! </h1>";
      }
    } else {
      $data = "SELECT * FROM $table";
    }
    return $data;
  }

  public function upload() {
    $nama = $_FILES['foto']['name'];
    // $ukuran = $_FILES['Foto']['size'];
    // $error = $_FILES['Foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensi = explode('.', $nama);
    $ekstensi = strtolower(end($ekstensi));

    // if($ukuran > 1000000){
    //   echo "<script>
		// 		alert('ukuran gambar terlalu besar!');
		// 	  </script>";
    // return false;
    // }

    $namaBaru = uniqid();
    $namaBaru .= '.';
    $namaBaru .= $ekstensi;

    move_uploaded_file($tmpName, 'assets/img/profil/' . $namaBaru);
    return $namaBaru;
  }

  public function get_enum($table, $field) {
    $type = $this->mysqli->query("SHOW COLUMNS FROM {$table} WHERE Field = '{$field}'")->fetch_array(MYSQLI_ASSOC)['Type'];
    preg_match("/^enum\(\'(.*)\'\)$/", $type, $matches);
    $enum = explode("','", $matches[1]);
    return $enum;
  }

  public function get_idUser($query) {
    foreach ($this->tampil($query) as $d) {
      foreach ($d as $a) {
        return $a;
      }
    }
  }

  public function escape($name) {
    return $this->mysqli->real_escape_string($name);
  }

  // public static function check($table) {
  //   $c = "SELECT COUNT(*) FROM $table";
  //   return $c;
  // }
}
