<?php
require 'functions.php';
$beasiswa = query("SELECT * FROM dummy");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <title>Tes Fuzzy</title>
  <style>
    table {
      margin: auto;
      margin-top: 50px;
    }

    a {
      margin-left: 13rem;
      margin-top: 50px;
    }
  </style>
</head>

<body>
  <main>
    <a href="tambah.php" class="w-auto shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
      Tambah
    </a>
    <table class="table">
      <thead>
        <tr>
          <th class="border bg-gray-400 px-4 py-2">No</th>
          <th class="border bg-gray-400 px-4 py-2">Nama</th>
          <th class="border bg-gray-400 px-4 py-2">IPK</th>
          <th class="border bg-gray-400 px-4 py-2">Penghasilan</th>
          <th class="border bg-gray-400 px-4 py-2">Jarak</th>
          <th class="border bg-gray-400 px-4 py-2">Skala IPK</th>
          <th class="border bg-gray-400 px-4 py-2">Skala Penghasilan</th>
          <th class="border bg-gray-400 px-4 py-2">Skala Jarak</th>
          <th class="border bg-gray-400 px-4 py-2">Status Beasiswa</th>
        </tr>
      </thead>
      <?php
      $i = 1;
      foreach ($beasiswa as $row) :
        $skalaIPK = "";
        if ($row["ipk"] > 4) {
          $skalaIPK = "Kelebihan WOe";
        } else if ($row["ipk"] > 3.5 && $row["ipk"] <= 4) {
          $skalaIPK = "Sangat Baik";
        } else if ($row["ipk"] >= 3 && $row["ipk"] <= 3.5) {
          $skalaIPK = "Baik";
        } else if ($row["ipk"] >= 2) {
          $skalaIPK = "Cukup";
        } else if ($row["ipk"] >= 1) {
          $skalaIPK = "Goblok";
        } else {
          $skalaIPK = "Sangat Goblok";
        }

        $skalaPenghasilan = "";
        if ($row["penghasilan"] > 10000000) {
          $skalaPenghasilan = "Sangat Mampu";
        } else if ($row["penghasilan"] >= 5000000) {
          $skalaPenghasilan = "Mampu";
        } else if ($row["penghasilan"] >= 1000000) {
          $skalaPenghasilan = "Cukup";
        } else if ($row["penghasilan"] >= 500000) {
          $skalaPenghasilan = "Tidak Mampu";
        } else {
          $skalaPenghasilan = "Sangat Tidak Mampu";
        }

        $skalaJarak = "";
        if ($row["jarak"] > 20) {
          $skalaJarak = "Sangat Jauh";
        } else if ($row["jarak"] >= 10) {
          $skalaJarak = "Jauh";
        } else if ($row["jarak"] >= 5) {
          $skalaJarak = "Sedang";
        } else if ($row["jarak"] >= 1) {
          $skalaJarak = "Dekat";
        } else {
          $skalaJarak = "Sangat Dekat";
        }

        $beasiswa = "";
        if ($skalaIPK == "Baik" && $skalaPenghasilan == "Tidak Mampu" && $skalaJarak == "Sedang") {
          $beasiswa = "Dapat";
        } else if ($skalaIPK == "Baik" && $skalaPenghasilan == "Tidak Mampu" && $skalaJarak == "Jauh") {
          $beasiswa = "Dapat";
        } else if ($skalaIPK == "Baik" && $skalaPenghasilan == "Tidak Mampu" && $skalaJarak == "Sangat Jauh") {
          $beasiswa = "Dapat";
        } else if ($skalaIPK == "Baik" && $skalaPenghasilan == "Sangat Tidak Mampu" && $skalaJarak == "Sedang") {
          $beasiswa = "Dapat";
        } else if ($skalaIPK == "Baik" && $skalaPenghasilan == "Sangat Tidak Mampu" && $skalaJarak == "Jauh") {
          $beasiswa = "Dapat";
        } else if ($skalaIPK == "Baik" && $skalaPenghasilan == "Sangat Tidak Mampu" && $skalaJarak == "Sangat Jauh") {
          $beasiswa = "Dapat";
        } else if ($skalaIPK == "Sangat Baik" && $skalaPenghasilan == "Tidak Mampu" && $skalaJarak == "Sedang") {
          $beasiswa = "Dapat";
        } else if ($skalaIPK == "Sangat Baik" && $skalaPenghasilan == "Tidak Mampu" && $skalaJarak == "Sedang") {
          $beasiswa = "Dapat";
        } else if ($skalaIPK == "Sangat Baik" && $skalaPenghasilan == "Tidak Mampu" && $skalaJarak == "Jauh") {
          $beasiswa = "Dapat";
        } else if ($skalaIPK == "Sangat Baik" && $skalaPenghasilan == "Tidak Mampu" && $skalaJarak == "Sangat Jauh") {
          $beasiswa = "Dapat";
        } else if ($skalaIPK == "Sangat Baik" && $skalaPenghasilan == "Sangat Tidak Mampu" && $skalaJarak == "Sedang") {
          $beasiswa = "Dapat";
        } else if ($skalaIPK == "Sangat Baik" && $skalaPenghasilan == "Sangat Tidak Mampu" && $skalaJarak == "Jauh") {
          $beasiswa = "Dapat";
        } else if ($skalaIPK == "Sangat Baik" && $skalaPenghasilan == "Sangat Tidak Mampu" && $skalaJarak == "Sangat Jauh") {
          $beasiswa = "Dapat";
        } else {
          $beasiswa = "Tidak Dapat";
        }
      ?>
        <tbody>
          <tr>
            <td class="border px-4 py-2"><?= $i++; ?></td>
            <td class="border px-4 py-2"><?= $row["nama"]; ?></td>
            <td class="border px-4 py-2"><?= $row["ipk"]; ?></td>
            <td class="border px-4 py-2"><?= $row["penghasilan"]; ?></td>
            <td class="border px-4 py-2"><?= $row["jarak"]; ?></td>
            <td class="border px-4 py-2"><?= $skalaIPK; ?></td>
            <td class="border px-4 py-2"><?= $skalaPenghasilan; ?></td>
            <td class="border px-4 py-2"><?= $skalaJarak; ?></td>
            <td class="border px-4 py-2"><?= $beasiswa; ?></td>
          </tr>
        </tbody>
      <?php endforeach ?>
    </table>
  </main>
</body>

</html>