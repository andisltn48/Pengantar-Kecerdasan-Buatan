<?php

class Fuzzy {

  /* 
  ==========================================================================================================================
                                                    FUNGSI KEANGGOTAAN
  ==========================================================================================================================
  */

  // * IPK
  // Linear Turun
  public static function ipkRendah($ipk) {
    if ($ipk <= 1.5) {
      $derajatKeanggotaan = 1;
    } else if ($ipk >= 1.5 && $ipk <= 2.5) {
      $derajatKeanggotaan = (2.5 - $ipk) / (2.5 - 1.5);
    } else {
      $derajatKeanggotaan = 0;
    }
    return $derajatKeanggotaan;
  }


  // Kurva Segitiga
  public static function ipkSedang($ipk) {
    if ($ipk >= 1.5 && $ipk <= 2.5) {
      $derajatKeanggotaan = ($ipk - 1.5) / (2.5 - 1.5);
    } else if ($ipk >= 2.5 && $ipk <= 3.5) {
      $derajatKeanggotaan = (3.5 - $ipk) / (3.5 - 2.5);
    } else {
      $derajatKeanggotaan = 0;
    }
    return $derajatKeanggotaan;
  }

  // Linear Naik
  public static function ipkTinggi($ipk) {
    if ($ipk <= 2.5) {
      $derajatKeanggotaan = 0;
    } else if ($ipk >= 2.5 && $ipk <= 4) {
      $derajatKeanggotaan = ($ipk - 2.5) / (4 - 2.5);
    } else {
      $derajatKeanggotaan = 1;
    }
    return $derajatKeanggotaan;
  }

  // * Penghasilan Orang Tua

  public static function penghasilanRendah($penghasilan) {
    if ($penghasilan <= 3000000) {
      $derajatKeanggotaan = 1;
    } else if ($penghasilan >= 3000000 && $penghasilan <= 5500000) {
      $derajatKeanggotaan = (5500000 - $penghasilan) / (5500000 - 3000000);
    } else {
      $derajatKeanggotaan = 0;
    }
    return $derajatKeanggotaan;
  }

  public static function penghasilanSedang($penghasilan) {
    if ($penghasilan >= 2000000 && $penghasilan <= 5500000) {
      $derajatKeanggotaan = ($penghasilan - 2000000) / (5500000 - 2000000);
    } else if ($penghasilan >= 5500000 && $penghasilan <= 9000000) {
      $derajatKeanggotaan = (9000000 - $penghasilan) / (9000000 - 5500000);
    } else {
      $derajatKeanggotaan = 0;
    }
    return $derajatKeanggotaan;
  }

  public static function penghasilanTinggi($penghasilan) {
    if ($penghasilan <= 5500000) {
      $derajatKeanggotaan = 0;
    } else if ($penghasilan >= 5500000 && $penghasilan <= 9000000) {
      $derajatKeanggotaan = ($penghasilan - 5500000) / (9000000 - 5500000);
    } else {
      $derajatKeanggotaan = 1;
    }
    return $derajatKeanggotaan;
  }

  // * Jarak

  public static function jarakDekat($jarak) {
    if ($jarak <= 5) {
      $derajatKeanggotaan = 1;
    } else if ($jarak >= 5 && $jarak <= 12.5) {
      $derajatKeanggotaan = (12.5 - $jarak) / (12.5 - 5);
    } else {
      $derajatKeanggotaan = 0;
    }
    return $derajatKeanggotaan;
  }

  public static function jarakSedang($jarak) {
    if ($jarak >= 5 && $jarak <= 12.5) {
      $derajatKeanggotaan = ($jarak - 5) / (12.5 - 5);
    } else if ($jarak >= 12.5 && $jarak <= 20) {
      $derajatKeanggotaan = (20 - $jarak) / (20 - 12.5);
    } else {
      $derajatKeanggotaan = 0;
    }
    return $derajatKeanggotaan;
  }

  public static function jarakJauh($jarak) {
    if ($jarak <= 12.5) {
      $derajatKeanggotaan = 0;
    } else if ($jarak >= 12.5 && $jarak <= 20) {
      $derajatKeanggotaan = ($jarak - 12.5) / (20 - 12.5);
    } else {
      $derajatKeanggotaan = 1;
    }
    return $derajatKeanggotaan;
  }

  public static function tanggunganSedikit($tanggungan) {
    if ($tanggungan <= 2) {
      $derajatKeanggotaan = 1;
    } else if ($tanggungan >= 2 && $tanggungan <= 3) {
      $derajatKeanggotaan = (3 - $tanggungan) / (3 - 2);
    } else {
      $derajatKeanggotaan = 0;
    }
    return $derajatKeanggotaan;
  }

