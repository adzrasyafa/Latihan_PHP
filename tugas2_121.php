tugas no 2
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Studi Kasus Toko</title>
    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background: linear-gradient(135deg, #2f4f34, #4a6a42);
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        h1 {
            background: #3b5d3d;
            padding: 15px 30px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-top: 25px;
            width: 90%;
        }
        .produk {
            background: #6fa86e;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            font-weight: bold;
            transition: transform 0.2s ease-in-out;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }
        .produk.habis {
            background: #9bc79a;
            color: #222;
            opacity: 0.7;
        }
        .produk:hover {
            transform: scale(1.05);
        }
        .status {
            display: inline-block;
            margin-top: 10px;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
        }
        .tersedia {
            background: #2e4d34;
            color: #fff;
        }
        .tidak {
            background: #ddd;
            color: #2e2e2e;
        }
    </style>
</head>
<body>
    <h1>Daftar Kontrol Produk Mer</h1>
    <div class="grid">
        <?php
        // Array produk dengan stok
        $produk = [
            ["nama" => "Beras Premium 5kg", "stok" => 10],
            ["nama" => "Minyak Goreng 1L", "stok" => 0],
            ["nama" => "Gula Pasir 1kg", "stok" => 25],
            ["nama" => "Kopi Bubuk 200g", "stok" => 0],
            ["nama" => "Nescafe Ice Roast (pack)", "stok" => 7],
            ["nama" => "Susu Kental Manis", "stok" => 13],
            ["nama" => "Margarin 500g", "stok" => 15],
            ["nama" => "Indomie Rica-Rica", "stok" => 2],
        ];

        // Perulangan untuk menampilkan produk
        foreach ($produk as $item) {
            if ($item["stok"] > 0) {
                echo "<div class='produk'>
                        {$item['nama']}<br>
                        <span class='status tersedia'>Stok: {$item['stok']}</span>
                      </div>";
            } else {
                echo "<div class='produk habis'>
                        {$item['nama']}<br>
                        <span class='status tidak'>Stok Habis</span>
                      </div>";
            }
        }
        ?>
    </div>
</body>
</html>
```
