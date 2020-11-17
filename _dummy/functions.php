<?php
$db = mysqli_connect("localhost", "root", "", "beasiswa");

function query($query) {
  global $db;
  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data) {
  global $db;

  $nama = $data["nama"];
  $ipk = $data["ipk"];
  $penghasilan = $data["penghasilan"];
  $jarak = $data["jarak"];

  mysqli_query($db, "INSERT INTO dummy VALUES ('$nama', $ipk, $penghasilan, $jarak)");

  return mysqli_affected_rows($db);
}
