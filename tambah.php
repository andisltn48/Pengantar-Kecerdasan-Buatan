<?php
require_once 'core/init.php';
$db = new Database();

?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tambah</title>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <style>
    form {
      margin: auto;
      margin-top: 80px;
    }
  </style>
</head>

<body>
  <main>
    <form action="proses.php?aksi=tambah" method="post" class="w-full max-w-sm">
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-2/3">
          <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="hidden" placeholder="id" name="id">
        </div>
      </div>
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-2/3">
          <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Nama" name="nama">
        </div>
      </div>
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-2/3">
          <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-password" type="text" placeholder="IPK" name="ipk">
        </div>
      </div>
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-2/3">
          <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-password" type="text" placeholder="Penghasilan" name="penghasilan">
        </div>
      </div>
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-2/3">
          <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-password" type="text" placeholder="Jarak" name="jarak">
        </div>
      </div>

      <div class="md:flex md:items-left">
        <div class="md:w-full">
          <button class="w-2/3 shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" name="submit">
            Tambah
          </button>
        </div>
      </div>

    </form>
  </main>
</body>

</html>