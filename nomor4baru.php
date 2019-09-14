<?php

function cetak_gambar($jumlah)
{
	$hasil = $jumlah % 2;
	if ($hasil == 1) {
		$median = ($jumlah + 1)/2;

	    for ($i=1; $i<=$jumlah; $i++){
			for ($a=1; $a<=$jumlah; $a++){
				if ($a > 1 && $a < $jumlah) {
					if ($i == $median ) {
						echo '*';
					}else{
						echo "=";
					}
					
				}else{
					echo '*';
				}
		}
		echo '<br>';
		}
	}else{
		echo "Tidak bisa menggunakan angka genap.";
	}
}

cetak_gambar(23);