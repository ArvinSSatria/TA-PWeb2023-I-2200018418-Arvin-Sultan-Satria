<?php
    $nilai = 50;
    if ($nilai >= 60) {
        echo "Nilai Anda $nilai, Anda LULUS";
    } else {
        echo "Nilai Anda $nilai, Anda GAGAL";
    }
?>

<br><br>

<?php
    $baris = $i = $j = 0;
    $nilai = readline("Tinggi: ");
    $tinggi = intval($nilai);

    for ($baris = 1; $baris <= $tinggi; $baris++) {
        for ($i = 1; $i <= $tinggi - $baris; $i++) {
            echo " ";
        }
        for ($j = 1; $j < 2 * $baris; $j++) {
            echo "*";
        }
        echo "\n";
    }
?>
