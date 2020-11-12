<?php 

	function hurufKecil($string){
		
		$strlength = strlen($string);
		

		for ($i=0; $i < $strlength; $i++) { 
			$subkalimat[$i] = substr($string, $i, 1);
			// var_dump($subkalimat[$i]);
			// die();
			if (ctype_upper($subkalimat[$i])) {
		        $kapital = $kapital + 1;
		    } else {
		        $kecil = $kecil + 1;
		    }
		}

		echo "'".$string."' mengandung ".$kecil." buah huruf kecil.";
	}

	$input = "Ridar";
	hurufKecil($input);

?>