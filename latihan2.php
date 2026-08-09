<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php

            class NilaiMahasiswa 
            {
                public function getNilaiRataRata($nTugas, $nKuis, $nUTS, $nUAS) 
                {
                    // Menghitung rata-rata dari ke-4 komponen nilai
                    $rataRata = ($nTugas + $nKuis + $nUTS + $nUAS) / 4;
                    return $rataRata;
                }

                public function hitungNilaiAkhir($tugas, $kuis, $uts, $uas) 
                {
                    $nilaiAkhir = ($tugas * 0.15) + ($kuis * 0.15) + ($uts * 0.30) + ($uas * 0.40);
                    return $nilaiAkhir;
                }

                public function cekKelulusan($nilaiAkhir) 
                {
                    if ($nilaiAkhir >= 70) {
                        return "Lulus";
                    } else {
                        return "Tidak Lulus";
                    }
                }
            }


            $mahasiswa = new NilaiMahasiswa();
            $tugas = 80;
            $kuis  = 80;
            $uts   = 85;
            $uas   = 90;

            $rataRata = $mahasiswa->getNilaiRataRata($tugas, $kuis, $uts, $uas);
            $nilaiAkhir = $mahasiswa->hitungNilaiAkhir($tugas, $kuis, $uts, $uas);
            $status = $mahasiswa->cekKelulusan($nilaiAkhir);

            echo "<h3>--- Hasil Evaluasi Nilai ---</h3>";
            echo "Nilai Tugas: " . $tugas . "<br>";
            echo "Nilai Kuis: " . $kuis . "<br>";
            echo "Nilai UTS: " . $uts . "<br>";
            echo "Nilai UAS: " . $uas . "<br>";
            echo "-----------------------------------<br>";
            echo "Nilai Rata-Rata: " . $rataRata . "<br>";
            echo "Nilai Akhir (Berbobot): " . $nilaiAkhir . "<br>";
            echo "Status Kelulusan: <strong>" . $status . "</strong><br>";

        ?>

</body>
</html>