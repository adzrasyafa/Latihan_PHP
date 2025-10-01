<?php
// === FUNGSI UNTUK NO.1 ===
// Menentukan bilangan terbesar dari 2 bilangan
function terbesar($a, $b) {
    return ($a > $b) ? $a : $b;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>🖤 Tugas PHP - Monochrome Y2K 🖤</title>
    <style>
        body {
            font-family: "Comic Sans MS", cursive, sans-serif;
            background: linear-gradient(90deg, #000, #444, #888);
            color: #fff;
            text-align: center;
            margin: 20px;
        }
        h1 {
            font-size: 32px;
            color: #fff;
            text-shadow: 2px 2px 5px #000;
            animation: blink 1s infinite alternate;
        }
        @keyframes blink {
            from { opacity: 1; }
            to { opacity: 0.7; }
        }
        .card {
            background: #fff;
            border: 3px solid #000;
            padding: 20px;
            margin: 20px auto;
            width: 70%;
            color: #000;
            box-shadow: 5px 5px 15px #000;
        }
        .card h2 {
            background: #ccc;
            padding: 5px;
            border: 2px solid #000;
            color: #000;
        }
        .result {
            background: #eee;
            border: 2px dashed #000;
            padding: 10px;
            margin-top: 10px;
            font-weight: bold;
            color: #111;
        }
        marquee {
            color: #fff;
            font-weight: bold;
            background: #000;
            padding: 5px;
            letter-spacing: 2px;
        }
    </style>
</head>
<body>

<marquee scrollamount="8">🖤 Selamat Datang di Website Tugas Acara 10; Fungsi PHP 🖤</marquee>

<h1>💾 Tugas PHP 💾</h1>

<div class="card">
    <h2>1. Menentukan Bilangan Terbesar</h2>
    <?php
        $bil1 = 100;
        $bil2 = 150;
        $hasil = terbesar($bil1, $bil2);
    ?>
    <p>Bilangan pertama: <?= $bil1 ?></p>
    <p>Bilangan kedua: <?= $bil2 ?></p>
    <div class="result">
        👉 Bilangan terbesar adalah: <?= $hasil ?>
    </div>
</div>

<div class="card">
    <h2>2. Menampilkan Tanggal dengan getdate()</h2>
    <?php
        $tgl = getdate();
        $tanggal = $tgl['mday'] . "-" . $tgl['mon'] . "-" . $tgl['year'];
    ?>
    <div class="result">
        📅 Tanggal sekarang: <?= $tanggal ?>
    </div>
</div>

<div class="card">
    <h2>3. Menampilkan Tanggal dengan date()</h2>
    <div class="result">
        📅 Hari ini: <?= date('d-F-Y'); ?>
    </div>
</div>

<marquee scrollamount="6" direction="right">⚫ Dibuat By Adzra Syafa dengan PHP 2000s ⚪</marquee>

</body>
</html>
