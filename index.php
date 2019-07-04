<?php
echo "lessen5\n";

var_dump($argv);

echo "lesson5\n";

echo __DIR__;
echo __FILE__;

const MY_CONST = 100;


$array = [];
for($i = 0; $i < 10; $i++){
	$sub_array = [];
	for($j = 0; $j < 10; $j++){
		$sub_array[] = mt_rand(0, 1000);
	}
	$array[] = $sub_array;
}

for($i = 0; $i < count($array); $i++){
	echo implode(',', $array[$i]);
	/* for($j = 0; $j < count($array[$i]); $j++){
		echo $array[$i][$j]. ',';	
	}*/
	echo "\n";
}	


/* $operand1 = $argv[1];
$operation = $argv[2];
$operand2 = $argv[3];

switch($operation){
	case "+" : {
		$result = $operand1 + $operand2;
		break;
	}
	case "-" : {
		$result = $operand1 - $operand2;
		break;
	}
	case "x" : {
		$result = $operand1 * $operand2;
		break;
	}
	case "/" : {
		if ($operand2 == 0) {
			echo "Na nol delit nelzei!";
			die();
		}
		$result = $operand1 / $operand2;
		break;
	}
	default : {
		echo "neizvestnii operator";
		die();
}
	
}
echo "Result = $result";
*/



// echo date("Y-m-d H:i:s");

/* file_put_contents("text.txt", "lesson5");

echo file_get_contents("text.txt");

$a = 10;
$b = 0;

try {
	if ($b == 0){
		throw new Exception();
	}
	$c = $a / $b;
}
catch (\Exception $e) {
	echo "Na nol delit nelzei!";
} */

