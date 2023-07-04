<?php
    $arrNilai = array("Adid" => 80, "Iky" => 90, "Dian" => 75, "Arvin" => 85);
    echo "Menampilkan isi array asosiatif dengan foreach: <br>";
    foreach ($arrNilai as $nama => $nilai) {
        echo "Nilai $nama = $nilai<br>";
    }

    $arrNilai = array("Adid" => 80, "Iky" => 90, "Dian" => 75, "Arvin" => 85);
    echo "<br>Menampilkan isi array asosiatif dengan WHILE dan LIST: <br>";
    foreach ($arrNilai as $nama => $nilai) {
        echo "Nilai $nama = $nilai<br>";
    }
?>

