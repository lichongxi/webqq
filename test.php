<?php
require '/class/friends.php';
$web = new friends();
$link = $web->db_connect();
$sql = $web->query("select * from `friend` where userid = 1009");
if($sql){
while ($friend[] = $web->fetch($sql)){
	
}
}

var_dump($friend);