<?php
function rand1(){
	return rand(0, 1);
}
function rand30(){
	for ($i = 0; $i < 4;$i++){
		$result[] = rand1();
		$sum += rand1();
	}
	if( $sum != 2){
		if(($sum == 1 && $result[0] == 1) || $sum == 0 ){
			return 1;
		}else {
			return 0;
		}
	}else{
		return rand30();
	}
}

for($i = 0;$i < 1000000;$i++){
	$testResult += rand30();
}
echo $testResult;