  public static function tanggunganSedang($tanggungan) {
    if ($tanggungan >= 1 && $tanggungan <= 3) {
      $derajatKeanggotaan = ($tanggungan - 1) / (3 - 1);
    } else if ($tanggungan >= 3 && $tanggungan <= 6) {
      $derajatKeanggotaan = (6 - $tanggungan) / (6 - 3);
    } else {
      $derajatKeanggotaan = 0;
    }
    return $derajatKeanggotaan;
  }

  public static function tanggunganBanyak($tanggungan) {
    if ($tanggungan <= 3) {
      $derajatKeanggotaan = 0;
    } else if ($tanggungan >= 3 && $tanggungan <= 5) {
      $derajatKeanggotaan = ($tanggungan - 3) / (5 - 3);
    } else {
      $derajatKeanggotaan = 1;
    }
    return $derajatKeanggotaan;
  }

  public static function rumahSedikit($rumah) {
    if ($rumah <= 2) {
      $derajatKeanggotaan = 1;
    } else if ($rumah >= 2 && $rumah <= 3) {
      $derajatKeanggotaan = (3 - $rumah) / (3 - 2);
    } else {
      $derajatKeanggotaan = 0;
    }
    return $derajatKeanggotaan;
  }

  public static function rumahBanyak($rumah) {
    if ($rumah <= 1) {
      $derajatKeanggotaan = 0;
    } else if ($rumah >= 1 && $rumah <= 3) {
      $derajatKeanggotaan = ($rumah - 1) / (3 - 1);
    } else {
      $derajatKeanggotaan = 1;
    }
    return $derajatKeanggotaan;
  }

  public static function motorSedikit($motor) {
    if ($motor <= 3) {
      $derajatKeanggotaan = 1;
    } else if ($motor >= 3 && $motor <= 4) {
      $derajatKeanggotaan = (4 - $motor) / (4 - 3);
    } else {
      $derajatKeanggotaan = 0;
    }
    return $derajatKeanggotaan;
  }

  public static function motorBanyak($motor) {
    if ($motor <= 2) {
      $derajatKeanggotaan = 0;
    } else if ($motor >= 2 && $motor <= 4) {
      $derajatKeanggotaan = ($motor - 2) / (4 - 2);
    } else {
      $derajatKeanggotaan = 1;
    }
    return $derajatKeanggotaan;
  }

  public static function mobilSedikit($mobil){
    if($mobil <= 2){
      $derajatKeanggotaan = 1;
    } else if ($mobil >= 2 && $mobil <= 3){
      $derajatKeanggotaan = (3 - $mobil) / (3-2); 
    } else {
      $derajatKeanggotaan = 0;
    }
    return $derajatKeanggotaan;
  }

  public static function mobilBanyak($mobil){
    if($mobil <= 1){
      $derajatKeanggotaan = 0;
    } else if($mobil >= 1 && $mobil <= 3){
      $derajatKeanggotaan = ($mobil - 1) / (3 - 1);
    } else {
      $derajatKeanggotaan = 1;
    }
    return $derajatKeanggotaan;
  }

  public static function listrikSedikit($listrik){
    if($listrik <= 300000){
      $derajatKeanggotaan = 1;
    } else if ($listrik >= 300000 && $listrik <= 400000){
      $derajatKeanggotaan = (400000 - $listrik) / (400000 - 300000);
    } else {
      $derajatKeanggotaan = 0;
    }
    return $derajatKeanggotaan;
  }

  public static function listrikSedang($listrik){
    if($listrik >= 200000 && $listrik <= 400000){
      $derajatKeanggotaan = ($listrik - 200000) / (400000 - 200000);
    } else if ($listrik >= 400000 && $listrik <= 600000){
      $derajatKeanggotaan = (600000 - $listrik) / (600000 - 400000);
    } else {
      $derajatKeanggotaan = 0;
    }
    return $derajatKeanggotaan;
  }

  public static function listrikBanyak($listrik){
    if($listrik <= 400000){
      $derajatKeanggotaan = 0;
    } else if($listrik >= 400000 && $listrik <= 600000){
      $derajatKeanggotaan = ($listrik - 400000) / (600000 - 400000);
    } else {
      $derajatKeanggotaan = 1;
    }
    return $derajatKeanggotaan;
  }

