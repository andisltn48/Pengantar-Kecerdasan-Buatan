<?php
require_once 'core/init.php';
require_once 'components/header.php';
$db = new Database;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>Tes</title>
  <style>
    table {
      margin: auto;
      margin-top: 50px;
    }
  </style>
</head>

<body>
  <main>
    <a href="input.php" class="inline-block bg-blue-200 py-2 px-4 mt-2 ml-2">input</a>
    <table class="table">
      <thead>
        <tr>
          <th class="border w-1/4 bg-gray-300 px-4 py-2">Nama</th>
          <th class="border bg-gray-300 px-4 py-2">IPK</th>
          <th class="border bg-gray-300 px-4 py-2">Penghasilan</th>
          <th class="border bg-gray-300 px-4 py-2">Jarak</th>
        </tr>
      </thead>
      <?php 
      foreach($db->query() as $d):
      ?>
      <tbody>
        <tr>
          <td class="border px-4 py-2"><?= $d['nama'] ?></td>
          <td class="border px-4 py-2"><?= $d['ipk'] ?></td>
          <td class="border px-4 py-2"><?= $d['penghasilan'] ?></td>
          <td class="border px-4 py-2"><?= $d['jarak'] ?></td>
        </tr>
      </tbody>
      <?php endforeach ?>
    </table>
  </main>
</body>

</html>