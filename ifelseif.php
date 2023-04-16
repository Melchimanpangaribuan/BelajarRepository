<!DOCTYPE html>
<html>
<body>
<?php
$umur=15;
if ($umur >=17) {
    echo "Anda Sudah Dewasa.";
}else if($umur<=17){
    echo"Anda Dalam Proses Dewasa";    
}else{
    echo"Anda Belum Dewasa";
}

echo"<br>";

$nilai =95;
if ($nilai>=80) {
    echo "Nilai Anda Melewati KKM";
}else if($nilai==80){
    echo"Nilai Anda Pas KKM";    
}else{
    echo"Nilai Anda Tidak Memenuhi KKM";
}

echo"<br>";

$harga=250000;
if ($harga>=200000) {
    echo "Anda Mendapatkan Potongan Harga 15%";
}else if($harga<=200000){
    echo"Anda Mendapatkan Potongan Harga 10%";    
}else{
    echo"Anda Belum Mendapatkan Potongan Harga";
}

echo"<br>";

$golongan=1;
if ($golongan==1) {
    echo "Anda Golongan A";
}else if($golongan==2){
    echo"Anda Golongan B";    
}else{
    echo"Anda Golongan C";
}

echo"<br>";

$kelas=1;
if ($kelas==1) {
    echo "Anda Kelas 1";
}else if($kelas==2){
    echo"Anda Kelas 2";    
}else{
    echo"Anda Kelas 3";
}

echo"<br>";

?>
</body>
</html>