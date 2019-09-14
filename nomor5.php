<?php

function password($jumlah, $panjang = 32)
{
    $hasil = '';
    for ($a = 0; $a < $jumlah; $a++) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $panjang; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $hasil = $hasil . $randomString . "<br>";
    }

    if (cek($hasil)) {
        return $hasil;
    } else {
        return "ADA PASSWORD YANG SAMA";
    }
}

function cek($string)
{
    $string = explode("<br>", $string);
    $panjang = count($string);
    unset($string[$panjang - 1]);
    $panjang = count($string);
    $hasil = 0;

    foreach ($string as $key => $value) {
        if ($value != $value[$key + 1]) {
            $hasil = $hasil + 1;
        } else {
            $hasil = 0;
        }
    }
    if ($hasil == $panjang) {
        return TRUE;
    } else {
        return FALSE;
    }
}

echo password(5, 32);
