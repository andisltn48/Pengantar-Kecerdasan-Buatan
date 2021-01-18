<?php

class Fuzzy {

  /* 
  ==========================================================================================================================
                                                    FUNGSI KEANGGOTAAN
  ==========================================================================================================================
  */
  public static $defuzzifikasi;

  public static function linearTurun($a, $b, $x) {
    if ($x <= $a) {
      $derajatKeanggotaan = 1;
    } else if ($x >= $a && $x <= $b) {
      $derajatKeanggotaan = ($b - $x) / ($b - $a);
    } else {
      $derajatKeanggotaan = 0;
    }
    return $derajatKeanggotaan;
  }

  public static function segitiga($a, $b, $c, $x) {
    if ($x >= $a && $x <= $b) {
      $derajatKeanggotaan = ($x - $a) / ($b - $a);
    } else if ($x >= $b && $x <= $c) {
      $derajatKeanggotaan = ($c - $x) / ($c - $b);
    } else {
      $derajatKeanggotaan = 0;
    }
    return $derajatKeanggotaan;
  }

  public static function linearNaik($a, $b, $x) {
    if ($x <= $a) {
      $derajatKeanggotaan = 0;
    } else if ($x >= $a && $x <= $b) {
      $derajatKeanggotaan = ($x - $a) / ($b - $a);
    } else {
      $derajatKeanggotaan = 1;
    }
    return $derajatKeanggotaan;
  }

  public static function fungsiKeanggotaan($ipk, $penghasilan, $jarak, $tanggungan, $rumah, $motor, $mobil, $listrik, $air) {
    // * IPK
    // Linear Turun
    $ipkRendah = function ($ipk) {
      return self::linearTurun(1.5, 2.5, $ipk);
    };

    // Kurva Segitiga
    $ipkSedang = function ($ipk) {
      return self::segitiga(1.5, 2.5, 3.5, $ipk);
    };
    // Linear Naik
    $ipkTinggi = function ($ipk) {
      return self::linearNaik(2.5, 4, $ipk);
    };

    // * Penghasilan Orang Tua

    $penghasilanRendah = function ($penghasilan) {
      return self::linearTurun(3000000, 5500000, $penghasilan);
    };

    $penghasilanSedang = function ($penghasilan) {
      return self::segitiga(2000000, 5500000, 9000000, $penghasilan);
    };

    $penghasilanTinggi = function ($penghasilan) {
      return self::linearNaik(5500000, 9000000, $penghasilan);
    };

    // * Jarak

    $jarakDekat = function ($jarak) {
      return self::linearTurun(5, 12.5, $jarak);
    };

    $jarakSedang = function ($jarak) {
      return self::segitiga(5, 12.5, 20, $jarak);
    };

    $jarakJauh = function ($jarak) {
      return self::linearNaik(12.5, 20, $jarak);
    };

    $tanggunganSedikit = function ($tanggungan) {
      return self::linearTurun(2, 3, $tanggungan);
    };

    $tanggunganSedang = function ($tanggungan) {
      return self::segitiga(1, 3, 6, $tanggungan);
    };

    $tanggunganBanyak = function ($tanggungan) {
      return self::linearNaik(3, 5, $tanggungan);
    };

    $rumahSedikit = function ($rumah) {
      return self::linearTurun(2, 3, $rumah);
    };

    $rumahBanyak = function ($rumah) {
      return self::linearNaik(1, 3, $rumah);
    };

    $motorSedikit = function ($motor) {
      return self::linearTurun(3, 4, $motor);
    };

    $motorBanyak = function ($motor) {
      return self::linearNaik(2, 4, $motor);
    };

    $mobilSedikit = function ($mobil) {
      return self::linearTurun(2, 3, $mobil);
    };

    $mobilBanyak = function ($mobil) {
      return self::linearNaik(1, 3, $mobil);
    };

    $listrikSedikit = function ($listrik) {
      return self::linearTurun(300000, 400000, $listrik);
    };

    $listrikSedang = function ($listrik) {
      return self::segitiga(200000, 400000, 600000, $listrik);
    };

    $listrikBanyak = function ($listrik) {
      return self::linearNaik(400000, 600000, $listrik);
    };

    $airSedikit = function ($air) {
      return self::linearTurun(300000, 400000, $air);
    };

    $airSedang = function ($air) {
      return self::segitiga(200000, 400000, 600000, $air);
    };

    $airBanyak = function ($air) {
      return self::linearNaik(400000, 600000, $air);
    };

    $nilaiIPK = [$ipkRendah($ipk), $ipkSedang($ipk), $ipkTinggi($ipk)];
    $nilaiPenghasilan = [$penghasilanRendah($penghasilan), $penghasilanSedang($penghasilan), $penghasilanTinggi($penghasilan)];
    $nilaiJarak = [$jarakDekat($jarak), $jarakSedang($jarak), $jarakJauh($jarak)];
    $nilaiTanggungan = [$tanggunganSedikit($tanggungan), $tanggunganSedang($tanggungan), $tanggunganBanyak($tanggungan)];
    $nilaiRumah = [$rumahSedikit($rumah), $rumahBanyak($rumah)];
    $nilaiMotor = [$motorSedikit($motor), $motorBanyak($motor)];
    $nilaiMobil = [$mobilSedikit($mobil), $mobilBanyak($mobil)];
    $nilaiListrik = [$listrikSedikit($listrik), $listrikSedang($listrik), $listrikBanyak($listrik)];
    $nilaiAir = [$airSedikit($air), $airSedang($air), $airBanyak($air)];

    // echo $ipk . "   " . $penghasilan . "   " . $jarak . "   " . $tanggungan . "   " . $rumah . "   " . $motor . "   " . $mobil . "   " . $listrik . "   " . $air . "   ";
    self::inferensi($nilaiIPK, $nilaiPenghasilan, $nilaiJarak, $nilaiTanggungan, $nilaiRumah, $nilaiMotor, $nilaiMobil, $nilaiListrik, $nilaiAir);
  }

