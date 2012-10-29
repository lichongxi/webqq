<?php 
$file = scandir('qima/');

foreach ( $file as $key=>$value){
	if($key<2) continue;
	$actor = file("qima/$value");
	foreach ( $actor as $key2=>$value2){
		if( substr_count($value2, 'xp')){
			$actor[$key2] = " xp = 1 \r\n";
		}else if( substr_count($value2, 'strength')){
			$actor[$key2] = " strength = 12 \r\n";
		}else if( substr_count($value2, 'agility')){
			$actor[$key2] = " agility = 12 \r\n";
		}else if( substr_count($value2, 'intelligence')){
			$actor[$key2] = " intelligence = 9 \r\n";
		}else if( substr_count($value2, 'one_handed_weapons')){
			$actor[$key2] = " one_handed_weapons = 300 \r\n";
		}else if( substr_count($value2, 'two_handed_weapons')){
			$actor[$key2] = " two_handed_weapons = 300 \r\n";
		}else if( substr_count($value2, 'polearms')){
			$actor[$key2] = " polearms = 300 \r\n";
		}else if( substr_count($value2, ' archery = ')){
			$actor[$key2] = " archery = 300 \r\n";
		}else if( substr_count($value2, 'crossbows')){
			$actor[$key2] = " crossbows = 300 \r\n";
		}else if( substr_count($value2, 'throwing')){
			$actor[$key2] = " throwing = 300 \r\n";
		}else if( substr_count($value2, 'power_strike')){
			$actor[$key2] = " power_strike = 4 \r\n";
		}else if( substr_count($value2, 'ironflesh')){
			$actor[$key2] = " ironflesh = 4 \r\n";
		}else if( substr_count($value2, 'riding')){
			$actor[$key2] = " riding = 4 \r\n";
		}
	}
	$w_string = implode($actor);
	file_put_contents("qima/$value", $w_string);
}
?>