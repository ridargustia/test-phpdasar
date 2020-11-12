<?php 
	
	function search($array, $value)
	{
	    $results = array();
	    $strlength = strlen($value);
	    
	    	for ($i=0; $i < 3; $i++) { 
	    		for ($j=0; $j < 4; $j++) { 

	    			for ($k=0; $k < $strlength; $k++) { 
	    				$subkalimat[$k] = substr($value, $k, 1);

	    				if (is_array($array)) {
			    			if ($array[$i][$j] == $subkalimat[$k]) {
			    				

			    				$results[] = $array[$i][$j];
			    			}

		    			}
	    			}
	    			
	    		}
	    	}

	    return $results;
	}

	$array = [
		['f', 'g', 'h', 'i'],
		['j', 'k', 'p', 'q'],
		['r', 's', 't', 'u']
	];

	$value = "fjrstz";
	print_r(search($array, $value));
	
?>