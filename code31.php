<?php

	$num1 = 48;
	$num2 = 18;
	$smaller = ($num1 < $num2) ? $num1 : $num2;
	$hcf = 1;

	for ($i = 1; $i <= $smaller; $i++) {
    		if ($num1 % $i == 0 && $num2 % $i == 0) {
        		$hcf = $i; 
    		}
	}

	echo "The HCF of $num1 and $num2 is: $hcf";
	echo "<br><br>";
	echo "Code executed by Tanya Aggarwal(0221BCA084)";
?>