  public static function airSedikit($air){
    if($air <= 300000){
      $derajatKeanggotaan = 1;
    } else if ($air >= 300000 && $air <= 400000){
      $derajatKeanggotaan = (400000 - $air) / (400000 - 300000);
    } else {
      $derajatKeanggotaan = 0;
    }
    return $derajatKeanggotaan;
  }

  public static function airSedang($air){
    if($air >= 200000 && $air <= 400000){
      $derajatKeanggotaan = ($air - 200000) / (400000 - 200000);
    } else if ($air >= 400000 && $air <= 600000){
      $derajatKeanggotaan = (600000 - $air) / (600000 - 400000);
    } else {
      $derajatKeanggotaan = 0;
    }
    return $derajatKeanggotaan;
  }

  public static function airBanyak($air){
    if($air <= 400000){
      $derajatKeanggotaan = 0;
    } else if($air >= 400000 && $air <= 600000){
      $derajatKeanggotaan = ($air - 400000) / (600000 - 400000);
    } else {
      $derajatKeanggotaan = 1;
    }
    return $derajatKeanggotaan;
  }

  public static function z_dapat($alpha, $x){
    return (80 - 40) * $alpha[$x] + 40;
  }

  public static function z_tidakDapat($alpha, $x){
    return 80 - ($alpha[$x]) * (80 - 40);
  }


  /* 
  ==========================================================================================================================
                                                    END FUNGSI KEANGGOTAAN
  ==========================================================================================================================
  */


  /*  
  ==========================================================================================================================
                                                          INFERENSI
  ==========================================================================================================================
  */

