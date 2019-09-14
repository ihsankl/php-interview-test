<?php

function words($str, $substr)
{
	if (strlen($substr) > strlen($str)) {
		return "Tidak Valid";
	}else{
		$jumlah = 0;
		$terbalik = strrev($str);

		if (preg_match_all("/{$substr}/", $str) || preg_match_all("/{$substr}/", $terbalik)) {
			$hasil = substr_count($str,$substr) + substr_count($terbalik, $substr);
			return "Ditemukan ".$hasil." kali";
		}else{
			return "Tidak ditemukan";
		}
	}
}

echo words('banananana','nana');