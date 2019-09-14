<?php

function validate($user,$pass)
{
	$val_user = FALSE;
	$val_pass = FALSE;

	$jumlah_user = strlen($user);
	$jumlah_pas = strlen($pass);

	// merupakan kombinasi dari huruf kecil, huruf besar dan angka dengan panjang 5-9 karakter. Username tidak boleh diawali dengan angka / karakter special.

	if ($jumlah_user >= 5 && $jumlah_user <= 9) {
		if (preg_match("/(^[^0-9\W_][a-zA-Z0-9]{4,8})/", $user)) {
		$val_user = TRUE;
		}else{
			$val_user = FALSE;
		}
	}else{
		$val_user = FALSE;
	}

	// merupakan kombinasi dari huruf kecil, huruf besar minimal satu karakter, angka minimal satu karakter, dan karakter spesial minimal satu karakter dan harus memiliki karakter simbol ‘@’  dan panjang minimal 8 karakter.


	if ($jumlah_pas >= 8) {
		if (preg_match("/^[^0-9\W_]\w+/", $user)) {
			# code...
		}
	}else{
		$val_pass = FALSE;
	}

}

validate('ihsan');