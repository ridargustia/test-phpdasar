<?php 

	$nilai = array(72, 65, 73, 78, 75, 74, 90, 81, 87, 65, 55, 69, 72, 78, 79, 91, 100, 40, 67, 77, 86);
	$arrlength = count($nilai);

	//Nilai Rata-rata
	for ($i=0; $i < $arrlength; $i++) { 
		$n = $n + $nilai[$i];
	}

	$rata2 = $n/$arrlength;
	echo "1. Rata-rata = ".$rata2;
	
	echo "<br>";	

	//7 nilai teritinggi
	asort($nilai, SORT_NUMERIC);
	$terbesar = array_slice($nilai, -7, 7, true);

	echo "2. 7 nilai tertinggi = ";

	for ($i=0; $i < $arrlength; $i++) { 
		echo $terbesar[$i]." ";
	}

	echo "<br>";

	asort($nilai, SORT_NUMERIC);
	$terkecil = array_slice($nilai, 0, 7, true);

	echo "3. 7 nilai terendah = ";

	for ($i=0; $i < $arrlength; $i++) { 
		echo $terkecil[$i]." ";
	}

?>