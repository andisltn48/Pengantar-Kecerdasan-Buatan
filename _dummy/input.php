<?php
require_once 'core/init.php';

if(Input::post('submit')){
  die(Input::post('username'));
} else {
  echo "err";
}
// if (Input::post('submit')) {
//   echo "OK";
// }

require_once 'components/header.php';
?>

<form action="" method="post">
  <input type="text" name="nama" class="block border-2 px-4 py-2 mb-4 " placeholder="nama">
  <input type="text" name="ipk" class="block border-2 px-4 py-2 mb-4" placeholder="ipk">
  <input type="text" name="penghasilan" class="block border-2 px-4 py-2 mb-4" placeholder="penghasilan">
  <input type="text" name="jarak" class="block border-2 px-4 py-2 mb-4" placeholder="jarak">
  <button class="button px-4 py-2 bg-blue-300" type="submit" name="submit">tambah</button>
</form>