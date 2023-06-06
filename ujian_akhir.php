<?php
// soal a.
function senin($a,$b){
    $hasil = $a * $b;
    return $hasil;
}

function selasa($c,$d){
    $hasil = $c * $d;
    return $hasil;
}

function rabu($f,$e){
    $hasil = $f * $e;
    return $hasil;
}

function kamis($g,$h){
    $hasil = $g * $h;
    return $hasil;
}

function jumat($i,$j){
    $hasil = $i * $j;
    return $hasil;
}

function sabtu($k,$l){
    $hasil = $k * $l;
    return $hasil;
}

function minggu($m,$n){
    $hasil = $m * $n;
    return $hasil;
}

$senin = senin(3, 2500);
echo "senin 3 kali makan x 2500 kalori = $senin"; 
echo "</br>";
$selasa = selasa(2, 2500);
echo "selasa 2 kali makan x 2500 kalori =  $selasa"; 
echo "</br>";
$rabu = rabu(2, 2500);
echo "rabu 2 kali makan x 2500 kalori = $rabu"; 
echo "</br>";
$kamis = kamis(3, 2500);
echo "kamis 3 kali makan x 2500 kalori = $kamis"; 
echo "</br>";
$jumat = jumat(3, 2500);
echo "jumat 3 kali makan x 2500 kalori = $jumat";
echo "</br>";
$sabtu = sabtu(2, 2500);
echo "sabtu 2 kali makan x 2500 kalori = $sabtu"; 
echo "</br>";
$minggu = minggu(1, 2500);
echo "minggu 1 kali makan x 2500 kalori = $minggu"; 
echo "</br>";
echo "dalam seminggu kalori yang didapat Fu adalah =" . $senin + $selasa + $rabu + $kamis + $jumat + $sabtu + $minggu;
echo "</br>";
$kalori_seminggu = 40000;
echo "</br>";

// soal b.
$istirahat_senin = 5;
$istirahat_selasa = 6; 
$istirahat_rabu = 8;
$istirahat_kamis = 8;
$istirahat_jumat = 5;
$istirahat_sabtu = 6;
$istirahat_minggu = 4;
echo  "senin + selasa + rabu + kamis + jumat + sabtu + minggu = " . $istirahat_senin + $istirahat_selasa + $istirahat_rabu + $istirahat_kamis + $istirahat_jumat + $istirahat_sabtu + $istirahat_minggu;
$istirahat_seminggu = 42;
echo "</br>";
echo "</br>";
// soal c.
echo "dalam seminggu Fu mendapat kalori sebesar 40000 dan istirahat 42 jam maka ";
if ($kalori_seminggu >=17500 && $istirahat_seminggu >= 56){
    echo "Fu sudah sembuh";
}else{
    echo "fu belum sembuh";
}