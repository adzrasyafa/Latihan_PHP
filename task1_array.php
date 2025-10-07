<!DOCTYPE html>
<html>
<head>
    <title>Penjumlahan Matriks</title>
    <style>
        body {
            background-color: #1b1b1b;
            font-family: 'Courier New', monospace;
            color: #f5f5f5;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h3 {
            color: #00ff99;
            text-shadow: 0 0 5px #00ff99;
        }

        table {
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 0 20px rgba(0,255,100,0.4);
        }

        td {
            border: 2px solid #00ff99;
            padding: 20px;
            font-size: 22px;
            color: #ffffff;
            text-shadow: 0 0 8px #00ff99;
            transition: 0.3s;
        }

        td:hover {
            background-color: #00ff99;
            color: #000;
            text-shadow: none;
        }

        .chalk {
            border: 3px solid #00ff99;
            padding: 25px;
            border-radius: 12px;
            background: linear-gradient(145deg, #0f0f0f, #202020);
            box-shadow: inset 0 0 10px rgba(0,255,100,0.3);
        }
    </style>
</head>
<body>

<div class="chalk">
<?php
// Matriks A
$A = [
    [1, 1, 1],
    [3, 3, 3],
    [2, 2, 2]
];

// Matriks B
$B = [
    [2, 2, 2],
    [3, 3, 3],
    [1, 1, 1]
];

// Matriks hasil penjumlahan
$C = [];

// Proses penjumlahan menggunakan looping
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Tampilkan hasil
echo "<h3>Hasil Penjumlahan Matriks (A + B):</h3>";
echo "<table>";

for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>" . $C[$i][$j] . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
</div>

</body>
</html>
