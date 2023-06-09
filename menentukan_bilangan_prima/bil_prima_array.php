<?php
//cek apakah bilangan >=
//loop bilangan dari 1 hingga bilangan tersebut
//bila hasilnya adalah nol,maka jumlah faktor pembagi +!
//bagi bilangan dengan hasil loop
//hitung total faktor pembagi
//jika faktor pembagi = 2 (yaitu 1 dan bilangan itu sendiri) maka bilangan adalah bilangan prima

function cek_prima($angka)
{
    if ($angka >= 2) {
        $jumlah_faktor_pembagi = 0;

        for ($pembagi=1; $pembagi <= $angka ; $pembagi++) {
            if ($angka % $pembagi === 0) {
                $jumlah_faktor_pembagi++;
            }
        }

        if ($jumlah_faktor_pembagi === 2) {
            return '<span>' . $angka . ' = Prima </span><br>';
        }else{
            return $angka . ' = Bukan Prima<br>';
        }
    }else{
        return "angka harus lebih besar atau samadengan 2";
    }
}
//echo cek_prima();

function deret_prima($batas)
{
    if ($batas >= 2) {
        for ($angka=2; $angka <= $batas ; $angka++) {
            echo cek_prima($angka);
        }
    }else{
        echo 'Batas harus lebih besar atau samadengan 2';
    }
}
echo "<style>";
echo '
    span {
        color:blue;
    }
    ';
echo "</style>";
deret_prima(100);