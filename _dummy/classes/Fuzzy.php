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
      $derajatKeanggotaan = 1;
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


  /* 
  ==========================================================================================================================
                                                    END FUNGSI KEANGGOTAAN
  ==========================================================================================================================
  */



  // <div>
  /*  
  ==========================================================================================================================
                                                    PENENTUAN SKALA
  ==========================================================================================================================
  */

  // public static function skalaIPK($ipk) {
  //   $skala = "";
  //   $nilaiIPK = [self::ipkRendah($ipk), self::ipkSedang($ipk), self::ipkTinggi($ipk)];
  //   // echo $nilaiIPK[0] . " " . $nilaiIPK[1] . " " . $nilaiIPK[2] . " ";
  //   if ($nilaiIPK[0] > $nilaiIPK[1]) {
  //     $skala =  "RENDAH";
  //   } else if ($nilaiIPK[1] > $nilaiIPK[2]) {
  //     $skala =  "SEDANG";
  //   } else {
  //     $skala = "TINGGI";
  //   }
  //   return $skala;
  // }

  // public static function skalaPenghasilan($penghasilan) {
  //   $skala = "";
  //   $nilaiPenghasilan = [self::penghasilanRendah($penghasilan), self::penghasilanSedang($penghasilan), self::penghasilanTinggi($penghasilan)];
  //   // echo $nilaiPenghasilan[0] . " " . $nilaiPenghasilan[1] . " " . $nilaiPenghasilan[2] . " ";
  //   if ($nilaiPenghasilan[0] > $nilaiPenghasilan[1]) {
  //     $skala = "RENDAH";
  //   } else if ($nilaiPenghasilan[1] > $nilaiPenghasilan[2]) {
  //     $skala = "SEDANG";
  //   } else {
  //     $skala = "TINGGI";
  //   }
  //   return $skala;
  // }

  // public static function skalaJarak($jarak) {
  //   $skala = "";
  //   $nilaiJarak = [self::jarakDekat($jarak), self::jarakSedang($jarak), self::jarakJauh($jarak)];

  //   if ($nilaiJarak[0] > $nilaiJarak[1]) {
  //     $skala = "DEKAT";
  //   } else if ($nilaiJarak[1] > $nilaiJarak[2]) {
  //     $skala = "SEDANG";
  //   } else {
  //     $skala = "JAUH";
  //   }
  //   return $skala;
  // }

  /*  
  ==========================================================================================================================
                                                    END PENENTUAN SKALA
  ==========================================================================================================================
  */

  // </div>



  /*  
  ==========================================================================================================================
                                                          INFERENSI
  ==========================================================================================================================
  */

  public static function inferensi($ipk, $penghasilan, $jarak, $tanggungan) {
    // $kondisi = "";
    // $skalaIPK = self::skalaIPK($ipk);
    // $skalaPenghasilan = self::skalaPenghasilan($penghasilan);
    // $skalaJarak = self::skalaJarak($jarak);
    // if ($skalaIPK == "TINGGI" && $skalaPenghasilan == "RENDAH" && $skalaJarak == "JAUH") {
    //   $kondisi = "DAPAT";
    // } else if ($skalaIPK == "TINGGI" && $skalaPenghasilan == "RENDAH" && $skalaJarak == "SEDANG") {
    //   $kondisi = "DAPAT";
    // } else if ($skalaIPK == "TINGGI" && $skalaPenghasilan == "RENDAH" && $skalaJarak == "DEKAT") {
    //   $kondisi = "DAPAT";
    // } else {
    //   $kondisi = "TIDAK DAPAT";
    // }
    // return $kondisi;


    echo "Rule yang digunakan : \n";
    // $no = 1;
    $x = 0;
    $kondisi = [];
    $nilaiIPK = [self::ipkRendah($ipk), self::ipkSedang($ipk), self::ipkTinggi($ipk)];
    $nilaiPenghasilan = [self::penghasilanRendah($penghasilan), self::penghasilanSedang($penghasilan), self::penghasilanTinggi($penghasilan)];
    $nilaiJarak = [self::jarakDekat($jarak), self::jarakSedang($jarak), self::jarakJauh($jarak)];
    $nilaiTanggungan = [self::tanggunganSedikit($tanggungan), self::tanggunganSedang($tanggungan), self::tanggunganBanyak($tanggungan)];
    foreach ($nilaiTanggungan as $t) {
      echo "tanggungan : {$t} \n";
    }

    for ($i = 0; $i < count($nilaiIPK); $i++) {
      for ($j = 0; $j < count($nilaiPenghasilan); $j++) {
        for ($k = 0; $k < count($nilaiJarak); $k++) {
          // echo $nilaiIPK[$i] . " " . $nilaiPenghasilan[$j] . " " . $nilaiJarak[$k];
          // echo "\n";
          if (($nilaiIPK[$i] > 0) && ($nilaiPenghasilan[$j]) > 0 && $nilaiJarak[$k] > 0) {
            $minimal[$x] = min($nilaiIPK[$i], $nilaiPenghasilan[$j], $nilaiJarak[$k]);
            if ($i == 2 && $j == 0 && $k == 2) {
              $kondisi[$x] = "DAPAT";
            } else if ($i == 2 && $j == 0 && $k == 1) {
              $kondisi[$x] = "DAPAT";
            } else if ($i == 2 && $j == 0 && $k == 0) {
              $kondisi[$x] = "DAPAT";
            } else {
              $kondisi[$x] = "TIDAK DAPAT";
            }
            echo "IF IPK = " . $nilaiIPK[$i] . " AND Penghasilan = " . $nilaiPenghasilan[$j] . " AND Jarak = " . $nilaiJarak[$k] . " THEN Status = " . $kondisi[$x] . "(" . $minimal[$x] . ")\n";
            $x++;
          }
          // $no++;
        }
      }
    }

    // Nilai Fuzzy Output
    $nilaiDapat = 0;
    $nilaiTidakDapat = 0;
    for ($l = 0; $l < $x; $l++) {
      if ($kondisi[$l] == "DAPAT") {
        $nilaiDapat = max($minimal[$l], $nilaiDapat);
      } else {
        $nilaiTidakDapat = max($minimal[$l], $nilaiTidakDapat);
      }
    }
    echo "\nNilai Dapat = " . $nilaiDapat . "\n";
    echo "Nilai Tidak Dapat = " . $nilaiTidakDapat . "\n";
    self::defuzzifikasi($nilaiDapat, $nilaiTidakDapat);
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

  public static function defuzzifikasi($nilaiDapat, $nilaiTidakDapat) {
    $nilaiAkhir = ((10 * $nilaiTidakDapat) + (40 * $nilaiDapat) + 0.5) / ((5 * $nilaiTidakDapat) + (5 + $nilaiDapat) + 0.5);
    echo "\nNilai Akhir = " . $nilaiAkhir . "\n";
    // if ($nilaiDapat > $nilaiTidakDapat) {
    //   echo "DAPAT";
    // } else {
    //   echo "TIDAK DAPAT";
    // }
  }

  /*  
  ==========================================================================================================================
                                                          END DEFUZZIFIKASI
  ==========================================================================================================================
  */
}

// echo (Fuzzy::inferensi(3.4, 1800000, 10));
echo (Fuzzy::inferensi(2, 2900000, 12, 6));
