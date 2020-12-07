<?php
require_once 'core/init.php';
require_once 'templates/header.php';
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
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
  <?php
    
    ?>
    <form action="proses.php?aksi=login" method="post" class="w-full max-w-sm">
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-2/3">
          <input  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Username" name="username">
        </div>
      </div>
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-2/3">
          <input  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Password" name="password">
        </div>
      </div>

      <div class="md:flex md:items-left">
        <div class="md:w-full">
          <button class="w-2/3 shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" name="submit">
            Login
          </button>
        </div>
      </div>
    <?php  ?>
    </form>
  </main>
</body>

</html>