  public static function inferensi($ipk, $penghasilan, $jarak, $tanggungan, $rumah, $motor, $mobil, $listrik, $air) {

    echo "Rule yang digunakan : \n";
    $x = 0;
    $kondisi = [];
    $nilaiIPK = [self::ipkRendah($ipk), self::ipkSedang($ipk), self::ipkTinggi($ipk)];
    $nilaiPenghasilan = [self::penghasilanRendah($penghasilan), self::penghasilanSedang($penghasilan), self::penghasilanTinggi($penghasilan)];
    $nilaiJarak = [self::jarakDekat($jarak), self::jarakSedang($jarak), self::jarakJauh($jarak)];
    $nilaiTanggungan = [self::tanggunganSedikit($tanggungan), self::tanggunganSedang($tanggungan), self::tanggunganBanyak($tanggungan)];
    $nilaiRumah = [self::rumahSedikit($rumah), self::rumahBanyak($rumah)];
    $nilaiMotor = [self::motorSedikit($motor), self::motorBanyak($motor)];
    $nilaiMobil = [self::mobilSedikit($mobil), self::mobilBanyak($mobil)];
    $nilaiListrik = [self::listrikSedikit($listrik), self::listrikSedang($listrik), self::listrikBanyak($listrik)];
    $nilaiAir = [self::airSedikit($air), self::airSedang($air), self::airBanyak($air)];

    for ($ip = 0; $ip < count($nilaiIPK); $ip++) {
      for ($pn = 0; $pn < count($nilaiPenghasilan); $pn++) {
        for ($jr = 0; $jr < count($nilaiJarak); $jr++) {
          for ($tg = 0; $tg < count($nilaiTanggungan); $tg++){
            for($rm = 0; $rm < count($nilaiRumah); $rm++){
              for($mt = 0; $mt < count($nilaiMotor); $mt++){
                for($mb = 0; $mb < count($nilaiMobil); $mb++){
                  for($ls = 0; $ls < count($nilaiListrik); $ls++){
                    for($ai =  0; $ai < count($nilaiAir); $ai++){
                      if(($nilaiIPK[$ip] > 0) && ($nilaiPenghasilan[$pn] > 0) && ($nilaiJarak[$jr] > 0) && ($nilaiTanggungan[$tg] > 0) && ($nilaiRumah[$rm] > 0) && ($nilaiMotor[$mt] > 0) && ($nilaiMobil[$mb] > 0) && ($nilaiListrik[$ls] > 0) && ($nilaiAir[$ai] > 0) ){
                        $alpha[$x] = min($nilaiIPK[$ip], $nilaiPenghasilan[$pn], $nilaiJarak[$jr], $nilaiTanggungan[$tg], $nilaiRumah[$rm], $nilaiMotor[$mt], $nilaiMobil[$mb], $nilaiListrik[$ls], $nilaiAir[$ai] );
                        if($ip == 2 && $jr == 2 && $pn == 1 && $tg == 2 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0){
                          $z[$x] = self::z_dapat($alpha, $x);
                          $kondisi[$x] = "dapat";
                        } else if($ip == 2 && $jr == 2 && $pn == 1 && $tg == 1 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0){
                          $z[$x] = self::z_dapat($alpha, $x);
                          $kondisi[$x] = "dapat";
                        } else if($ip == 2 && $jr == 2 && $pn == 0 && $tg == 2 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0){
                          $z[$x] = self::z_dapat($alpha, $x);
                          $kondisi[$x] = "dapat";
                        } else if ($ip == 2 && $jr == 2 && $pn == 0 && $tg == 1 &&  $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0) {
                          $z[$x] = self::z_dapat($alpha, $x);
                          $kondisi[$x] = "dapat";
                        } else if($ip == 2 && $jr == 1 && $pn == 1 && $tg == 2 &&  $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0){
                          $z[$x] = self::z_dapat($alpha, $x);
                          $kondisi[$x] = "dapat";
                        } else if($ip == 2 && $jr == 1 && $pn == 1 && $tg == 1 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0){
                          $z[$x] = self::z_dapat($alpha, $x);
                          $kondisi[$x] = "dapat";
                        } else if($ip == 2 && $jr == 1 && $pn == 0 && $tg == 2 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0){
                          $z[$x] = self::z_dapat($alpha, $x);
                          $kondisi[$x] = "dapat";
                        } else if($ip == 2 && $jr == 1 && $pn == 0 && $tg == 1 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0){
                          $z[$x] = self::z_dapat($alpha, $x);
                          $kondisi[$x] = "dapat";
                        } else if($ip == 2 && $jr == 0 && $pn == 1 && $tg == 2 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0){
                          $z[$x] = self::z_dapat($alpha, $x);
                          $kondisi[$x] = "dapat";
                        } else if($ip == 2 && $jr == 0 && $pn == 1 && $tg == 1 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0){
                          $z[$x] = self::z_dapat($alpha, $x);
                          $kondisi[$x] = "dapat";
                        } else if($ip == 2 && $jr == 0 && $pn == 0 && $tg == 2 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0){
                          $z[$x] = self::z_dapat($alpha, $x);
                          $kondisi[$x] = "dapat";
                        } else if($ip == 2 && $jr == 0 && $pn == 0 && $tg == 1 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0){
                          $z[$x] = self::z_dapat($alpha, $x);
                          $kondisi[$x] = "dapat";
                        } else {
                          $z[$x] = self::z_tidakDapat($alpha, $x);
                          $kondisi[$x] = "tidak dapat";
                        }
                        echo "IF IPK = {$nilaiIPK[$ip]} AND Penghasilan = {$nilaiPenghasilan[$pn]} AND Jarak = {$nilaiJarak[$jr]} AND Tanggungan = {$nilaiTanggungan[$tg]} AND Rumah = {$nilaiRumah[$rm]} AND Motor = {$nilaiMotor[$mt]} AND Mobil = {$nilaiMobil[$mb]} AND Listrik = {$nilaiListrik[$ls]} AND Air = {$nilaiAir[$ai]} THEN a_predikat =  {$alpha[$x]} z = {$z[$x]} kondisi = {$kondisi[$x]} \n";
                        $x++;
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  
    self::defuzzifikasi($alpha, $z);
    
  }

  /*  
  ==========================================================================================================================
                                                          END INFERENSI
  ==========================================================================================================================
  */




  /*  
  ==========================================================================================================================
                                                          DEFUZZIFIKASI
  ==========================================================================================================================
  */

  public static function defuzzifikasi($alpha, $z) {
    // rumus centroid method
    // ((alpha1 * z1) + (alpha2 * z2) + ...) / (alpha1 + alpha2 + ...)
    $tmp = [];
    foreach($alpha as $key=>$a){
      $tmp[] = $a * $z[$key];
    }
    $jum = array_sum($tmp);
    $defuzi = ($jum) / (array_sum($alpha));
    
    // buat hasilnya biar desimalnya jadi 2 digit
    echo "\nDefuzzifikasi = " . number_format((float)$defuzi, 2, '.', '') . "%";
  }

  /*  
  ==========================================================================================================================
                                                          END DEFUZZIFIKASI
  ==========================================================================================================================
  */
}

// echo (Fuzzy::inferensi(3.4, 1800000, 10));
// ipk, penghasilan, jarak, tanggungan, rumah, motor, mobil, listrik, air
echo (Fuzzy::inferensi(3.3, 50000, 60, 3, 1, 1, 1, 100000, 100000));
