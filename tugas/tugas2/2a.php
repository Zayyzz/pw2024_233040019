<?php
$nama_depan = "Fauzi ";
$nama_belakang = "Ahmad";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 and $i % 5 == 0) {
        echo $nama_depan . $nama_belakang . "<br>";
    } else if ($i % 3 == 0) {
        echo $nama_depan . "<br>";
    } else if ($i % 5 == 0) {
        echo $nama_belakang . "<br>";
    } else {
        echo $i . "<br>";
    }
}