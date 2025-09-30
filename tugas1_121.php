<?php
// Perulangan dari 100 sampai 1000
for ($i = 100; $i <= 1000; $i++) {
    echo $i . "<br>";
}
?>

<?php
for ($i = 100; $i <= 1000; $i++) {
    if ($i % 2 == 0) { // kontrol: cek apakah genap
        echo $i . "<br>";
    }
}
?>
