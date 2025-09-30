tugas no 1
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perulangan 100 - 1000</title>
    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        h1 {
            color: #222;
            background: #fff;
            padding: 10px 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
        .angka {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
            gap: 10px;
            margin-top: 20px;
            width: 90%;
        }
        .box {
            background: #fff;
            padding: 15px;
            text-align: center;
            font-weight: bold;
            border-radius: 10px;
            transition: transform 0.2s;
        }
        .box:hover {
            transform: scale(1.1);
            background: #f0f0f0;
        }
    </style>
</head>
<body>
    <h1>Perulangan Angka 100 sampai 1000</h1>
    <div class="angka">
        <?php
        for ($i = 100; $i <= 1000; $i++) {
            echo "<div class='box'>$i</div>";
        }
        ?>
    </div>
</body>
</html>
