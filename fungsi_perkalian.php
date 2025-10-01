<?php
echo "12 pangkat 2 adalah: ".pow(12,2);
// 12 pangkat 2 adalah: 144
?>

<br>
<?php
//pemanggilan fungsi
echo "Luas Lingkaran dengan jari-jari 52cm = ".luas_lingkaran(52)."cm";
//pembuatan fungsi
function luas_lingkaran($jari2)
{
return M_PI*$jari2*$jari2;
}
?>