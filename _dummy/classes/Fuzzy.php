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
    if ($ipk <= 1) {
      $nilaiIpkRendah = 1;
    } else if ($ipk >= 1 && $ipk <= 2) {
      $nilaiIpkRendah = (2 - $ipk) / (2 - 1);
    } else {
      $nilaiIpkRendah = 0;
    }
    return $nilaiIpkRendah;
  }


  // Kurva Segitiga
  public static function ipkSedang($ipk) {
    if ($ipk <= 1.5 || $ipk >= 3.5) {
      $nilaiIpkSedang = 0;
    } else if ($ipk >= 1.5 && $ipk <= 2) {
      $nilaiIpkSedang = ($ipk - 1.5) / (2 - 1.5);
    } else if ($ipk >= 2 && $ipk <= 3.5) {
      $nilaiIpkSedang = (3.5 - $ipk) / (3.5 - 2);
    }
    return $nilaiIpkSedang;
  }

  // Linear Naik
  public static function ipkTinggi($ipk) {
    if ($ipk <= 2) {
      $nilaiIpkTinggi = 0;
    } else if ($ipk >= 2 && $ipk <= 4) {
      $nilaiIpkTinggi = ($ipk - 2) / (4 - 2);
    } else {
      $nilaiIpkTinggi = 1;
    }
    return $nilaiIpkTinggi;
  }

  // * Penghasilan Orang Tua

  public static function penghasilanRendah($penghasilan) {
    if ($penghasilan <= 1000000) {
      $nilaiPenghasilanRendah = 1;
    } else if ($penghasilan >= 1000000 && $penghasilan <= 2000000) {
      $nilaiPenghasilanRendah = (2000000 - $penghasilan) / (2000000 - 1000000);
    } else {
      $nilaiPenghasilanRendah = 0;
    }
    return $nilaiPenghasilanRendah;
  }

  public static function penghasilanSedang($penghasilan) {
    if ($penghasilan <= 1500000 || $penghasilan >= 2500000) {
      $nilaiPenghasilanSedang = 0;
    } else if ($penghasilan >= 1500000 && $penghasilan <= 2000000) {
      $nilaiPenghasilanSedang = ($penghasilan - 1500000) / (2000000 - 1500000);
    } else if ($penghasilan >= 2000000 && $penghasilan <= 2500000) {
      $nilaiPenghasilanSedang = (2500000 - $penghasilan) / (2500000 - 2000000);
    }
    return $nilaiPenghasilanSedang;
  }

  public static function penghasilanTinggi($penghasilan) {
    if ($penghasilan <= 2000000) {
      $nilaiPenghasilanTinggi = 0;
    } else if ($penghasilan >= 2000000 && $penghasilan <= 3000000) {
      $nilaiPenghasilanTinggi = ($penghasilan - 2000000) / (3000000 - 2000000);
    } else {
      $nilaiPenghasilanTinggi = 1;
    }
    return $nilaiPenghasilanTinggi;
  }

  // * Jarak
  
  public static function jarakDekat($jarak) {
    if ($jarak <= 1) {
      $nilaiJarakDekat = 1;
    } else if ($jarak >= 1 && $jarak <= 25) {
      $nilaiJarakDekat = (25 - $jarak) / (25 - 1);
    } else {
      $nilaiJarakDekat = 0;
    }
    return $nilaiJarakDekat;
  }

  public static function jarakSedang($jarak) {
    if ($jarak <= 12.5 || $jarak >= 37.5) {
      $nilaiJarakSedang = 0;
    } else if ($jarak >= 12.5 && $jarak <= 25) {
      $nilaiJarakSedang = ($jarak - 12.5) / (25 - 12.5);
    } else if ($jarak >= 25 && $jarak <= 37.5) {
      $nilaiJarakSedang = (37.5 - $jarak) / (37.5 - 25);
    }
    return $nilaiJarakSedang;
  }

  public static function jarakJauh($jarak) {
    if ($jarak <= 25) {
      $nilaiJarakJauh = 0;
    } else if ($jarak >= 25 && $jarak <= 50) {
      $nilaiJarakJauh = ($jarak - 25) / (50 - 25);
    } else {
      $nilaiJarakJauh = 1;
    }
    return $nilaiJarakJauh;
  }

  /* 
  ==========================================================================================================================
                                                    END FUNGSI KEANGGOTAAN
  ==========================================================================================================================
  */




  /*  
  ==========================================================================================================================
                                                    PENENTUAN SKALA
  ==========================================================================================================================
  */

  public static function skalaIPK($ipk) {
    $skala = "";
    $nilaiIPK = [self::ipkRendah($ipk), self::ipkSedang($ipk), self::ipkTinggi($ipk)];
    // echo $nilaiIPK[0] . " " . $nilaiIPK[1] . " " . $nilaiIPK[2] . " ";
    if ($nilaiIPK[0] > $nilaiIPK[1]) {
      $skala =  "RENDAH";
    } else if ($nilaiIPK[1] > $nilaiIPK[2]) {
      $skala =  "SEDANG";
    } else {
      $skala = "TINGGI";
    }
    return $skala;
  }

  public static function skalaPenghasilan($penghasilan) {
    $skala = "";
    $nilaiPenghasilan = [self::penghasilanRendah($penghasilan), self::penghasilanSedang($penghasilan), self::penghasilanTinggi($penghasilan)];
    // echo $nilaiPenghasilan[0] . " " . $nilaiPenghasilan[1] . " " . $nilaiPenghasilan[2] . " ";
    if ($nilaiPenghasilan[0] > $nilaiPenghasilan[1]) {
      $skala = "RENDAH";
    } else if ($nilaiPenghasilan[1] > $nilaiPenghasilan[2]) {
      $skala = "SEDANG";
    } else {
      $skala = "TINGGI";
    }
    return $skala;
  }

  public static function skalaJarak($jarak) {
    $skala = "";
    $nilaiJarak = [self::jarakDekat($jarak), self::jarakSedang($jarak), self::jarakJauh($jarak)];

    if ($nilaiJarak[0] > $nilaiJarak[1]) {
      $skala = "DEKAT";
    } else if ($nilaiJarak[1] > $nilaiJarak[2]) {
      $skala = "SEDANG";
    } else {
      $skala = "JAUH";
    }
    return $skala;
  }

  /*  
  ==========================================================================================================================
                                                    END PENENTUAN SKALA
  ==========================================================================================================================
  */




  /*  
  ==========================================================================================================================
                                                          INFERENSI
  ==========================================================================================================================
  */

  public static function inferensi($ipk, $penghasilan, $jarak) {
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
    $no = 1;
    $x = 0;
    $kondisi = [];
    $nilaiIPK = [self::ipkRendah($ipk), self::ipkSedang($ipk), self::ipkTinggi($ipk)];
    $nilaiPenghasilan = [self::penghasilanRendah($penghasilan), self::penghasilanSedang($penghasilan), self::penghasilanTinggi($penghasilan)];
    $nilaiJarak = [self::jarakDekat($jarak), self::jarakSedang($jarak), self::jarakJauh($jarak)];

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
            echo $no . ". IF IPK = " . $nilaiIPK[$i] . " AND Penghasilan = " . $nilaiPenghasilan[$j] . " AND Jarak = " . $nilaiJarak[$k] . " THEN Status = " . $kondisi[$x] . "(" . $minimal[$x] . ")\n";
            $x++;
            // var_dump($kondisi);
            // self::defuzzifikasi($x, $kondisi);
          }
          $no++;
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
    echo "Premis Dapat = " . $nilaiDapat . "\n";
    echo "Premis Tidak Dapat = " . $nilaiTidakDapat . "\n";
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
    echo "Nilai Akhir = " . $nilaiAkhir . "\n";
    if ($nilaiDapat > $nilaiTidakDapat) {
      echo "DAPAT";
    } else {
      echo "TIDAK DAPAT";
    }
  }

  /*  
  ==========================================================================================================================
                                                          END DEFUZZIFIKASI
  ==========================================================================================================================
  */
}

echo (Fuzzy::inferensi(3.4, 50000, 100));