  public static function z_dapat($alpha, $x) {
    return (80 - 40) * $alpha[$x] + 40;
  }

  public static function z_tidakDapat($alpha, $x) {
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

  public static function inferensi($nilaiIPK, $nilaiPenghasilan, $nilaiJarak, $nilaiTanggungan, $nilaiRumah, $nilaiMotor, $nilaiMobil, $nilaiListrik, $nilaiAir) {

    // echo "Rule yang digunakan : \n";
    $x = 0;
    $kondisi = [];

    for ($ip = 0; $ip < count($nilaiIPK); $ip++) {
      for ($pn = 0; $pn < count($nilaiPenghasilan); $pn++) {
        for ($jr = 0; $jr < count($nilaiJarak); $jr++) {
          for ($tg = 0; $tg < count($nilaiTanggungan); $tg++) {
            for ($rm = 0; $rm < count($nilaiRumah); $rm++) {
              for ($mt = 0; $mt < count($nilaiMotor); $mt++) {
                for ($mb = 0; $mb < count($nilaiMobil); $mb++) {
                  for ($ls = 0; $ls < count($nilaiListrik); $ls++) {
                    for ($ai =  0; $ai < count($nilaiAir); $ai++) {
                      if (($nilaiIPK[$ip] > 0) && ($nilaiPenghasilan[$pn] > 0) && ($nilaiJarak[$jr] > 0) && ($nilaiTanggungan[$tg] > 0) && ($nilaiRumah[$rm] > 0) && ($nilaiMotor[$mt] > 0) && ($nilaiMobil[$mb] > 0) && ($nilaiListrik[$ls] > 0) && ($nilaiAir[$ai] > 0)) {
                        $alpha[$x] = min($nilaiIPK[$ip], $nilaiPenghasilan[$pn], $nilaiJarak[$jr], $nilaiTanggungan[$tg], $nilaiRumah[$rm], $nilaiMotor[$mt], $nilaiMobil[$mb], $nilaiListrik[$ls], $nilaiAir[$ai]);
                        if ($ip == 2 && $jr == 2 && $pn == 1 && $tg == 2 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0) {
                          $z[$x] = self::z_dapat($alpha, $x);
                        } else if ($ip == 2 && $jr == 2 && $pn == 1 && $tg == 1 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0) {
                          $z[$x] = self::z_dapat($alpha, $x);
                        } else if ($ip == 2 && $jr == 2 && $pn == 0 && $tg == 2 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0) {
                          $z[$x] = self::z_dapat($alpha, $x);
                        } else if ($ip == 2 && $jr == 2 && $pn == 0 && $tg == 1 &&  $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0) {
                          $z[$x] = self::z_dapat($alpha, $x);
                        } else if ($ip == 2 && $jr == 1 && $pn == 1 && $tg == 2 &&  $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0) {
                          $z[$x] = self::z_dapat($alpha, $x);
                        } else if ($ip == 2 && $jr == 1 && $pn == 1 && $tg == 1 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0) {
                          $z[$x] = self::z_dapat($alpha, $x);
                        } else if ($ip == 2 && $jr == 1 && $pn == 0 && $tg == 2 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0) {
                          $z[$x] = self::z_dapat($alpha, $x);
                        } else if ($ip == 2 && $jr == 1 && $pn == 0 && $tg == 1 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0) {
                          $z[$x] = self::z_dapat($alpha, $x);
                        } else if ($ip == 2 && $jr == 0 && $pn == 1 && $tg == 2 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0) {
                          $z[$x] = self::z_dapat($alpha, $x);
                        } else if ($ip == 2 && $jr == 0 && $pn == 1 && $tg == 1 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0) {
                          $z[$x] = self::z_dapat($alpha, $x);
                        } else if ($ip == 2 && $jr == 0 && $pn == 0 && $tg == 2 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0) {
                          $z[$x] = self::z_dapat($alpha, $x);
                        } else if ($ip == 2 && $jr == 0 && $pn == 0 && $tg == 1 && $ai == 0 && $rm == 0 && $mt == 0 && $mb == 0 && $ls == 0) {
                          $z[$x] = self::z_dapat($alpha, $x);
                        } else {
                          $z[$x] = self::z_tidakDapat($alpha, $x);
                        }
                        // echo "IF IPK = {$nilaiIPK[$ip]} AND Penghasilan = {$nilaiPenghasilan[$pn]} AND Jarak = {$nilaiJarak[$jr]} AND Tanggungan = {$nilaiTanggungan[$tg]} AND Rumah = {$nilaiRumah[$rm]} AND Motor = {$nilaiMotor[$mt]} AND Mobil = {$nilaiMobil[$mb]} AND Listrik = {$nilaiListrik[$ls]} AND Air = {$nilaiAir[$ai]} THEN a_predikat =  {$alpha[$x]} z = {$z[$x]} kondisi = {$kondisi[$x]} \n";
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
    foreach ($alpha as $key => $a) {
      $tmp[] = $a * $z[$key];
    }
    $jum = array_sum($tmp);
    $defuzi = ($jum) / (array_sum($alpha));

    // buat hasilnya biar desimalnya jadi 2 digit
    self::$defuzzifikasi = number_format((float)$defuzi, 2, '.', '');
    return self::$defuzzifikasi;
  }

  public static function get_defuzi(){
    return self::$defuzzifikasi;
  }

  /*  
  ==========================================================================================================================
                                                          END DEFUZZIFIKASI
  ==========================================================================================================================
  */
}

// echo (Fuzzy::fungsiKeanggotaan(3.5, 32000, 20, 3, 1, 1, 0, 120000, 100000));
