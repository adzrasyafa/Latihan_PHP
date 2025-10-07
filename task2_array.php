<!DOCTYPE html>
<html>
<head>
    <title>Tugas Array PHP - Papan Tulis Style</title>
    <style>
        body {
            background-color: #1b1b1b;
            font-family: 'Courier New', monospace;
            color: #f5f5f5;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px;
        }

        h2 {
            color: #00ff99;
            text-shadow: 0 0 6px #00ff99;
            margin-top: 30px;
        }

        hr {
            border: none;
            height: 2px;
            background: #00ff99;
            box-shadow: 0 0 8px #00ff99;
            width: 80%;
            margin: 30px 0;
        }

        table {
            border-collapse: collapse;
            margin: 15px 0;
            box-shadow: 0 0 15px rgba(0,255,100,0.4);
        }

        td, th {
            border: 2px solid #00ff99;
            padding: 10px 20px;
            color: #ffffff;
            text-shadow: 0 0 5px #00ff99;
            font-size: 18px;
            transition: 0.3s;
        }

        td:hover {
            background-color: #00ff99;
            color: #000;
            text-shadow: none;
        }

        .chalk {
            border: 3px solid #00ff99;
            padding: 30px;
            border-radius: 15px;
            background: linear-gradient(145deg, #0f0f0f, #202020);
            box-shadow: inset 0 0 15px rgba(0,255,100,0.3);
            width: 80%;
        }

        b {
            color: #00ff99;
            text-shadow: 0 0 4px #00ff99;
        }
    </style>
</head>
<body>

<div class="chalk">
<?php
echo "<h2>Soal 1</h2>";

// Array 2 dimensi berisi data 3 siswa (Nama, Nilai Matematika, Nilai Bahasa)
$siswa = [
    ["Andi", 85, 90],
    ["Budi", 78, 88],
    ["Citra", 92, 95]
];

// Cetak nilai Bahasa dari siswa ke-2
echo "Nilai Bahasa siswa ke-2 (<b>" . $siswa[1][0] . "</b>) = <b>" . $siswa[1][2] . "</b><br><br>";

// Cetak semua data menggunakan looping
echo "<b>Data Semua Siswa:</b><br><br>";
echo "<table>";
echo "<tr><th>Nama</th><th>Matematika</th><th>Bahasa</th></tr>";
for ($i = 0; $i < count($siswa); $i++) {
    echo "<tr>";
    echo "<td>" . $siswa[$i][0] . "</td>";
    echo "<td>" . $siswa[$i][1] . "</td>";
    echo "<td>" . $siswa[$i][2] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "<hr>";


// ===============================
// Soal 2
// ===============================
echo "<h2>Soal 2</h2>";

$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// Cetak nama buah pertama
echo "Nama buah pertama: <b>" . $buah[0][0] . "</b><br>";

// Hitung total nilai stok * harga untuk semua buah
$total = 0;
for ($i = 0; $i < count($buah); $i++) {
    $subtotal = $buah[$i][1] * $buah[$i][2];
    $total += $subtotal;
}
echo "Total nilai seluruh stok: <b>Rp " . number_format($total, 0, ',', '.') . "</b><br>";

echo "<hr>";


// ===============================
// Soal 3
// ===============================
echo "<h2>Soal 3</h2>";

$produk = [
    ["nama" => "Laptop", "kategori" => "Elektronik", "harga" => 8500000, "rating" => 4.8],
    ["nama" => "Headphone", "kategori" => "Aksesoris", "harga" => 750000, "rating" => 4.5],
    ["nama" => "Smartphone", "kategori" => "Elektronik", "harga" => 9500000, "rating" => 4.9]
];

// Cetak produk dengan harga tertinggi
$tertinggi = $produk[0];
for ($i = 1; $i < count($produk); $i++) {
    if ($produk[$i]["harga"] > $tertinggi["harga"]) {
        $tertinggi = $produk[$i];
    }
}

echo "Produk dengan harga tertinggi:<br>";
echo "Nama: <b>" . $tertinggi["nama"] . "</b><br>";
echo "Kategori: " . $tertinggi["kategori"] . "<br>";
echo "Harga: <b>Rp " . number_format($tertinggi["harga"], 0, ',', '.') . "</b><br>";
echo "Rating: " . $tertinggi["rating"] . "<br>";

echo "<hr>";


// ===============================
// Soal 4
// ===============================
echo "<h2>Soal 4</h2>";

// Buat array 2 dimensi 3x3 berisi angka acak (1–9)
$angka = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $angka[$i][$j] = rand(1, 9);
    }
}

// Cetak array dalam bentuk matriks
echo "<b>Matriks 3x3:</b><br>";
echo "<table>";
$total = 0;
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>" . $angka[$i][$j] . "</td>";
        $total += $angka[$i][$j];
    }
    echo "</tr>";
}
echo "</table><br>";

// Hitung jumlah total semua elemen
echo "Jumlah total semua elemen = <b>" . $total . "</b>";
?>
</div>

</body>
</html>
