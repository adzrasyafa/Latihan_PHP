<?php 
echo "MEMBUAT FUNGSI <br>";

// Fungsi tanpa parameter
function berhasil() {
    echo "SELAMAT ANDA BERHASIL";
}

function gagal() {
    echo "MAAF ANDA GAGAL";
}

// Pemanggilan fungsi
$nilai = 90;
if ($nilai >= 75) {
    berhasil();
} else {
    gagal();
}

echo "<br><br>";

echo "FUNGSI DENGAN PARAMETER<br>";
// Fungsi dengan parameter
function jumlah($a, $b) { 
    return $a + $b; 
}

$nilai1 = 10;
$nilai2 = 15;
echo "Hasil penjumlahan $nilai1 + $nilai2 = " . jumlah($nilai1, $nilai2);

echo "<br><br>";

echo "FUNGSI BAWAAN<br>";
$sekarang = getdate();
print_r($sekarang); // hasil berupa array
echo "<br>";

// Ambil elemen untuk menampilkan tanggal
echo "Sekarang Tanggal: " . $sekarang["mday"] . "-" . $sekarang["mon"] . "-" . $sekarang["year"];
?>
