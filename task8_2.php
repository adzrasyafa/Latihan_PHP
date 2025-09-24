<?php
// Jika form dikirim
if (isset($_POST['pilihan'])) {
    $pilihan = $_POST['pilihan'];

    switch ($pilihan) {
        case 1:
            // Contoh 1: Login Sederhana
            $username = "Pina";
            $password = "12345";

            $inputUser = "Pina";
            $inputPass = "12345";

            if ($inputUser == $username && $inputPass == $password) {
                echo "Login berhasil, selamat datang $username!";
            } else {
                echo "Login gagal, username atau password salah.";
            }
            break;

        case 2:
            // Contoh 2: Cek Nilai Ujian
            $nilai = 77;

            if ($nilai >= 80) {
                echo "Nilai: A";
            } elseif ($nilai >= 70) {
                echo "Nilai: B";
            } elseif ($nilai >= 60) {
                echo "Nilai: C";
            } else {
                echo "Nilai: D (Tidak Lulus)";
            }
            break;

        case 3:
            // Contoh 3: Pengecekan Usia
            $umur = 20;

            if ($umur >= 18) {
                echo "Anda sudah dewasa, boleh membuat KTP.";
            } else {
                echo "Anda masih di bawah umur, belum boleh membuat KTP.";
            }
            break;

        case 4:
            // Contoh 4: Sistem Diskon Belanja
            $totalBelanja = 250000;

            if ($totalBelanja >= 200000) {
                echo "Anda mendapat diskon 20%! Total bayar: " . ($totalBelanja * 0.8);
            } elseif ($totalBelanja >= 100000) {
                echo "Anda mendapat diskon 10%! Total bayar: " . ($totalBelanja * 0.9);
            } else {
                echo "Belanja kurang dari 100.000, tidak ada diskon. Total bayar: $totalBelanja";
            }
            break;

        case 5:
            // Contoh 5: Validasi Input Form (Email)
            $email = "user@gmail.com";

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email valid: $email";
            } else {
                echo "Email tidak valid!";
            }
            break;

        default:
            echo "Pilihan tidak tersedia!";
            break;
    }

    echo "<br><br><a href='percabangan.php'>Kembali ke menu</a>";
} else {
    // Form input
    ?>
    <form method="post" action="">
        <label for="pilihan">Pilih kasus percabangan:</label><br><br>
        <select name="pilihan" id="pilihan">
            <option value="1">1. Login sederhana</option>
            <option value="2">2. Cek nilai ujian</option>
            <option value="3">3. Cek umur (KTP)</option>
            <option value="4">4. Diskon belanja</option>
            <option value="5">5. Validasi email</option>
        </select>
        <br><br>
        <button type="submit">Jalankan</button>
    </form>
    <?php
}
?>
